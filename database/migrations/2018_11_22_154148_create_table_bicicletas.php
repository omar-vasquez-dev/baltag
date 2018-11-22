<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBicicletas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ag_bicicletas', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('descripcion');
            $table->string('componente')->nullable();
            $table->string('marca')->nullable(); 
            $table->string('modelo'); 
            $table->string('publicacion');
            $table->integer('capacidad')->default(0);
            $table->string('material'); 
            $table->string('rodada')->nullable(); 
            $table->string('modelaje');
            $table->string('genero');
            $table->string('velocidad'); 
            $table->integer('color_id')->nullable(); 
            $table->integer('medida_id')->nullable(); 
            $table->integer('material_id')->nullable(); 
            $table->string('img_url_header')->nullable(); 
            $table->integer('modalidad_id')->nullable();
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
        Schema::dropIfExists('ag_bicicletas');
    }
}
