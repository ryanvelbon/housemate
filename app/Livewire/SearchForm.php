<?php

namespace App\Livewire;

use App\Models\City;
use Livewire\Component;

class SearchForm extends Component
{
    public $search = '';

    public $cities = [];

    public function updatedSearch($value)
    {
        if (strlen($value) >= 1) {
            $this->cities = City::query()
                ->with('state')
                ->withCount('listings')
                ->whereNotNull('order')
                ->where(function ($query) use ($value) {
                    $query->where('name', 'like', '%' . $value . '%')
                          ->orWhereHas('state', function ($subQuery) use ($value) {
                              $subQuery->where('name', 'like', '%' . $value . '%');
                          })->orWhereHas('country', function ($subQuery) use ($value) {
                              $subQuery->where('name', 'like', $value . '%');
                          });
                })
                ->orderBy('order', 'asc')
                ->get();
        } else {
            $this->cities = [];
        }
    }

    public function render()
    {
        return view('livewire.search-form');
    }
}
