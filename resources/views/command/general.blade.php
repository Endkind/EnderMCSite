<x-layout currentTab="Command">
    <h2 class="text-center my-3">Allgemeine Befehle auf EnderMC</h2>

    <div class="mt-14">
        <x-divider.text>
            <x-copy.ankor id="lorem">
                <h3>Lorem Ipsum</h3>
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
                        <p>/whisper &#60;playername&#62; &#60;Nachricht&#62;</p>
                        <p>/w &#60;playername&#62; &#60;Nachricht&#62;</p>
                        <p>/tell &#60;playername&#62; &#60;Nachricht&#62;</p>
                        <p>/message &#60;playername&#62; &#60;Nachricht&#62;</p>
                        <p>/msg &#60;playername&#62; &#60;Nachricht&#62;</p>
                        <p>/m &#60;playername&#62; &#60;Nachricht&#62;</p>
                        <p>/pm &#60;playername&#62; &#60;Nachricht&#62;</p>
                    </div>
                </td>
                <td>
                    <p>Schickt eine Privat-Nachricht an den Spieler. (Man muss nicht auf dem gleichen Server gehen. Man kann jeden Spieler auf dem Netzwerk erreichen)</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/reply  &#60;Nachricht&#62;</p>
                        <p>/r  &#60;Nachricht&#62;</p>
                    </div>
                </td>
                <td>
                    <p>Schickt eine Privat-Nachricht an den letzten Spieler wo du eine Private-Nachricht gesendet oder erhalten hast. (Man muss nicht auf dem gleichen Server gehen. Man kann jeden Spieler auf dem Netzwerk erreichen)</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/helpme  &#60;Nachricht&#62;</p>
                        <p>/helpop  &#60;Nachricht&#62;</p>
                    </div>
                </td>
                <td>
                    <p>Schickt eine Nachricht an jedem Team-Mitglied auf dem Netzwerk aktuel Online sind.</p>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="mt-14">
        <x-divider.text>
            <x-copy.ankor id="lorem">
                <h3>Lorem Ipsum</h3>
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
                        <p>/lobby</p>
                        <p>/hobby</p>
                    </div>
                </td>
                <td>
                    <p>Du gehst in der Lobby</p>
                </td>
            </tr>
        </tbody>
    </table>
</x-layout>
