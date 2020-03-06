<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConductoresPivotSkills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conductor_licencia', function (Blueprint $table) {

            $table->integer('conductores_id')->unsigned();
        
            $table->integer('licencia_id')->unsigned();
        
            $table->foreign('conductores_id')->references('id')->on('conductores')
        
                ->onDelete('cascade');
        
            $table->foreign('licencia_id')->references('id')->on('licencias')
        
                ->onDelete('cascade');
        
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conductor_licencia');
        //
    }
}
