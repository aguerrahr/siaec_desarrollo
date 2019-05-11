<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Reset cached roles and permissions
         app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

         // create permissions
         Permission::create(['name' => 'create user']);
         Permission::create(['name' => 'read users']);
         Permission::create(['name' => 'update user']);
         Permission::create(['name' => 'delete user']);

         Permission::create(['name' => 'create rol']);
         Permission::create(['name' => 'read roles']);
         Permission::create(['name' => 'update role']);
         Permission::create(['name' => 'delete role']);

         Permission::create(['name' => 'create permission']);
         Permission::create(['name' => 'read permission']);
         Permission::create(['name' => 'update permission']);
         Permission::create(['name' => 'delete permission']);
        
         Permission::create(['name' => 'crear catalogo']);
         Permission::create(['name' => 'leer catalogos']);
         Permission::create(['name' => 'editar catalogo']);
         Permission::create(['name' => 'borrar catalogo']);


         // create roles and assign created permissions

        // this can be done as separate statements
        // Super Usuario
        // Administración
        // Pre-alumno
        // Alumno
        // Profesor

        $role = Role::create(['name' => 'administracion']);
        $role->givePermissionTo('crear catalogo');
        $role->givePermissionTo('leer catalogos');
        $role->givePermissionTo('editar catalogo');
        $role->givePermissionTo('borrar catalogo');


        $role = Role::create(['name' => 'super-usuario']);
        $role->givePermissionTo(Permission::all());

    }
}
