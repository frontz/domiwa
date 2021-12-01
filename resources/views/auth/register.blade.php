<x-guest-layout>
    <div class="min-h-screen bg-gray-100 flex flex-col justify-center sm:py-12">
        <div class="p-10 xs:p-0 mx-auto md:w-full md:max-w-md">
            <h1 class="font-bold text-center text-2xl mb-5">
                <a href="/">
                    <img src="{{ URL::to('/img/domiwa-logo.png') }}" alt="no logo"
                         style="width: 200px; display: block; margin: auto">
                </a>
            </h1>
            <div class="bg-white shadow w-full rounded-lg divide-y divide-gray-200">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="px-5 py-7">

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')"/>

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

                        <label class="font-semibold text-sm text-gray-600 pb-1 block">Imię</label>
                        <input class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                               type="text" name="name" value="{{ old('name') }}" required/>
                        <label class="font-semibold text-sm text-gray-600 pb-1 block">E-mail</label>
                        <input class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                               type="text" name="email" value="{{ old('email') }}" required/>
                        <label class="font-semibold text-sm text-gray-600 pb-1 block">Hasło</label>
                        <input type="password" class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-6 text-sm w-full outline-none focus:shadow-outline"
                               name="password" required autocomplete="new-password"/>
                        <label class="font-semibold text-sm text-gray-600 pb-1 block">Potwierdź hasło</label>
                        <input type="password" class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-6 text-sm w-full outline-none focus:shadow-outline"
                               name="password_confirmation" required/>
                        <button
                            class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                            <span class="inline-block mr-2">Rejestruj</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor"
                                 class="w-4 h-4 inline-block">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </button>
                    </div>
                    <div class="py-5">
                        <div class="grid grid-cols-2 gap-1">
                            <div class="text-center sm:text-left whitespace-nowrap">
                                @if (Route::has('password.request'))
                                    <label for="forgot_pass" class="inline-flex items-center">
                                        <a class="ml-6 text-sm text-gray-600"
                                           href="{{ route('login') }}" style="margin-right: 10px">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor" class="w-4 h-4 inline-block align-text-top">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"/>
                                            </svg>
                                            Zarejestrowany?
                                        </a>
                                    </label>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>


