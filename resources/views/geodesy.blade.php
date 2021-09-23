<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-600 leading-tight">
            Geodezja i kartografia
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{--                    Tutaj p-10 - ustawiłem margines od krawędzi karty--}}
                    <div class="p-10 bg-orange-200">
                        <div class="bg-white rounded-lg md:flex">
                            <img src="{{ URL::to('/img/geodesy.jpg') }}" alt="Geodezja"
                                 class="md:w-1/2 rounded-t-lg md:rounded-l-lg md:rounded-t-none"/>
                            <div class="p-6">
                                <h2 class="font-bold text-xl md:text-3xl mb-2 text-orange-700">Geodezja i
                                    kartografia</h2>
                                <p class="mt-8 text-justify text-blue-400 text-base italic">
                                    Planujesz rozpoczęcie budowy wymarzonego domu i potrzebny Ci pomiar działki? Chcesz
                                    wyznaczyć granice zakupionej nieruchomości? A może interesuje Cię inwentaryzacja
                                    powykonawcza budynku?
                                </p>
                                <p class="mt-5 text-justify">
                                    Współpracujący z naszym biurem geodeta świadczy kompleksowe usługi geodezyjne dla
                                    Klientów ze wszystkich miejscowości województwa mazowieckiego.
                                    Cechuje go rzetelność, terminowość, jak również bezbłędna dokładność, dzięki którym
                                    możesz mieć pewność profesjonalnego wykonania usługi.
                                </p>
                            </div>
                        </div>
                        <div>
                            <p class="mt-6 text-justify mr-4">
                                Nasz partner w zakresie usług geodezyjnych specjalizuje się w wykonywaniu pomiarów
                                geodezyjnych dla Klientów indywidualnych, przedsiębiorców, instytucji, a także
                                właścicieli budynków użyteczności publicznej. Usługi geodety są niezbędne przy
                                planowaniu rozpoczęcia budowy dowolnego rodzaju obiektu. Specjalista musi porównać dane
                                zamieszczone w dokumentacji ze stanem faktycznym, wykonać stosowne obliczenia, zmierzyć
                                powierzchnię terenu i stworzyć mapę do celów projektowych.
                            </p>
                            <p class="mt-6 text-justify mr-4">
                                Potrzebujesz pomocy sprawdzonego geodety skontaktuj się z nami.
                            </p>
                        </div>
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
