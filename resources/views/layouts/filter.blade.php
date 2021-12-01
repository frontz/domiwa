<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-gray-100 rounded-lg">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg bg-gray-100">
        <form method="post" action="{{ route('offers.filtered') }}" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                <div class="sm:col-span-2">
                    <label>Transakcja</label>
                    <select name="market_type"
                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 text-sm w-full outline-none focus:shadow-outline">
                        <option value="Kupno">Kupno</option>
                        <option value="Wynajem">Wynajem</option>
                        <option value="Dzierżawa">Dzierżawa</option>
                    </select>
                </div>
                <div class="sm:col-span-2">
                    <label>Czego szukasz</label>
                    <select name="property_type"
                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 text-sm w-full outline-none focus:shadow-outline">
                        <option value="Mieszkania">Mieszkania</option>
                        <option value="Domy">Domy</option>
                        <option value="Lokale">Lokale</option>
                    </select>
                </div>
                <div class="sm:col-span-2">
                    <label>Rynek</label>
                    <select name="market_type"
                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 text-sm w-full outline-none focus:shadow-outline">
                        <option value="Pierwotny">Pierwotny</option>
                        <option value="Wtórny">Wtórny</option>
                    </select>
                </div>
                <div class="sm:col-span-2">
                    <label>Cena od:</label>
                    <select name="price_from"
                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 text-sm w-full outline-none focus:shadow-outline">
                        <option value="100000">100 000</option>
                        <option value="150000">150 000</option>
                        <option value="200000">200 000</option>
                        <option value="250000">250 000</option>
                        <option value="300000">300 000</option>
                    </select>
                </div>
                <div class="sm:col-span-2">
                    <label>Cena do:</label>
                    <select name="price_to"
                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 text-sm w-full outline-none focus:shadow-outline">
                        <option value="350000">350 000</option>
                        <option value="400000">400 000</option>
                        <option value="450000">450 000</option>
                        <option value="500000">500 000</option>
                        <option value="550000">550 000</option>
                        <option value="600000">600 000</option>
                        <option value="650000">650 000</option>
                        <option value="700000">700 000</option>
                        <option value="10000000">+700 000</option>
                    </select>
                </div>
                <div class="sm:col-span-2">
                    <label>Powierzchnia od:</label>
                    <select name="area_from"
                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 text-sm w-full outline-none focus:shadow-outline">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                        <option value="50">50</option>
                    </select>
                </div>
                <div class="sm:col-span-2">
                    <label>Powierzchnia do:</label>
                    <select name="area_to"
                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 text-sm w-full outline-none focus:shadow-outline">
                        <option value="30">30</option>
                        <option value="40">40</option>
                        <option value="50">50</option>
                        <option value="60">60</option>
                        <option value="70">70</option>
                        <option value="80">80</option>
                        <option value="90">90</option>
                        <option value="100">100</option>
                        <option value="10000">+100</option>
                    </select>
                </div>
                <div class="sm:col-span-2">
                    <button type="submit"
                            class="mt-6 transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-blue-500 focus:ring-opacity-50 text-white py-2.5 px-2 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                        <span class="inline-block mx-2">Szukaj</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>



