<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Courses>
 */
class CoursesFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $framework = $this->faker->framework;

        return [
            'name' => $framework,
            'type' => $this->faker->type($framework),
            'description' => $this->faker->description($framework),
            'logo' => $this->faker->logo($framework)
        ];
    }
}
