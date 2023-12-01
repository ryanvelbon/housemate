<?php

namespace Database\Factories;

use App\Enums\PropertyType;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'address' => str_replace("\n",", ",fake()->address()),
            'type' => PropertyType::random(),
            'size' => rand(50,200),
            'n_bedrooms' => rand(1,4),
            'n_bathrooms' => rand(1,3),
        ];
    }
}
