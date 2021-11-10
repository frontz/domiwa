<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-600 leading-tight">
            {{ $flat->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{--                    Tutaj p-10 - ustawiłem margines od krawędzi karty--}}
                    <div class="bg-orange-200">
                        <!-- component -->
                        <div class="py-1 text-center">
                            <span class="text-xl"><b>{{ $flat->title }}</b> - szczegóły oferty </span>
                        </div>
                        <div class="py-1 text-center">
                            <span class="italic">{{ $flat->description }}</span>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                            <div class="sm:col-span-6">
                                <div class="py-1">
                                    <span>Województwo: {{ $flat->voivodeship }}, powiat: {{ $flat->district }},<br> gmina: {{$flat->commune }}, ulica: {{ $flat->street }}, miasto: <b>{{$flat->city}}</b></span>
                                </div>
                                <div class="py-1">
                                    <span class="text-lg" style="display: inline-block;">Powierzchnia: <b>{{ $flat->area }} m<sup>2</sup></b></span></span>
                                </div>
                                <div class="py-1">
                                    <span class="text-lg">Cena: <b>{{ $flat->price }} PLN</b></span>
                                </div>
                                <div class="py-1">
                                    <span class="text-lg">Cena za m<sup>2</sup>: <b>{{ round($flat->price / $flat->area) }} PLN</b></span>
                                </div>
                                <div class="py-1">
                                    <span>Liczba pokoi: <b>{{ $flat->rooms_nr }}</b></span>
                                </div>
                                <div class="py-1">
                                    <span>Liczba telefonów: <b>{{ $flat->phone_nr }}</b></span>
                                </div>
                                <div class="py-1">
                                    <span>Piętro: <b>{{ $flat->floor }}</b></span>
                                </div>
                                <div class="py-1">
                                    <span class="text-lg">Liczba pięter: <b>{{ $flat->floor_nr }}</b></span>
                                </div>
                                <div class="py-1">
                                    <span class="text-lg">Rok budowy: <b>{{ $flat->year_build }}</b></span>
                                </div>
                            </div>

                            <div class="sm:col-span-6">
                                <div class="py-1">
                                    <span>Kuchnia:
                                        @foreach(json_decode($flat->kitchen_type) as $kitchen_type)
                                            <b>{{ $kitchen_type }}</b>,
                                        @endforeach
                                    </span>
                                </div>
                                <div class="py-1">
                                    <span>Media:
                                        @foreach(json_decode($flat->media) as $media)
                                            <b>{{ $media }}</b>,
                                        @endforeach
                                    </span>
                                </div>
                                <div class="py-1">
                                    <span>Ogrzewanie: <b>{{ $flat->heating }}</b></span>
                                </div>
                                <div class="py-1">
                                    <span>M-ce parkingowe: <b>{{ $flat->parking }}</b></span>
                                </div>
                                <div class="py-1">
                                    <span>Balkon: <b>{{ $flat->balcony }}</b></span>
                                </div>
                                <div class="py-1">
                                    <span>Piwnica: <b>{{ $flat->basement }}</b></span>
                                </div>
                                @if ($flat->lift === 1)
                                    <div class="py-1">
                                        <b>Winda</b>
                                    </div>
                                @endif
                                @if ($flat->furniture === 1)
                                    <div class="py-1">
                                        <b>Mieszkanie umeblowane</b>
                                    </div>
                                @endif
                                @if ($flat->fitted_kitchen === 1)
                                    <div class="py-1">
                                        <b>Kuchnia wyposażona</b>
                                    </div>
                                @endif
                                <div class="py-1">
                                    <span>Stan lokalu: <b>{{ $flat->condition }}</b></span>
                                </div>
                                @if ($flat->exclusivity === 1)
                                    <div class="py-1">
                                        <b>Mieszkanie na wyłączność</b>
                                    </div>
                                @endif
                                @if ($flat->closed_estate == 1)
                                    <div class="py-1">
                                        <b>Osiedle zamknięte</b>
                                    </div>
                                @endif
                                <div class="py-1">
                                    Kontakt do pośrednika:<br>
                                    tel: <b>{{ $flat->broker_phone }}</b>, mail: <b>{{ $flat->broker_email }}</b>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="container mx-auto px-4">

                        <section class="py-8">
                            <div class="flex flex-wrap -mx-4 -mb-8">
                                @foreach(json_decode($flat->images) as $image)
                                    <div class="md:w-1/4 px-2 mb-8"><img class="rounded shadow-md"
                                                                         src="{{ asset('/storage/' . $image) }}"
                                                                         style="width: 360px; height: 180px"></div>
                                @endforeach
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
