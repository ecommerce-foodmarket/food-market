<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order_product')->insert([
            'order_id' => 1,
            'product_id'=> 4,
            'amount' => 3,
            
        ]);
        DB::table('order_product')->insert([
            'order_id' => 1,
            'product_id'=> 1,
            'amount' => 5,
        ]);
        DB::table('order_product')->insert([
            'order_id' => 1,
            'product_id'=> 2,
            'amount' => 10,
        ]);
        DB::table('order_product')->insert([
            'order_id' => 2,
            'product_id'=> 2,
            'amount' => 12,
        ]);
        DB::table('order_product')->insert([
            'order_id' => 2,
            'product_id'=> 6,
            'amount' => 1,
        ]);



        Order::create(
            [
                'id'=>1,
                'id_user'=>1,
                'id_status'=>0,
                'cost'=>6.90

            ]
        );
        Order::create(
            [
                'id'=>2,
                'id_user'=>1,
                'id_status'=>0,
                'cost'=>7.90
                
            ]
        );
        Order::create(
            [
                'id'=>3,
                'id_user'=>1,
                'id_status'=>4,
                'cost'=>8.90
                
            ]
        );
        Order::create(
            [
                'id'=>4,
                'id_user'=>1,
                'id_status'=>4,
                'cost'=>9.90
                
            ]
        );

       
    }
}
