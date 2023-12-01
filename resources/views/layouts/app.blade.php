@extends('layouts.base')

@section('body')
    @include('partials.header')

    <div class="min-h-screen bg-white">
        @yield('content')

        @isset($slot)
            {{ $slot }}
        @endisset
    </div>

    @include('partials.footer')
@endsection
