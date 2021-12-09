<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-600 leading-tight">
            Oferty mieszkań
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="bg-orange-200">
                        <div class="w-full p-4 float-right">
                            @include('layouts.flash-message')
                            @include('layouts.filter')
                        </div>

                        <!-- component -->
                        <div class="flex w-screen">
                            <div class="max-w-6xl">
                                @if(sizeof($flats) === 0)
                                    @include('layouts.nothing-found')
                                @endif
                            </div>
                            <div class="grid xl:grid-cols-3 md:grid-cols-2 grid-cols-1 max-w-6xl">
                                @foreach($flats as $flat)
                                    <div class="bg-gray-200 rounded-lg p-4 ml-4 text-center mb-4">
                                        <div class="h-40 bg-gray-400 rounded-lg">
                                            <img src="{{ asset('storage/' . json_decode($flat->images, true)[0]) }}"
                                                 class="rounded flex" style="width: 350px; height: 200px">
                                        </div>
                                        <div class="mt-16">
                                            <h4 class="text-xl font-semibold">{{ $flat->title }}</h4>
                                            <p class="text-sm mt-2">{{ $flat->description }}</p>
                                            <p class="text-sm mt-2 text-lg">{{ $flat->city }}</p>
                                            <p class="text-sm mt-2 font-bold">Powierzchnia: {{ $flat->area }}
                                                m<sup>2</sup></p>
                                            <p class="text-sm mt-2 italic">
                                                Cena: {{ number_format($flat->price, 0 , ',', ' ') }} PLN</p>

                                            @if(Auth::guest())
                                                <a href="{{ route('flats.show', $flat->id) }}">
                                                    <button
                                                        class="transition duration-200 bg-blue-500 mt-4 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-blue-500 focus:ring-opacity-50 text-white py-2.5 px-2 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                                                        <span class="inline-block mx-2">Szczegóły >></span>
                                                    </button>
                                                </a>
                                            @else
                                                <a href="{{ route('flats.edit', $flat->id) }}">
                                                    <button
                                                        class="transition duration-200 bg-green-500 mt-4 hover:bg-green-600 focus:bg-blue-700 focus:shadow-sm focus:ring-blue-500 focus:ring-opacity-50 text-white py-2.5 px-2 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                                                        <span class="inline-block mx-2">Edytuj</span>
                                                    </button>
                                                </a>
                                                <a href="{{ route('flats.delete', $flat->id) }}">
                                                    @csrf
                                                    <button
                                                        class="transition duration-200 bg-red-500 mt-4 hover:bg-red-600 focus:bg-blue-700 focus:shadow-sm focus:ring-blue-500 focus:ring-opacity-50 text-white py-2.5 px-2 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                                                        <span class="inline-block mx-2">Usuń</span>
                                                    </button>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="p-6">
                            {{ $flats->appends($next_query)->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>


