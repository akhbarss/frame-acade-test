<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Submodules;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void {
       DB::table('users')->insert([
           'username' => "Haru Kazumoto",
           'email' => "HaruKazumoto@gmail.com",
           'password' => bcrypt("12345"),
           'created_at' => now(),
           'updated_at' => now()
       ]);

        $this->call([
            ModulesSeeder::class,
            CoursesSeeder::class,
            Submodules::class,
        ]);
    }
}
