<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeticionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /* Schema::create('peticiones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre'); 
            $table->integer('documento');  
            $table->string('correo'); 
            $table->string('direccion'); 
            $table->string('telefono');  
            $table->string('motivo');  
            $table->timestamps();
        });*/
        Schema::create('peticions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre'); 
            $table->integer('documento');  
            $table->string('correo'); 
            $table->string('direccion'); 
            $table->string('telefono');  
            $table->string('motivo');  
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
        Schema::dropIfExists('peticiones');
    }
}
