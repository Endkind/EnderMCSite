@props([
    'id' => 'textarea',
    'name' => null,
    'placeholder' => 'Textare',
    'value' => null,
    'wire_model' => null,
    'required' => false,
    'disabled' => false,
    'cols' => null,
    'rows' => null,
])

<div class="form-floating">
    <textarea   
        id="{{ $id }}"
        @if ($name) name="{{ $name }}" @endif
        ($placeholder) placeholder="{{ $placeholder }}"
        @if ($value) value="{{ $value }}" @endif
        @if ($wire_model) wire:model="{{ $wire_model }}" @endif
        @if ($required) required @endif
        @if ($disabled) disabled @endif
    >{{ $value }}</textarea>
    <label for="{{ $id }}">{{ $slot }}</label>
</div>
