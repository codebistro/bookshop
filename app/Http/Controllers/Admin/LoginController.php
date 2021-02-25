<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Org\code\Code;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use \Crypt;

class LoginController extends Controller
{
    //
    public function login(){
        return view('admin.login');
    }

    public function code() {
        // echo phpinfo();

        $code = new Code();
        return $code->make();
    }

    public function captcha($tmp) {
            $phrase = new PhraseBuilder;
            // 设置验证码位数
            $code = $phrase->build(6);
            // 生成验证码图片的Builder对象，配置相应属性
            $builder = new CaptchaBuilder($code, $phrase);
            // 设置背景颜色
            $builder->setBackgroundColor(220, 210, 230);
            $builder->setMaxAngle(25);
            $builder->setMaxBehindLines(0);
            $builder->setMaxFrontLines(0);
            // 可以设置图片宽高及字体
            $builder->build($width = 100, $height = 40, $font = null);
            // 获取验证码的内容
            $phrase = $builder->getPhrase();
            // 把内容存入session
            \Session::flash('code', $phrase);
            // 生成图片
            header("Cache-Control: no-cache, must-revalidate");
            header("Content-Type:image/jpeg");
            $builder->output();
        }

    public function doLogin(Request $request) {

    //        1. 接收表单提交的数据
            $input = $request->except('_token');
      //      dd($input);

     //     2. 进行表单验证
      //     $validator = Validator::make('需要验证的表单数据','验证规则','错误提示信息$msg');

            $rule = [
                'username'=>'required|between:4,18',
                'password'=>'required|between:4,18|alpha_dash',
            ];

           // $msg = [
           //      'username.required'=>'用户名必须输入',
           //      'username.between'=>'用户名长度必须在4-18位之间',
           //      'password.required'=>'密码必须输入',
           //      'password.between'=>'密码长度必须在4-18位之间',
           //      'password.alpha_dash'=>'密码必须是数组字母下滑线',
           //  ];

            $validator = Validator::make($input,$rule);

            if ($validator->fails()) {
                return redirect('admin/login')
                    ->withErrors($validator)
                    ->withInput();
            }



        //  3. 验证是否有此用户（验证码 用户名  密码  ）
        //首先验证验证码是否正确，省得进入数据库，从session取得验证码，与输入的进行验证
        if(strtolower($input['code']) != strtolower(session()->get('code')) ){
            return redirect('admin/login')->with('errors','验证码错误');
        }

        //验证用户名是否存在，找到一个与输入用户名一样的用户名
           $user =  User::where('user_name',$input['username'])->first();
        //如果不存在，那么报错
        if(!$user){
            return redirect('admin/login')->with('errors','用户名错误');
        }
        //如果密码输入错误，那么报错，加密有3种方式，具体查看加密方法

        if($input['password'] != Crypt::decrypt($user->user_pass)){

            return redirect('admin/login')->with('errors','密码错误');
        }
+
//        4. 保存用户信息到session中

        session()->put('user',$user);

//        5. 跳转到后台首页
        return redirect('admin/index');
    }


    public function jiami()
    {
//1 md5 加密，会生成32位的字符串
//密码前加盐值，这样即使破解了密码，也不会显示真正密码。颜值的字符串可以自己定义。

        // $str = 'salt'.'123456';
        // return md5($str);
//2 hash 加密，每次刷新都会生成65位不同的字符串，不能通过解密算法对其进行解密
    //    $str = '123456';
    //  //对字符串加密
    //    $hash = Hash::make($str);
    //  $hash = $2y$10$zEiCDBDkkqmNIskmXDG1EeCAbgG7oeBUUzsdcHvCOsobWdjaHqL5y;
    //    //check 方法能为您验证一段给定的未加密字符串与给定的哈希值是否一致
        // if(Hash::check($str,$hash)){
        //     return 'The password is correct';
        // }else{
        //     return 'The password is incorrect';

        // };
//3. crypt加密，生成255位的字符串
        $str = '123456';
        //$crypt_str='eyJpdiI6IldPRGZUZGtZVEFjVTJIVE90Y01sQ1E9PSIsInZhbHVlIjoiTHJheUxxUWwrR21sMHUxNWYxRVJTdz09IiwibWFjIjoiNTczMTY2Y2JmMTA2ZDQ2ZTYxOGIwNmYyOWNjM2EyZTI5Yzc0NzRhNmYwNjU2ZDEwZDM2MzE3OTc0OWZjNjFhOSJ9';
        //为字符串加密
        $crypt_str = Crypt::encrypt($str);
        //返回加密后255位字符串
        return $crypt_str;
        //解密字符串
        //if(Crypt::decrypt($crypt_str) == $str){
        //    return 'The password is correct';
        //}
    }
//后台首页
    public function index() {
        return view('admin.index');
    }
//后台欢迎页
    public function welcome() {

        return view('admin.welcome');
    }
//退出登录页面
    public function logout() {
        //清空session中的用户信息
        session()->flush();
//跳转到登录页面
        return redirect('admin/login');
    }

//没有权限，对应的跳转
    public function noaccess()
    {
        return view('errors.noaccess');
    }
}
