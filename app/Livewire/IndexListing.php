<?php

namespace App\Livewire;

use App\Models\Listing;
use Livewire\Component;
use Livewire\WithPagination;

class IndexListing extends Component
{
    use WithPagination;

    public function render()
    {
        $listings = Listing::with('property')->paginate(10);

        return view('livewire.index-listing', [
            'listings' => $listings,
        ]);
    }
}
