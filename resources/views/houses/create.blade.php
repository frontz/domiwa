<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-600 leading-tight">
            Dodaj ofertę Dom
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{--                    Tutaj p-10 - ustawiłem margines od krawędzi karty--}}
                        <section class="relative bg-white min-w-screen animation-fade animation-delay">
                            <div class="container h-full max-w-5xl mx-auto overflow-hidden">
                                <div class="h-full sm:flex">
                                    <p>Dodawanie oferty Dom</p>
                                    <div class="flex items-center justify-center w-full p-10 bg-white">
{{--                                        <form action="{{ route('houses.store') }}" method="POST" class="w-full">--}}
{{--                                            @csrf--}}
{{--                                            <div class="pb-3">--}}
{{--                                                @error('title')--}}
{{--                                                <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>--}}
{{--                                                @enderror--}}
{{--                                                <input name="title"--}}
{{--                                                       class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"--}}
{{--                                                       type="text" placeholder="Tytuł" value="{{ old('title') }}"/>--}}
{{--                                            </div>--}}

{{--                                            <div class="py-3">--}}
{{--                                                @error('description')--}}
{{--                                                <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>--}}
{{--                                                @enderror--}}
{{--                                                <input name="description"--}}
{{--                                                       class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"--}}
{{--                                                       type="text" placeholder="Opis" value="{{ old('description') }}"/>--}}
{{--                                            </div>--}}

{{--                                            <div class="py-3">--}}
{{--                                                @error('localization')--}}
{{--                                                <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>--}}
{{--                                                @enderror--}}
{{--                                                <input name="localization"--}}
{{--                                                       class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"--}}
{{--                                                       type="text" placeholder="Lokalizacja" value="{{ old('localization') }}"/>--}}
{{--                                            </div>--}}

{{--                                            <div class="py-3">--}}
{{--                                                @error('size')--}}
{{--                                                <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>--}}
{{--                                                @enderror--}}
{{--                                                <input name="size"--}}
{{--                                                       class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"--}}
{{--                                                       type="number" placeholder="Powierzchnia" value="{{ old('size') }}"/>--}}
{{--                                            </div>--}}

{{--                                            <div class="py-3">--}}
{{--                                                @error('place')--}}
{{--                                                <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>--}}
{{--                                                @enderror--}}
{{--                                                <input name="place"--}}
{{--                                                       class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"--}}
{{--                                                       type="number" placeholder="Wielkość działki" value="{{ old('place') }}"/>--}}
{{--                                            </div>--}}

{{--                                            <div class="py-3">--}}
{{--                                                @error('price')--}}
{{--                                                <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>--}}
{{--                                                @enderror--}}
{{--                                                <input name="price"--}}
{{--                                                       class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"--}}
{{--                                                       type="number" placeholder="Cena" value="{{ old('price') }}"/>--}}
{{--                                            </div>--}}

{{--                                            <div class="pt-3">--}}
{{--                                                <button--}}
{{--                                                    class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">--}}
{{--                                                    <span class="inline-block mr-2">Dodaj</span>--}}
{{--                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"--}}
{{--                                                         stroke="currentColor"--}}
{{--                                                         class="w-4 h-4 inline-block">--}}
{{--                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                                                              d="M17 8l4 4m0 0l-4 4m4-4H3"/>--}}
{{--                                                    </svg>--}}
{{--                                                </button>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}
                                    </div>
                                </div>
                            </div>
                        </section>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>




