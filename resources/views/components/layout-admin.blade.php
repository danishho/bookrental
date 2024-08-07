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
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg group">
                    <svg class="w-5 h-5 text-gray-500 transition duration-75  " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                        <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                    </svg>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/admin/book" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100  group">
                    <x-logo src="{{asset('logos/book.svg')}}" width="30" class="rounded-none"/>
                    <span class="flex-1 ms-3 whitespace-nowrap">Books</span>
                </a>
            </li>
            <li>
                <a href="/admin/rent" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                    <x-logo src="{{asset('logos/rentbook.svg')}}" width="25"  class="rounded-none"/>
                    <span class="flex-1 ms-3 whitespace-nowrap">Rent</span>
                    <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full">3</span>
                </a>
            </li>
            <li>
                <a href="/admin/product" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100  group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75  " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path d="M15 5h-3V3a3 3 0 0 0-6 0v2H3a3 3 0 0 0-3 3v9a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3ZM8 3a1 1 0 0 1 2 0v2H8V3Zm9 14a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3v1a1 1 0 0 0 2 0V7h4v1a1 1 0 0 0 2 0V7h3a1 1 0 0 1 1 1v9Z"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
                </a>
            </li>

            <li>
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
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
