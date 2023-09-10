<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id'=> 1,
            'name'=> 'Alba',
            'email'=> 'alba@gmail.com',
            'password'=>'alba1234',
            'phone'=> 789987654,
            'address'=> 'jsjsjsjjsjs',
            'house_n'=> 3,
            'city'=> 'dhdhdhdh',
            'id_rol'=> '1',
            'picture'=> 'null'
        ]);
    }
}
