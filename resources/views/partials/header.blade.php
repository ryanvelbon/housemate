<header class="bg-secondary-300 py-4">
<div class="container">
    <div class="flex justify-between text-white">
        <div>
            <a wire:navigate href="{{ route('home') }}">
                <x-logo class="w-auto h-8 text-primary-600" />
            </a>
        </div>
        <nav>
            @if (Route::has('login'))
                <div class="flex gap-2">
                    @auth
                        <a href="{{ route('owner.dashboard') }}">Dashboard</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">Log Out</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-sm btn-secondary">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-sm btn-primary">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </nav>
    </div>
    @if(Route::currentRouteName() == 'home')
        <div class="my-12 grid grid-cols-1 md:grid-cols-2 gap-y-12">
            <div class="flex flex-col justify-center">
                <h2 class="text-base font-mono font-semibold uppercase text-primary-500">Flat-sharing made easy</h2>
                <h1 class="mt-2 text-5xl font-bold text-primary-700">Find your new home<br>in South East Asia</h1>
                <p class="mt-6 text-lg text-gray-600 leading-tight">Whether you're relocating for work or study, or you're a digital nomad in search of your next destination, finding a place that feels like home has never been easier.</p>
            </div>
            <div class="flex justify-center">
                <img src="https://placehold.co/450x300">
            </div>
        </div>
    @endif
    <livewire:search-form />
</div>
</header>