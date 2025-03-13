@props([
    'id' => 'email',
    'name' => null,
    'placeholder' => 'E-Mail',
    'value' => null,
    'wire_model' => null,
    'required' => false,
    'disabled' => false
])

<x-form.email.floating_label :id="$id" :name="$name" :placeholder="$placeholder" :value="$value" :wire_model="$wire_model" :required="$required" :disabled="$disabled">
    {{ $slot }}
</x-form.email.floating_label>