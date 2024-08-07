<x-layout>
    <x-slot:heading>Bill Form</x-slot:heading>
    <div class="bg-blue-300 w-full max-w-lg mx-auto py-10 px-6 flex flex-col items-center rounded-md">
        <x-page-heading>Bank details</x-page-heading>
        <form method="POST" action="/bank">
            @csrf

            <!-- Bank info -->
            <div>
                <x-input-label for="Bank Account No" value="bank no" />
                <x-text-input id="bank_number" class="block mt-1 w-full" type="text" name="bank_number" :value="old('bank_no')" required autofocus autocomplete="name" />
                <x-input-error name="bank_number"></x-input-error>
            </div>

            <!-- Bank typer-->
            <div class="mt-4">
                <x-input-label for="Bank Type" value="bank type" />
                <x-text-input id="bank_type" class="block mt-1 w-full" type="text" name="bank_type" :value="old('bank_type')" required autocomplete="username" />
                <x-input-error name="email"></x-input-error>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4 bg-green-600">
                    Submit
                </x-primary-button>
            </div>
        </form>
    </div>

</x-layout>
