<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'client' => Str::random(10),
            'status' => 'Accepted',
            'seller' => Str::random(10),
            'guide' => Str::random(10),
        ]);
    }
}
