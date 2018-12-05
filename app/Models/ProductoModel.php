<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductoModel extends Model
{
    protected $table = "ag_productos";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'descripcion',
        'id_marca',
        'id_componente'
    ];

    /**
     * obtener marcas y componentes
     */
    public function marca()
    {
        return $this->hasone('App\Models\MarcaModel','id','id_marca');
    }
    public function componente()
    {
        return $this->hasone('App\Models\ComponenteModel','id','id_componente');
    }
}
