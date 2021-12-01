<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-600 leading-tight">
            {{ $house->title }}
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
                            <span class="text-xl"><b>{{ $house->title }}</b> - szczegóły oferty </span>
                        </div>
                        <div class="py-1 text-center">
                            <span class="italic">{{ $house->description }}</span>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                            <div class="sm:col-span-6">
                                <div class="py-1">
                                    <span>Województwo: {{ $house->voivodeship }}, powiat: {{ $house->district }},<br> gmina: {{$house->commune }}, ulica: {{ $house->street }}, miasto: <b>{{$house->city}}</b></span>
                                </div>
                                <div class="py-1">
                                    <span class="text-lg" style="display: inline-block;">Powierzchnia: <b>{{ $house->area }} m<sup>2</sup></b></span></span>
                                </div>
                                <div class="py-1">
                                    <span
                                        class="text-lg">Cena: <b>{{ number_format($house->price, 0 , ',', ' ') }} PLN</b></span>
                                </div>
                                <div class="py-1">
                                    <span class="text-lg">Cena za m<sup>2</sup>: <b>{{ number_format($house->price / $house->area, 0, ',', ' ') }} PLN</b></span>
                                </div>
                                <div class="py-1">
                                    <span>Liczba pokoi: <b>{{ $house->rooms_nr }}</b></span>
                                </div>
                                <div class="py-1">
                                    <span>Liczba pomieszczeń: <b>{{ $house->utility_rooms_nr }}</b></span>
                                </div>
                                <div class="py-1">
                                    <span>Liczba pomieszczeń: <b>{{ $house->bathrooms_nr }}</b></span>
                                </div>
                                <div class="py-1">
                                    <span class="text-lg">Liczba pięter: <b>{{ $house->floors_nr }}</b></span>
                                </div>
                                <div class="py-1">
                                    <span class="text-lg">Liczba pięter: <b>{{ $house->floors_nr }}</b></span>
                                </div>
                                <div class="py-1">
                                    <span class="text-lg">Typ budowy: <b>{{ $house->building_type }}</b></span>
                                </div>
                            </div>

                            <div class="sm:col-span-6">

                                @if ($house->heating === 1)
                                    <div class="py-1">
                                        <b>Z ogrzewaniem</b>
                                    </div>
                                @endif
                                @if(isset($house->driveway))
                                    <div class="py-1">
                                        <span>Droga dojazdowa: <b>{{ $house->driveway }}</b></span>
                                    </div>
                                @endif
                                @if(isset($house->balcony))
                                    <div class="py-1">
                                        @if($house->balcony === 1)
                                            <span>Balkon: <b>Tak</b></span>
                                        @else
                                            <b>Nie</b>
                                        @endif
                                    </div>
                                @endif
                                @if ($house->water_connection)
                                    <div class="py-1">
                                        <span>Podłączenie wody: <b>{{ $house->water_connection }}</b></span>
                                    </div>
                                @endif
                                @if (isset($house->decorated_garden))
                                    <div class="py-1">
                                        @if($house->decorated_garden === 1)
                                            <span>Ogród urządzony: <b>Tak</b></span>
                                        @else
                                            <b>Nie</b>
                                        @endif
                                    </div>
                                @endif
                                @if (isset($house->electricity))
                                    <div class="py-1">
                                        @if($house->electricity === 1)
                                            <span>Prąd: <b>Tak</b></span>
                                        @else
                                            <b>Nie</b>
                                        @endif
                                    </div>
                                @endif
                                @if (isset($house->power))
                                    <div class="py-1">
                                        @if($house->power === 1)
                                            <span>Siła: <b>Tak</b></span>
                                        @else
                                            <b>Nie</b>
                                        @endif
                                    </div>
                                @endif
                                @if(isset($house->sewers))
                                    <div class="py-1">
                                        <span>Kanalizacja: <b>{{ $house->sewers }}</b></span>
                                    </div>
                                @endif
                                @if(isset($house->roof_type))
                                    <div class="py-1">
                                        <span>Typ dachu: <b>{{ $house->roof_type }}</b></span>
                                    </div>
                                @endif
                                @if(isset($house->condition))
                                    <div class="py-1">
                                        <span>Stan budynku: <b>{{ $house->condition }}</b></span>
                                    </div>
                                @endif
                                @if(isset($house->exclusivity))
                                    <div class="py-1">
                                        @if($house->exclusivity === 1)
                                            <span>Na wyłączność: <b>Tak</b></span>
                                        @else
                                            <b>Nie</b>
                                        @endif
                                    </div>
                                @endif
                                @if(isset($house->property_form))
                                    <div class="py-1">
                                        <span>Forma własności: <b>{{ $house->property_form }}</b></span>
                                    </div>
                                @endif
                                <div class="py-1">
                                    Kontakt do pośrednika:<br>
                                    tel: <b>{{ $house->broker_phone }}</b>, mail:
                                    <b>{{ $house->broker_email }}</b>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="container mx-auto px-4">

                        <section class="py-8">
                            <div class="flex flex-wrap -mx-4 -mb-8">
                                @foreach(json_decode($house->images) as $image)
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
