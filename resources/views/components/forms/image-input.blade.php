@props([
    'name' => 'image',
    'id' => 'image',
    'label' => 'Image',
])

<x-forms.label :for="$id" :name="$name" :label="$label" />

<input type="file" id="{{ $id }}" name="{{ $name }}" {{ $attributes->merge([
    'class' => 'block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-stone-100 file:text-text'
]) }}>
