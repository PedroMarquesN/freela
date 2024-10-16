<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;



class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => collect(fake()->words(5))->join(' '),
            'description' => fake()->randomHtml(),
            'ends_at' => fake()->dateTimeBetween('now', '3 days'),
            'status' => $this->faker->randomElement(['open', 'closed']),
            'tech_stacks' => $this->faker->randomElements(['PHP', 'Laravel', 'JavaScript', 'Vue.js', 'React', 'Node.js'], random_int(1, 4)),
            'created_by' => User::factory(),
        ];
    }
}
