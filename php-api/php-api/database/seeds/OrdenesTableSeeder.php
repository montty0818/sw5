<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdenesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ordenes')->insert([
            'entrega_id' => '1',
            'codigo' => 'or01',
            'descripcion' => 'pedido cliente: fulanito',  
        ]); 

        DB::table('ordenes')->insert([
            'entrega_id' => '2',
            'codigo' => 'or02',
            'descripcion' => 'pedido cliente: fulanito',  
        ]); 
        
        DB::table('ordenes')->insert([
            'entrega_id' => '3',
            'codigo' => 'or03',
            'descripcion' => 'pedido cliente: peranito', 
        ]);         
    }
}
