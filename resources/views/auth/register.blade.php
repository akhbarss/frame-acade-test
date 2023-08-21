<x-guest-layout>


    <div class="flex flex-col justify-center w-1/2 px-40">
        <div class="mb-16">
            <h1 class="text-[#445069] font-extrabold text-5xl">Create Account</h1>
        </div>
        <div class="w-full">

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                        required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="ml-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>

        </div>
    </div>

    <div class="relative text-white min-h-screen w-1/2 flex flex-col items-center justify-center rounded-l-[35px] px-[5rem]  gap-[1rem]"
        style="background-color: #697899;">
        <img src="{{ url('/Logo.png') }}" alt="logo"  class="absolute h-[50px] w-[100px] top-5 left-[70px]"/>
        <h1 class=" text-5xl">A future needs a <span class="text-[#F6B21B]">knowledge</span>, Lets learn with us!</h1>
        <div class="h-[2px] bg-white w-[100%]"></div>
        <h1 class="text-[24px]">Frame<span class="text-[#F6B21B]">Acade</span> is a website that contains online
            learning about frameworks that are currently popular!</h1>
    </div>
</x-guest-layout>
