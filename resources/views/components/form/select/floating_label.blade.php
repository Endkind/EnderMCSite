@props([
    'id' => 'select',
    'name' => null,
    'wire_model' => null,
    'wire_change' => null,
    'required' => false,
    'disabled' => false,
    'options' => [
        'no_option_given' => 'No Option Given'
    ],
    'selected' => null,
])

<div class="form-floating">
    <select
        id="{{ $id }}"
        @if ($name) name="{{ $name }}" @endif
        @if ($wire_model) wire:model="{{ $wire_model }}" @endif
        @if ($wire_change) wire:change="{{ $wire_change }}" @endif
        @if ($required) required @endif
        @if ($disabled) disabled @endif
    >
        @foreach ($options as $value => $name)
            <option value="{{ $value }}" @if ($selected == $value) selected @endif>{{ $name }}</option>
        @endforeach
    </select>
    <label for="{{ $id }}">{{ $slot }}</label>
</div>