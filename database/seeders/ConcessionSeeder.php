<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Concession;

class ConcessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        concession::create([
            'name' => "La mine en or",
            'siret' => '123456789',
            'phone' => '0512423915',

        ]);
        concession::create([
            'name' => "La mine en argent",
            'siret' => '987654321',
            'phone' => '0849515948',
            
        ]);
    }
}
