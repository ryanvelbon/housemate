<header class="bg-secondary-600 text-white py-4">
    <div class="container flex justify-between">
        <a href="{{ route('home') }}">Logo</a>
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
</header>