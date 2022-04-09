<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-600 leading-tight">
            Edycja oferty wynajmu domu
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="p-10 bg-orange-200">
                        <form method="post" action="{{ route('houses-rent.update', $houseRent->id) }}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                                <div class="sm:col-span-2">
                                    <input type="number" name="id"
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Nr" value="{{ $houseRent->id }}" required/>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="status"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Status *</option>
                                        <option value="Aktualna" @if ($houseRent->status === 'Aktualna') { selected } @endif>Aktualna</option>
                                        <option value="Zamknięta" @if ($houseRent->status === 'Zamknięta') { selected } @endif>Zamknięta</option>
                                    </select>
                                    @error('status')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-3">
                                    <input type="text" name="voivodeship"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Województwo *" value="{{ $houseRent->voivodeship }}"/>
                                    @error('voivodeship')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-3">
                                    <input type="text" name="district"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Powiat *" value="{{ $houseRent->district }}"/>
                                    @error('district')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                                <div class="sm:col-span-3">
                                    <input type="text" name="commune"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Gmina *" value="{{ $houseRent->commune }}"/>
                                    @error('commune')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-3">
                                    <input type="text" name="city"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Miasto *" value="{{ $houseRent->city }}"/>
                                    @error('city')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-3">
                                    <input type="text" name="street"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Ulica *" value="{{ $houseRent->street }}"/>
                                    @error('street')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-3">
                                    <input type="number" step="0.5" min="0" name="area"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Powierzchnia *" value="{{ $houseRent->area }}"/>
                                    @error('area')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <input type="number" step="1" min="0" name="price"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Cena *" value="{{ $houseRent->price }}"/>
                                    @error('price')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <input type="number" step="1" min="0" name="rooms_nr"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Liczba pokoi *" value="{{ $houseRent->rooms_nr }}"/>
                                    @error('rooms_nr')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <input type="number" step="1" min="0" name="utility_rooms_nr"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="L. pomieszczeń *" value="{{ $houseRent->utility_rooms_nr }}"/>
                                    @error('utility_rooms_nr')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-6">
                                    <input type="text" name="title"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Tytuł w internecie *" value="{{ $houseRent->title }}"/>
                                    @error('title')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                                <div class="sm:col-span-12">
                                    <textarea name="description"
                                              class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                              placeholder="Opis ogólny *">{{ $houseRent->description }}</textarea>
                                    @error('description')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                                <div class="sm:col-span-2">
                                    <input type="number" name="plot_area" min="0" step="1"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Pow. działki *" value="{{ $houseRent->plot_area }}"/>
                                    @error('plot_area')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <input type="text" name="building_type"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Typ zabudowy" value="{{ $houseRent->building_type }}"/>
                                    @error('building_type')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <input type="number" name="floors_nr" step="1" min="0"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Liczba pięter" value="{{ $houseRent->floors_nr }}"/>
                                    @error('floors_nr')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <input type="number" name="bathrooms_nr" step="1" min="0"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Liczba łazienek" value="{{ $houseRent->bathrooms_nr }}"/>
                                    @error('bathrooms_nr')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="heating"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Ogrzewanie</option>
                                        <option value="1" @if ($houseRent->heating === 1) { selected } @endif>Tak</option>
                                        <option value="0" @if ($houseRent->heating === 0) { selected } @endif>Nie</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <input type="text" name="driveway"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Droga dojazdowa" value="{{ $houseRent->driveway }}"/>
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
                                        <option value="1" @if ($houseRent->balcony === 1) { selected } @endif>Tak</option>
                                        <option value="0" @if ($houseRent->balcony === 0) { selected } @endif>Nie</option>>Nie</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="water_connection"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Typ podłączenia wody</option>
                                        <option value="Rurociąg" @if ($houseRent->water_connection === 'Rurociąg') { selected } @endif>Rurociąg</option>
                                        <option value="Studia głębinowa" @if ($houseRent->water_connection === 'Studnia głębinowa') { selected } @endif>Studia głębinowa</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="decorated_garden"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Ogród urządzony</option>
                                        <option value="1" @if ($houseRent->decorated_garden === 1) { selected } @endif>Tak</option>
                                        <option value="0" @if ($houseRent->decorated_garden === 0) { selected } @endif>Nie</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="electricity"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Prąd</option>
                                        <option value="1" @if ($houseRent->electricity === 1) { selected } @endif>Tak</option>
                                        <option value="0" @if ($houseRent->electricity === 0) { selected } @endif>Nie</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="power"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Siła</option>
                                        <option value="1" @if ($houseRent->power === 1) { selected } @endif>Tak</option>
                                        <option value="0" @if ($houseRent->power === 0) { selected } @endif>Nie</option>
                                    </select>
                                </div>

                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                                <div class="sm:col-span-2">
                                    <select name="sewers"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Kanalizacja</option>
                                        <option value="Miejska" @if ($houseRent->sewers === 'Miejska') { selected } @endif>Miejska</option>
                                        <option value="Gminna" @if ($houseRent->sewers === 'Gminna') { selected } @endif>Gminna</option>
                                        <option value="Zbiornik" @if ($houseRent->sewers === 'Zbiornik') { selected } @endif>Zbiornik</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="roof_type"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Typ dachu</option>
                                        <option value="Dachówka" @if ($houseRent->roof_type === 'Dachówka') { selected } @endif>Dachówka</option>
                                        <option value="Blacha" @if ($houseRent->roof_type === 'Blacha') { selected } @endif>Blacha</option>
                                        <option value="Drewno" @if ($houseRent->roof_type === 'Drewno') { selected } @endif>Drewno</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="condition"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Stan budynku</option>
                                        <option value="Nowy" @if ($houseRent->condition === 'Nowy') { selected } @endif>Nowy</option>
                                        <option value="Bardzo dobry" @if ($houseRent->condition === 'Bardzo dobry') { selected } @endif>Bardzo dobry</option>
                                        <option value="Do odświerzenia" @if ($houseRent->condition === 'Do odświerzenia') { selected } @endif>Do odświerzenia</option>
                                        <option value="Do remontu" @if ($houseRent->condition === 'Do remontu') { selected } @endif>Do remontu</option>
                                        <option value="Do wykończenia" @if ($houseRent->condition === 'Do wykończenia') { selected } @endif>Do wykończenia</option>
                                    </select>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                                <div class="sm:col-span-3">
                                    <input type="text" name="broker_email"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Email pośrednika" value="{{ $houseRent->broker_email }}"/>
                                    @error('broker_email')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-3">
                                    <input type="text" name="broker_phone"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Telefon pośrednika" value="{{ $houseRent->broker_phone }}"/>
                                    @error('broker_phone')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <input type="text" name="images" value="{{ $houseRent->images }}" style="display: none">
                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1 text-gray-500">
                                <div class="sm:col-span-4">
                                    <label for="files">Zdjęcia dla oferty:</label>
                                    <input type="file" id="files" name="file[]" multiple accept="image/*"><br><br>
                                    <pre id="file-list" style="display:none;"></pre>
                                    <div id="old-images">
                                        @foreach(json_decode($houseRent->images) as $image)
                                            <div class="text-gray-500">{{ $loop->index + 1 }}. {{ $image }}</div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="gap-6 py-5 px-1">
                                <button type="submit"
                                        class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-blue-500 focus:ring-opacity-50 text-white py-2.5 px-2 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                                    <span class="inline-block mx-2">Uaktualnij ofertę</span>
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
