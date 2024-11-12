<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <link rel="stylesheet" href="{{ asset('css/leaflet.css' )}}" />
        <script src="{{ asset('js/leaflet.js' )}}"></script>
        <script src="{{ asset('js/leaflet-providers.js') }}"></script>


        <link rel="stylesheet" href="{{ asset('css/Leaflet.NavBar.css') }}">
        <script src="{{ asset('js/Leaflet.NavBar.js') }}"></script>
        <script src="{{ asset('js/map.js') }}"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="flex">
        <livewire:sidebar />
        {{ $slot }}
        
    </body>
</html>
