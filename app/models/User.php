<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Model 
{

    protected $table = 'user';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('firstname', 'lastname', 'address', 'password', 'login', 'phone', 'latitude', 'longitude', 'last_conexion_time', 'user_type_id', 'user_status_id', 'user_group_id');

}