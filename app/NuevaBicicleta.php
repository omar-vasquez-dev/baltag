<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NuevaBicicleta extends Model
{
    /* 
    * The table associated with the model.
    * @var string   
    */

    // --- Cambios del 27/Noviembre/2018
    //protected $connection = '';
    protected $table = 'ag_bicicletas';
    public $timestamps = false;

}
