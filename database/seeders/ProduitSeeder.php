<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Seeder;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produit::create([
            "designation" => "Sac à main",
            "description" => "La description du sac à main",
            "prix" => 45000,
        ]);

        Produit::create([
            "designation" => "Ordinateur",
            "description" => "La description de l'ordinateur",
            "prix" => 300000,
        ]);

        Produit::create([
            "designation" => "Téléphone",
            "description" => "La description du téléphone",
            "prix" => 100000,
        ]);
    }
}
