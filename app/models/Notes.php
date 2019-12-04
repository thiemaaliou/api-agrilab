<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model 
{

    protected $table = 'notes';
    public $timestamps = true;
    protected $fillable = array('text', 'note', 'product_id', 'users_id');
    protected $visible = array('text', 'note', 'product_id', 'users_id');

}