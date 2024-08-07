<x-layout-admin>
    <div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5">
        <div class="w-full mb-1">
            <div class="mb-4">
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl ">All Product</h1>
            </div>
            <div class="items-center justify-between block sm:flex md:divide-x md:divide-gray-100 ">
                <div class="flex items-center mb-4 sm:mb-0">
                    <form class="sm:pr-3" action="#" method="GET">
                        <label for="products-search" class="sr-only">Search</label>
                        <div class="relative w-48 mt-1 sm:w-64 xl:w-96">
                            <input type="text" name="email" id="products-search" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Search for products">
                        </div>
                    </form>
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
                                product name
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase ">
                                picture product
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase ">
                                period
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase ">
                                username
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase ">
                                payment prove
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase ">
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 ">
                        {{--                        {{< products.inline >}}--}}
                        {{--                        {{- range (index $.Site.Data "products") }}--}}
                        <tr class="hover:bg-gray-100 ">
                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap ">
                                <div class="text-base font-semibold text-gray-900 ">product title</div>
                            </td>
                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap ">
                                <a href="#">
                                    <div class="text-base font-semibold text-gray-900 ">picture</div>
                                </a>
                            </td>
                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap ">
                                <div class="text-base font-semibold text-gray-900 ">1</div>
                            </td>
                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap ">
                                <div class="text-base font-semibold text-gray-900 ">Danish</div>
                            </td>
                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap ">
                                <a href="#">
                                    <div class="text-base font-semibold text-gray-900 ">picture</div>
                                </a>
                            </td>

                            <td class="p-4 space-x-2 whitespace-nowrap">
                                <button type="button" id="deleteProductButton" data-drawer-target="drawer-delete-product-default" data-drawer-show="drawer-delete-product-default" aria-controls="drawer-delete-product-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                    Delete Product
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
</x-layout-admin>
