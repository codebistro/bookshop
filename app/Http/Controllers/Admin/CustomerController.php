<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Crypt;
use App\Models\Permission;
use DB;

class CustomerController extends Controller
{
    public function auth($id) {

        //获取当前角色,返回一行实例
        $customer = Customer::find($id);

        //获取所有的权限列表,返回表中所有行实例

        $perms = Permission::get();

        //获取当前角色拥有的权限，已经将permission写进了属性里，所以可以直接调用
        $own_perms = $customer->permission;

        //dd($own_perms);
        //角色拥有的权限的id。
        //定义空数组
        $own_pers = [];
        //将获取到的权限类，进行多维数组的遍历，将其遍历成一维数组，然后获取数组中的id值。
        foreach ($own_perms as $v){
            $own_pers[] = $v->id;
        }

        //以上语句都是为了获取数据（或者说和数据库进行了交互，进行了增删改查等操作），以下语句为了分配数据。
        return view ('admin.customer.auth',compact('customer','perms','own_pers'));

    }


    //处理授权
    public function doAuth(Request $request)
    {
        $input = $request->except('_token');
//        dd($input);

        //删除数据库表中当前角色已有的权限,防止重复
        \DB::table('customer_permission')->where('id',$input['id'])->delete();

        //添加新授予的权限，如果不为空，在插入数据
        if(!empty($input['permission_id'])){
            foreach ($input['permission_id'] as $v){
                \DB::table('customer_permission')->insert(['id'=>$input['id'],'permission_id'=>$v]);
            }
        }

        return redirect('admin/customer');

    }



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
        $customer =  Customer::orderBy('id','asc')
        //条件子句，将where（）作为函数，
            ->where(function($query) use($request){
                //获取用户输入的筛选条件
                $name = $request->input('name');
                $email = $request->input('email');
                //如果用户输入了条件,那么搜寻带有$username变量字符串的用户名字，或者邮件
                if(!empty($name)){
                    $query->where('name','like','%'.$name.'%');
                }
                if(!empty($email)){
                    $query->where('email','like','%'.$email.'%');
                }
            })
            //分页，问号后面代表如果没有输入，那么默认值为5
            ->paginate($request->input('num')?$request->input('num'):5);
        //$user = User::paginate(5);直接分页
        //分配视图，并将获取到的数据分配给视图。用字符串user与变量$user绑定，在list视图中，就可以对$user变量进行操作
        return view ('admin.customer.list',compact('customer','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //返回添加页面
        return view ('admin.user.add');
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
        $customer = Customer::find($id);
        return view('admin.customer.edit',compact('customer'));
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
        $customer = Customer::find($id);
        //2. 获取要修改成的用户名
        $customername = $request->input('name');

        $customerpw = $request->input('pass');

        //$crypt_pw = Crypt::encrypt($customerpw);

        //3.用新的用户名替代存在的用户名
        $customer->name = $customername;

        $customer->pw = $customerpw;
        //4.保存
        $res = $customer->save();
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
        $customer = Customer::find($id);

        $res = $customer->delete();

         //提示信息，如果修改成功
        if($res) {
            $data = [
                'status' =>0,
                'message' => 'Modify Successfully !'
            ];
        }else {
            $data = [
                'status' =>1,
                'message' => 'Modify failed !'
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
                'message'=>'Delete Successfully !'
            ];
        }else{
            $data = [
                'status'=>1,
                'message'=>'Delete Failed !'
            ];
        }
        return $data;
    }

}
