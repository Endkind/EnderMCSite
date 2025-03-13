@props([
    'container' => true,
    'navbar' => true,
    'footer' => true,
    'currentTab' => ''
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name'))</title>
    {{--@livewireStyles
    @livewireScripts--}}

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    @endif

    @hasSection('head')
        @yield('head')
    @endif 
</head>

<body class="bg-white text-black dark:bg-dark-background dark:text-dark-text flex flex-col min-h-screen @if($container) container mx-auto @endif">
    <header>
        @if ($navbar)
            <x-layouts.navbar :currentTab="$currentTab" :rounded="$container" />
        @endif
        <x-layouts.alert />
    </header>

    {{-- <div class="container mx-auto px-4">
        {{ $slot }}
    </div> --}}
    <main class="flex-grow">
        {{ $slot }}
        <x-layouts.theme-toogle />
        <x-layouts.scroll-to-top />
    </main>

    @if ($footer)
        <x-layouts.footer :rounded="$container" />
    @endif
</body>

</html>
