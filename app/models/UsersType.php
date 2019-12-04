<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersType extends Model 
{

    protected $table = 'user_type';
    public $timestamps = true;
    protected $fillable = array('name');

}