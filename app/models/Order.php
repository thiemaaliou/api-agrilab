<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model 
{

    protected $table = 'order';
    public $timestamps = true;
    protected $fillable = array('product_id', 'product_quantity', 'amount', 'devise');
    protected $visible = array('product_id', 'product_quantity', 'amount', 'devise');

}