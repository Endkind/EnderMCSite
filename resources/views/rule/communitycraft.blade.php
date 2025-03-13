<x-layout currentTab="Regeln">
    <h2 class="text-center my-3">Regeln zu CommunityCraft</h2>

    <x-divider.text>
        <x-copy.ankor id="exception">
            <h3>Ausnahmeregelung</h3>
        </x-copy.ankor>
    </x-divider.text>
    <ul>
        <li>Die Nutzung von Minimaps, Lebensanzeigen, automatisches Bauen von Bauwerken ist gestattet.</li>
    </ul>

    <x-divider.text>
        <x-copy.ankor id="griefing">
            <h3>Griefing</h3>
        </x-copy.ankor>
    </x-divider.text>
    <ul>
        <li>Jegliche Form von Griefing ist strengstens untersagt.</li>
    </ul>

    <x-divider.text>
        <x-copy.ankor id="leaving_the_fight">
            <h3>Verlassen im Kampf</h3>
        </x-copy.ankor>
    </x-divider.text>
    <ul>
        <li>Das Verlassen während eines Kampfes ist verboten und wird automatisch vom Server mit dem Tod bestraft.</li>
    </ul>

    <div class="my-6">
        <x-divider />
    </div>

    <p><strong>Hinweis:</strong> Beachte, dass <a href="{{ route('rule.general') }}" class="link">Allgemeine Regeln</a> auch auf diesem Spielmodus gelten</p>
</x-layout>
