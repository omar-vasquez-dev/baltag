<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimientoInventario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ag_movimiento_inventario', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('inventario_bicicleta_id');    
            $table->foreign('inventario_bicicleta_id')
                    ->references('id')->on('ag_inventario_bicicletas')
                    ->onDelete('cascade');
            $table->string('event'); //El tipo de evento o movimiento, si es la salida o la entrada del producto.
            $table->integer('cantidad_movimiento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ag_movimiento_inventario');
    }
}
