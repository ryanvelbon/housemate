<?php

namespace App\Models;

use App\Models\Host;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class City extends Model
{
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    /**
     * Retrieves all users who are living in this city.
     */
    public function members()
    {
        return $this->hasMany(User::class, 'city_id');
    }

    public function properties()
    {
        return $this->hasMany(Property::class);
    }

    public function listings()
    {
        return $this->hasManyThrough(Listing::class, Property::class, 'city_id', 'property_id');
    }

    public function getSlugAttribute()
    {
        return Str::slug($this->name) . '--' . Str::slug($this->state->name) . '--' . Str::slug($this->country->name);
    }
}
