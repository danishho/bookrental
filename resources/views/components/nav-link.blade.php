@props(['active' => false])

<a class="{{ $active ? 'border-b-4 border-green-600 text-green-700' : 'hover:border-b-4 hover:border-green-600 text-gray-800 hover:text-green-600' }} px-3 py-2 text-lg font-semibold"
   aria-current="{{ $active ? 'page' : 'false' }}"
    {{ $attributes }}
>{{ $slot }}</a>
