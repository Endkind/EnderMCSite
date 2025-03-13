<x-layout currentTab="Command">
    <h2 class="text-center my-3">Lobby Befehle auf EnderMC</h2>

    <div class="mt-14">
        <x-divider.text>
            <x-copy.ankor id="skin">
                <h3>Skin</h3>
            </x-copy.ankor>
        </x-divider.text>
    </div>
    <p class="my-4">Diese Befehle sind Primär Für Bedrock-Spieler gedacht da viele Bedrock Skins nicht mit dem Server (Minecraft Java) kompatibel sind. Es kann aber von jedem Spieler genutzt werden.</p>
    <table class="table w-full">
        <thead>
            <tr>
                <th width="20%">Befehl</th>
                <th>Beschreibung</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/skins</p>
                    </div>
                </td>
                <td>
                    <p>Öffnet ein Menü mit Vorgefärtigte Skins, dein skinverlauf und deine Favorisierten Skins (Dieser Befehl funktioniert nur in den Lobbys)</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/skin help</p>
                    </div>
                </td>
                <td>
                    <p>Öffnet das Hilfe Menü von SkinRestorer</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/skin set &#60;url&#62;</p>
                        <p>/skin &#60;url&#62;</p>
                    </div>
                </td>
                <td>
                    <p>Du kannst z.B. bei <a href="https://de.namemc.com/minecraft-skins" class="link">NameMC</a> dir ein Skin aussuchen und dann die url nutzen wie in diesem Beispiel: <span class="text-brand-violet">/skin url https://de.namemc.com/skin/350302fcb4489aa8</span> (Dieser Befehl übernimmt den Skin-wechsel nur in den Lobbys sofort)</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/skin set &#60;playername&#62;</p>
                    </div>
                </td>
                <td>
                    <p>Du kannst den Skin von ein Spieler nutzen wie in diesem Beispiel: <span class="text-brand-violet">/skin set TDKcrafter</span> (Dieser Befehl übernimmt den Skin-wechsel nur in den Lobbys sofort)</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/skin clear</p>
                    </div>
                </td>
                <td>
                    <p>Du kannst damit dein ursprünglischen Skin wiederherstellen (Dieser Befehl übernimmt den Skin-wechsel nur in den Lobbys sofort)</p>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="mt-14">
        <x-divider.text>
            <x-copy.ankor id="others">
                <h3>Sonstige Befehle</h3>
            </x-copy.ankor>
        </x-divider.text>
    </div>
    <table class="table w-full">
        <thead>
            <tr>
                <th width="20%">Befehl</th>
                <th>Beschreibung</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/gmenu main</p>
                    </div>
                </td>
                <td>
                    <p>Öffnet das Cosmetic-Menü.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/website</p>
                    </div>
                </td>
                <td>
                    <p>Zeigt eine anklickbare URL zur Webseite an.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/rules</p>
                    </div>
                </td>
                <td>
                    <p>Zeigt eine anklickbare URL zur Webseite mit den Serverregeln an, damit du immer auf dem neuesten Stand bleibst.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/shop</p>
                    </div>
                </td>
                <td>
                    <p>Zeigt eine anklickbare URL zur Shop-Webseite an.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/discord</p>
                    </div>
                </td>
                <td>
                    <p>Zeigt eine URL zum Discord-Server an.</p>
                </td>
            </tr>
        </tbody>
    </table>
</x-layout>
