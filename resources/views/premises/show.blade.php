<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-600 leading-tight">
            {{ $premises->title }}
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
                            <span class="text-xl"><b>{{ $premises->title }}</b> - szczegóły oferty </span>
                        </div>
                        <div class="py-1 text-center">
                            <span class="italic">{{ $premises->description }}</span>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                            <div class="sm:col-span-6">
                                <div class="py-1">
                                    <span>Województwo: {{ $premises->voivodeship }}, powiat: {{ $premises->district }},<br> gmina: {{$premises->commune }}, ulica: {{ $premises->street }}, miasto: <b>{{$premises->city}}</b></span>
                                </div>
                                <div class="py-1">
                                    <span class="text-lg" style="display: inline-block;">Powierzchnia: <b>{{ $premises->area }} m<sup>2</sup></b></span></span>
                                </div>
                                <div class="py-1">
                                    <span class="text-lg">Cena: <b>{{ number_format($premises->price, 0 , ',', ' ') }} PLN</b></span>
                                </div>
                                <div class="py-1">
                                    <span class="text-lg">Cena za m<sup>2</sup>: <b>{{ number_format($premises->price / $premises->area, 0, ',', ' ') }} PLN</b></span>
                                </div>
                                <div class="py-1">
                                    <span>Liczba pokoi: <b>{{ $premises->rooms_nr }}</b></span>
                                </div>
                                <div class="py-1">
                                    <span>Liczba telefonów: <b>{{ $premises->phones_nr }}</b></span>
                                </div>
                                <div class="py-1">
                                    <span class="text-lg">Liczba pięter: <b>{{ $premises->floor_nr }}</b></span>
                                </div>
                                <div class="py-1">
                                    <span class="text-lg">Rok budowy: <b>{{ $premises->year_build }}</b></span>
                                </div>
                            </div>

                            <div class="sm:col-span-6">
                                @if(isset($premises->n_geo_x))
                                    <div class="py-1">
                                        <span>Geo X: <b>{{ $premises->n_geo_x }}</b></span>
                                    </div>
                                @endif
                                @if(isset($premises->n_geo_y))
                                    <div class="py-1">
                                        <span>Geo X: <b>{{ $premises->n_geo_y }}</b></span>
                                    </div>
                                @endif
                                @if(isset($premises->destination))
                                    <div class="py-1">
                                        <span>M-ce parkingowe: <b>{{ $premises->destination }}</b></span>
                                    </div>
                                @endif
                                @if(isset($premises->air_conditioning))
                                    <div class="py-1">
                                        <span>Balkon: <b>{{ $premises->air_conditioning }}</b></span>
                                    </div>
                                @endif
                                @if(isset($premises->security))
                                    <div class="py-1">
                                        <span>Piwnica: <b>{{ $premises->security }}</b></span>
                                    </div>
                                @endif
                                @if ($premises->office === 1)
                                    <div class="py-1">
                                        <b>Z biurem</b>,
                                        <b>{{ $premises->office_type  }}</b>
                                    </div>
                                @endif
                                @if ($premises->shopwindow === 1)
                                    <div class="py-1">
                                        <b>Ma witrynę</b>
                                    </div>
                                @endif
                                @if(isset($premises->water_connection))
                                    <div class="py-1">
                                        <span>Podłączenie wody: <b>{{ $premises->water_connection }}</b></span>
                                    </div>
                                @endif
                                @if(isset($premises->height))
                                    <div class="py-1">
                                        <span>Wysokość pomieszczeń: <b>{{ $premises->height }}</b></span>
                                    </div>
                                @endif
                                @if ($premises->intercom === 1)
                                    <div class="py-1">
                                        <b>Z domofonem</b>
                                    </div>
                                @endif
                                @if ($premises->exclusivity === 1)
                                    <div class="py-1">
                                        <b>Lokal na wyłączność</b>
                                    </div>
                                @endif
                                @if ($premises->property_form)
                                    <div class="py-1">
                                        Forma własności: <b>{{ $premises->property_form }}</b>
                                    </div>
                                @endif
                                <div class="py-1">
                                    Kontakt do pośrednika:<br>
                                    tel: <b>{{ $premises->broker_phone }}</b>, mail:
                                    <b>{{ $premises->broker_email }}</b>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="container mx-auto px-4">

                        <section class="py-8">
                            <div class="flex flex-wrap -mx-4 -mb-8">
                                @foreach(json_decode($premises->images) as $image)
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
