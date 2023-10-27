<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

            <div>
                <x-label for="fname" value="{{ __('Name') }}" />
                <x-input id="fname" class="block w-full mt-1" type="text" name="fname" :value="old('fname')" required autofocus autocomplete="fname" />
            </div>

            <div>
                <x-label for="name" value="Lname" />
                <x-input id="lname" class="block w-full mt-1" type="text" name="lname" :value="old('lname')" required autofocus autocomplete="lname" />
            </div>

            <div>
                <x-label for="phone" value="phone" />
                <x-input id="phone" class="block w-full mt-1" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            </div>

            <div>
                <x-label for="address" value="address" />
                <x-input id="address" class="block w-full mt-1" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
            </div>

            <div>
                <x-label for="age" value="age" />
                <x-input id="age" class="block w-full mt-1" type="number" name="age" :value="old('age')" required autofocus autocomplete="age" />
            </div>

            <div>
                <x-label for="gender" value="gender" />

                    <input type="radio" id="check-male" name="gender" value="m"  />
                    <label for="check-male">male</label>

                    <input type="radio" id="check-female" name="gender" value="f" />
                    <label for="check-female">Female</label>
                  </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>


            <div>
                <x-label for="image" value="Chose Image" />
                <x-input id="image" class="block w-full mt-1" type="file" name="image" :value="old('image')" required autofocus autocomplete="address" />
            </div>


            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>