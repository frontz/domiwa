<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-600 leading-tight">
            Skredytuj nieruchomość
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{--                    Tutaj p-10 - ustawiłem margines od krawędzi karty--}}
                    <div class="p-10 bg-orange-200">
                        <div class="bg-white rounded-lg md:flex">
                            <img src="{{ URL::to('/img/credit.jpg') }}" alt="Wnętrze"
                                 class="md:w-1/2 rounded-t-lg md:rounded-l-lg md:rounded-t-none"/>
                            <div class="p-6">
                                <h2 class="font-bold text-xl md:text-3xl mb-2 text-orange-700">Skredytuj z nami swoją
                                    nieruchomość</h2>
                                <p class="mt-8 text-justify">
                                    Nasz ekspert finansowy specjalizuje się w produktach bankowości detalicznej –
                                    kredytach hipotecznych, gotówkowych oraz firmowych. Współpracuje z pierwszą w Polsce
                                    instytucją pośrednictwa finansowego, która przystąpiła do Systemu Standardów
                                    Kwalifikacji w Bankowości Polskiej.
                                </p>
                                <p class="mt-5 text-justify">
                                    Doświadczenie, szeroka oferta produktów bankowych, a także działanie zgodnie ze
                                    standardami banków sprawiają, że każdy produkt lub usługa dobrane są indywidualnie
                                    do potrzeb Klienta i spełniają Jego oczekiwania.
                                </p>
                            </div>
                        </div>
                        <div>
                            <p class="mt-6 text-justify mr-4">
                                Nasz ekspert przeprowadzi Państwa przez cały proces kredytowy, pomoże sprawnie i bez
                                stresu przejść przez proces uzyskania kredytu. Wesprze Państwa również w skompletowaniu
                                wszelkich niezbędnych dokumentów, a wniosek w banku będzie przeze niego na bieżąco
                                monitorowany.
                            </p>
                            <p class="mt-6 text-justify mr-4">
                                Nasz ekspert finansowy współpracuje z bankami wiodącymi prymm na rynku kredytów
                                hipotecznych: mBank S.A., PKO Bank Polski S.A., BNP Paribas S.A., Bank Pekao S.A., Pekao
                                Bank Hipoteczny, Bank Pocztowy S.A., Santander Bank Polska S.A., Eurobank, ING Bank
                                Śląski, Alior Bank S.A.
                            </p>
                        </div>
                        <h2 class="font-bold text-xl md:text-xl mt-6 mb-2 text-red-400">Usługa jest bezpłatna!</h2>
                        <div class="mb-7">
                            <button type="button"
                                    class="bg-blue-500 hover:bg-blue-700 text-white mt-5 py-2 px-3 mr-5 font-semibold float-right rounded-full">
                                <a href="{{ url('contact') }}">Skontaktuj się</a>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
