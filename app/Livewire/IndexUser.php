<?php

namespace App\Livewire;

use App\Models\City;
use App\Models\Country;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\WithPagination;

class IndexUser extends Component
{
    use WithPagination;

    public Collection $countries;
    public Collection $cities;
    public Collection $nationalities;

    public ?int $country;
    public ?int $city = null;
    public ?int $nationality = null;

    public function mount(): void
    {
        $this->countries = Country::whereNotNull('order')->get();
        $this->cities = collect();
        $this->nationalities = Country::all();
    }

    public function updating($key): void
    {
        if ($key === 'country' || $key === 'city' || $key === 'nationality') {
            $this->resetPage();
        }
    }

    public function updatedCountry(): void
    {
        $this->cities = City::whereNotNull('order')->where('country_id', $this->country)->get();
        $this->city = $this->cities->first()->id ?? null;
    }

    public function resetFilters(): void
    {
        $this->cities = collect();

        $this->reset('city', 'country', 'nationality');
    }

    public function render(): View
    {
        $members = User::query()
            ->with('nationality')
            ->with('city')
            ->when($this->city !== null, fn(Builder $query) => $query->where('city_id', $this->city))
            ->when($this->nationality !== null, fn(Builder $query) => $query->where('nationality_id', $this->nationality))
            ->paginate(12);

        return view('livewire.index-user', [
            'members' => $members,
        ]);
    }
}
