<div class="container lg:grid lg:grid-cols-4 gap-8 mt-8">
    <aside class="hidden lg:block lg:col-span-1 bg-gray-100">

        <a href="#listing-filters-modal">Show Filters</a>

        <x-modal name="listing-filters-modal">
            Filter your search.
        </x-modal>

    </aside>
    <main class="lg:col-span-3">
        <div wire:loading>Loading...</div>
        <ul class="flex flex-col gap-4">
            @forelse($listings as $listing)
                <a href="#">
                    <li class="flex flex-col md:flex-row bg-white shadow-md hover:shadow-lg">
                        <img class=" w-full h-96 md:h-auto object-cover md:w-64" src="https://placehold.co/400" alt="" />
                        <div class="flex flex-col justify-between w-full px-6 py-3">
                            <div>
                                <h3 class="text-gray-900 text-xl font-bold mb-2">{{ $listing->place_type->label() }} in {{ $listing->property->type->label() }}</h3>
                                <p>
                                    {{ $listing->title }}
                                </p>
                                <p class="text-gray-600 text-xs">{{ $listing->property->address }}</p>
                            </div>
                            <div class="grid grid-cols-4 text-gray-600 text-center">
                                <div>
                                    <i class="fa-regular fa-shower mr-2"></i>
                                    {{ $listing->property->n_bathrooms }}
                                </div>
                                <div>
                                    <i class="fa-regular fa-bed mr-2"></i>
                                    {{ $listing->property->n_bedrooms }}
                                </div>
                                <div>foo</div>
                                <div>foo</div>
                            </div>
                        </div>
                    </li>
                </a>
            @empty
                <div>
                    No results.
                </div>
            @endforelse
        </ul>
        {{ $listings->links() }}
    </main>
</div>
