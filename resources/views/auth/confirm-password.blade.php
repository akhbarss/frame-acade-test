<x-guest-layout>


    <div class="min-h-screen w-1/2 flex flex-col items-center justify-center rounded-r-[35px]"
        style="background-color: #697899;">
        <h1 class="text-white text-5xl">Let's Start Learn With</h1>
        <a href="/">
            <img src="{{ url('/Logo.png') }}" alt="logo" />
        </a>
    </div>

    <div class="flex flex-col justify-center w-1/2 px-40">
        <div class="w-full">


            <div class="mb-4 text-sm text-gray-600">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </div>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="flex justify-end mt-4">
                    <x-primary-button>
                        {{ __('Confirm') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
