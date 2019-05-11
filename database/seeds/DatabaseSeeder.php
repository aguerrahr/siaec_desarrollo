<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
    	$this->truncateTables([
            'est',
            'plan',
            'password_resets',
            'users',
            'model_has_permissions',
            'role_has_permissions',
            'permissions',
            'model_has_roles',
            'roles'
    	]);

        $this->call(EstSeeder::class);
        $this->call(PlanSeeder::class);
        
        $this->call(RolesAndPermissions::class);
        $this->call(UsersTable::class);
    }
    protected function truncateTables(array $tables)
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach($tables as $table)
        {
        	DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
    }
}
