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
        $nUsers= 1000;

        $users = User::factory($nUsers)->create();

        $properties = Property::factory($nUsers * 2)->recycle($users)->create();

        $listings = Listing::factory($nUsers * 3)->recycle($properties)->create();

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
