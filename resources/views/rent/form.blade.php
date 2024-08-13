<x-layout>
    <x-slot:heading>Rental Form</x-slot:heading>
    <div class="bg-orange-400 w-full max-w-lg mx-auto py-10 px-6 flex flex-col items-center rounded-md">
        <x-page-heading>CUSTOMER DETAILS</x-page-heading>
        <form id="rentalForm">
            {{-- @csrf --}}

            <!-- Name -->
            <div>
                <x-input-label for="name" value="Name" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="username" />
                <x-input-error name="name"></x-input-error>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" value="Email" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
                <x-input-error name="email"></x-input-error>
            </div>

            <!-- Student ID Card -->
            <div class="mt-4">
                <x-input-label for="student_id" value="Student ID Card" />
                <x-text-input id="student_id" class="block mt-1 w-full" type="text" name="student_id" :value="old('student_id')" required autofocus autocomplete="student_id" />
                <x-input-error name="student_id"></x-input-error>
            </div>

            <!-- QR Payment -->
            <div class="mt-4">
                <p class="block font-medium text-sm text-gray-700">QR Payment</p>
                <x-logo src="{{ asset('images/qr.jpg') }}" width="300" alt="QR Payment" />
            </div>

            <!-- Payment Proof -->
            <div class="mt-4">
                <x-input-label for="file" value="Payment Proof" />
                <x-text-input id="file" class="block mt-1 w-full bg-white" type="file" name="file" />
                <x-input-error name="file"></x-input-error>
            </div>

            <!-- Agreement Checkbox -->
            <div class="mt-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="agreement" id="agreement" class="rounded border-gray-300 text-orange-600 shadow-sm focus:border-orange-300 focus:ring focus:ring-orange-200 focus:ring-opacity-50" required>
                    <span class="ml-2 text-sm font-semibold text-gray-900">I agree to provide goods/services in the best quality. All problems related to the product are under my responsibility.</span>
                </label>
                <x-input-error name="agreement"></x-input-error>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button type="submit"  class="ms-4 bg-orange-600 hover:bg-orange-700">
                    Submit
                </x-primary-button>
            </div>
        </form>
        <x-modal.rent/>

    </div>
</x-layout>

<script>
    const form = document.getElementById('rentalForm');
    const modal = document.getElementById('popup-modal');
    const closeModalButton = document.getElementById('closeModalButton');

    form.addEventListener('submit', function(e) {
        e.preventDefault();  // Prevent the default form submission
        modal.classList.remove('hidden');  // Show the modal
    });

    closeModalButton.addEventListener('click', function() {
        modal.classList.add('hidden');  // Hide the modal when "Okay" is clicked
        form.submit();  // Optionally, submit the form after the modal is closed
    });
</script>
