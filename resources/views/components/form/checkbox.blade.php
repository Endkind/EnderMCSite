@props([
    'id' => 'checkbox',
    'name' => null,
    'wire_model' => null,
    'checked' => false,
    'required' => false,
    'disabled' => false
])

<div>
    <input
        type="checkbox"
        id="{{ $id }}"
        @if ($name) name="{{ $name }}" @endif
        @if ($wire_model) wire:model="{{ $wire_model }}" @endif
        @if($checked) checked @endif
        @if($required) required @endif
        @if($disabled) disabled @endif
    >
    <label for="{{ $id }}">{{ $slot }}</label>
</div>