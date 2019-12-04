<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model 
{

    protected $table = 'comment';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('content', 'users_id', 'product_id');
    protected $visible = array('content', 'users_id', 'product_id');

}