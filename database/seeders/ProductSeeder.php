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
            'id'=>'1',
            'name_product'=>'Hamburguesa Clásica',
            'description'=>'Jugosa hamburguesa con carne de res, lechuga, tomate y queso cheddar',
            'id_category'=>'2',
            'price'=>'9.99',
            'picture'=>'hamburguesa_clasica.jpg',
            
        ]);
        Product::create([
            'id'=>'2',
            'name_product'=>'Pizza Margarita',
            'description'=>'Deliciosa pizza con salsa de tomate, mozzarella y albahaca fresca',
            'id_category'=>'3',
            'price'=>'12.50',
            'picture'=>'pizza_margarita.jpg',
            
        ]);
        Product::create(['id'=>'3',
        'name_product'=>'Ensalada César',
        'description'=>'Fresca ensalada con lechuga romana, crutones, pollo a la parrilla y aderezo César',
        'id_category'=>'1',
        'price'=>'10.50',
        'picture'=>'ensalada_cesar.jpg',
        
    ]);
    Product::create([
        'id'=>'4',
            'name_product'=>'Sushi Variado',
            'description'=>'Selección de sushi variado incluyendo nigiri, maki y sashimi',
            'id_category'=>'4',
            'price'=>'20.99',
            'picture'=>'sushi_variado.jpg',
        
    ]);
    Product::create([
        'id'=>'5',
            'name_product'=>'Pasta Alfredo',
            'description'=>'Pasta fettuccine en salsa Alfredo cremosa con parmesano y hierbas',
            'id_category'=>'3',
            'price'=>'23.95',
            'picture'=>'pasta_alfredo.jpg',
            
        
    ]);
    Product::create([
        'id'=>'6',
            'name_product'=>'Sopa de tomate',
            'description'=>'Sopa caliente de tomate con albahaca y crutones',
            'id_category'=>'3',
            'price'=>'23.95',
            'picture'=>'sopa_tomate.jpg',
            
        
    ]);
        
    }
}
