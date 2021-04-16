<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\ProduitSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call([
        //    CategorySeeder::class,
        //]);

        //\App\Models\User::factory(10)->create();
        $this->call([
            RoleSeeder::class,
        ]);
    }
}
