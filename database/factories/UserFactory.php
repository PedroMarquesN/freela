<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserFactory extends Factory
{

    protected static ?string $password;


    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'rating' => fake()->randomElement([0, 1, 2, 3, 4, 5]),
            'avatar' => 'https://avatar.iran.liara.run.public/'
        ];
    }



}
