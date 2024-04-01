<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Họ Tên') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="dob" value="{{ __('Ngày Sinh') }}" />
                <x-input id="dob" class="block mt-1 w-full" type="date" name="dob" :value="old('dob')"
                    required autofocus autocomplete="dob" />
            </div>

            <div class="mt-4">
                <x-label for="gender" value="{{ __('Giới Tính') }}" />
                {{-- <x-input id="gender" class="block mt-1 w-full" type="text" name="gender" :value="old('gender')"
                    required autofocus autocomplete="gender" /> --}}
                <select id="gender" name="gender" required autofocus autocomplete="gender" :value="old('gender')"
                    class="form-select mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                    aria-label="Default select example">
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                </select>
            </div>

            <div class="mt-4">
                <x-label for="address" value="{{ __('Địa Chỉ') }}" />
                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')"
                    required autofocus autocomplete="address" />
            </div>

            <div class="mt-4">
                <x-label for="citizen_id" value="{{ __('Số Căn Cước Công Dân') }}" />
                <x-input id="citizen_id" class="block mt-1 w-full" type="text" name="citizen_id" :value="old('citizen_id')"
                    required autofocus autocomplete="citizen_id" />
            </div>

            <div class="mt-4">
                <x-label for="phone" value="{{ __('Số Điện Thoại') }}" />
                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')"
                    required autofocus autocomplete="phone" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' =>
                                        '<a target="_blank" href="' .
                                        route('terms.show') .
                                        '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                        __('Terms of Service') .
                                        '</a>',
                                    'privacy_policy' =>
                                        '<a target="_blank" href="' .
                                        route('policy.show') .
                                        '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                        __('Privacy Policy') .
                                        '</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
