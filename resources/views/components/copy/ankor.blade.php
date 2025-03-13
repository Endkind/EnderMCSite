@props(['id'])

<div id="{{ $id }}" class="group relative cursor-pointer" onclick="copyAnkorLink(event, '{{ $id }}')">
    {{ $slot }}
    <span class="absolute top-1/2 left-full ml-2 -translate-y-1/2 opacity-0 group-hover:opacity-100 transition duration-200">
        <i class="bi bi-link-45deg"></i>
    </span>
</div>
