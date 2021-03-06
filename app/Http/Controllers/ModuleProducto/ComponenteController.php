<?php

namespace App\Http\Controllers\ModuleProducto;

use App\Models\ComponenteModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ComponenteRequest;

class ComponenteController extends Controller
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
    public function store(ComponenteRequest $ComponenteRequest)
    {
        $Componente = new ComponenteModel;
        $Componente->componente = $ComponenteRequest->componente;
        $Componente->save();
        return response()->json($Componente);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BicicletaModel  $bicicletaModel
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return response()->json(ComponenteModel::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BicicletaModel  $bicicletaModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ComponenteRequest $ComponenteRequest)
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
    public function update(Request $request, ComponenteRequest $ComponenteRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BicicletaModel  $bicicletaModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $ComponenteRequest)
    {
        ComponenteModel::destroy($ComponenteRequest->id);
        return "Eliminado";
    }
}
