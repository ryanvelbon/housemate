<div
    x-data="{
        showCityOptions: false,
    }"
>
    <form method="GET" action="{{ route('listings.index', ['city' => $selectedCityId ?? 0, 'slug' => $this->selectedCity->slug ?? '']) }}" class="bg-secondary-200 p-1 rounded">
        <div class="grid grid-cols-1 lg:grid-cols-8 gap-1">
            <div class="lg:col-span-3">
                <div @click.outside="showCityOptions = false">
                    <div class="relative">
                        <input
                            wire:model.live.debounce.300ms="search"
                            x-ref="search"
                            x-on:focus="showCityOptions = true"
                            type="text" spellcheck="false" autocomplete="off" placeholder="Search by city, state or country" class="w-full rounded-md border-0 bg-white py-1.5 pl-6 pr-16 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-lg sm:leading-10" role="combobox" aria-controls="options" aria-expanded="false"
                        >
                        <button
                            type="button" class="absolute inset-y-0 right-0 flex items-center rounded-r-md pr-6 focus:outline-none"
                            x-show="$wire.search.length > 0"
                            @click="
                                $wire.set('search', '')
                                $refs.search.focus()
                            "
                        >
                            <i class="fa-duotone fa-circle-xmark fa-xl"></i>
                        </button>

                        <ul x-show="showCityOptions" class="absolute z-10 mt-1 max-h-56 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm" id="options" role="listbox">
                            <!--
                                Combobox option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.

                                Active: "text-white bg-indigo-600", Not Active: "text-gray-900"
                            -->
                            @forelse($cities as $city)
                                <li
                                    x-on:click="
                                        $wire.set('search', '{{ $city->name }}')
                                        $wire.set('selectedCityId', '{{ $city->id }}')
                                        $refs.moveInDate.focus()
                                    "
                                    class="relative cursor-default select-none py-2 pl-3 pr-9 hover:bg-gray-200" id="option-{{ $city->id }}" role="option" tabindex="-1"
                                >
                                    <div class="flex items-center">
                                        <img class="h-4 w-auto border-2 border-gray-100" src="{{ asset('images/flags/countries/svg/' . $city->country_code . '.svg') }}">
                                        <!-- Selected: "font-semibold" -->
                                        <span class="ml-3 truncate text-gray-900">{{ $city->name }}</span>
                                        <span class="ml-2 truncate text-gray-500 text-xs">{{ $city->state->name }}</span>
                                    </div>
                                    <span class="absolute inset-y-0 right-0 flex items-center pr-4 text-gray-600 italic text-xs">
                                        {{ $city->listings_count }} listings
                                    </span>
                                </li>
                            @empty
                                <li
                                    x-on:click="
                                        $wire.set('search', 'Everywhere')
                                        $wire.set('selectedCityId', 0)
                                    "
                                    class="py-2 px-4 text-lg font-bold text-blue-600"
                                >
                                    🌏 Explore everywhere
                                </li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2">
                <input
                    x-ref="moveInDate"
                    type="" name="" class="w-full block h-10 rounded"
                >
            </div>
            <div class="lg:col-span-2">
                <input type="" name="" class="w-full block h-10 rounded">
            </div>
            <div class="lg:col-span-1">
                <button type="submit" class="w-full block h-10 rounded bg-primary-500 hover:bg-primary-400 text-white">Search</button>
            </div>
        </div>
    </form>
</div>
