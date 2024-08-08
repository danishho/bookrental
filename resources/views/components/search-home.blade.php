<div class="bg-orange-400 w-auto py-10 flex justify-center rounded-md items-center ">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <form action="/search" class="mt-65 w-full max-w-3xl mx-auto">
            <h1 class="text-4xl font-bold tracking-tight text-gray-900 mb-8 text-center">
                {{$slot}} <span class="text-white">RentJerlaa</span>
            </h1>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="text" id="q" name="q" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500" style="background-color: white;" placeholder="Search By Title" required />
                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
            </div>
        </form>
    </div>
</div>
