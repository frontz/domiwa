<div>
    <section class="relative py-6 bg-white bg-blue-50 min-w-screen animation-fade animation-delay">
        <div class="container h-full max-w-5xl mx-auto overflow-hidden rounded-lg shadow">
            @if ($success)
                <div class="inline-flex w-full ml-3 overflow-hidden bg-white rounded-lg shadow-sm">
                    <div class="flex items-center justify-center w-12 bg-green-500">
                    </div>
                    <div class="px-3 py-2 text-left">
                        <span class="font-semibold text-green-500">Sukces!</span>
                        <p class="mb-1 text-sm leading-none text-gray-500">{{ $success }}</p>
                    </div>
                </div>
            @endif
            <div class="h-full sm:flex">
                <div class="flex items-center justify-center w-full p-10 bg-white">
                    <form wire:submit.prevent="contactFormSubmit" action="/contact" method="POST" class="w-full">
                        @csrf
                        <div class="pb-3">
                            @error('email')
                            <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>
                            @enderror
                            <input wire:model="email" class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline" type="text" placeholder="Email" name="email" value="{{ old('email') }}" />
                        </div>
                        <div class="py-3">
                            @error('name')
                            <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>
                            @enderror
                            <input wire:model="name" class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline" type="text" placeholder="Imię" name="name" value="{{ old('name') }}" />
                        </div>
                        <div class="py-3">
                            @error('comment')
                            <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>
                            @enderror
                            <textarea wire:model="comment" row="4" class="border rounded-lg h-40 px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline" name="comment" placeholder="Twoja wiadomość...">{{ old('comment') }}</textarea>
                        </div>
                        <div class="pt-3">
                            <button
                                class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                                <span class="inline-block mr-2">Wyślij</span>
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
    </section>
</div>
