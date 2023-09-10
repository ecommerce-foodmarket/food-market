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
        $categoryIds = Category::pluck('id'); // Obtén todos los IDs de categoría disponibles en la base de datos

        return [
            'name_product' => $this->faker->word,
            'description' => $this->faker->sentence,
            'id_category' => $this->faker->randomElement($categoryIds), // Elige un ID de categoría aleatorio de los disponibles
            'price' => $this->faker->randomFloat(2, 5, 100),
            'picture' => null,
        ];
    }
}
