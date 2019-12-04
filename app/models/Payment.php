<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model 
{

    protected $table = 'payment';
    public $timestamps = true;
    protected $fillable = array('order_id', 'type');
    protected $visible = array('order_id', 'type');

}