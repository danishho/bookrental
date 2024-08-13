<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
    <style>
        /* Ensure the main content respects the sidebar */
        .main-content {
            margin-left: 16rem; /* Same width as the sidebar */
        }
    </style>
</head>
<body class="flex">

<!-- Sidebar -->
<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform sm:translate-x-0 bg-gray-50">
    <div class="h-full px-3 py-4 overflow-y-auto">
        <a href="/admin" class="flex items-center ps-2.5 mb-5">
            <x-logo src="{{asset('logos/logo.png')}}" width="90"/>
            <span class="self-center text-xl font-semibold whitespace-nowrap">RentJerlaa</span>
        </a>
        <ul class="space-y-2 font-medium">
            <li>
                <a href="/admin/book" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100  group">
                    <x-logo src="{{asset('logos/book.svg')}}" width="30" class="rounded-none"/>
                    <span class="flex-1 ms-3 whitespace-nowrap">Books</span>
                </a>
            </li>
            <li>
                <a href="/admin/rent" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                    <x-logo src="{{asset('logos/rentbook.svg')}}" width="30"  class="rounded-none"/>
                    <span class="flex-1 ms-3 whitespace-nowrap">Rent</span>
                    <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full">3</span>
                </a>
            </li>
            <li>
                <a href="/admin/product" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100  group">
                    <x-logo src="{{asset('logos/product.svg')}}" width="30"  class="rounded-none"/>
                    <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
                </a>
            </li>
{{--            <li>--}}
{{--                <a href="/admin/payment" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100  group">--}}
{{--                    <x-logo src="{{asset('logos/payment.svg')}}" width="30"  class="rounded-none"/>--}}
{{--                    <span class="flex-1 ms-3 whitespace-nowrap">Payment</span>--}}
{{--                </a>--}}
{{--            </li>--}}
            <li>
                <a href="/admin/user" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group">
                    <x-logo src="{{asset('logos/user.svg')}}" width="30"  class="rounded-none"/>
                    <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
                </a>
            </li>
            <li>
                <a href="/" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group">
                    <x-logo src="{{asset('logos/homepage.svg')}}" width="30"  class="rounded-none"/>
                    <span class="flex-1 ms-3 whitespace-nowrap">Homepage</span>
                </a>
            </li>

        </ul>
    </div>
</aside>

<!-- Main Content -->
<div class="main-content w-full">
    {{$slot}}
</div>
</body>
</html>
