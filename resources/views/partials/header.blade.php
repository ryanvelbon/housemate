<header class="bg-secondary-600 text-white py-4">
    <div class="container flex justify-between">
        <a href="{{ route('home') }}">Logo</a>
        <nav>
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ route('home') }}">Home</a>
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