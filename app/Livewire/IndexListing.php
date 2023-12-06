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
        $listings = Listing::query()
            ->with(['property', 'property.city'])
            ->paginate(12);

        return view('livewire.index-listing', [
            'listings' => $listings,
        ]);
    }
}
