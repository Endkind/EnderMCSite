<x-layout currentTab="Command">
    {{-- Hero / Intro-Section --}}
    <section class="py-16 text-center transition-colors duration-300 text-black dark:text-white">
        <h1 class="font-bold mb-2 text-3xl">Befehle</h1>
        <p class="max-w-xl mx-auto mt-4 text-sm lg:text-base text-zinc-800 dark:text-zinc-200">
            Hier findest du eine Übersicht aller Befehle, die auf EnderMC verfügbar sind.
            Wähle eine Kategorie, um mehr zu erfahren.
        </p>
    </section>

    <section class="mx-auto py-10 px-4 transition-colors duration-300 text-black dark:text-white">
        <div class="flex flex-wrap justify-center gap-6">

            <x-divider.text>
                Allgemein
            </x-divider.text>

            <a href="{{ route('command.general') }}" class="btn-card w-64">
                <i class="bi bi-terminal text-5xl mb-3"></i>
                <h2 class="font-semibold text-xl">Allgemein</h2>
                <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-2">
                    Alle Standard-Befehle, die jeder Spieler kennen sollte.
                </p>
            </a>

            <a href="{{ route('command.general.lobby') }}" class="btn-card w-64">
                <i class="bi bi-terminal text-5xl mb-3"></i>
                <h2 class="font-semibold text-xl">Lobby</h2>
                <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-2">
                    Alle Befehle für die Lobby.
                </p>
            </a>

            <x-divider.text>
                Spielmodi
            </x-divider.text>

            <a href="{{ route('command.communitycraft.1_20_1') }}" class="btn-card w-64">
                <i class="bi bi-people text-5xl mb-3"></i>
                <h2 class="font-semibold text-xl">CommunityCraft 1.20.1</h2>
                <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-2">
                    Alle Befehle für CommunityCraft 1.20.1.
                </p>
            </a>

            <a href="{{ route('command.communitycraft.1_21_4') }}" class="btn-card w-64">
                <i class="bi bi-people text-5xl mb-3"></i>
                <h2 class="font-semibold text-xl">CommunityCraft 1.21.4</h2>
                <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-2">
                    Alle Befehle für CommunityCraft 1.21.4.
                </p>
            </a>
        </div>
    </section>
</x-layout>
