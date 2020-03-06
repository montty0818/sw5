<?php

use Illuminate\Database\Seeder;

class NotificacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notificaciones')->insert([
            'tipo' => 'examen',
            'mensaje' => 'el proximo dia 26 de marzo se levara a cabo el examen para la licencia de tractocamion',
        ]);
        //
        DB::table('notificaciones')->insert([
            'tipo' => 'suspencion',
            'mensaje' => 'usted ha sido suspendido por reprobar el examen de conduccion',
        ]);
    }
}
