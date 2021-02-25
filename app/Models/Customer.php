<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array

     */
    protected $primaryKey = 'id';

    protected $table = 'customer';

    protected $guarded = [ ];

    public $timestamps = false;

    //跟Role的关联模型
    public function permission()
    {
        return $this->belongsToMany('App\Models\Permission','customer_permission','id','permission_id');
    }

    public function product()
    {
        return $this->belongsToMany('App\Models\Product','customer_product','id','product_id');
    }
}
