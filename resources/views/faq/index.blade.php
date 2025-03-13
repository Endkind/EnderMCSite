<x-layout currentTab="FAQ">
    <h2 class="text-center my-3">FAQ</h2>

    <div class="flex flex-col gap-y-4">
        <div>
            <x-copy.ankor id="what-is-it">
                <h4 class="font-semibold">Nützliche Links</h4>
            </x-copy.ankor>

            <ul>
                <li>
                    <a href="{{ route('discord') }}" class="link">Discord</a>
                </li>
                <li>
                    <a href="{{ route('github') }}" class="link">GitHub</a>
                </li>
                <li>
                    <a href="{{ route('dockerhub') }}" class="link">DockerHub</a>
                </li>
                <li>
                    <a href="{{ route('papermc-hangar') }}" class="link">PaperMC Hangar</a>
                </li>
                <li>
                    <a href="{{ route('uptime') }}" class="link">Uptime/Status</a>
                </li>
                <li>
                    <a href="{{ route('shop') }}" class="link">Shop</a>
                </li>
            </ul>
        </div>
    </div>
</x-layout>
