<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-600 leading-tight">
            Bądź EKO, obniż rachunki
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{--                    Tutaj p-10 - ustawiłem margines od krawędzi karty--}}
                    <div class="p-10 bg-orange-200">
                        <div class="bg-white rounded-lg md:flex">
                            <img src="{{ URL::to('/img/eco.jpg') }}" alt="Wnętrze"
                                 class="md:w-1/2 rounded-t-lg md:rounded-l-lg md:rounded-t-none"/>
                            <div class="p-6">
                                <h2 class="font-bold text-xl md:text-3xl mb-2 text-orange-700">Bądź EKO, obniż
                                    rachunki</h2>
                                <p class="mt-8 text-justify">
                                    Dzięki unikalnej współpracy z naszym Partnerem możemy zaoferować Państwu atrakcyjne
                                    warunki wsparcia domowego budżetu dzięki energii odnawialnej. Nasz Partner zapewnia
                                    wykonanie usługi w przeciągu 2 do 3 tygodni od podpisania umowy i atrakcyjną zniżkę
                                    liczoną od kilowatopiku (KWP).
                                    Otrzymacie Państwo również wsparcie oraz doradztwo podczas całego procesu instalacji
                                    fotowoltaiki. Także w zakresie pozwoleń i formalności!
                                    Jeśli chcesz poznać szczegóły – skontaktuj się z nami.
                                </p>
                            </div>
                        </div>
                        <div>
                            <p class="mt-6 text-justify mr-4">
                                Nasz Partner jest firmą świadczącą kompleksowe usługi w zakresie Odnawialnych Źródeł
                                Energii (OZE). Sprzedaje i montuje systemy fotowoltaiczne (PV) zarówno zintegrowane z
                                siecią energetyczną (on-grid), jak również magazynujące energię (off-grid).
                                Ponadto w ofercie posiada: systemy solarne, pompy ciepła i wiatraki (choć tu skupia się
                                na pomiarach pod farmy wiatrowe i małych turbinach dla klienta indywidualnego).
                                Został autoryzowanym partnerem Bricoman w zakresie instalacji PV. Współpracuje również
                                z: Passive Instal, Alians OZE, Fotaika.
                            </p>
                            <p class="mt-6 text-justify mr-4">
                                To co ich wyróżnia, to sposób obsługi klienta – jedna osoba jest zarówno handlowcem jak
                                i montażystą.
                                Takie rozwiązanie gwarantuje komfort i szybką realizację klientowi, który kontaktuje się
                                tylko z jedną osobą w każdej sprawie, a dostawca podczas montażu nie napotyka na
                                trudności,
                                których odrębny sprzedawca nie przewidział, a które wpływają na czas pracy u klienta.
                            </p>
                        </div>
                        <div class="mb-7">
                            <button type="button"
                                    class="bg-blue-500 hover:bg-blue-700 text-white mt-3 py-2 px-3 mr-5 font-semibold float-right rounded-full">
                                <a href="{{ url('contact') }}">Skontaktuj się</a>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>

