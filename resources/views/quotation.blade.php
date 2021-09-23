<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-600 leading-tight">
            Wyceń nieruchomość
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{--                    Tutaj p-10 - ustawiłem margines od krawędzi karty--}}
                    <div class="p-10 bg-orange-200">
                        <div class="bg-white rounded-lg md:flex">
                            <img src="{{ URL::to('/img/quotation.jpg') }}" alt="Wnętrze"
                                 class="md:w-1/2 rounded-t-lg md:rounded-l-lg md:rounded-t-none"/>
                            <div class="p-6">
                                <h2 class="font-bold text-xl md:text-3xl mb-2 text-orange-700">Wyceń nieruchomość z
                                    rzeczoznawcą</h2>
                                <p class="mt-8 text-justify">
                                    Współpracujący z naszym biurem rzeczoznawca majątkowy dokonuje wyceny nieruchomości
                                    gruntowej, nieruchomości gruntowej zabudowanej domem jednorodzinnym lub mieszkania.
                                </p>
                                <p class="mt-5 text-justify">
                                    Wyceny te wykonywane są wyłącznie przez wykwalifikowanego, posiadającego niezbędne w
                                    tej kwestii uprawnienia, rzeczoznawcę majątkowego.
                                </p>
                            </div>
                        </div>
                        <div>
                            <p class="mt-6 text-justify mr-4">
                                W czasie dokonywania wyceny nieruchomości w formie operatu szacunkowego, pod uwagę brane
                                są trzy aspekty:
                            <ul class="list-disc ml-5">
                                <li>aktualnie obowiązujące na terenie naszego kraju przepisy prawne</li>
                                <li>standardy zawodowe</li>
                                <li>należyta staranność oraz dokładność, wynikające z zawodowego charakteru wykonywanych
                                    czynności.
                                </li>
                            </ul>
                            </p>
                            <p class="mt-6 text-justify mr-4">
                                Wycena nieruchomości dokonywana jest celem określenia wartości nieruchomości jako
                                przedmiotu prawa własności oraz innych praw do nieruchomości.
                                Przed przystąpieniem do procesu wyceny nieruchomości , rzeczoznawca przeprowadza wizję
                                lokalną, która umożliwi mu w późniejszym czasie wykonanie rzetelnej, precyzyjnej wyceny.
                            </p>
                            <p class="mt-6 text-justify mr-4">
                                Specjalista współpracujący z naszym biurem zajmie się również następującymi aspektami:
                            <ul class="list-disc ml-5">
                                <li>określeniem stanu nieruchomości z uwzględnieniem jej stanu prawnego</li>
                                <li> analizą rynku</li>
                                <li>oceną zużycia technicznego, a także funkcjonalnego obiektu</li>
                                <li>dokumentacją fotograficzną</li>
                                <li>w ściśle określonych przypadkach pomiarami inwentaryzacyjnymi</li>
                            </ul>
                            </p>
                            <p class="mt-6 text-justify mr-4">
                                Wizja lokalna, wszystkie czynności wykonywane przez współpracującego z nami rzeczoznawcę
                                majątkowego, a także wycena nieruchomości dokonywane są na obszarze województwa
                                mazowieckiego.
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
