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
    public function store(BicicletaRequest $request)
    {
       return BicicletaModel::create($request>all());
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
