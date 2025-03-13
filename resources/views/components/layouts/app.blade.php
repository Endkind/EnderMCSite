@props([
    'container' => true,
    'navbar' => true,
    'footer' => true,
    'currentTab' => '',
])

<x-layout :container="$container" :navbar="$navbar" :footer="$footer" :currentTab="$currentTab">
    {{ $slot }}
</x-layout>
