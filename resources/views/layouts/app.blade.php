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
    @include('layouts.header')

    <main class="py-4">
        @yield('content')
    </main>
</div>
@yield('scripts')
</body>
</html>
