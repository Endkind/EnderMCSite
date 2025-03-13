@props([
    'id' => 'select',
    'name' => null,
    'wire_model' => null,
    'wire_change' => null,
    'required' => false,
    'disabled' => false,
    'options' => [
        'no_option_given' => 'No Option Given',
    ],
    'selected' => null,
])

<x-form.select.floating_label
    :id="$id"
    :name="$name"
    :wire_model="$wire_model"
    :wire_change="$wire_change"
    :required="$required"
    :disabled="$disabled"
    :options="$options"
    :selected="$selected"
>
    {{ $slot }}
</x-form.select.floating_label>
