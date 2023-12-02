<?php

namespace App\Livewire;

use App\Models\Listing;
use Livewire\Component;

class IndexListing extends Component
{
    public function render()
    {
        $listings = Listing::with('property')->paginate(10);

        return view('livewire.index-listing', [
            'listings' => $listings,
        ]);
    }
}
