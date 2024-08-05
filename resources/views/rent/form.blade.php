<x-layout>
    <x-slot:heading>Rental Form</x-slot:heading>
    <div class="bg-blue-300 w-full max-w-lg mx-auto py-10 px-6 flex flex-col items-center rounded-md">
        <x-page-heading>customer details</x-page-heading>
        <form method="POST" action="/rent">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" value="Name" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error name="name"></x-input-error>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" value="Email" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error name="email"></x-input-error>
            </div>

            <!-- PHOTO -->
            <div class="mt-4">
                <p class="block font-medium text-sm text-gray-700"> QR Payment</p>
                <x-logo src="{{asset('images/banner.svg')}}" width="400" alt="fmdkpgm"/>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="file" value="Payment Prove" />
                <x-text-input id="file" class="block mt-1 w-full bg-white" type="file" name="file"  />
                <x-input-error name="file"></x-input-error>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4 bg-green-600">
                    Submit
                </x-primary-button>
            </div>
        </form>
    </div>

</x-layout>
