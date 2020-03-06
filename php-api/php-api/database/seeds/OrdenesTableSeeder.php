<?php

use Illuminate\Database\Seeder;

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
            'id' => '1',
            'entrega_id' => '1',
            'codigo' => 'or01',
            'descripcion' => 'pedido cliente: fulanito',          
        ],
        [
            'id' => '2',
            'entrega_id' => '2',
            'codigo' => 'or02',
            'descripcion' => 'pedido cliente: fulanito',          
        ],
        [
            'id' => '3',
            'entrega_id' => '3',
            'codigo' => 'or03',
            'descripcion' => 'pedido cliente: peranito',          
        ]);//
    }
}
