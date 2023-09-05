<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'id'=> 1,
            'type'=> 'SuperAdmin'
        ]);

        Role::create([
            'id'=> 2,
            'type'=> 'Staff'
        ]);

        Role::create([
            'id'=> 3,
            'type'=> 'User'
        ]);


    }
}
