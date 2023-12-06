<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PageController extends Controller
{
    public function home()
    {
        $cities = Cache::remember('featured_cities', 60 * 24, function () {
            return City::query()
                ->where('order', 1)
                ->with('country')
                ->with('state')
                ->withCount('listings')
                ->get();
            });

        return view('welcome', [
            'cities' => $cities,
        ]);
    }
}
