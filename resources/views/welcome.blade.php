@extends('layouts.app')

@section('content')
<section>
    <!--  -->
</section>
<section>
    <div class="container">
        <h3 class="text-3xl font-bold mt-8">Popular Cities</h3>
        <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 py-16">
            @foreach($cities as $city)
                <a wire:navigate href="{{ route('listings.index', ['city' => $city, 'slug' => $city->slug]) }}">
                    <li class="bg-gray-700 h-40 flex flex-col gap-1 justify-center items-center rounded-lg">
                        <span class="text-xs text-gray-500">{{ $city->state->name }}</span>
                        <h4 class="text-2xl font-semibold text-white">{{ $city->name }}</h4>
                        <span class="text-xs uppercase font-mono tracking-widest font-bold text-gray-100">{{ $city->country->name }}</span>
                        <p class="text-sm text-gray-300">{{ $city->listings_count }} places</p>
                    </li>
                </a>
            @endforeach
        </ul>
    </div>
</section>
@endsection
