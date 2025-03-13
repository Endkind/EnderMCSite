@props([
    'id' => 'password',
    'name' => null,
    'placeholder' => 'Password',
    'value' => null,
    'wire_model' => null,
    'required' => false,
    'disabled' => false
])

<x-form.password.floating_label :id="$id" :name="$name" :placeholder="$placeholder" :value="$value" :wire_model="$wire_model" :required="$required" :disabled="$disabled">
    {{ $slot }}
</x-form.password.floating_label>