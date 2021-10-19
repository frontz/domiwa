<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-red-600 leading-tight">
            Error
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{--                    Tutaj p-10 - ustawiłem margines od krawędzi karty--}}
                    <div class="p-10 bg-orange-200">
                        <p>Nie ma formularza dla wybranych parametrów</p>
                        <a href="{{ route('offers-management') }}">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 float-left rounded-full" style="margin: 10px 22px">
                                Powrót
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
