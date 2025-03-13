@props([
    'id' => 'date',
    'name' => null,
    'placeholder' => 'Date',
    'value' => null,
    'wire_model' => null,
    'required' => false,
    'disabled' => false
])

<div class="form-floating" onclick="document.getElementById('{{ $id }}').showPicker();">
    <input
        type="date"
        id="{{ $id }}"
        @if ($name) name="{{ $name }}" @endif
        ($placeholder) placeholder="{{ $placeholder }}"
        @if ($value) value="{{ $value }}" @endif
        @if ($wire_model) wire:model="{{ $wire_model }}" @endif
        @if($required) required @endif
        @if($disabled) disabled @endif
    >
    <label for="{{ $id }}">{{ $slot }}</label>
</div>