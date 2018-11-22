<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BicicletaImageModel extends Model
{
    
    protected $table="ag_imagenes_bicicletas";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bicicleta_id',
        'img_thumb',
        'img_original'
    ];
}
