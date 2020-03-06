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

            $table->integer('conductor_id')->unsigned();
        
            $table->integer('notificacion_id')->unsigned();
        
            $table->foreign('conductor_id')->references('id')->on('conductor')
        
                ->onDelete('cascade');
        
            $table->foreign('notificacion_id')->references('id')->on('notificcion')
        
                ->onDelete('cascade');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
