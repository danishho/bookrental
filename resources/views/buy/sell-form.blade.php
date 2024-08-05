<x-layout>
    <x-slot:heading>Sell Form</x-slot:heading>
    <div class="bg-blue-300 w-full max-w-lg mx-auto py-10 px-6 flex flex-col items-center rounded-md">
        <x-page-heading>Product Details</x-page-heading>
        <form method="POST" action="/rent">
            @csrf

            <!-- Product Name -->
            <div>
                <x-input-label for="name" value="Product Name" />
                <x-text-input id="product_name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error name="product_name"></x-input-error>
            </div>
            <!-- Price -->
            <div>
                <x-input-label for="name" value="Product Price" class="mt-3"/>
                <x-text-input id="product_name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="(e.g)RM35"/>
                <x-input-error name="product_name"></x-input-error>
            </div>

            <!-- Product Descriptions -->
            <div class="mt-4">
                <x-input-label for="description" value="Product Description" />
                <textarea id="description" name="description" rows="4" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>{{ old('description') }}</textarea>
                <x-input-error name="description"></x-input-error>
            </div>

            <!-- Product Photo -->
            <div class="mt-4">
                <x-input-label for="file" value="Product picture" />
                <x-text-input id="product_picture" class="block mt-1 w-full bg-white" type="file" name="product_picture"  />
                <x-input-error name="product_picture"></x-input-error>
            </div>

            <!-- Bank account -->
            <div>
                <x-input-label for="name" value="Bank Account" class="mt-3"/>
                <x-text-input id="bank_account" class="block mt-1 w-full" type="text" name="bank_account" :value="old('bank_account')" required autofocus autocomplete="name" placeholder="bank account number"/>
                <x-input-error name="bank_account"></x-input-error>
            </div>

            <!-- Product Descriptions -->
            <div>
                <x-input-label for="name" value="Bank Account" class="mt-3"/>
                <select id="bank_name" name="bank_name" class="border-gray-300 focus:ring-black-500 focus:ring-black-500 rounded-md shadow-md px-1 py-1">
                    <option value="apple">Maybank</option>
                    <option value="banana">Cimb</option>
                    <option value="cherry">HO bank</option>
                </select>
                <x-input-error name="bank_name"></x-input-error>
            </div>


            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4 bg-green-600">
                    Submit
                </x-primary-button>
            </div>
        </form>
    </div>

</x-layout>
