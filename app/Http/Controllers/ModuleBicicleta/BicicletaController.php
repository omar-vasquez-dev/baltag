<?php

namespace App\Http\Controllers\ModuleBicicleta;

use App\Models\BicicletaModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BicicletaRequest;

class BicicletaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //BicicletaRequest
    public function store(BicicletaRequest $BicicletaRequest)
    {
        //return response()->json([$BicicletaRequest->all()]);
        $Bicicleta = new BicicletaModel;

        $Bicicleta->descripcion = $BicicletaRequest->descripcion;
        $Bicicleta->componente = $BicicletaRequest->componente;
        $Bicicleta->marca = $BicicletaRequest->marca;
        $Bicicleta->modelo = $BicicletaRequest->modelo;
        $Bicicleta->publicacion = $BicicletaRequest->publicacion;
        $Bicicleta->capacidad = $BicicletaRequest->capacidad;
        $Bicicleta->material = $BicicletaRequest->material;
        $Bicicleta->rodada = $BicicletaRequest->rodada;
        $Bicicleta->modelaje = $BicicletaRequest->modelaje;
        $Bicicleta->genero = $BicicletaRequest->genero;
        $Bicicleta->velocidad = $BicicletaRequest->velocidad;
        $Bicicleta->color_id = $BicicletaRequest->color_id;
        $Bicicleta->medida_id = $BicicletaRequest->medida_id;
        $Bicicleta->material_id = $BicicletaRequest->material_id;
        $Bicicleta->img_url_header = $BicicletaRequest->img_url_header;
        $Bicicleta->modalidad_id = $BicicletaRequest->modalidad_id;

        $Bicicleta->save();

        return "Listo";

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BicicletaModel  $bicicletaModel
     * @return \Illuminate\Http\Response
     */
    public function show(BicicletaModel $bicicletaModel)
    {
        return $bicicletaModel->all();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BicicletaModel  $bicicletaModel
     * @return \Illuminate\Http\Response
     */
    public function edit(BicicletaModel $bicicletaModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BicicletaModel  $bicicletaModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BicicletaModel $bicicletaModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BicicletaModel  $bicicletaModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(BicicletaModel $bicicletaModel)
    {
        //
    }
}
