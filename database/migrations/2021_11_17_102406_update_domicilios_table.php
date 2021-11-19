Schema::table('personas', function(Blueprint $table){<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateDomiciliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('domicilios', function(Blueprint $table){
            $table->bigInteger('codigo_postal');       //Creas la variable sin asociarla (le da nombre)
            $table->foreign('codigo_postal')->references('codigo_postal')->on('codigo_postals'); 

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign(['codigo_postal']);
        $table->dropColumn('codigo_postal');
    }
}
