@props([
    'id' => 'text',
    'name' => null,
    'placeholder' => 'Text',
    'value' => null,
    'wire_model' => null,
    'required' => false,
    'disabled' => false
])

<x-form.text.floating_label :id="$id" :name="$name" :placeholder="$placeholder" :value="$value" :wire_model="$wire_model" :required="$required" :disabled="$disabled">
    {{ $slot }}
</x-form.text.floating_label>