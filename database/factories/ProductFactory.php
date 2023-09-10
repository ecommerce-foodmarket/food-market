<?php

namespace Database\Factories;


use App\Models\Product;
use App\Models\Category; // Importa el modelo de Category
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        

        return [
            'name_product' => $this->faker->word,
            'description' => $this->faker->sentence,
            'id_category' => 1,
            'price' => $this->faker->randomFloat(2, 5, 100),
            'picture' => null,
        ];
    }
}
