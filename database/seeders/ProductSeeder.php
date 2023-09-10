<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'id' => '1',
            'name_product' => 'Scallop Ceviche with Mango Foam',
            'description' => 'Fresh scallops marinated in lime juice with a soft mango foam and hints of coriander.',
            'id_category' => '1',
            'price' => '18.99',
            'picture' => 'ceviche.jpg',
        ]);

       

    }
}
