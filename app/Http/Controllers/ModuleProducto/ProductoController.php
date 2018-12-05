<?php

namespace App\Http\Controllers\ModuleProducto;

use App\Models\ProductoModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductoRequest;

class ProductoController extends Controller
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
    public function store(ProductoRequest $ProductoRequest)
    {
        //return response()->json([$BicicletaRequest->all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BicicletaModel  $bicicletaModel
     * @return \Illuminate\Http\Response
     */
    public function show(ProductoRequest $ProductoRequest)
    {
        return $bicicletaModel->all();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BicicletaModel  $bicicletaModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductoRequest $ProductoRequest)
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
    public function update(Request $request, ProductoRequest $ProductoRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BicicletaModel  $bicicletaModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductoRequest $ProductoRequest)
    {
        //
    }
}
