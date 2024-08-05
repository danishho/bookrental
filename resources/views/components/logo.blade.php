@props(['src' => asset('logos/logo.png'),'width' => 120])

<img src="{{ $src }}" alt="" {{$attributes->merge(['class'=>"rounded-xl"])}} width="{{ $width }}">
