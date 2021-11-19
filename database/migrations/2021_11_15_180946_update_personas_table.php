<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('personas', function(Blueprint $table){
            $table->unsignedBigInteger('padre');       //Creas la variable sin asociarla (le da nombre)
            $table->foreign('padre')->references('id')->on('personas');      //Se asocia al big integer creado, referenciando la id de la tabla personas
            $table->unsignedBigInteger('domicilio'); 
            $table->foreign('domicilio')->references('id')->on('domicilios'); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('personas', function(Blueprint $table){
            //Dropea las FK cuando se borra la tabla
            $table->dropForeign(['padre']);
            $table->dropColumn('padre');
            $table->dropForeign(['domicilio']);
            $table->dropColumn('domicilio');
        });
    }
}
