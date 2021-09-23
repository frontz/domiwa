<x-app-layout>

    <x-slot name="header" >
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Kontakt z nami
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="p-10 bg-orange-200">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <h3 class="text-center text-lg mb-8">DOMiwa
                                    Nieruchomości Mazowieckie</h3>
                                <ul class="">
                                    <li id="navi-2" class="leading-7 text-sm font-medium">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                             style="display: inline-block">
                                            <path fill-rule="evenodd"
                                                  d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                        <a href="#" class="text-gray-900 hover:text-gray-500 text-small">
                                            ul. Letniskowa 18 Radzymin / Ruda 05-255 Stare Załubice
                                        </a>
                                    </li>
                                    <li id="navi-2" class="leading-7 text-sm font-medium">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-900 h-5 w-5;"
                                             viewBox="0 0 20 20"
                                             fill="currentColor" style="display: inline-block">
                                            <path
                                                d="M14.414 7l3.293-3.293a1 1 0 00-1.414-1.414L13 5.586V4a1 1 0 10-2 0v4.003a.996.996 0 00.617.921A.997.997 0 0012 9h4a1 1 0 100-2h-1.586z"/>
                                            <path
                                                d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                        </svg>
                                        <a href="#" class="text-gray-900 hover:text-gray-500 text-small underline">
                                            782 077 003
                                        </a>
                                        <span>,&nbsp&nbsp</span>
                                        <a href="#" class="text-gray-900 hover:text-gray-500 text-small underline">
                                            722 020 599
                                        </a>

                                    </li>
                                    <li id="navi-2" class="leading-7 text-sm font-medium">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-900 h-5 w-5"
                                             viewBox="0 0 20 20"
                                             fill="currentColor" style="display: inline-block">
                                            <path
                                                d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                        </svg>
                                        <a href="mailto:biuro@domiwa.nieruchomosci.pl"
                                           class="text-gray-900 hover:text-gray-500 text-small underline">
                                            biuro@domiwa.nieruchomosci.pl
                                        </a>
                                    </li>
                                    <li id="navi-2" class="leading-7 text-sm font-medium">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                             fill="currentColor" style="display: inline-block">
                                            <path fill-rule="evenodd"
                                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                        <a href="#" class="text-gray-900 hover:text-gray-500 text-small">
                                            pon - pt: 10.00 do 18.00
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="text-center text-lg">Jeśli chcesz zadać
                                    pytanie, napisz do nas!</h3>
                                @livewire('contact-form')
                                @livewireScripts
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
