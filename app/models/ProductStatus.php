<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class ProductStatus extends Model 
{

    protected $table = 'product_status';
    public $timestamps = true;
    protected $fillable = array('name');
    protected $visible = array('name');

}