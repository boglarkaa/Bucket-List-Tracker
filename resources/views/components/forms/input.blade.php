@props(['label', 'name'])

@php
    $defaults = [
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl bg-stone-100 border border-gray-300 px-5 py-4 w-full',
        'value' => old($name)
    ];
@endphp

<x-forms.field :$label :$name>
    <input {{ $attributes($defaults) }}>
    @if($attributes->has('required'))
        <span class="text-text/80 text-sm">* Required</span>
    @endif
</x-forms.field>
