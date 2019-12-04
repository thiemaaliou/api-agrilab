<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class ProductPrices extends Model 
{

    protected $table = 'product_prices';
    public $timestamps = true;
    protected $fillable = array('price', 'product_quatity', 'product_id');
    protected $visible = array('price', 'product_quatity', 'product_id');

}