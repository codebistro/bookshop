<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Role extends Authenticatable
{
    use HasFactory, Notifiable;
    //关联的数据表
    public $table = 'role';
    //主键
    public $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     * 允许批量操作的字段
     * @var array
     */

    public $guarded = [];

    public $timestamps = false;

    //添加表的动态属性，关联权限模型
    public function permission()
    {
        //多对多的关系，第一个参数为与之关联的模型，第二个参数为关联表表名,第三个参数为当前模型关系字段，第四个参数为被关联模型关系字段
        return $this->belongsToMany('App\Models\Permission','role_permission','role_id','permission_id');
    }
}
