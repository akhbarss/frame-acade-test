<?php

namespace Database\Factories;

use App\Models\Courses;
use App\Models\Modules;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Submodules>
 */
class SubmodulesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->jobTitle,
            "type" => "blog",
            "content" => $this->faker->paragraph(5),
            "course_id" => Courses::factory(),
            "module_id" => Modules::factory()
        ];
    }
}
