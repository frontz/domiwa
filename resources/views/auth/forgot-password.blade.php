<x-guest-layout>
    {{--    <x-auth-card>--}}
    {{--        <x-slot name="logo">--}}
    {{--            <a href="/">--}}
    {{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
    {{--            </a>--}}
    {{--        </x-slot>--}}

    {{--        <div class="mb-4 text-sm text-gray-600">--}}
    {{--            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}--}}
    {{--        </div>--}}

    {{--        <!-- Session Status -->--}}
    {{--        <x-auth-session-status class="mb-4" :status="session('status')" />--}}

    {{--        <!-- Validation Errors -->--}}
    {{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

    {{--        <form method="POST" action="{{ route('password.email') }}">--}}
    {{--            @csrf--}}

    {{--            <!-- Email Address -->--}}
    {{--            <div>--}}
    {{--                <x-label for="email" :value="__('Email')" />--}}

    {{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
    {{--            </div>--}}

    {{--            <div class="flex items-center justify-end mt-4">--}}
    {{--                <x-button>--}}
    {{--                    {{ __('Email Password Reset Link') }}--}}
    {{--                </x-button>--}}
    {{--            </div>--}}
    {{--        </form>--}}
    {{--    </x-auth-card>--}}


    <div class="min-h-screen bg-gray-100 flex flex-col justify-center sm:py-12">
        <div class="p-10 xs:p-0 mx-auto md:w-full md:max-w-md">
            <h1 class="font-bold text-center text-2xl mb-5">
                <a href="/">
                    <img src="{{ URL::to('/img/logo.jpg') }}" alt="no logo"
                         style="width: 200px; display: block; margin: auto">
                </a>
            </h1>
            <div class="bg-white shadow w-full rounded-lg divide-y divide-gray-200">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="px-5 py-7">

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')"/>

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

                        <div class="mb-4 text-sm text-gray-600">
                            Zapomniałeś hasła? Nie ma problemu. Podaj, proszę swojego maila a my wyślemy Ci link do
                            ustawienia nowego hasła.
                        </div>
                        <label class="font-semibold text-sm text-gray-600 pb-1 block">E-mail</label>
                        <input type="email" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" type="email"
                               name="email" :value="old('email')" required autofocus>

                        <button
                            class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                            <span class="inline-block mr-2">Link do zresetowania hasła</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor"
                                 class="w-4 h-4 inline-block">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
