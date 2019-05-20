<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Rol- Usuarios Administradores
        $administrador = User::create([
            'name' => 'Administrador',
            'email' =>  'admin@gmail.com',
            'IdEst' => 1,
            'password' => bcrypt('123456')
        ]);

        $administrador->assignRole('administracion');
        // Rol- Super Administrador
        $sa = User::create([
            'name' => 'sa',
            'email' =>  'sa@gmail.com',
            'IdEst' => 1,
            'password' => bcrypt('123456')
        ]);

        $sa->assignRole('super-usuario');

        // $p1 = User::create([
        //     'name' => 'prueba1',
        //     'email' =>  'prueba1@gmail.com',
        //     'IdEst' => 1,
        //     'password' => bcrypt('123456')
        // ]);

        // $p1->assignRole('super-usuario');



    }
}
