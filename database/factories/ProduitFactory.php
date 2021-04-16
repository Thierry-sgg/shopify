<?php

namespace Database\Factories;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "designation" => $this->faker->unique()->realText(20),
            "description" => $this->faker->text(50),
            "prix" => $this->faker->numberBetween(500, 1000000),
        ];
    }
}
