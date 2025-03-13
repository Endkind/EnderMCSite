<x-layout currentTab="Home">
    <section class="py-16 text-center transition-colors duration-300 text-black dark:text-white">
        <h1 class="font-bold mb-2">Willkommen bei EnderMC</h1>
        <h5>Dein Crossplay-Server für Java &amp; Bedrock</h5>

        <div class="mt-6 flex justify-center items-center gap-3">
            <span class="text-brand-violet text-xl font-semibold">mc.endkind.net</span>
            <button class="btn btn-primary" onclick="copyAndShowTooltip(event, 'mc.endkind.net', 'Kopiert!')">
                IP kopieren
            </button>
        </div>

        <p class="max-w-xl mx-auto mt-4 text-sm lg:text-base text-zinc-800 dark:text-zinc-200">
            Tritt unserer aktiven Community bei und erlebe spannende Spielmodi, Events und vieles mehr.
            Wir freuen uns auf dich!
        </p>
    </section>
    <section class="container mx-auto py-10 px-4 transition-colors duration-300 text-black dark:text-white">
        <div class="flex flex-wrap justify-center gap-6">
            <!-- Spielmodi -->
            <a href="{{ route('gamemode') }}" class="btn-card w-64">
                <i class="bi bi-controller text-5xl mb-3"></i>
                <h2 class="font-semibold text-xl">Spielmodi</h2>
                <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-2">
                    Entdecke unsere einzigartigen Spielwelten.
                </p>
            </a>

            <!-- Regeln -->
            <a href="{{ route('rule') }}" class="btn-card w-64">
                <i class="bi bi-book text-5xl mb-3"></i>
                <h2 class="font-semibold text-xl">Regeln</h2>
                <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-2">
                    Alles Wichtige für ein faires Miteinander.
                </p>
            </a>

            <!-- Befehle -->
            <a href="{{ route('command') }}" class="btn-card w-64">
                <i class="bi bi-terminal text-5xl mb-3"></i>
                <h2 class="font-semibold text-xl">Befehle</h2>
                <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-2">
                    Lerne die wichtigsten Commands kennen..
                </p>
            </a>

            <!-- FAQ -->
            <a href="{{ route('faq') }}" class="btn-card w-64">
                <i class="bi bi-chat-left-quote text-5xl mb-3"></i>
                <h2 class="font-semibold text-xl">FAQ</h2>
                <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-2">
                    Häufig gestellte Fragen – kurz &amp; knapp.
                </p>
            </a>
        </div>
    </section>
</x-layout>
