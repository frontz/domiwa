<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-600 leading-tight">
            Oferty działek
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
                            <form action="{{ route('plots.index') }}" method="POST">
                                @csrf
                                <button type="submit" name="paginator"
                                        class="transition duration-200 bg-blue-500 mt-4 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-blue-500
                                focus:ring-opacity-50 text-white py-2.5 px-2 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block float-right"
                                        value="1">
                                    <span class="inline-block mx-2">12</span>
                                </button>
                                <button type="submit" name="paginator"
                                        class="transition duration-200 bg-blue-500 mt-4 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-blue-500
                                focus:ring-opacity-50 text-white py-2.5 px-2 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block float-right mr-2"
                                        value="2">
                                    <span class="inline-block mx-2">24</span>
                                </button>
                                <button type="submit" name="paginator"
                                        class="transition duration-200 bg-blue-500 mt-4 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-blue-500
                                focus:ring-opacity-50 text-white py-2.5 px-2 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block float-right mr-2"
                                        value="1000">
                                    <span class="inline-block mx-2">all</span>
                                </button>
                            </form>
                        </div>

                        <!-- component -->
                        <div class="flex w-screen">
                            <!-- Resice the preview panel to check the responsiveness -->

                            <!-- Component Start -->

                            <div class="grid xl:grid-cols-3 md:grid-cols-2 grid-cols-1 max-w-6xl">
                                @foreach($plots as $plot)
                                    <div class="bg-gray-200 rounded-lg p-4 ml-4 text-center mb-4">
                                        <div class="h-40 bg-gray-400 rounded-lg">
                                            @if($plot->images !== null)
                                                <img src="{{ asset('storage/' . json_decode($plot->images, true)[0]) }}"
                                                     class="rounded flex" style="width: 350px; height: 200px">
                                            @endif
                                        </div>
                                        <div class="mt-16">
                                            <h4 class="text-xl font-semibold">{{ $plot->title }}</h4>
                                            <p class="text-sm mt-2">{{ $plot->description }}</p>
                                            <p class="text-sm mt-2 text-lg">{{ $plot->city }}</p>
                                            <p class="text-sm mt-2 font-bold">Powierzchnia: {{ $plot->area }}
                                                m<sup>2</sup></p>
                                            <p class="text-sm mt-2 italic">Cena: {{ number_format($plot->price, 0 , ',', ' ') }} PLN</p>

                                            @if(Auth::guest())
                                                <a href="{{ route('plots.show', $plot->id) }}">
                                                    <button
                                                        class="transition duration-200 bg-blue-500 mt-4 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-blue-500 focus:ring-opacity-50 text-white py-2.5 px-2 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                                                        <span class="inline-block mx-2">Szczegóły >></span>
                                                    </button>
                                                </a>
                                            @else
                                                <a href="{{ route('plots.edit', $plot->id) }}">
                                                    <button
                                                        class="transition duration-200 bg-green-500 mt-4 hover:bg-green-600 focus:bg-blue-700 focus:shadow-sm focus:ring-blue-500 focus:ring-opacity-50 text-white py-2.5 px-2 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                                                        <span class="inline-block mx-2">Edytuj</span>
                                                    </button>
                                                </a>
                                                <a href="{{ route('plots.delete', $plot->id) }}">
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
                            {{ $plots->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>


