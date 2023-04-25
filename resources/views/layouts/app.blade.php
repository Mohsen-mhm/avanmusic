<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'music') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('styles')
    <style>
        .dropdown-item:hover {
            background: #333946;
        }
    </style>
</head>
<body>
<div id="app" class="body">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-lg">
        <div class="container" dir="rtl">
            <a class="navbar-brand" style="font-size: 16px" href="{{ route('home') }}">
                {{ config('app.name', 'آوان موزیک') }}
            </a>
            <div class="btn-group">
                @guest
                    <img src="/storage/avatars/default-avatar.png" alt="آواتار"
                         style="width: 70px; border-radius: 100px" type="button"
                         class="btn dropdown-toggle" data-bs-toggle="dropdown"
                         aria-expanded="false">
                @else
                    <img src="/storage/avatars/{{auth()->user()->avatar ? : 'default-avatar.png'}}" alt="آواتار"
                         style="width: 70px; border-radius: 100%" type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown"
                         aria-expanded="false">
                @endguest
                <ul class="dropdown-menu me-3" style="background: #1a202c">
                    @guest
                        @if (Route::has('login'))
                            <li><a class="dropdown-item text-light text-center" href="{{ route('login') }}">ورود</a>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li><a class="dropdown-item text-light text-center" href="{{ route('register') }}">عضویت</a>
                            </li>
                        @endif
                    @else
                        <li><a class="dropdown-item text-light text-center"
                               href="{{ route('profile.index') }}">پروفایل</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-light text-center" href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">خروج</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
@yield('scripts')
</body>
</html>
