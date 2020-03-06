<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrdenesPivotVehiculos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_vehiculo', function (Blueprint $table) {

            $table->integer('orden_id')->unsigned();
        
            $table->integer('vehiculo_id')->unsigned();
        
            $table->foreign('orden_id')->references('id')->on('ordenes')
        
                ->onDelete('cascade');
        
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos')
        
                ->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('licencias');
    }
}
