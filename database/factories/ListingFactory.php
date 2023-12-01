<?php

namespace Database\Factories;

use App\Enums\BedType;
use App\Enums\PlaceType;
use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

class ListingFactory extends Factory
{
    public function definition(): array
    {
        $pricePerNight = rand(5,100);

        return [
            'property_id' => Property::factory(),
            'title' => str(fake()->sentence)->beforeLast('.')->title(),
            'description' => fake()->text($maxNbChars = 160),
            'place_type' => PlaceType::random(),
            'bed_type' => BedType::random(),
            'price_per_night' => $pricePerNight,
            'price_per_month' => $pricePerNight * rand(18,30),
            'min_n_nights' => 1,
            'max_n_nights' => 180,
            'instant_book' => rand(0,1),
            'self_checkin' => rand(0,1),
        ];
    }
}
