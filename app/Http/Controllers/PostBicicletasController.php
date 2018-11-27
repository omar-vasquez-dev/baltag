<?php

namespace App\Http\Controllers;

use App\NuevaBicicleta;
use Illuminate\Http\Request;

class PostBicicletasController extends Controller
{
    //
    public function postBicicleta(Request $request)
    {
        $NuevaBicicleta = new NuevaBicicleta;
        $NuevaBicicleta->descripcion = $request->descripcion;

        $NuevaBicicleta->save();
    }
}
