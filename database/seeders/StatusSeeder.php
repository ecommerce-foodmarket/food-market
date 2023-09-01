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
            'name_status'=> 'Pendiente'
        ]);
    
        Status::create([
            'id'=> 2,
            'name_status'=> 'Pagado'
        ]);

        Status::create([
            'id'=> 3,
            'name_status'=> 'En Reparto'
        ]);

        Status::create([
            'id'=> 4,
            'name_status'=> 'Completado'
        ]);
    }
}
