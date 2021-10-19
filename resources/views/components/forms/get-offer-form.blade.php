<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-600 leading-tight">
            Lista ofert
        </h2>
    </x-slot>


    {{--    STWORZYC KOMPONENT Z KONTROLEREM--}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="p-10 bg-orange-200">

                        <form action="/get-form" method="POST" class="w-full">
                            @csrf

                            <div class="flex space-x-4">
                                <div class="flex-1 pt-6">

                                    <div class="relative">

                                        <select name="market_type"
                                                class="border rounded-lg px-3 bg-gray-100 border border-gray-400 py-2 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                            <option value="#">Wybierz rynek</option>
                                            <option value="primary">Pierwotny</option>
                                            <option value="secondary">Wtórny</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="flex-1 pt-6">

                                    <div class="relative">
                                        <select name="transaction_type"
                                                class="border rounded-lg px-3 bg-gray-100 border border-gray-400 py-2 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                            <option value="#">Typ transakcji</option>
                                            <option value="sale">Sprzedaż</option>
                                            <option value="rent">Wynajem</option>
                                            <option value="lease">Dzierżawa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="flex-1 pt-6">

                                    <div class="relative">
                                        <select name="property_type"
                                                class="border rounded-lg px-3 bg-gray-100 border border-gray-400 py-2 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                            <option value="#">Typ nieruchomości</option>
                                            <option value="flat">Mieszkanie</option>
                                            <option value="house">Dom</option>
                                            <option value="plot">Działka</option>
                                            <option value="premises">Lokal użytkowy</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="flex-1 pt-6">

                                    <div
                                        class="w-full relative bg-blue-500 hover:bg-blue-700 text-white text-center font-semibold py-2 px-4 float-left rounded-lg">
                                        <button type="submit">Załaduj formularz</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        {{--                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 float-left rounded-full" style="margin: 10px 22px">--}}
                        {{--                            <a href="{{ route('downloadxml') }}">Uaktualnij bazę</a>--}}
                        {{--                        </button>--}}

                        {{--                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 float-left rounded-full" style="margin: 10px 22px">--}}
                        {{--                            <a href="{{ route('readxml') }}">Pokaż oferty</a>--}}
                        {{--                        </button>--}}

                        {{--                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 float-left rounded-full" style="margin: 10px 22px">--}}
                        {{--                            <a href="{{ route('houses.create')}}" >Dodaj ofertę Dom</a>--}}
                        {{--                        </button>--}}

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

<script type="text/javascript">

    let market_type = document.getElementById('market_type');
    market_type.onchange = function () {
        this.form.submit();
    }

    let transaction_type = document.getElementById('transaction_type');
    transaction_type.onchange = function () {
        this.form.submit();
    }
</script>


