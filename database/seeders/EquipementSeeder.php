<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        equipements::create([
            'name' => "Caterpillar C20",
            'lenth' => 34.21,
            'width' => 12.10,
            'height' => 5.02,
            'using_for' => "véhicule pour déplacer les minerais",
            
        ]);
        equipements::create([
            'name' => "Volvo VT40",
            'lenth' => 25.12,
            'width' => 6.23,
            'height' => 3.54,
            'using_for' => "véhicule pour déplacer les minerais",
            
        ]);

    }
}