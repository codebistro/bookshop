<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\Permission;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;



class RoleController extends Controller
{


    public function auth($id) {

        //获取当前角色,返回一行实例
        $role = Role::find($id);

        //获取所有的权限列表,返回表中所有行实例

        $perms = Permission::get();

        //获取当前角色拥有的权限，已经将permission写进了属性里，所以可以直接调用
        $own_perms = $role->permission;

        //dd($own_perms);
        //角色拥有的权限的id。
        //定义空数组
        $own_pers = [];
        //将获取到的权限类，进行多维数组的遍历，将其遍历成一维数组，然后获取数组中的id值。
        foreach ($own_perms as $v){
            $own_pers[] = $v->id;
        }

        //以上语句都是为了获取数据（或者说和数据库进行了交互，进行了增删改查等操作），以下语句为了分配数据。
        return view ('admin.role.auth',compact('role','perms','own_pers'));

    }


    //处理授权
    public function doAuth(Request $request)
    {
        $input = $request->except('_token');
//        dd($input);

        //删除数据库表中当前角色已有的权限,防止重复
        \DB::table('role_permission')->where('role_id',$input['role_id'])->delete();

        //添加新授予的权限，如果不为空，在插入数据
        if(!empty($input['permission_id'])){
            foreach ($input['permission_id'] as $v){
                \DB::table('role_permission')->insert(['role_id'=>$input['role_id'],'permission_id'=>$v]);
            }
        }

        return redirect('admin/role');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //获取所有的角色数据
        $role = Role::get();
        //返回视图
        return view('admin.role.list',compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //显示添加页面
        return view('admin.role.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取表单数据
        $input = $request->except('_token');
        //将数据添加到role表中，create方法后面可以接变量，也可以接数组

        $res = Role::create($input);

        //4 根据添加是否成功，给客户端返回一个json格式的反馈
        if($res){
            return redirect ('admin/role');
        }else{
            return back()->with('msg','添加失败');

        }
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
        $role = Role::find($id);
        return view('admin.role.edit',compact('role'));

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
        //
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
         //
        //1 依据id获取要修改的记录
        $role = Role::find($id);

        $res = $role->delete();

         //提示信息，如果修改成功
        if($res) {
            $data = [
                'status' =>0,
                'message' => 'Delete Successfully'
            ];
        }else {
            $data = [
                'status' =>1,
                'message' => 'Delete Failed！'
            ];
        }
        return $data;
    }
}
