<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::create([
            'id'=> 1,
            'name_status'=> 'Pending'
        ]);

        Status::create([
            'id'=> 2,
            'name_status'=> 'Paid'
        ]);

        Status::create([
            'id'=> 3,
            'name_status'=> 'On delivery'
        ]);

        Status::create([
            'id'=> 4,
            'name_status'=> 'Complete'
        ]);
        Status::create([
            'id'=> 5,
            'name_status'=> 'Cancelled'
        ]);
    }
}
