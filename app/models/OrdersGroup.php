<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class OrdersGroup extends Model 
{

    protected $table = 'orders_group';
    public $timestamps = true;
    protected $fillable = array('orders_id', 'orders_amount', 'users_id', 'status_id');
    protected $visible = array('orders_id', 'orders_amount', 'users_id', 'status_id');

}