<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Product extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array

     */
    protected $primaryKey = 'id';

    protected $table = 'product';

    protected $guarded = [ ];

    public $timestamps = false;

    //跟Role的关联模型
    public function comment()
    {
        return $this->belongsToMany('App\Models\Comment','customer_comment','id','comment_id');
    }
}
