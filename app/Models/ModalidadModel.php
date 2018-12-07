<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModalidadModel extends Model
{
    protected $table="ag_modalidad";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];
}
