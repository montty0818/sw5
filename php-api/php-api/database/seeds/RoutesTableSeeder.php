<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RoutesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('routes')->insert([
            'guide' => Str::random(10),
            'status' => 'on trip',
            'vehicle' => Str::random(10),
            'observation' => Str::random(10),
            'order_id'  => '1'
        ]);
    }
}

