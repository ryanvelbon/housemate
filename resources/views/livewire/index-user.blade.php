<div class="container lg:grid lg:grid-cols-4 gap-8 mt-8">
    <aside class="hidden lg:block lg:col-span-1 bg-gray-100 p-4">
        <h2>filters</h2>
        <form>
            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700" for="country">Country</label>
                <select wire:model.live="country" id="country"
                        class="mt-2 w-full rounded-lg border border-gray-400 py-2 pr-4 pl-2 text-sm focus:border-blue-400 focus:outline-none sm:text-base">
                    <option value="">-- choose country --</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700" for="city">City</label>
                <select wire:model.live="city" id="city"
                        class="mt-2 w-full rounded-lg border border-gray-400 py-2 pr-4 pl-2 text-sm focus:border-blue-400 focus:outline-none sm:text-base">
                    @if ($cities->count() == 0)
                        <option value="">-- choose country first --</option>
                    @endif
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-12">
                <label class="block text-sm font-medium text-gray-700" for="city">Nationality</label>
                <select wire:model.live="nationality" id="nationality"
                        class="mt-2 w-full rounded-lg border border-gray-400 py-2 pr-4 pl-2 text-sm focus:border-blue-400 focus:outline-none sm:text-base">
                    <option value="">-- choose nationality --</option>
                    @foreach ($nationalities as $nationality)
                        <option value="{{ $nationality->id }}">{{ $nationality->name }}</option>
                    @endforeach
                </select>
            </div>
        </form>
    </aside>
    <main class="lg:col-span-3">
        <div wire:loading>Loading...</div>
        <ul wire:loading.class="opacity-50" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 xl:grid-cols-3 gap-4">
            @forelse($members as $member)
                <a href="#">
                    <li class="shadow-md hover:shadow-lg">
                        @if($member->sex)
                            @if($member->sex === 'm')
                                <img class="aspect-[3/2] w-full object-cover" src="{{ 'https://randomuser.me/api/portraits/men/' . $member->id % 100 . '.jpg' }}" alt="">
                            @else
                                <img class="aspect-[3/2] w-full object-cover" src="{{ 'https://randomuser.me/api/portraits/women/' . $member->id % 100 . '.jpg' }}" alt="">
                            @endif
                        @endif
                        <div class="p-3">
                            <div class="flex justify-between items-center">
                                <span class="text-lg font-semibold leading-8 tracking-tight text-gray-900">{{ $member->name }}</span>
                                <span class="text-base text-gray-700">
                                    {{ $member->age ? $member->age : '' }}
                                    @if($member->sex)
                                        @if($member->sex === 'm')
                                            <i class="fa-light fa-mars"></i>
                                        @elseif($member->sex === 'f')
                                            <i class="fa-light fa-venus"></i>
                                        @else
                                        @endif
                                    @endif
                                </span>
                            </div>
                            <div class="flex justify-between text-gray-600">
                                <div class="flex gap-2 items-center">
                                    @if($member->city)
                                        <img class="h-4 w-auto border-2 border-gray-100" src="{{ asset('images/flags/countries/svg/'. $member->city->country_code . '.svg') }}">
                                        <span class="truncate text-sm">{{ $member->city->name }}</span>
                                    @endif
                                </div>
                                <div class="flex items-center gap-1">
                                    <i class="fa-light fa-passport fa-xl"></i>
                                    <img class="w-8 h-6 border-2 border-gray-100" src="{{ asset('images/flags/countries/svg/'. $member->nationality->iso2 . '.svg') }}">
                                </div>
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
        {{ $members->links() }}
    </main>
</div>
