@props([
    'rounded' => false,
    'tabs' => [
        'Impressum' => route('imprint'),
        'Datenschutzerklärung' => route('privacy-policy'),
        'Verwendete Technologien und Lizenzen' => route('licences')
    ],
])

<footer
    class="bg-neutral-300 dark:bg-dark-surface py-4 mt-auto @if ($rounded) sm:rounded-t-md @endif">
    <div class="px-4">
        <div class="flex flex-wrap justify-between items-center">
            <div class="w-full text-center mb-4 xl:mb-0 xl:w-auto xl:text-left">
                <p class="text-sm">&copy; 2021-{{ date('Y') }} Endkind. All rights reserved.</p>
            </div>

            <div class="w-full xl:w-auto text-center space-y-2 xl:space-y-0 xl:flex xl:space-x-2 text-sm">
                @foreach ($tabs as $name => $link)
                    <a href="{{ $link }}" class="block xl:inline hover:text-zinc-500 transition">{{ $name }}</a>
                    @if (!$loop->last)
                        <span class="hidden xl:inline">|</span>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</footer>
