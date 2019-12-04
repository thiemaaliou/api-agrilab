<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model 
{

    protected $table = 'demande';
    public $timestamps = true;
    protected $fillable = array('label', 'description', 'date_start_validity', 'date_end_validty', 'logo', 'latitude');
    protected $visible = array('label', 'description', 'date_start_validity', 'date_end_validty', 'logo', 'latitude');

}