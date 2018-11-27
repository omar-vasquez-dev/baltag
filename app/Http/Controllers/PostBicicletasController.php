<?php

namespace App\Http\Controllers;

use App\Crud;

use Illuminate\Http\Request;
use illuminate\http\Response;


class PostBicicletasController extends Controller
{
    public function create()
    {
        $crud = new Crud;
        $crud->descripcion = "valor";
        $crud->modelo = "valor 2";
        $crud->publicacion = "Valor 3";
        $crud->material = "Valor 4";
        $crud->modelaje = "Valor 5";
        $crud->genero = "Valor 6";
        $crud->velocidad = "Valor 7";

        $crud->save();
        return response($crud->jsonSerialize(), Response::HTTP_CREATED);
    }
}
