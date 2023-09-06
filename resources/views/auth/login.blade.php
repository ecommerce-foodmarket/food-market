<x-guest-layout>

    
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
<div class="mb-10">
  <h1 class="text-dark font-Poppins text-3xl font-bold w-full">Log In</h1>
  <p class="text-gray-400 font-Poppins text-md">Find your best ever meal</p>

</div>
<div class=" w-full h-full p-10 md:w-full lg:w-1/2 m-auto">
<form  action=""  < method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mt-2">
            <x-input-label class="font-Poppins font-bold text-lg" for="email" :value="__('Email Address')" />
            <x-text-input id="email" class="block mt-1  border rounded w-full py-2 px-3 text-gray-700 leading-tight " type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Type your email address"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4 justify-center">
            <x-input-label class="font-Poppins font-bold text-lg" for="password" :value="__('Password')" />

            <x-text-input id="password" class=" font-Poppins w-full block mt-1  border rounded py-2 px-3 text-gray-700 leading-tight"
                            type="password"
                            name="password"
                            required autocomplete="current-password"
                            placeholder="Type your password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4 justify-center">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>
        <div>
          
        </div>
        <div class="mt-4 flex items-center justify-center">
            <button class="bg-DarkSlateGray  text-LightOrange font-semibold font-Poppins py-1 px-20   rounded shadow text-center">
                {{ __('Log in') }}
            </button>

          </div>
        
        <div class="flex items-center justify-center mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
          
        </div>
        <div class="flex items-center justify-center mt-4">
          <p class="font-Poppins text-base">-OR Continue with-</p>
        </div>

        <div class="mt-4 flex justify-center">
          <div class="flex justify-center items-center">
            <img src="https://tailus.io/sources/blocks/social/preview/images/google.svg" class=" left-0 w-5" alt="google logo">
            <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">Google</span>
          </div>
          <div class="ml-2 flex justify-center items-center">
            <img src="https://upload.wikimedia.org/wikipedia/en/0/04/Facebook_f_logo_%282021%29.svg" class=" left-0 w-5" alt="Facebook logo">
            <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">Facebook</span>
          </div>
        </div>

        <div class="mt-4 flex items-center justify-center">
            <p class=" text-gray-500 text-md">
            Create An Account <a class="text-orange-500  bold" href="{{route('register')}}">Sing Up</a>
            </p>
        </div>

        @endif
    </form>
  </div>
</x-guest-layout>


