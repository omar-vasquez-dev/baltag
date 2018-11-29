<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BicicletaModel extends Model
{
    protected $table="ag_bicicletas";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion',
        'componente',
        'marca',
        'modelo',
        'publicacion',
        'capacidad',
        'material',
        'rodada',
        'modelaje',
        'genero',
        'velocidad',
        'color_id',
        'medida_id',
        'material_id',
        'img_url_header',
        'modalidad_id'
    ];

    /**
     * Get the images.
     */
    public function images()
    {
        return $this->hasMany('App\Models\BicicletaImageModel','bicicleta_id', 'id');
    }

    public function color(){
        return $this->hasone('App\Models\ColorModel','id','color_id');
    }

}
