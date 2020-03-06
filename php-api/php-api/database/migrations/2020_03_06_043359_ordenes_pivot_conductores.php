<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrdenesPivotConductores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_conductor', function (Blueprint $table) {

            $table->integer('orden_id')->unsigned();
        
            $table->integer('conductores_id')->unsigned();
        
            $table->foreign('orden_id')->references('id')->on('ordenes')
        
                ->onDelete('cascade');
        
            $table->foreign('conductores_id')->references('id')->on('conductores')
        
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
        Schema::dropIfExists('orden_conductor');
        //
    }
}
