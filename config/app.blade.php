<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="bg-white text-black">
    @include('partials.header') {{-- ✅ header partial --}}
    
    <main>
        @yield('content') {{-- ✅ injects home content here --}}
    </main>

    @include('partials.footer') {{-- ✅ footer partial --}}

    @livewireScripts
    @vite('resources/js/app.js')
</body>
</html>