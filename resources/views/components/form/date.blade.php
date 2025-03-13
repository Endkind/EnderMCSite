@props([
    'id' => 'date',
    'name' => null,
    'placeholder' => 'Date',
    'value' => null,
    'wire_model' => null,
    'required' => false,
    'disabled' => false
])

<x-form.date.floating_label :id="$id" :name="$name" :placeholder="$placeholder" :value="$value" :wire_model="$wire_model" :required="$required" :disabled="$disabled">
    {{ $slot }}
</x-form.date.floating_label>