<div class="container">
    <aside class="bg-gray-100">
        <a href="#listing-filters-modal">Show Filters</a>
    </aside>
    <main>
        <div wire:loading>Loading...</div>

        <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-4 gap-y-8 sm:mx-0 sm:max-w-none sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @forelse($listings as $listing)
                <a href="#">
                    <article class="shadow-md hover:shadow-lg border-gray-500 border hover:border-2">
                        <div class="relative w-full">
                            <img src="https://placehold.co/600x400" alt="" class="w-full aspect-[3/2]">
                        </div>
                        <div class="max-w-xl px-4 py-2">
                            <!--
                            <div class="flex items-center gap-x-4 text-xs">
                                <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                                <span class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600">Marketing</span>
                            </div>
                            -->
                            <div class="group relative">
                                <h3 class="mt-1 text-base font-semibold leading-6 text-gray-900">
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
                                <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="" class="h-10 w-10 rounded-full bg-gray-100">
                                <div class="text-sm leading-6">
                                    <p class="font-semibold text-gray-900">
                                        <span class="absolute inset-0"></span>
                                        Michael
                                    </p>
                                    <p class="text-gray-600">Co-Founder / CTO</p>
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
