<?php

use Illuminate\Database\Seeder;

class EstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('est')->insert([
        	'Est_UsuDesc'=>'ACTIVO'
        ]);
        DB::table('est')->insert([
        	'Est_UsuDesc'=>'INACTIVO'
        ]);
        DB::table('est')->insert([
        	'Est_UsuDesc'=>'BAJA'
        ]);
        DB::table('est')->insert([
        	'Est_UsuDesc'=>'PRE REGISTRO'
        ]);

    }
}
