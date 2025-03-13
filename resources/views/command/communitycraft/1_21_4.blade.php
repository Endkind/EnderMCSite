<x-layout currentTab="Command">
    <h2 class="text-center my-3">Befehle zu CommunityCraft 1.21.4</h2>

    <div class="mt-14">
        <x-divider.text>
            <x-copy.ankor id="teleport">
                <h3>Teleportation</h3>
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
                        <p>/tpa &#60;playername&#62;</p>
                    </div>
                </td>
                <td>
                    <p>Schickt eine Teleportationsanfrage das man sich zur Person teleportiert</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/tpahere &#60;playername&#62;</p>
                    </div>
                </td>
                <td>
                    <p>Schickt eine Teleportationsanfrage das Person sich zu einen teleportiert</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/tpcancel</p>
                    </div>
                </td>
                <td>
                    <p>Bricht die geschickte tpa/tpahere anfrage ab</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/tpyes</p>
                        <p>/tpayes</p>
                        <p>/tpaccept</p>
                    </div>
                </td>
                <td>
                    <p>Akzeptiert die tpa/tpahere anfrage</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/tpblock &#60;playername&#62;</p>
                    </div>
                </td>
                <td>
                    <p>Blockiert den Spieler das der keine tpa/tpahere anfragen schicken kann</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/tpunblock &#60;playername&#62;</p>
                    </div>
                </td>
                <td>
                    <p>Erlaubt es dem Spieler dir wieder tpa/tpahere anfragen zu schicken</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/tpalist [seite]</p>
                    </div>
                </td>
                <td>
                    <p>Listet alle Ausstehende TPA-Anfragen auf</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/toggletp</p>
                    </div>
                </td>
                <td>
                    <p>Schaltet ein oder aus am man tpa/tpahere anfrage erhalten kann</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/tpon</p>
                        <p>/tpaon</p>
                    </div>
                </td>
                <td>
                    <p>Schaltet an das man tpa/tpahere anfragen erhalten kann</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/tpoff</p>
                        <p>/tpaoff</p>
                    </div>
                </td>
                <td>
                    <p>Schaltet aus das man tpa/tpahere anfragen erhalten kann</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/spawn</p>
                    </div>
                </td>
                <td>
                    <p>Teleportiert einen zum Spawn</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/back</p>
                    </div>
                </td>
                <td>
                    <p>Bringt dich an deinen letzten Todesort zurück (du wirst möglicherweise nicht direkt zum Grab teleportiert, falls es dort nicht sicher platziert werden konnte. Nutze den Kompass, um die Richtung des Grabs zu sehen, oder verwende <span class="text-brand-violet">/graves</span>, um die Koordinaten deines Grabs anzuzeigen. Es kann auch sein, dass sich das Grab über oder unter dir befindet).</p>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="mt-14">
        <x-divider.text>
            <x-copy.ankor id="home">
                <h3>Home</h3>
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
                        <p>/home</p>
                    </div>
                </td>
                <td>
                    <p>Teleportiert einen zum Main-Home</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/home &#60;name&#62;</p>
                    </div>
                </td>
                <td>
                    <p>Teleportiert einen zum Home mit dem namen</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/homes</p>
                    </div>
                </td>
                <td>
                    <p>Listet alle homes auf</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/sethome &#60;name&#62;</p>
                    </div>
                </td>
                <td>
                    <p>Erstellt einen Home mit den angegeben namen</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/delhome &#60;name&#62;</p>
                    </div>
                </td>
                <td>
                    <p>Löscht den angegeben Home</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/movehome &#60;name&#62;</p>
                    </div>
                </td>
                <td>
                    <p>Bewegt den angegebenen Home zu deiner Position</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/setmainhome &#60;name&#62;</p>
                    </div>
                </td>
                <td>
                    <p>Set den Main-Home für <span class="text-brand-violet">/home</span> (Ist Standartmäßig das Bett)
                    </p>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="mt-14">
        <x-divider.text>
            <x-copy.ankor id="claim-system">
                <h3>Claim-System</h3>
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
                        <p>/claim</p>
                    </div>
                </td>
                <td>
                    <p>Erstellt einen neuen Land-Claim, der an deinem aktuellen Standort zentriert ist.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/claimlist</p>
                    </div>
                </td>
                <td>
                    <p>Zeigt eine Liste aller Claims an, die dir gehören.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/declaim</p>
                        <p>/unclaim</p>
                        <p>/removeclaim</p>
                        <p>/disclaim</p>
                        <p>/abandonclaim</p>
                    </div>
                </td>
                <td>
                    <p>Entferne den Claim, in dem du dich befindest.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/abandonallclaims</p>
                    </div>
                </td>
                <td>
                    <p>Löscht alle deine Claims auf einmal.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/accesstrust &#60;playnername&#62;</p>
                    </div>
                </td>
                <td>
                    <p>Gestattet einem anderen Spieler Zugang zu deinem Claim sowie die Nutzung von Betten, Knöpfen und
                        Hebeln.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/containertrust &#60;playnername&#62;</p>
                    </div>
                </td>
                <td>
                    <p>Erlaubt einem anderen Spieler Zugriff auf die Container, Pflanzen, Tiere, Betten, Köpfen und
                        Hebel innerhalb deines Claims.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/trust &#60;playnername&#62;</p>
                    </div>
                </td>
                <td>
                    <p>Gewährt einem anderen Spieler vollständigen Zugriff auf deine Claims.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/permissiontrust &#60;playnername&#62;</p>
                    </div>
                </td>
                <td>
                    <p>Ermöglicht einem anderen Spieler, seine Berechtigungsstufe an weitere Spieler weiterzugeben.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/untrust &#60;playnername&#62;</p>
                    </div>
                </td>
                <td>
                    <p>Entzieht einem anderen Spieler den Zugriff auf deine Claims.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/trustlist</p>
                    </div>
                </td>
                <td>
                    <p>Zeigt eine Liste der Spieler mit Rechten an für den Claim, in dem du dich befindest.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/claimexplosions</p>
                    </div>
                </td>
                <td>
                    <p>Aktiviert oder deaktiviert, ob Explosionen innerhalb des Claims Schaden anrichten können.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/trapped</p>
                    </div>
                </td>
                <td>
                    <p>Teleportiert dich aus dem aktuellen Claim, wenn du darin gefangen bist.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/banfromclaim &#60;playername&#62;</p>
                        <p>/banfc &#60;playername&#62;</p>
                        <p>/bfc &#60;playername&#62;</p>
                    </div>
                </td>
                <td>
                    <p>Bannt den Spieler von deinen Claim</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/banfromclaimall</p>
                        <p>/bfcall</p>
                        <p>/bfca</p>
                    </div>
                </td>
                <td>
                    <p>Bannt alle Spieler von deinen Claim</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/unbanfromclaim &#60;playername&#62;</p>
                        <p>/unbanfc &#60;playername&#62;</p>
                        <p>/ubfc &#60;playername&#62;</p>
                    </div>
                </td>
                <td>
                    <p>Entbannt den Spieler von dein Claim</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/banfromclaimlist</p>
                        <p>/bfclist</p>
                        <p>/bfcl</p>
                    </div>
                </td>
                <td>
                    <p>Listet alle gebanten Spieler von dein Claim auf</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/bfcsafespot</p>
                        <p>/bfcsetsafe</p>
                        <p>/bfcs</p>
                    </div>
                </td>
                <td>
                    <p>Setz ein Sicheren Ort wo die Spieler die du gebannt hast oder gekickt hast hingebracht werden wenn die aus dem Claim teleportiert werden.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/kickfromclaim &#60;playername&#62;</p>
                        <p>/kickfc &#60;playername&#62;</p>
                        <p>/kfc &#60;playername&#62;</p>
                    </div>
                </td>
                <td>
                    <p>Kick den Spieler von dein Claim</p>
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
                        <p>/graves</p>
                    </div>
                </td>
                <td>
                    <p>Zeigt alle Grabsteine an die man hat</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/enderchest</p>
                        <p>/ec</p>
                    </div>
                </td>
                <td>
                    <p>Öffnet deine EnderChest</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/sit</p>
                    </div>
                </td>
                <td>
                    <p>Du setzt dich hin</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/spin</p>
                    </div>
                </td>
                <td>
                    <p>Du drehst dich im Kreis</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/lay</p>
                    </div>
                </td>
                <td>
                    <p>Du legst dich hin</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flex flex-col gap-y-2">
                        <p>/crawl</p>
                    </div>
                </td>
                <td>
                    <p>Du kriechst</p>
                </td>
            </tr>
        </tbody>
    </table>
</x-layout>
