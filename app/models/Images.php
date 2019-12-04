<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Images extends Model 
{

    protected $table = 'images';
    public $timestamps = true;
    protected $fillable = array('name', 'entity_di');
    protected $visible = array('entity_di');

}