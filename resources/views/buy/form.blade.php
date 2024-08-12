<x-layout>
    <x-slot:heading>Buy Form</x-slot:heading>
    <div class="bg-orange-400 w-full max-w-lg mx-auto py-10 px-6 flex flex-col items-center rounded-md">
        <x-page-heading>CUSTOMER DETAILS</x-page-heading>
        <form method="POST" action="/buy">
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

            <!-- Student ID Card -->
            <div class="mt-4">
                <x-input-label for="student_id" value="Student ID Card" />
                <x-text-input id="student_id" class="block mt-1 w-full" type="text" name="student_id" :value="old('student_id')" required autofocus autocomplete="student_id" />
                <x-input-error name="student_id"></x-input-error>
            </div>

            <!-- Order Summary and Meetups -->
            <div class="mt-6 w-full bg-white p-4 rounded-lg shadow-md">
                <h3 class="text-lg font-bold text-gray-800 mb-2">Order Summary</h3>
                <h4>Ice Cream -1</h4>
                <p class=" text-gray-900 font-semibold mt-4">Total: RM20</p>

                <h3 class="text-lg font-bold text-gray-800 mt-6 mb-2">Meetup Location: <span class="text-blue-500">PSN</span></h3>
            </div>

            <!-- Time and Date for Meetup -->
            <div class="mt-6 w-full bg-white p-4 rounded-lg shadow-md">
                <h3 class="text-lg font-bold text-gray-800 mb-2">Time and Date for Meetup</h3>
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1">
                        <x-input-label for="meetup_date" value="Date" />
                        <x-text-input id="meetup_date" class="block w-full mt-1" type="date" name="meetup_date" required />
                        <x-input-error name="meetup_date"></x-input-error>
                    </div>
                    <div class="flex-1">
                        <x-input-label for="meetup_time" value="Time" />
                        <x-text-input id="meetup_time" class="block w-full mt-1" type="time" name="meetup_time" required />
                        <x-input-error name="meetup_time"></x-input-error>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end mt-6">
                <x-primary-button class="ms-4 bg-orange-600 hover:bg-orange-700">
                    Submit
                </x-primary-button>
            </div>
        </form>
    </div>
</x-layout>
