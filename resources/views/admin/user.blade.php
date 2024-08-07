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
                    <div class="flex items-center w-full sm:justify-end">
                        <button id="createUserButton" class="text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5  focus:outline-none " type="button" data-drawer-target="drawer-create-user-default" data-drawer-show="drawer-create-user-default" aria-controls="drawer-create-user-default" data-drawer-placement="right">
                            Add new user
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
                                email
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase ">
                                Username
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase ">
                                role
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
                                <div class="text-base font-semibold text-gray-900 ">email</div>
                            </td>
                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap ">
                                <a href="#">
                                    <div class="text-base font-semibold text-gray-900 ">dnaish</div>
                                </a>
                            </td>
                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap ">
                                <div class="text-base font-semibold text-gray-900 ">admin</div>
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


    <div id="drawer-create-user-default" class="fixed top-0 right-0 z-40 w-full h-screen max-w-xs p-4 overflow-y-auto transition-transform translate-x-full bg-white " tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
        <h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase ">New user</h5>
        <button type="button" data-drawer-dismiss="drawer-create-user-default" aria-controls="drawer-create-user-default" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center ">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Close menu</span>
        </button>
        <form action="#">
            <div class="space-y-4">
                <!-- Name -->
                <div>
                    <x-input-label for="name" value="Name" />
                    <x-text-input id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " type="text" name="name" :value="old('name')" required autofocus autocomplete="username" />
                    <x-input-error name="name"></x-input-error>
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" value="Email" />
                    <x-text-input id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " type="email" name="email" :value="old('email')" required autocomplete="email" />
                    <x-input-error name="email"></x-input-error>
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" value="Password" />

                    <x-text-input id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                                  type="password"
                                  name="password"
                                  required autocomplete="new-password" />

                    <x-input-error name="password"></x-input-error>
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" value="Confirm Password" />

                    <x-text-input id="password_confirmation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                                  type="password"
                                  name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error name="password_confirmation"></x-input-error>
                </div>

                <div>
                    <label for="semester" class="block mb-2 text-sm font-medium text-gray-900 ">Role</label>
                    <select id="discount" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 ">
                        <option selected="" value="admin">admin</option>
                        <option value="student">student</option>

                    </select>
                </div>
            </div>
            <div class="bottom-0 left-0 flex justify-center w-full pb-4 space-x-4 md:px-4 md:absolute">
                <button type="submit" class="text-white w-full justify-center bg-green-600  hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                    Add product
                </button>
                <button type="button" data-drawer-dismiss="drawer-create-user-default" aria-controls="drawer-create-user-default" class="inline-flex w-full justify-center text-white items-center bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 focus:z-10 ">
                    Cancel
                </button>
            </div>
        </form>
    </div>
</x-layout-admin>
