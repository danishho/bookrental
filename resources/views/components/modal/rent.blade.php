<!-- Modal -->
<div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow-lg">
            <button type="button" class="absolute top-3 right-3 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-full text-sm w-8 h-8 flex justify-center items-center" data-modal-hide="popup-modal">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-6 text-center">
                <x-logo src="{{ asset('logos/tumbup.svg') }}" class="mx-auto mb-4" width="100"/>
                <h3 class="mb-4 text-xl font-semibold text-gray-800">Thank You for Renting with Us!</h3>
                <h3 class="mb-4 text-lg font-medium text-gray-600">RENT JERLAA</h3>
                <p class="mb-4 text-base font-normal text-gray-600">We are delighted to have you as a customer and hope you enjoy your rental experience.</p>
                <p class="mb-4 text-base font-bold text-gray-800">Rental Period: 1 Semester</p>
                <p class="mb-6 text-base font-normal text-gray-600">If you have any questions, feel free to get in touch with us.</p>
                <button id="closeModalButton" class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5">
                    Okay
                </button>
            </div>
        </div>
    </div>
</div>
