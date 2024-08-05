<div x-data="{ open: false }" class="relative inline-block text-left">
    <button @click="open = !open" @click.away="open = false" class="inline-flex items-center px-3 py-2 border border-transparent text-lg leading-4 font-medium rounded-md text-black bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
        <div>{{ Auth::user()->name }}</div>
        <div class="ml-1">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </div>
    </button>

    <div x-show="open" x-cloak @click.away="open = false" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute right-0 w-48 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none z-10">
        <div class="py-1">
            <!-- Dropdown menu links -->
            <a href="/profile">
                <button class="w-full px-4 py-2 text-left text-sm font-semibold leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100">Edit Profile</button>
            </a>
            <form method="POST" action="/logout">
                @csrf
                <button type="submit" class="w-full px-4 py-2 text-left text-sm font-semibold leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100">Logout</button>
            </form>
        </div>
    </div>
</div>
