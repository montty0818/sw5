<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiculosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehiculos')->insert([
            'placa' => 'mnu12',
            'tipo' => '2 ejes',
            'modelo' => '2007',          
        ],
        [
            'placa' => 'aou23',
            'tipo' => '3 ejes',
            'modelo' => '2007',          
        ],
        [
            'placa' => 'tou34',
            'tipo' => 'tractomula',
            'modelo' => '2007',          
        ]);//
    }
}
