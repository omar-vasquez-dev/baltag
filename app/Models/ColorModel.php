<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ColorModel extends Model
{
    
    protected $table = "ag_colores";

    /**
     * 
     * Model database save
     */
    protected $fillable = [
        'hex_color','name_color'
    ];
}
