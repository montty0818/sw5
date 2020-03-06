<?php

use Illuminate\Database\Seeder;

class EntregasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entregas')->insert([
            'destinatario' => '2345',
            'direccion' => 'universidad de medellin',
            'estado' => 'pendiente',
            'tipo' => 'quimico',
            'notas' => 'quimicos de alta combustibilidad para laboratorio',
        ]);
        //
        DB::table('entregas')->insert([
            'destinatario' => '3456',
            'direccion' => 'calle 80 #45-45',
            'estado' => 'pendiente',
            'tipo' => 'materiales',
            'notas' => 'materiales de construccion, tipo losa y cemento',
        ]);
    }
}
