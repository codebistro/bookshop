<?php

namespace App\Http\Controllers\Admin;

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
        $product =  Product::orderBy('id','asc')
        //条件子句，将where（）作为函数，
            ->where(function($query) use($request){
                //获取用户输入的筛选条件
                $name = $request->input('username');
                $email = $request->input('email');
                //如果用户输入了条件,那么搜寻带有$username变量字符串的用户名字，或者邮件
                if(!empty($name)){
                    $query->where('name','like','%'.$name.'%');
                }
                // if(!empty($email)){
                //     $query->where('email','like','%'.$email.'%');
                // }
            })
            //分页，问号后面代表如果没有输入，那么默认值为3
            ->paginate($request->input('num')?$request->input('num'):3);
        //$user = User::paginate(3);直接分页
        //分配视图，并将获取到的数据分配给视图。用字符串user与变量$user绑定，在list视图中，就可以对$user变量进行操作
        return view ('admin.product.list',compact('product','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('admin.product.add1');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


    }

    //删除所有选中用户
    public function delAll(Request $request)
    {
    }


}
