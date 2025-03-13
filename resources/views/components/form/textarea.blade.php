@props([
    'id' => 'textarea',
    'name' => null,
    'placeholder' => 'Textarea',
    'value' => null,
    'wire_model' => null,
    'required' => false,
    'disabled' => false,
    'cols' => null,
    'rows' => null,
])

<x-form.textarea.floating_label :id="$id" :name="$name" :placeholder="$placeholder" :value="$value" :wire_model="$wire_model" :required="$required" :disabled="$disabled" :cols="$cols" : rows="$rows">
    {{ $slot }}
</x-form.textarea.floating_label>
