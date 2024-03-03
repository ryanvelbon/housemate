<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function show(Listing $listing)
    {
        $recommendations = Listing::query()
            ->with('property.city')
            ->inRandomOrder()
            ->limit(4)
            ->get();

        return view('pages.listings.show', [
            'listing' => $listing,
            'recommendations' => $recommendations,
        ]);
    }
}
