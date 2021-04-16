<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role1 = Role::create([

            "profil" => "user"
        ]);

        $role2 = Role::create([

            "profil" => "admin"
        ]);

        $role3 = Role::create([

            "profil" => "root"
        ]);

        $user1 = User::create([

            "role_id" => $role1->id,
            "name" => "user",
            "email" => "user@shopify.com",
            "password" => Hash::make("user133")
        ]);

        $user2 = User::create([

            "role_id" => $role2->id,
            "name" => "admin",
            "email" => "admin@shopify.com",
            "password" => Hash::make("amin133")
        ]);

        $user3 = User::create([

            "role_id" => $role3->id,
            "name" => "root",
            "email" => "root@shopify.com",
            "password" => Hash::make("root133")
        ]);



    }
}
