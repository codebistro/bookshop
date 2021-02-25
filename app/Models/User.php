<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;


    protected $primaryKey = 'user_id';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name',
        'user_pass',
        'email',
        'phone',
    ];

    public $timestamps = false;

    //跟Role的关联模型
    public function role()
    {
        return $this->belongsToMany('App\Models\Role','user_role','user_id','role_id');
    }
}
