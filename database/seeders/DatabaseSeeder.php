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
        $users = User::factory(10)->create();

        $properties = Property::factory(20)->recycle($users)->create();

        $listings = Listing::factory(100)->recycle($properties)->create();
    }
}
