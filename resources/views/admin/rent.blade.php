<x-layout-admin>
    <div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5">
        <div class="w-full mb-1">
            <div class="mb-4">
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl ">All Rent Request</h1>
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
                    <table class="w-full h-auto min-w-full divide-y divide-gray-200 table-fixed ">
                        <thead class="bg-gray-100">
                        <tr>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase ">
                                Book Title
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase ">
                                course
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase ">
                                semester
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
                                <div class="text-base font-semibold text-gray-900 ">book title</div>
                            </td>
                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap ">
                                <div class="text-base font-semibold text-gray-900 ">Dcs</div>
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
                                <button type="button"  class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-500 rounded-lg hover:bg-green-600 ">
                                    Approve
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
