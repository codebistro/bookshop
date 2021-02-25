<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Crypt;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //获取数据库中用户的数据
        //$input = $request->all();
        //dd($input);
        //$product =  Product::get();

        //dd($product);
        // //条件子句，将where（）作为函数，
        //    ->where(function($query) use($request){
        //         //获取用户输入的筛选条件
        //         $name = $request->input('keyword');
        //         $email = $request->input('email');
        //         //如果用户输入了条件,那么搜寻带有$username变量字符串的用户名字，或者邮件
        //           if(!empty($name)) {
        //             $query->where('name','like','%'.$name.'%');
        //             }
        //         if(!empty($email)){
        //             $query->where('email','like','%'.$email.'%');
        //          }
        //     })
        //     //分页，问号后面代表如果没有输入，那么默认值为3
        //     ->paginate($request->input('num')?$request->input('num'):3);
        // //$user = Product::paginate(3);直接分页
        // //分配视图，并将获取到的数据分配给视图。用字符串user与变量$user绑定，在list视图中，就可以对$user变量进行操作
        // return view ('home.product.plist',compact('product','request'));
        //return view ('home.product.plist',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //1.接收前台表单提交数据
        $input = $request->all();

        //2.进行表单验证
        //前端已经使用ajax（好像）验证，添加用户。不需要验证用户是否已经存在

        //3.添加到数据库的user表
        $username = $input['email'];
        $pass = Crypt::encrypt($input['pass']);

        $res = User::create(['user_name'=>$username,'user_pass'=>$pass,'email'=> $input['email']]);

        //4.根据添加是否成功，给客户端返回一个json格式的反馈
        if($res) {
            $data = [
                'status' =>0,
                'message' => '添加成功'
            ];
        }else {
            $data = [
                'status' =>1,
                'message' => '添加失败'
            ];
        }

      //  json_encode($data)
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product = Product::find($id);
        return view('home.product.product',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::where('user_id', $id)->first();
        return view('admin.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id)
    {
        //1 依据id获取要修改的记录
        $user = User::where('user_id', $id)->first();
        //2. 获取要修改成的用户名
        $username = $request->input('user_name');

        $pass = $request->input('pass');


        //3.用新的用户名替代存在的用户名
        $user->user_name = $username;

        $user->user_pass = $pass;
        //4.保存
        $res = $user->save();
        //提示信息，如果修改成功
        if($res) {
            $data = [
                'status' =>0,
                'message' => 'Modify Successfully !'
            ];
        }else {
            $data = [
                'status' =>1,
                'message' => 'Modify Failed !'
            ];
        }
        return $data;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        //1 依据id获取要修改的记录
        $user = User::find($id);

        $res = $user->delete();

         //提示信息，如果修改成功
        if($res) {
            $data = [
                'status' =>0,
                'message' => '删除成功'
            ];
        }else {
            $data = [
                'status' =>1,
                'message' => '删除失败'
            ];
        }
        return $data;

    }

    //删除所有选中用户
    public function delAll(Request $request)
    {
        $input = $request->input('ids');

        $res = User::destroy($input);

        if($res){
            $data = [
                'status'=>0,
                'message'=>'删除成功'
            ];
        }else{
            $data = [
                'status'=>1,
                'message'=>'删除失败'
            ];
        }
        return $data;
    }

}
