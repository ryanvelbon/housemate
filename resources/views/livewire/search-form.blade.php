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
                            type="text" spellcheck="false" autocomplete="off" role="combobox" aria-controls="options" aria-expanded="false"
                            placeholder="Search by city, state or country"
                            class="w-full rounded-md border-0 bg-white py-1.5 pl-6 pr-16 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-lg sm:leading-10"
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

                        <ul x-show="showCityOptions" class="absolute z-30 mt-1 max-h-56 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm" id="options" role="listbox">
                            <!--
                                Combobox option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.

                                Active: "text-white bg-indigo-600", Not Active: "text-gray-900"
                            -->
                            @forelse($cities as $city)
                                <li
                                    x-on:click="
                                        $wire.set('search', '{{ $city->name }}')
                                        $wire.set('selectedCityId', '{{ $city->id }}')
                                        $refs.moveInMonth.focus()
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
            <div x-data="{ open: false }" class="lg:col-span-2">
                <div class="relative inline-block w-full">
                    <div class="w-full">
                        <button x-ref="moveInMonth" @click="open = !open" type="button" class="flex items-center justify-between w-full rounded-md border-0 bg-white py-1.5 pl-6 pr-3 text-gray-500 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-lg sm:leading-10" id="menu-button" aria-expanded="true" aria-haspopup="true">
                            <span class="whitespace-nowrap">{{ $this->moveInDateText }}</span>
                            <i class="fa-solid fa-chevron-down fa-sm"></i>
                        </button>
                    </div>
                    <div
                        x-show="open"
                        @click.outside="open = false"
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute z-30 mt-2 left-1/2 transform -translate-x-1/2 w-full lg:w-[48rem] rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
                    >
                        <ul class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-2 p-4">
                            @php
                                $currentMonth = new DateTime();
                            @endphp

                            @for ($i = 0; $i < 12; $i++)
                                @php
                                    $month = clone $currentMonth;
                                    $month->add(new DateInterval('P' . $i . 'M'));
                                @endphp

                                <li
                                    @click="
                                        @this.set('moveInDate', '{{ $month->format('Y-m') }}-01')
                                        open = false
                                    "
                                    class="flex flex-col justify-center items-center h-24 rounded-md bg-gray-100 cursor-pointer hover:bg-gray-200"
                                >
                                    <span class="text-xs">{{ $month->format('Y') }}</span>
                                    <span class="text-sm">{{ $month->format('F') }}</span>
                                </li>
                            @endfor
                        </ul>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2">
                <select class="w-full rounded-md border-0 bg-white py-1.5 pl-6 pr-16 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-lg sm:leading-10">
                    <option value="30">1 month</option>
                    <option value="60">2 months</option>
                    <option value="90">3 months</option>
                    <option value="182">6 months</option>
                    <option value="365">1 year</option>
                    <option value="730">2 years</option>
                </select>
            </div>
            <div class="lg:col-span-1">
                <button type="submit" class="w-full block h-10 lg:h-full rounded bg-primary-500 hover:bg-primary-400 text-white">Search</button>
            </div>
        </div>
    </form>
</div>
