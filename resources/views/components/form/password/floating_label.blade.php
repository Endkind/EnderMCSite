@props([
    'id' => 'password',
    'name' => null,
    'placeholder' => 'Password',
    'value' => null,
    'wire_model' => null,
    'required' => false,
    'disabled' => false
])

<div class="form-floating relative">
    <input 
        type="password" 
        id="{{ $id }}"
        @if ($name) name="{{ $name }}" @endif
        placeholder="{{ $placeholder }}"
        @if ($value) value="{{ $value }}" @endif
        @if ($wire_model) wire:model="{{ $wire_model }}" @endif
        @if($required) required @endif
        @if($disabled) disabled @endif
    >
    <label for="{{ $id }}">{{ $slot }}</label>
    <button 
        type="button" 
        onclick="togglePassword('{{ $id }}')">
        <i id="icon-{{ $id }}" class="bi bi-eye"></i>
    </button>
</div>
