<?php

use Illuminate\Database\Seeder;

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
            'id' => '1',
            'placa' => 'mnu12',
            'modelo' => '2007',          
        ],
        [
            'id' => '2',
            'placa' => 'aou23',
            'modelo' => '2007',          
        ],
        [
            'id' => '3',
            'placa' => 'tou34',
            'modelo' => '2007',          
        ]);//
    }
}
