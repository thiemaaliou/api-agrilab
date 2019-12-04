<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class ShippingSettins extends Model 
{

    protected $table = 'shipping_settings';
    public $timestamps = true;
    protected $fillable = array('date', 'address', 'latitude', 'longitude', 'product_id');
    protected $visible = array('date', 'address', 'latitude', 'longitude', 'product_id');

}