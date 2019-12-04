<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class DemandeType extends Model 
{

    protected $table = 'demande_type';
    public $timestamps = true;
    protected $fillable = array('name');
    protected $visible = array('name');

}