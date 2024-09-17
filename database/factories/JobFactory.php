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
            'salary' => fake()->randomElement(['$50,000 USD', '$60,000 USD', '$70,000 USD', '$80,000 USD', '$90,000 USD', '$100,000 USD']),
            'location' => fake()->boolean(30) ? 'Remote' : fake()->city(),
            'schedule' => fake()->randomElement(['Full-time', 'Part-time', 'Contract', 'Temporary', 'Internship']),
            'url' => fake()->url,
        ];
    }
}
