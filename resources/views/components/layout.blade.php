<!doctype html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <style>
        [x-cloak] {
            display: none;
        }
    </style>

    @vite(['resources/js/app.js'])
</head>
<body class="h-full">
<div class="min-h-full">
    <nav class="bg-white shadow-sm">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pb-0 pt-7">
            <div class="flex justify-between max-h-24 items-center">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <x-logo class="mt-8 mb-14 " width="250"></x-logo>
                    </div>
                    <div class="hidden md:flex space-x-8">
                        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                        <x-nav-link href="/rent" :active="request()->is('rent')">Rent</x-nav-link>
                        <x-nav-link href="/buy" :active="request()->is('buy')">Buy</x-nav-link>
                        <x-nav-link href="/seller_center" :active="request()->is('seller_center')">Seller Center</x-nav-link>
                        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                    </div>
                </div>
                <div class="hidden md:flex space-x-4 items-center">
                    <a href="/cart" class="relative inline-block">
                        <x-logo src="{{asset('logos/cart.svg')}}" width="40"/>
                        <span class="absolute top-0 right-0 bg-red-500 text-white rounded-full px-2 py-0.5 text-xs font-bold transform translate-x-1/2 -translate-y-1/2">1</span>
                    </a>


                @guest
                        <x-nav-link href="/login" :active="request()->is('login')">Log In</x-nav-link>
                        <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>
                    @endguest
                    @auth
                        <x-profile-nav/>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    @if(!request()->is('/'))
        <header class="bg-green-600 shadow">
            <div class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8 sm:flex sm:justify-between items-center">
                <h1 class="text-4xl font-bold tracking-tight text-white">{{ $heading }}</h1>
                @if(request()->is('buy'))
                    <x-button href="/product/create" class="mt-4 sm:mt-0 hover:bg-blue-700 bg-blue-600 text-white hover:text-white ">
                        Sell Product
                    </x-button>
                @endif

            </div>
        </header>
    @endif
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{$slot}}
        </div>
{{--        @if(request()->is('rent'))--}}
{{--            <x-search-home />--}}
{{--        @endif--}}
    </main>
</div>
<script src="//unpkg.com/alpinejs" defer></script>

</body>
</html>
