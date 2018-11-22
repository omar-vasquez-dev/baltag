<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableImagenes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ag_imagenes_bicicletas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('bicicleta_id');    
            $table->foreign('bicicleta_id')
                    ->references('id')->on('ag_bicicletas')
                    ->onDelete('cascade');
            $table->string('img_thumb');
            $table->string('img_original');
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
        Schema::dropIfExists('ag_imagenes_bicicletas');
    }
}
