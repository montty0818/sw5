<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LicensiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('licencias')->insert([
            'estado' => 'activo',
            'nombre' => 'camion de dos ejes',
            'descripcion' => 'el propietario esta habilitado para conducir camiones de dos ejes',
        ]);
        //
        DB::table('licencias')->insert([
            'estado' => 'activo',
            'nombre' => 'camion de tres ejes',
            'descripcion' => 'el propietario esta habilitado para conducir camiones de tres ejes',
        ]);
        DB::table('licencias')->insert([
            'estado' => 'activo',
            'nombre' => 'tractocamion',
            'descripcion' => 'el propietario esta habilitado para conducir camiones de tipo tractocamion',
        ]);
        DB::table('licencias')->insert([
            'estado' => 'activo',
            'nombre' => 'tractomula',
            'descripcion' => 'el propietario esta habilitado para conducir camiones de tipo tractomula',
        ]);
    }
}
