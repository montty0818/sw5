<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConductoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conductores')->insert([
            'cedula' => '1234',
            'nombre' => 'Jofrey',
            'estado' => 'Activo',
        ]);
        //
        DB::table('conductores')->insert([
            'cedula' => '5678',
            'nombre' => 'pablo',
            'estado' => 'Activo',
        ]);
    }
}
