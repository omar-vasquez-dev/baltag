<?php

namespace App\Http\Controllers\ModuleProducto;

use App\Models\MarcaModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MarcaRequest;

class MarcaController extends Controller
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
    public function store(MarcaRequest $MarcaRequest)
    {
        $Marca = new MarcaModel;
        $Marca->marca = $MarcaRequest->marca;
        $Marca->save();
        return response()->json($Marca);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BicicletaModel  $MarcaRequest
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return response()->json(MarcaModel::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MarcaModel  $bicicletaModel
     * @return \Illuminate\Http\Response
     */
    public function edit(MarcaRequest $MarcaRequest)
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
    public function update(Request $request, MarcaRequest $MarcaRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BicicletaModel  $bicicletaModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $MarcaRequest)
    {
        MarcaModel::destroy($MarcaRequest->id);
        return "Eliminado";
    }
}
