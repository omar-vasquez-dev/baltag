<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarcaModel extends Model
{
    protected $table="ag_marcas";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'marca',
    ];
}
