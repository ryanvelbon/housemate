<?php

namespace App\Models;

use App\Models\Host;
use Illuminate\Database\Eloquent\Model;

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
}
