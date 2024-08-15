<x-layout-seller>
    <div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5">
        <div class="w-full mb-1">
            <div class="mb-4">
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl ">Advertisement</h1>
            </div>
            <div class="items-center justify-end block sm:flex md:divide-x md:divide-gray-100 ">
                <div class="flex items-center mb-4 sm:mb-0">
                    <div class="flex items-end w-full sm:justify-end">
                        <button id="openModalButton" class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none" type="button">
                            Apply Advertisement
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col mt-2">
        <div class="overflow-x-auto">
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden shadow">
                    <table class="min-w-full divide-y divide-gray-200 table-fixed">
                        <thead class="bg-gray-100">
                        <tr>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase ">
                                Picture
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase ">
                                advertisement name
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase ">
                                url
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase ">
                                status
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase ">
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        {{--                        {{< products.inline >}}--}}
                        {{--                        {{- range (index $.Site.Data "products") }}--}}
                        <tr class="hover:bg-gray-100 ">
                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap ">
                                <x-logo src="{{asset('images/ad3.jpg')}}" width="300"/>
                            </td>
                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap ">
                                <div class="text-base font-semibold text-gray-900 ">banner</div>
                            </td>
                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap ">
                                <div class="text-base font-semibold text-gray-900 ">www.example.com</div>
                            </td>
                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap ">
                                <div class="text-base font-semibold text-gray-900 ">Pending</div>
                            </td>

                            <td class="p-4 space-x-2 whitespace-nowrap">
                                <button type="button"  class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 ">
                                    Cancel
                                </button>
                            </td>
                        </tr>

                        {{--                        {{ end -}}--}}
                        {{--                        {{< /products.inline >}}--}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!--add advert user-->
    <div id="drawer-create-product-default" class="fixed top-0 right-0 z-40 w-full h-screen max-w-xs p-4 overflow-y-auto transition-transform translate-x-full bg-white" tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
        <h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase">Apply Advertisement</h5>
        <button type="button" data-drawer-dismiss="drawer-create-product-default" aria-controls="drawer-create-product-default" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <form id="ads">
            <div class="space-y-4">
                <!-- Product Photo -->
                <div>
                    <x-input-label for="product_picture" value="Advertisement picture" />
                    <x-text-input id="product_picture" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" type="file" name="product_picture" />
                    <x-input-error name="product_picture"></x-input-error>
                </div>
                <!-- ads name -->
                <div>
                    <x-input-label for="product_name" value="Advertisement Title" />
                    <x-text-input id="product_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" type="text" name="url" :value="old('name')" />
                    <x-input-error name="product_name"></x-input-error>
                </div>

                <!-- url -->
                <div>
                    <x-input-label for="url" value="Url" />
                    <x-text-input id="url" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" type="text" name="url" :value="old('url')" />
                    <x-input-error name="url"></x-input-error>
                </div>

                <!-- Product Display Package -->
                <div>
                    <x-input-label for="package" value="Advertisement Display Package" />
                    <select id="package" name="package" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                        <option value="week">1 week (RM10)</option>
                        <option value="month">1 month (RM20)</option>
                        <option value="semester">1 semester (RM50)</option>
                    </select>
                    <x-input-error name="package"></x-input-error>
                </div>
            </div>
            <div class="flex justify-center mt-6 space-x-4">
                <button data-modal-target="popup-modal-ads" data-modal-toggle="popup-modal-ads"  class="w-full text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Apply
                </button>
                <button type="button" data-drawer-dismiss="drawer-create-product-default" aria-controls="drawer-create-product-default-2" class="w-full text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Cancel
                </button>
            </div>
        </form>
    </div>


    <!--order advert user-->
    <div id="drawer-create-product-default-2" class="fixed top-0 right-0 z-40 w-full h-screen max-w-xs p-4 overflow-y-auto transition-transform translate-x-full bg-white" tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
        <h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase">Apply Advertisement</h5>
        <button type="button" data-drawer-dismiss="drawer-create-product-default-2" aria-controls="drawer-create-product-default-2" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <form id="ads">
            <div class="space-y-4">
                <!-- Product Descriptions -->
                <div>
                    <x-input-label for="description" value="Advertisement Description" />
                    <textarea id="description" name="description" rows="4" class="block mt-1 w-full rounded-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="enter the description of your ads like design, colour or theme" required>{{ old('description') }}</textarea>
                    <x-input-error name="description"></x-input-error>
                </div>

                <!-- url -->
                <div>
                    <x-input-label for="url" value="Url" />
                    <x-text-input id="url" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" type="text" name="url" :value="old('url')" />
                    <x-input-error name="url"></x-input-error>
                </div>

                <!-- Product Display Package -->
                <div>
                    <x-input-label for="package" value="Custom ads Price" />
                    <select id="package" name="package" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                        <option value="RM30">RM30 (Basic)</option>
                        <option value="RM50">RM50 (Premium)</option>
                    </select>
                    <x-input-error name="package"></x-input-error>
                </div>

                <!-- Product Display Package -->
                <div>
                    <x-input-label for="package" value="Advertisement Display Package" />
                    <select id="package" name="package" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                        <option value="week">1 week (RM10)</option>
                        <option value="month">1 month (RM20)</option>
                        <option value="semester">1 semester (RM50)</option>
                    </select>
                    <x-input-error name="package"></x-input-error>
                </div>
            </div>
            <div class="flex justify-center mt-6 space-x-4">
                <button data-modal-target="popup-modal-ads" data-modal-toggle="popup-modal-ads"  class="w-full text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Apply
                </button>
                <button type="button" data-drawer-dismiss="drawer-create-product-default-2" aria-controls="drawer-create-product-default-2" class="w-full text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Cancel
                </button>
            </div>
        </form>
    </div>
    <x-modal.ads-thanks/>
    <x-modal.type-ads/>

</x-layout-seller>

<script>
    const form = document.getElementById('ads');
    const modal = document.getElementById('popup-modal-ads');
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
