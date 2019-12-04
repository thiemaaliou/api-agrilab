<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersStatus extends Model 
{

    protected $table = 'user_status';
    public $timestamps = true;
    protected $fillable = array('name');

}