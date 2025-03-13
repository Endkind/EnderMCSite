<x-layout currentTab="Spielmodi">
    <section class="py-16 text-center transition-colors duration-300 text-black dark:text-white">
        <h1 class="font-bold mb-2 text-3xl">Spielmodi</h1>
        <p class="max-w-xl mx-auto mt-4 text-sm lg:text-base text-zinc-800 dark:text-zinc-200">
            Entdecke die verschiedenen Spielmodi auf unserem Server.
        </p>
    </section>

    <section class="mx-auto py-10 px-4 transition-colors duration-300 text-black dark:text-white">
        <div class="flex flex-wrap justify-center gap-6">
            <a href="{{ route('gamemode.communitycraft') }}" class="btn-card w-64">
                <i class="bi bi-people text-5xl mb-3"></i>
                <h2 class="font-semibold text-xl">CommunityCraft</h2>
                <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-2">
                    Erlebe spannende Abenteuer in CommunityCraft.
                </p>
            </a>

            <a href="{{ route('gamemode.tnt_tag') }}" class="btn-card w-64">
                <i class="bi bi-stopwatch text-5xl mb-3"></i>
                <h2 class="font-semibold text-xl">TNT Tag</h2>
                <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-2">
                    Ein actiongeladener Spielmodus, bei dem du nicht der Letzte mit der TNT sein willst.
                </p>
            </a>

            <a href="{{ route('gamemode.all_against_all') }}" class="btn-card w-64">
                <i class="bi bi-controller text-5xl mb-3"></i>
                <h2 class="font-semibold text-xl">All Against All (AAA)</h2>
                <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-2">
                    Kämpfe gegen alle anderen Spieler und sei der letzte Überlebende.
                </p>
            </a>
        </div>
    </section>
</x-layout>
