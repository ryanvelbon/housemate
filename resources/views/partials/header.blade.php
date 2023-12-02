<header class="bg-secondary-600 py-4">
<div class="container">
    <div class="flex justify-between text-white">
        <div>
            <a href="{{ route('home') }}">
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
    <form method="GET" action="{{ route('listings.index') }}" class="bg-secondary-300 p-1 rounded mt-8">
        <div class="grid grid-cols-1 lg:grid-cols-8 gap-1">
            <div class="lg:col-span-3">
                <input type="" name="" class="w-full block h-10 rounded">
            </div>
            <div class="lg:col-span-2">
                <input type="" name="" class="w-full block h-10 rounded">
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
</header>