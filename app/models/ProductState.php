<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

class ProductState extends Model 
{

    protected $table = 'product_state';
    public $timestamps = true;
    protected $fillable = array('name');
    protected $visible = array('name');

}