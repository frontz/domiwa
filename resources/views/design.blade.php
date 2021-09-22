<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-600 leading-tight">
            Zaprojektuj swoje wnętrze
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{--                    Tutaj p-10 - ustawiłem margines od krawędzi karty--}}
                    <div class="p-10 bg-orange-200">
                        <div class="bg-white rounded-lg md:flex">
                            <img src="{{ URL::to('/img/design.jpg') }}" alt="Wnętrze"
                                 class="md:w-1/2 rounded-t-lg md:rounded-l-lg md:rounded-t-none"/>
                            <div class="p-6">
                                <h2 class="font-bold text-xl md:text-3xl mb-2 text-orange-700">Zaprojektuj swoje
                                    wnętrze</h2>
                                <p class="mt-8 text-justify">
                                    Współpracujemy z firmą IBP Custom w zakresie usług związanych z projektowaniem
                                    wnętrz, a także wykonywania usług stolarskich.
                                </p>
                                <p class="mt-5 text-justify">
                                    IBP Custom to team z Rzeszowa specjalizujący się w projektowaniu wnętrz oraz
                                    wykonywaniu prac stolarskich.
                                </p>
                                <p class="mt-5 text-justify">
                                    Firma posiada długoletnie doświadczenie zdobyte na ranku krajowym i zagranicznym.
                                </p>
                                <p class="mt-5 text-justify">
                                    Do każdego projektu firma ma podejście indywidualne, zgodne z potrzebami klientów.
                                    Dużą rolę przywiązuje do ergonomii wnętrza.
                                </p>
                            </div>
                        </div>
                        <div>
                            <p class="mt-6 text-justify mr-4">
                                Wnętrza zaprojektowane przez IBP Custom są ponadczasowe i przestrzenne, wykonane z
                                wielką dbałością o detale. Firma IBP Custom posiada dostęp do najbardziej prestiżowej oferty ceramiki oraz
                                armatury do wnętrz, dbając przy tym, aby jej klienci otrzymali korzystne rabaty.
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
