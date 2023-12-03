<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function states()
    {
        return $this->hasMany(State::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    /**
     * Retrieves all users who are living in this country.
     */
    public function members()
    {
        return $this->hasManyThrough(User::class, City::class);
    }
}
