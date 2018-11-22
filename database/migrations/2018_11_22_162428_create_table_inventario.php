<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInventario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ag_inventario_bicicletas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('bicicleta_referencia_id');    
            $table->foreign('bicicleta_referencia_id')
                    ->references('id')->on('ag_bicicletas')
                    ->onDelete('cascade');
            $table->integer('inventario_bodega')
                    ->default(0);
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
        Schema::dropIfExists('ag_inventario_bicicletas');
    }
}
