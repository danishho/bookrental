

<div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow ">
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="popup-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <x-logo src="{{asset('logos/tumbup.svg')}}" class="mx-auto mb-3" width="100"/>
                <h3 class="mb-5 text-lg font-normal text-gray-500 ">Thank you  for Renting Book with us!</h3>
                <h3 class="mb-5 text-lg font-normal text-gray-500 ">RENT JERLAA</h3>
                <h3 class="mb-5 text-lg font-normal text-gray-500 ">We are delighted to have you as a customer and hope you enjoy it.</h3>
                <h3 class="mb-5 text-lg font-bold text-gray-500 ">Rental Period:1 semester</h3>
                <p class="mb-5 text-lg font-normal text-gray-500 ">if you have any questions, feel free to get in touch</p>
                <button data-modal-hide="popup-modal" class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300  font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                    Okay
                </button>
            </div>
        </div>
    </div>
</div>
