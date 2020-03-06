<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            //ConductoresTableSeeder::class,
            //EntregasTableSeeder::class,
            LicensiasTableSeeder::class,
            //NotificacionesTableSeeder::class,
            //OrdenesTableSeeder::class,
            VehiculosTableSeeder::class
            //Pivots1TableSeeder::class,
            //Pivots2TableSeeder::class
        ]);
    }
}
