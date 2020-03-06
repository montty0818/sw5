<?php

use Illuminate\Database\Seeder;
//ordenes pivote a vehiculos
class Pivots1TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orden_vehiculo')->insert([
            'orden_id' => '1',
            'vehiculo_id' => '1',
        ]);
        DB::table('orden_vehiculo')->insert([
            'orden_id' => '2',
            'vehiculo_id' => '1',
        ]);
        DB::table('orden_vehiculo')->insert([
            'orden_id' => '3',
            'vehiculo_id' => '1',
        ]);
        DB::table('orden_vehiculo')->insert([
            'orden_id' => '1',
            'vehiculo_id' => '2',
        ]);
        DB::table('orden_vehiculo')->insert([
            'orden_id' => '2',
            'vehiculo_id' => '2',
        ]);
        DB::table('orden_vehiculo')->insert([
            'orden_id' => '3',
            'vehiculo_id' => '2',
        ]);
        DB::table('orden_vehiculo')->insert([
            'orden_id' => '1',
            'vehiculo_id' => '3',
        ]);
        DB::table('orden_vehiculo')->insert([
            'orden_id' => '2',
            'vehiculo_id' => '3',
        ]);
        DB::table('orden_vehiculo')->insert([
            'orden_id' => '3',
            'vehiculo_id' => '3',
        ]);
        //

        DB::table('orden_conductor')->insert([
            'orden_id' => '1',
            'conductor_id' => '1',
        ]);
        DB::table('orden_conductor')->insert([
            'orden_id' => '2',
            'conductor_id' => '1',
        ]);
        DB::table('orden_conductor')->insert([
            'orden_id' => '3',
            'conductor_id' => '1',
        ]);
        DB::table('orden_conductor')->insert([
            'orden_id' => '1',
            'conductor_id' => '2',
        ]);
        DB::table('orden_conductor')->insert([
            'orden_id' => '2',
            'conductor_id' => '2',
        ]);
        DB::table('orden_conductor')->insert([
            'orden_id' => '3',
            'conductor_id' => '2',
        ]);
        
    }
}
