<?php

use Illuminate\Database\Seeder;

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
            'nombre' => 'camion de dos ejes',
            'descripcion' => 'el propietario esta habilitado para conducir camiones de dos ejes',
        ]);
        //
        DB::table('licencias')->insert([
            'nombre' => 'camion de tres ejes',
            'descripcion' => 'el propietario esta habilitado para conducir camiones de tres ejes',
        ]);
        DB::table('licencias')->insert([
            'nombre' => 'tractocamion',
            'descripcion' => 'el propietario esta habilitado para conducir camiones de tipo tractocamion',
        ]);
        DB::table('licencias')->insert([
            'nombre' => 'tractomula',
            'descripcion' => 'el propietario esta habilitado para conducir camiones de tipo tractomula',
        ]);
    }
}
