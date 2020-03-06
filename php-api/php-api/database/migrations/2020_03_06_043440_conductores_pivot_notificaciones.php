<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConductoresPivotNotificaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conductor_notificacion', function (Blueprint $table) {

            $table->bigInteger('conductor_id')->unsigned();
        
            $table->bigInteger('notificacion_id')->unsigned();
        
            $table->foreign('conductor_id')->references('id')->on('conductores')
        
                ->onDelete('cascade');
        
            $table->foreign('notificacion_id')->references('id')->on('notificaciones')
        
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
        Schema::dropIfExists('conductor_notificacion');
    }
}
