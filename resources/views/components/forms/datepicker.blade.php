@props([
    'name' => 'deadline',
    'id' => 'deadline',
    'label' => 'Deadline',
    'placeholder' => 'Select date',
    'value' => null,
])

<x-forms.label :for="$id" :name="$name" :label="$label" />

<div class="relative max-w-sm">
    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
        </svg>
    </div>
    <input datepicker id="{{ $id }}" type="text" datepicker-format="yyyy-mm-dd"
           class="bg-stone-100 border border-gray-300 text-stone-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 px-5 py-4"
           placeholder="{{ $placeholder }}" name="{{ $name }}" value="{{ old($name, $value) }}">
</div>
