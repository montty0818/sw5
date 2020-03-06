<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrdenesPivotReportes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_reporte', function (Blueprint $table) {

            $table->bigInteger('orden_id')->unsigned();
        
            $table->bigInteger('reporte_id')->unsigned();
        
            $table->foreign('orden_id')->references('id')->on('ordenes')
        
                ->onDelete('cascade');
        
            $table->foreign('reporte_id')->references('id')->on('reportes')
        
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
        Schema::dropIfExists('orden_reporte');
    }
}
