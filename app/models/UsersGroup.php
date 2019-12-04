<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersGroup extends Model 
{

    protected $table = 'user_group';
    public $timestamps = true;
    protected $fillable = array('name');
    protected $visible = array('name');

}