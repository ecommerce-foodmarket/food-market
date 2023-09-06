<x-guest-layout>
    <div class="mb-4 text-sm font-Poppins text-gray-600 lg:text-base ">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label class="font-Poppins font-bold lg:text-xl" for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-2 font-Poppins border border-gray-300 rounded  w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <button class=" bg-DarkSlateGray text-LightOrange font-semibold font-Poppins w-1/2 m-auto text-xs p-2  rounded shadow text-center   lg:w-1/3 lg:text-lg">
                {{ __('Email Password Reset Link') }}
            </button>
        </div>
    </form>
</x-guest-layout>
