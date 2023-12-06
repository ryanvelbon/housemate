<?php

namespace App\Livewire;

use App\Models\City;
use App\Models\Listing;
use Livewire\Component;
use Livewire\WithPagination;

class IndexListing extends Component
{
    use WithPagination;

    public $city;

    public function mount(City $city)
    {
        $this->city = $city;
    }

    public function render()
    {
        $listings = Listing::query()
            ->with(['property', 'property.city'])
            ->whereHas('property.city', function ($query) {
                $query->where('id', $this->city->id);
            })
            ->paginate(12);

        return view('livewire.index-listing', [
            'listings' => $listings,
        ]);
    }
}
