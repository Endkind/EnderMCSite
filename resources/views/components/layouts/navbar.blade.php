@props([
    'tabs' => [
        'Home' => route('index'),
        'Spielmodi' => route('gamemode'),
        'Regeln' => route('rule'),
        'Command' => route('command'),
        'FAQ' => route('faq'),
        'Shop' => route('shop'),
    ],
    'tabsAuth' => [
        'OpenID' => '#',
        'Gruppen' => '#',
    ],
    'currentTab' => '',
    'profileTabs' => [
        'Your Profile' => '#',
        'Settings' => '#',
        'Logout' => '#',
    ],
    'notificationLink' => '#',
    'profilePicture' => false,
    'user' => auth()->user(),
    'rounded' => false,
])

<nav class="bg-neutral-300 dark:bg-dark-surface @if ($rounded) sm:rounded-b-md @endif">
    <div class="mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button"
                    class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false" id="menu-button">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <a href="{{ route('index') }}" class="flex shrink-0 items-center">
                    <img class="h-8 w-auto" src="{{ asset('img/favicon.png') }}" alt="@yield('title', config('app.name'))">
                </a>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        @foreach ($tabs as $name => $link)
                            @if ($name == $currentTab)
                                <a href="{{ $link }}" class="btn btn-navbar-current">{{ $name }}</a>
                            @else
                                <a href="{{ $link }}" class="btn btn-navbar">{{ $name }}</a>
                            @endif
                        @endforeach
                        @auth
                            @foreach ($tabsAuth as $name => $link)
                                @if ($name == $currentTab)
                                    <a href="{{ $link }}" class="btn btn-navbar-current">{{ $name }}</a>
                                @else
                                    <a href="{{ $link }}" class="btn btn-navbar">{{ $name }}</a>
                                @endif
                            @endforeach
                        @endauth
                    </div>
                </div>
            </div>
            {{--<div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                @guest
                    <a href="{{ route('login') }}">
                        Login
                    </a>
                @else
                    <a href="{{ $notificationLink }}" type="button"
                        class="rounded-full text-zinc-400 hover:text-white focus:ring-white">
                        <span class="sr-only">View notifications</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-bell-fill" viewBox="0 0 16 16">
                            <path
                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901" />
                        </svg>
                    </a>

                    <!-- Profile dropdown -->
                    <div class="relative ml-3">
                        <div>
                            <button type="button"
                                class="flex rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full dark:invert"
                                    src="{{ $profilePicture ? $profilePicture : asset('img/person-circle.svg') }}"
                                    alt="Profile">
                            </button>
                        </div>
                        <div class="hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                            id="profile-dropdown">
                            <p class="block px-4 py-2 text-sm text-gray-700">&#64;{{ $user->username }}</p>
                            <hr class="border-gray-700">
                            @foreach ($profileTabs as $name => $link)
                                <a href="{{ $link }}" class="block px-4 py-2 text-sm text-gray-700"
                                    role="menuitem">{{ $name }}</a>
                            @endforeach
                        </div>
                    </div>
                @endguest
            </div>--}}
        </div>
    </div>

    <!-- Mobile menu -->
    <div class="hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
            @foreach ($tabs as $name => $link)
                @if ($name == $currentTab)
                    <a href="{{ $link }}"
                        class="btn btn-navbar-current block px-3 py-2">{{ $name }}</a>
                @else
                    <a href="{{ $link }}"
                        class="btn btn-navbar block px-3 py-2">{{ $name }}</a>
                @endif
            @endforeach
        </div>
    </div>
</nav>
