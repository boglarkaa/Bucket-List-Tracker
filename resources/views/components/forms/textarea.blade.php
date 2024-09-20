@props(['label', 'name'])

@php
    $defaults = [
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl bg-stone-100 border border-gray-300 px-5 py-4 w-full',
        'value' => old($name),
        'rows'=> 3
    ];
@endphp

<x-forms.field :$label :$name>
    <textarea {{ $attributes($defaults) }}>{{$slot}}
    </textarea>
</x-forms.field>

