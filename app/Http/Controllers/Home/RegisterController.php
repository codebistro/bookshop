<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SMS\SendTemplateSMS;
use App\SMS\M3Result;
use Illuminate\Support\Facades\Crypt;
use Mail;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    //手机注册页面
    public function index(Request $request)
    {
        //获取数据库中用户的数据
        //$input = $request->all();
        //dd($input);
        $product = Product::get();
        //dd($product);
        // //条件子句，将where（）作为函数，
         //   ->where(function($query) use($request){
        //         //获取用户输入的筛选条件
         //   $name = $request->input('keyword');
        //         $email = $request->input('email');
        //         //如果用户输入了条件,那么搜寻带有$username变量字符串的用户名字，或者邮件
        //    if(!empty($name)) {
         //        $query->where('name','like','%'.$name.'%');
        //        }
        //         if(!empty($email)){
        //             $query->where('email','like','%'.$email.'%');
        //          }
         //    });
        //     //分页，问号后面代表如果没有输入，那么默认值为3
        //     ->paginate($request->input('num')?$request->input('num'):3);
        // //$user = Product::paginate(3);直接分页
        // //分配视图，并将获取到的数据分配给视图。用字符串user与变量$user绑定，在list视图中，就可以对$user变量进行操作
       // return view ('home.product.plist',compact('product','request'));
        return view ('home.product.plist',compact('product'));
    }

    //发送手机验证码
    public function sendCode(Request $request)
    {
//        1. 获取要发送的手机号
        $phone = $request->phone;

//        2. 生成模板中需要的参数 ，验证码和时间
        $code = rand(1000,9999);
        $arr = [$code,5];

//      3 调用容联云通讯的接口
        $templateSMS = new SendTemplateSMS();
        $M3result = new M3Result();

        $M3result = $templateSMS->sendTemplateSMS($phone,$arr,1);


//        4 将验证码存入session
        session()->put('phone',$code);

//        5 给客户端返回容联云通讯的响应结果
        return $M3result->toJson();

    }

    //    手机号注册处理
    public function doPhoneRegister(Request $request)
    {
        $input = $request->except('_token');
        //如果验证码不对
//        if(session()->get('phone') != $input['code']){
//            return redirect('phoneregister');
//        }

        $input['user_pass'] = Crypt::encrypt($input['user_pass']);
        $input['user_name'] = $input['phone'];
        $input['expire'] = time()+3600*24;

        $user = HomeUser::create(['user_name'=>$input['phone'],'phone'=>$input['phone'],'user_pass'=>$input['user_pass']]);

        if($user){

            return redirect('user/login');
        }else{
            return back();
        }

    }

    //前台注册页
    public function register(Request $request)
    {
        // if(!empty($request->input('name'))) {
        //         $finduser = Customer::where('name', $request->input('name'))->first();
        //         if($finduser) {
        //             echo "Username has been used";
        //         }else{
        //             echo "true";
        //         }
        //         die();
        //     }

        return view('home.register');
    }

    //    邮箱登录处理
    public function doRegister(Request $request)
    {
        //1.接收前台表单提交数据
        $input = $request->except('_token');

        //2.进行表单验证
        //前端已经使用ajax（好像）验证，添加用户。不需要验证用户是否已经存在

        //3.添加到数据库的customer表
        $username = $input['name'];
        $pass = Crypt::encrypt($input['pw']);
        $email = $input['email'];
        $company = $input['company'];
        $address = $input['address'];
        $country = $input['country'];
        $region = $input['region'];

        $res = Customer::create(['name'=>$username,'pw'=>$pass,'email'=> $email,'company'=> $company,'address'=> $address,'country'=> $country,'region'=> $region]);

        if($res) {
                    return redirect('user/login');
                }else{
                    return back();
                }

    }

    public function login() {
        return view ('home.login');
    }


    //注册账号邮箱激活
    public function active(Request $request){
        //找到要激活的用户，将用户的active字段改成1

        $user = HomeUser::findOrFail($request->userid);

        //验证token的有效性，保证链接是通过邮箱中的激活链接发送的
        if($request->token  != $user->token){
            return '当前链接非有效链接，请确保您是通过邮箱的激活链接来激活的';
        }
        //激活时间是否已经超时
        if(time() > $user->expire){
            return '激活链接已经超时，请重新注册';
        }

        $res = $user->update(['active'=>1]);
        //激活成功，跳转到登录页
        if($res){
            return redirect('login')->with('msg','账号激活成功');
        }else{
            return '邮箱激活失败，请检查激活链接，或者重新注册账号';
        }
    }

//    忘记密码
    public function forget()
    {
        return view('home.forget');
    }
    //发送密码找回邮件
    public function doforget(Request $request)
    {
        //要发送邮件的账号
        $email = $request->email;
        // 根据账号名查询用户信息
        $user = HomeUser::where('user_name',$email)->first();
        if($user){
            //想此用户发送密码找回邮件
            Mail::send('email.forget',['user'=>$user],function ($m) use ($user) {
//              $m->from('hello@app.com', 'Your Application');

                $m->to($user->email, $user->name)->subject('找回密码');


            });

            return '请登录您的邮箱查看重置密码邮件，重新设置密码';
        }else{
            return '用户不存在，请重新输入要找回密码的账号';
        }

    }
    //重新设置密码页面
    public function reset(Request $request)
    {
        $input = $request->all();
        //验证token，判断是否是通过重置密码邮件跳转过来的

        $user = HomeUser::find($input['uid']);
        return view('home.reset',compact('user'));
    }

    //重置密码逻辑
    public function doreset(Request $request)
    {
//        1. 接收要重置密码的账号、新密码
        $input = $request->all();

        $pass = Crypt::encrypt($input['user_pass']);

//        2.将此账号的密码重置为新密码
        $res = HomeUser::where('user_name',$input['user_name'])->update(['user_pass'=>$pass]);

//        3. 判断更新是否成功
        if($res){
            return redirect('login');
        }else{
            return redirect('reset');
        }
    }


    public function doLogin(Request $request) {

    //        1. 接收表单提交的数据
            $input = $request->except('_token');
            //dd($input);

     //     2. 进行表单验证
      //     $validator = Validator::make('需要验证的表单数据','验证规则','错误提示信息$msg');

            $rule = [
                'name'=>'required|between:4,18',
                'pw'=>'required|between:4,18|alpha_dash',
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
                return redirect('user/login')
                    ->withErrors($validator)
                    ->withInput();
            }



        //  3. 验证是否有此用户（验证码 用户名  密码  ）
        //首先验证验证码是否正确，省得进入数据库，从session取得验证码，与输入的进行验证
        // if(strtolower($input['code']) != strtolower(session()->get('code')) ){
        //     return redirect('user/login')->with('errors','验证码错误');
        // }

        //验证用户名是否存在，找到一个与输入用户名一样的用户名
           $user =  Customer::where('name',$input['name'])->first();
        //如果不存在，那么报错
        if(!$user){
            return redirect('user/login')->with('errors','用户名错误');
        }
        //如果密码输入错误，那么报错，加密有3种方式，具体查看加密方法

        if($input['pw'] != Crypt::decrypt($user->pw)){

            return redirect('user/login')->with('errors','密码错误');
        }
+
//        4. 保存用户信息到session中

        session()->put('user',$user);

//        5. 跳转到后台首页
        return redirect('home/index');
    }


    public function logout() {
        //清空session中的用户信息
        session()->flush();
//跳转到登录页面
        return redirect('user/login');
    }


}




