<?php

namespace Database\Seeders;

use App\Models\Submodules;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubmodulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Submodules::factory()->count(100)->create();
    }
}
