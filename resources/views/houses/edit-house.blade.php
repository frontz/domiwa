<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-600 leading-tight">
            Dodawanie oferty domu
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="p-10 bg-orange-200">
                        <form method="post" action="{{ route('houses.update', $house->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                                <div class="sm:col-span-2">
                                    <input type="number" name="id" disabled
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Nr" value="{{ $house->id }}" required/>
                                </div>
                                <div class="sm:col-span-2" style="display: none">
                                    <input type="number" name="id"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Nr" value="{{ $house->id }}" required/>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="market"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Rynek *</option>
                                        <option value="Pierwotny" @if ($house->status === 'Pierwotny') { selected } @endif>Pierwotny</option>
                                        <option value="Wt??rny" @if ($house->status === 'Wt??rny') { selected } @endif>Wt??rny</option>
                                    </select>
                                    @error('market')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="status"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Status *</option>
                                        <option value="Aktualna" @if ($house->status === 'Aktualna') { selected } @endif>Aktualna</option>
                                        <option value="Zamkni??ta" @if ($house->status === 'Zamkni??ta') { selected } @endif>Zamkni??ta</option>
                                    </select>
                                    @error('status')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-3">
                                    <input type="text" name="voivodeship"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Wojew??dztwo *" value="{{ $house->voivodeship }}"/>
                                    @error('voivodeship')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-3">
                                    <input type="text" name="district"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Powiat *" value="{{ $house->district }}"/>
                                    @error('district')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                                <div class="sm:col-span-3">
                                    <input type="text" name="commune"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Gmina *" value="{{ $house->commune }}"/>
                                    @error('commune')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-3">
                                    <input type="text" name="city"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Miasto *" value="{{ $house->city }}"/>
                                    @error('city')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-3">
                                    <input type="text" name="street"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Ulica *" value="{{ $house->street }}"/>
                                    @error('street')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-3">
                                    <input type="number" step="0.5" min="0" name="area"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Powierzchnia *" value="{{ $house->area }}"/>
                                    @error('area')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <input type="number" step="1" min="0" name="price"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Cena *" value="{{ $house->price }}"/>
                                    @error('price')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <input type="number" step="1" min="0" name="rooms_nr"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Liczba pokoi *" value="{{ $house->rooms_nr }}"/>
                                    @error('rooms_nr')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <input type="number" step="1" min="0" name="utility_rooms_nr"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="L. pomieszcze?? *" value="{{ $house->utility_rooms_nr }}"/>
                                    @error('utility_rooms_nr')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-6">
                                    <input type="text" name="title"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Tytu?? w internecie *" value="{{ $house->title }}"/>
                                    @error('title')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                                <div class="sm:col-span-12">
                                    <textarea name="description"
                                              class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                              placeholder="Opis og??lny *">{{ $house->description }}</textarea>
                                    @error('description')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                                <div class="sm:col-span-2">
                                    <input type="number" name="plot_area" min="0" step="1"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Pow. dzia??ki *" value="{{ $house->plot_area }}"/>
                                    @error('plot_area')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <input type="text" name="building_type"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Typ zabudowy" value="{{ $house->building_type }}"/>
                                    @error('building_type')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <input type="number" name="floors_nr" step="1" min="0"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Liczba pi??ter" value="{{ $house->floors_nr }}"/>
                                    @error('floors_nr')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <input type="number" name="bathrooms_nr" step="1" min="0"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Liczba ??azienek" value="{{ $house->bathrooms_nr }}"/>
                                    @error('bathrooms_nr')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="heating"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Ogrzewanie</option>
                                        <option value="1" @if ($house->heating === 1) { selected } @endif>Tak</option>
                                        <option value="0" @if ($house->heating === 0) { selected } @endif>Nie</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <input type="text" name="driveway"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Droga dojazdowa" value="{{ $house->driveway }}"/>
                                    @error('driveway')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>


                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">

                                <div class="sm:col-span-2">
                                    <select name="balcony"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Balkon</option>
                                        <option value="1" @if ($house->balcony === 1) { selected } @endif>Tak</option>
                                        <option value="0" @if ($house->balcony === 0) { selected } @endif>Nie</option>>Nie</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="water_connection"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Typ pod????czenia wody</option>
                                        <option value="Ruroci??g" @if ($house->water_connection === 'Ruroci??g') { selected } @endif>Ruroci??g</option>
                                        <option value="Studia g????binowa" @if ($house->water_connection === 'Studnia g????binowa') { selected } @endif>Studia g????binowa</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="decorated_garden"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Ogr??d urz??dzony</option>
                                        <option value="1" @if ($house->decorated_garden === 1) { selected } @endif>Tak</option>
                                        <option value="0" @if ($house->decorated_garden === 0) { selected } @endif>Nie</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="electricity"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Pr??d</option>
                                        <option value="1" @if ($house->electricity === 1) { selected } @endif>Tak</option>
                                        <option value="0" @if ($house->electricity === 0) { selected } @endif>Nie</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="power"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Si??a</option>
                                        <option value="1" @if ($house->power === 1) { selected } @endif>Tak</option>
                                        <option value="0" @if ($house->power === 0) { selected } @endif>Nie</option>
                                    </select>
                                </div>

                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                                <div class="sm:col-span-2">
                                    <select name="sewers"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Kanalizacja</option>
                                        <option value="Miejska" @if ($house->sewers === 'Miejska') { selected } @endif>Miejska</option>
                                        <option value="Gminna" @if ($house->sewers === 'Gminna') { selected } @endif>Gminna</option>
                                        <option value="Zbiornik" @if ($house->sewers === 'Zbiornik') { selected } @endif>Zbiornik</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="roof_type"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Typ dachu</option>
                                        <option value="Dach??wka" @if ($house->roof_type === 'Dach??wka') { selected } @endif>Dach??wka</option>
                                        <option value="Blacha" @if ($house->roof_type === 'Blacha') { selected } @endif>Blacha</option>
                                        <option value="Drewno" @if ($house->roof_type === 'Drewno') { selected } @endif>Drewno</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="condition"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Stan budynku</option>
                                        <option value="Nowy" @if ($house->condition === 'Nowy') { selected } @endif>Nowy</option>
                                        <option value="Bardzo dobry" @if ($house->condition === 'Bardzo dobry') { selected } @endif>Bardzo dobry</option>
                                        <option value="Do od??wierzenia" @if ($house->condition === 'Do od??wierzenia') { selected } @endif>Do od??wierzenia</option>
                                        <option value="Do remontu" @if ($house->condition === 'Do remontu') { selected } @endif>Do remontu</option>
                                        <option value="Do wyko??czenia" @if ($house->condition === 'Do wyko??czenia') { selected } @endif>Do wyko??czenia</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="property_form"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Forma w??asno??ci</option>
                                        <option value="W??asno????" @if ($house->property_form === 'W??asno????') { selected } @endif>W??asno????</option>
                                        <option value="Wsp????w??asno????" @if ($house->property_form === 'Wsp????w??asno????') { selected } @endif>Wsp????w??asno????</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="exclusivity"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Na wy????czno????</option>
                                        <option value="1" @if ($house->exclusivity === 1) { selected } @endif>Tak</option>
                                        <option value="0" @if ($house->exclusivity === 0) { selected } @endif>Nie</option>
                                    </select>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                                <div class="sm:col-span-3">
                                    <input type="text" name="broker_email"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Email po??rednika" value="{{ $house->broker_email }}"/>
                                    @error('broker_email')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-3">
                                    <input type="text" name="broker_phone"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Telefon po??rednika" value="{{ $house->broker_phone }}"/>
                                    @error('broker_phone')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <input type="text" name="images" value="{{ $house->images }}" style="display: none">
                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1 text-gray-500">
                                <div class="sm:col-span-4">
                                    <label for="files">Zdj??cia dla oferty:</label>
                                    <input type="file" id="files" name="file[]" multiple accept="image/*"><br><br>
                                    <pre id="file-list" style="display:none;"></pre>
                                    <div id="old-images">
                                        @foreach(json_decode($house->images) as $image)
                                            <div class="text-gray-500">{{ $loop->index + 1 }}. {{ $image }}</div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="gap-6 py-5 px-1">
                                <button type="submit"
                                        class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-blue-500 focus:ring-opacity-50 text-white py-2.5 px-2 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                                    <span class="inline-block mx-2">Uaktualnij ofert??</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    document.getElementById('files').addEventListener('change', function (e) {
        let list = document.getElementById('file-list');
        let oldImages = document.getElementById('old-images');
        list.innerHTML = '';
        for (let i = 0; i < this.files.length; i++) {
            list.innerHTML += (i + 1) + '. ' + this.files[i].name + '\n';
        }
        if (list.innerHTML === '') {
            list.style.display = 'none';
            oldImages.style.display = 'block';
        } else {
            list.style.display = 'block';
            oldImages.style.display = 'none';
        }
    });
</script>
