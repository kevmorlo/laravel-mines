<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mine;


class MineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        mine::create([
            'name' => "Lithium 7a",
            'longitude' => 1.677926,
            'latitude' => 48.117266,
            'concession_id' => 1,
            
        ]);
        mine::create([
            'name' => "La pépite",
            'longitude' => 34.56789,
            'latitude' => 12.423915,
            'concession_id' => 1,
            
        ]);
        mine::create([
            'name' => "Or 5c",
            'longitude' => 1.677926,
            'latitude' => 48.117266,
            'concession_id' => 2,
            
        ]);
        mine::create([
            'name' => "Le lingot",
            'longitude' => 14.84851,
            'latitude' => 9.7264542,
            'concession_id' => 2,
            
        ]);

    }
}
