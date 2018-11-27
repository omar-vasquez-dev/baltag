<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NuevaBicicleta extends Model
{
    /* 
    * The table associated with the model.
    * @var string   
    */
    //protected $connection = '';
    protected $table = 'ag_bicicletas';
    public $timestamps = false;

}
