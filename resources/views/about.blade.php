<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-600 leading-tight">
            O nas
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
{{--                    Tutaj p-10 - ustawiłem margines od krawędzi karty--}}
                    <div class="p-10 bg-orange-200">

                        <div class="bg-white rounded-lg md:flex">
                            <img src="{{ URL::to('/img/about.jpg') }}" alt="Laptop on Desk" class="md:w-1/3 rounded-t-lg md:rounded-l-lg md:rounded-t-none" />
                            <div class="p-6">
                                <h2 class="font-bold text-xl md:text-3xl mb-2 text-orange-700">O nas</h2>
                                <p class="text-orange-700">
                                    Nasza firma specjalizuje się w pośrednictwie w sprzedaży  nieruchomości, przede wszystkim mieszkań, domów, działek i lokali użytkowych.
                                    Obsługa naszej firmy w tym zakresie jest kompleksowa: począwszy od wizytacji i wyceny nieruchomości po przeprowadzenie całej procedury jej sprzedaży.
                                    Działamy na terenie całego województwa mazowieckiego, w szczególności obsługujemy klientów z okolic Radzymina, Wołomina, Kobyłki, Marek, Ząbek,
                                    Zielonki i Legionowa a także Warszawy Białołęki, Targówka, Pragi Północ, Pragi Południe, Żoliborza, Mokotowa, Woli i Ochoty.
                                </p>
                                <p style="margin-top: 20px">
                                    Zajmujemy się również, na życzenie Klienta, sprzedażą mieszkań na terenie całej Warszawy i okolic.
                                </p>

                            </div>

                        </div>
                        <p style="margin-top: 20px">
                            Nasz zespół składa się z profesjonalistów, którzy posiadają nie tylko niezbędne uprawnienia, ale też bogate doświadczenie w zakresie obrotu nieruchomościami,
                            doradztwa prawnego, zarządzania nieruchomościami i administracji.
                        </p>
                        <p>
                            Lubimy naszą pracę i wierzymy, że Państwo również będą zadowoleni z jej efektów.
                        </p>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 float-right rounded-full" style="margin: 10px 22px">
                            Sprawdź oferty
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
