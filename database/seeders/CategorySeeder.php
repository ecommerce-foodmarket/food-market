<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    
    public function run(): void
    {
        Category::create([
            'id'=> 1,
            'name_category'=> 'Fish'
        ]);
    
        Category::create([
            'id'=> 2,
            'name_category'=> 'Rice'
        ]);

        Category::create([
            'id'=> 3,
            'name_category'=> 'Meat'
        ]);

        Category::create([
            'id'=> 4,
            'name_category'=> 'Vegetables'
        ]);
    }
}
