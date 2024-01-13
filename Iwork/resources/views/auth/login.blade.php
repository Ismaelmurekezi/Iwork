<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <h1 class="text-xl text-darkBlue font-bold pb-3 font-sans text-center">LOGIN PAGE</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Enter your username"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" 
                            placeholder="Enter your password"
                            />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center ">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600 mr-32">{{ __('Remember me') }}</span>
                @if (Route::has('password.request'))
                <a class="underline text-sm text-lightBlue hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
            </label>
        </div>

        <div class="flex flex-col mt-4">
            {{-- @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif --}}

            <x-primary-button class=" w-full mr-4 rounded-xl flex justify-center">
                {{ __('Log in') }}
            </x-primary-button>
            <div class="flex ml-3 pt-1">
                <p class="pr-3">Don't have account?</p>
                <a href="{{ route('register') }}" class="text-lightBlue">Sign up</a>

            </div>
        </div>

    </form>
</x-guest-layout>
