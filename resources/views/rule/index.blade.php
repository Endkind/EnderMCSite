<x-layout currentTab="Regeln">
    <section class="py-16 text-center transition-colors duration-300 text-black dark:text-white">
        <h1 class="font-bold mb-2 text-3xl">Regeln</h1>
        <p class="max-w-xl mx-auto mt-4 text-sm lg:text-base text-zinc-800 dark:text-zinc-200">
            Hier findest du eine Übersicht aller Befehle, die auf EnderMC allgemein oder auf bestimmten <a href="{{ route('gamemode') }}" class="link">Spielmodi</a> zusätzlich zählen.
        </p>
    </section>

    <section class="mx-auto py-10 px-4 transition-colors duration-300 text-black dark:text-white">
        <div class="flex flex-wrap justify-center gap-6">

            <a href="{{ route('rule.general') }}" class="btn-card w-64">
                <i class="bi bi-book text-5xl mb-3"></i>
                <h2 class="font-semibold text-xl">Allgemein</h2>
                <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-2">
                    Hier findest du alle Regeln, die jeder Spieler kennen sollte.
                </p>
            </a>

            <a href="{{ route('rule.communitycraft') }}" class="btn-card w-64">
                <i class="bi bi-terminal text-5xl mb-3"></i>
                <h2 class="font-semibold text-xl">CommunityCraft</h2>
                <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-2">
                    Spezielle Regeln für CommunityCraft
                </p>
            </a>
        </div>
    </section>
</x-layout>
