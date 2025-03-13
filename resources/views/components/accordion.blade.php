@props([
    'title' => 'Title',
    'id' => bin2hex(random_bytes(16)),
    'open' => false,
])

<div class="border-b border-slate-200">
    <button onclick="toggleAccordion('{{ $id }}')" class="w-full flex justify-between items-center py-5">
        <span>{{ $title }}</span>
        <span id="icon-{{ $id }}" class="transition-transform duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                <path fill-rule="evenodd"
                    d="M11.78 9.78a.75.75 0 0 1-1.06 0L8 7.06 5.28 9.78a.75.75 0 0 1-1.06-1.06l3.25-3.25a.75.75 0 0 1 1.06 0l3.25 3.25a.75.75 0 0 1 0 1.06Z"
                    clip-rule="evenodd" />
            </svg>
        </span>
    </button>
    <div id="content-{{ $id }}" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
        <div class="pb-5 text-sm">
            {{ $slot }}
        </div>
    </div>
</div>

@if (false)
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            toggleAccordion('{{ $id }}')
        })
    </script>
@endif
