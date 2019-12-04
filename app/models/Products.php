<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model 
{

    protected $table = 'products';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'quantity', 'date_start_order', 'date_end_order', 'price', 'product_status_id', 'created_by');
    protected $visible = array('name', 'quantity', 'date_start_order', 'date_end_order', 'price', 'product_status_id', 'created_by');

}