<x-guest-layout>
    <x-logo class="block mx-auto" width="450"></x-logo>
    <form method="POST" action="{{route('login')}}">
        @csrf

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" value="Email" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error name="email"></x-input-error>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" value="Password" />

            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          autocomplete="password"
                          required />

            <x-input-error name="password"></x-input-error>
        </div>
        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">Remember me</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
{{--            @if (Route::has('password.request'))--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">--}}
{{--                    Forgot your password?--}}
{{--                </a>--}}
{{--            @endif--}}
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none" href="/register">
                Dont Have Account?
            </a>


            <x-primary-button class="ms-3 mt-1">
                Log in
            </x-primary-button>
        </div>



    </form>
</x-guest-layout>
