<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-600 leading-tight">
            Ubezpiecz nieruchomość
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{--                    Tutaj p-10 - ustawiłem margines od krawędzi karty--}}
                    <div class="p-10 bg-orange-200">
                        <div class="bg-white rounded-lg md:flex">
                            <img src="{{ URL::to('/img/insurance.jpg') }}" alt="Wnętrze"
                                 class="md:w-1/2 rounded-t-lg md:rounded-l-lg md:rounded-t-none"/>
                            <div class="p-6">
                                <h2 class="font-bold text-xl md:text-3xl mb-2 text-orange-700">Ubezpiecz swoją
                                    nieruchomość</h2>
                                <p class="mt-8 text-justify">
                                    Współpracujący z nami Agent ubezpieczeniowy, doświadczony i profesjonalny, wybierze
                                    dla Państwa najkorzystniejsze finansowo i zakresowo ubezpieczenie, dopasowane do
                                    potrzeb Państwa czy też Banku kredytującego nieruchomość.
                                    Ubezpieczenie takie ma bowiem za zadanie zabezpieczyć należący do Państwa dom lub
                                    mieszkanie i znajdujące się w nich przedmioty przed uszkodzeniem, zniszczeniem lub
                                    utratą na skutek kradzieży z włamaniem, rabunku lub określonych w umowie zdarzeń
                                    losowych.
                                </p>
                            </div>
                        </div>
                        <div></div>
                        <div class="mb-7">
                            <button type="button"
                                    class="bg-blue-500 hover:bg-blue-700 text-white mt-6 py-2 px-3 mr-5 font-semibold float-right rounded-full">
                                <a href="{{ url('contact') }}">Skontaktuj się</a>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
