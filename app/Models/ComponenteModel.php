<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComponenteModel extends Model
{
    protected $table="ag_componentes";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',        
        'componente'
    ];
}
