<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;


class JobFactory extends Factory // To run the Factory using php artisan tinker, use the command Job::factory()->count(5)->create();
{
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'employer_id' => Employer::factory(),
            'salary' => '$50,000',
        ];
    }
}
