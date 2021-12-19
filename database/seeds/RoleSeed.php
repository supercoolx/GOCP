<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'administrator']);
        $role->givePermissionTo('admins_manage');

        $role = Role::create(['name' => 'carrier']);
        $role->givePermissionTo('carrier_manage');

        $role = Role::create(['name' => 'cp']);
        $role->givePermissionTo('cp_manage');

        $role = Role::create(['name' => 'mcp']);
        $role->givePermissionTo('mcp_manage');

        $role = Role::create(['name' => 'carriersale']);
        $role->givePermissionTo('carriersale_manage');

        
    }
}
