<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedidasModel extends Model
{
    protected $table="ag_medidas";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',        
        'nombre',
        'valor'
    ];
}
