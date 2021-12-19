<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   // admin
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'refer_links' => Str::random(70)

        ]);
        $user->assignRole('administrator');



        //carrier
         $user = User::create([
            'name' => 'Carrier',
            'email' => 'carrier@carrier.com',
            'password' => bcrypt('password'),
            'refer_links' => Str::random(70)
        ]);
        $user->assignRole('carrier'); 


        // manager
        $user = User::create([
            'name' => 'MCP',
            'email' => 'mcp@manager.com',
            'password' => bcrypt('password'),
            'refer_links' => Str::random(70)
        ]);
        $user->assignRole('mcp');
        // dealer
        $user = User::create([
            'name' => 'CP',
            'email' => 'cp@dealer.com',
            'password' => bcrypt('password'),
            'refer_links' => Str::random(70)
        ]);
        $user->assignRole('cp');

        //carriersale
         $user = User::create([
            'name' => 'CarrierSale',
            'email' => 'carriersale@carriersale.com',
            'password' => bcrypt('password'),
            'refer_links' => Str::random(70)
        ]);
        $user->assignRole('carriersale');

        

    }
}
