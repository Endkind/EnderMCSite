<div id="alert" class="grid gap-3">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <x-alert.danger>
                {{ $error }}
            </x-alert.danger>
        @endforeach
    @endif
</div>
