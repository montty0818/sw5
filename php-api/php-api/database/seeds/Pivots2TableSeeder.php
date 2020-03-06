<?php

use Illuminate\Database\Seeder;

class Pivots2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('conductor_licencia')->insert([
        'conductor_id' => '1',
        'licencia_id' => '1',
        ]);

        DB::table('conductor_licencia')->insert([
        'conductor_id' => '1',
        'licencia_id' => '2',
        ]);

        DB::table('conductor_licencia')->insert([
        'conductor_id' => '2',
        'licencia_id' => '1',
        ]);

        DB::table('conductor_licencia')->insert([
        'conductor_id' => '2',
        'licencia_id' => '3',
        ]);

        DB::table('conductor_licencia')->insert([
        'conductor_id' => '2',
        'licencia_id' => '4',
        ]);


        DB::table('conductor_notificacion')->insert([
        'conductor_id' => '1',
        'notificacion_id' => '1',
        ]);

        DB::table('conductor_notificacion')->insert([
        'conductor_id' => '1',
        'notificacion_id' => '2',
        ]);

        DB::table('conductor_notificacion')->insert([
        'conductor_id' => '2',
        'notificacion_id' => '1',
        ]);
    }
}
