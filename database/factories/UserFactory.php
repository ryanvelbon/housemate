<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected static ?string $password;

    public function definition(): array
    {
        $professions = collect(['Teacher', 'Student', 'Digital Marketer', 'Software Developer', 'Chef', 'Cashier', 'Receptionist', 'Retail', 'Dentist', 'Engineer']);
        $countries = collect([75, 82, 107, 182, 207, 232]);
        $cities = collect(City::whereNotNull('order')->pluck('id'));

        return [
            'name' => fake()->firstName() . ' ' . fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'dob' => fake()->dateTimeBetween('-30 years', '-18 years')->format('Y-m-d'),
            'sex' => rand(1,10) > 5 ? 'm' : 'f',
            'nationality_id' => $countries->random(),
            'city_id' => $cities->random(),
            'bio' => fake()->paragraph(),
            'profession' => $professions->random(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
