<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory{

    protected $model = Order::class;

    public function definition(){

        return[
            'cost' => $this->faker->randomFloat(2, 10, 1000), 
            'id_user' => $this->faker->randomNumber(), 
            'id_status' => $this->faker->randomNumber(),
        ];
    }
}