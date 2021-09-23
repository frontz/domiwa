<div>
    <section class="relative bg-white min-w-screen animation-fade animation-delay">
        <div class="container h-full max-w-5xl mx-auto overflow-hidden">
            <div class="h-full sm:flex">
                <div class="flex items-center justify-center w-full p-10 bg-white">
                    <form wire:submit.prevent="reportFormSubmit" action="/report" method="POST" class="w-full">
                        @csrf
                        <div class="py-3">
                            @error('title')
                            <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>
                            @enderror
                            <input wire:model="title"
                                   class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                   type="text" placeholder="Tytuł ogłoszenia" name="title" value="{{ old('title') }}"/>
                        </div>
                        <div class="pb-3">
                            @error('email')
                            <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>
                            @enderror
                            <input wire:model="email"
                                   class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                   type="text" placeholder="Email" name="email" value="{{ old('email') }}"/>
                        </div>
                        <div class="py-3">
                            @error('description')
                            <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>
                            @enderror
                            <textarea wire:model="description" row="4"
                                      class="border rounded-lg h-40 px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                      name="description" placeholder="Opis...">{{ old('description') }}</textarea>
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
            @if ($success)
                <div class="flex items-center justify-center px-10">
                    <div class="inline-flex w-full overflow-hidden bg-gray-50 rounded-lg shadow-md">
                        <div class="flex items-center justify-center w-12 bg-green-500">
                        </div>
                        <div class="px-3 py-2 text-left">
                            <p class="mb-1 text-sm leading-none text-gray-500">{{ $success }}</p>
                            <p class="mb-1 text-sm leading-none text-gray-500">Dziękujemy za Twoje zgłoszenie, odpowiemy jak
                                najszybciej!</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
</div>

