<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\Property;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::factory(100)->create();

        $properties = Property::factory(300)->recycle($users)->create();

        $listings = Listing::factory(5000)->recycle($properties)->create();

        $nFakeUserImages = 100;

        foreach ($users as $index => $user) {
            $user->avatar = 'user' . ($index % $nFakeUserImages + 1) . '.png';
            $user->save();
        }

        $nFakeBedImages = 120;

        foreach ($listings as $index => $listing) {
            $listing->feat_img = 'bed' . ($index % $nFakeBedImages + 1) . '.png';
            $listing->save();
        }
    }
}
