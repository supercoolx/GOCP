<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artisan::call('cache:clear');
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        
        Permission::create(['name' => 'admins_manage']);

        Permission::create(['name' => 'carrier_manage']);

        Permission::create(['name' => 'mcp_manage']);

        Permission::create(['name' => 'cp_manage']);

        Permission::create(['name' => 'carriersale_manage']);

        
    }
}
