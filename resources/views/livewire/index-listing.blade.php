<div class="container">
    <aside class="h-12 flex justify-between items-center">
        <div>
            {{ $listings->total() }} rooms in
            <span class="font-semibold">{{ $city->name }}, {{ $city->country->name }}</span>
        </div>
        <a href="#listing-filters-modal" class="btn btn-sm btn-outline-muted">
            <i class="fa-regular fa-filter mr-1"></i>
            <span>Filters</span>
        </a>
    </aside>
    <main>
        <div wire:loading>Loading...</div>

        <div class="mx-auto mt-8 grid max-w-2xl grid-cols-1 gap-x-4 gap-y-8 sm:mx-0 sm:max-w-none sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @forelse($listings as $listing)
                <a href="{{ route('listings.show', ['listing' => $listing->id]) }}" wire:navigate>
                    <article class="shadow-md border-gray-500 border bg-white transition ease-in-out hover:shadow-lg hover:-translate-y-2 duration-300">
                        <div class="relative h-48">
                            <img src="{{ asset('storage/' . $listing->feat_img) }}" alt="" class="h-full w-full object-cover">
                        </div>
                        <div class="px-4 pt-2 pb-4">
                            <div class="flex items-center justify-between text-xs">
                                <span class="relative z-10 bg-gray-200 px-2 py-1 font-medium text-gray-600">
                                    <i class="fa-regular fa-location-dot mr-1"></i>
                                    <span class="truncate">{{ $listing->property->city->name }}</span>
                                </span>
                                <div class="text-base font-semibold bg-black text-white px-2 py-1 -mr-4 -mt-10 z-10">RM 1400</div>
                            </div>
                            <div class="group relative">
                                <h3 class="mt-1 text-base font-semibold leading-6 text-gray-900 truncate">
                                    {{ $listing->place_type->label() }} in {{ $listing->property->type->label() }}
                                </h3>
                            </div>
                            <div class="mt-3 grid grid-cols-4 text-gray-600">
                                <div>
                                    <div>
                                        <i class="fa-regular fa-shower"></i>
                                        {{ $listing->property->n_bathrooms }}
                                    </div>
                                    <div>
                                        <i class="fa-regular fa-bed"></i>
                                        {{ $listing->property->n_bedrooms }}
                                    </div>
                                </div>
                                <div class="col-span-3 flex space-x-4 items-center bg-gray-50 px-4 py-2 rounded-xl border border-gray-200">
                                    <i class="fa-regular fa-water-ladder"></i>
                                    <i class="fa-regular fa-air-conditioner"></i>
                                    <i class="fa-regular fa-tv-retro"></i>
                                </div>
                            </div>
                            <div class="relative mt-4 flex items-center gap-x-4">
                                <img src="{{ asset('storage/' . $listing->property->owner->avatar ) }}" alt="" class="h-10 w-10 rounded-full bg-gray-100">
                                <div class="text-sm">
                                    <p class="font-semibold text-gray-900">
                                        <span class="absolute inset-0"></span>
                                        {{ $listing->property->owner->name }}
                                    </p>
                                    <p class="text-gray-600">{{ $listing->property->owner->profession }}</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </a>
            @empty
                <div>
                    No results.
                </div>
            @endforelse
        </div>
        <div class="my-8">
            {{ $listings->links() }}
        </div>
    </main>
    <x-modal name="listing-filters-modal" width="3xl">
        Filter your search.
    </x-modal>
</div>
