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
                        <form method="post" action="{{ route('houses.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                                <div class="sm:col-span-2">
                                    <input type="number" name="id" disabled
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Nr" value="{{ old('id') }}" required/>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="market"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" style="display: none">Rynek *</option>
                                        <option value="Pierwotny">Pierwotny</option>
                                        <option value="Wtórny">Wtórny</option>
                                    </select>
                                    @error('market')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="status"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" style="display: none">Status *</option>
                                        <option value="Aktualna">Aktualna</option>
                                        <option value="Zamknięta">Zamknięta</option>
                                    </select>
                                    @error('status')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-3">
                                    <input type="text" name="voivodeship"
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Województwo *" value="{{ old('voivodeship') }}"/>
                                    @error('voivodeship')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-3">
                                    <input type="text" name="district"
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Powiat *" value="{{ old('district') }}"/>
                                    @error('district')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                                <div class="sm:col-span-3">
                                    <input type="text" name="commune"
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Gmina *" value="{{ old('commune') }}"/>
                                    @error('commune')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-3">
                                    <input type="text" name="city"
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Miasto *" value="{{ old('city') }}"/>
                                    @error('city')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-3">
                                    <input type="text" name="street"
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Ulica *" value="{{ old('street') }}"/>
                                    @error('street')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-3">
                                    <input type="number" step="0.5" min="0" name="area"
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Powierzchnia *" value="{{ old('area') }}"/>
                                    @error('area')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <input type="number" step="1" min="0" name="price"
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Cena *" value="{{ old('price') }}"/>
                                    @error('price')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <input type="number" step="1" min="0" name="rooms_nr"
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Liczba pokoi *" value="{{ old('rooms_nr') }}"/>
                                    @error('rooms_nr')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <input type="number" step="1" min="0" name="utility_rooms_nr"
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="L. pomieszczeń *" value="{{ old('utility_rooms_nr') }}"/>
                                    @error('utility_rooms_nr')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-6">
                                    <input type="text" name="title"
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Tytuł w internecie *"/>
                                    @error('title')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                                <div class="sm:col-span-12">
                                    <textarea name="description"
                                              class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                              placeholder="Opis ogólny *" value="{{ old('description') }}"></textarea>
                                    @error('description')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                                <div class="sm:col-span-2">
                                    <input type="number" name="plot_area" min="0" step="1"
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Pow. działki *" value="{{ old('plot_area') }}"/>
                                    @error('plot_area')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <input type="text" name="building_type"
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Typ zabudowy" value="{{ old('building_type') }}"/>
                                    @error('building_type')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <input type="number" name="floors_nr" step="1" min="0"
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Liczba pięter" value="{{ old('floors_nr') }}"/>
                                    @error('floors_nr')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <input type="number" name="bathrooms_nr" step="1" min="0"
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Liczba łazienek" value="{{ old('bathrooms_nr') }}"/>
                                    @error('bathrooms_nr')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="heating"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" style="display: none">Ogrzewanie</option>
                                        <option value="1">Tak</option>
                                        <option value="0">Nie</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <input type="text" name="driveway"
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Droga dojazdowa" value="{{ old('driveway') }}"/>
                                    @error('driveway')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>


                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">

                                <div class="sm:col-span-2">
                                    <select name="balcony"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" style="display: none">Balkon</option>
                                        <option value="1">Tak</option>
                                        <option value="0">Nie</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="water_connection"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" style="display: none">Typ podłączenia wody</option>
                                        <option value="Rurociąg">Rurociąg</option>
                                        <option value="Studia głębinowa">Studia głębinowa</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="decorated_garden"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" style="display: none">Ogród urządzony</option>
                                        <option value="1">Tak</option>
                                        <option value="0">Nie</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="electricity"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" style="display: none">Prąd</option>
                                        <option value="1">Tak</option>
                                        <option value="0">Nie</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="power"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" style="display: none">Siła</option>
                                        <option value="1">Tak</option>
                                        <option value="0">Nie</option>
                                    </select>
                                </div>

                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                                <div class="sm:col-span-2">
                                    <select name="sewers"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" style="display: none">Kanalizacja</option>
                                        <option value="Miejska">Miejska</option>
                                        <option value="Gminna">Gminna</option>
                                        <option value="Zbiornik">Zbiornik</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="roof_type"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" style="display: none">Typ dachu</option>
                                        <option value="Dachówka">Dachówka</option>
                                        <option value="Blacha">Blacha</option>
                                        <option value="Drewno">Drewno</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="condition"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" style="display: none">Stan budynku</option>
                                        <option value="nowy">nowy</option>
                                        <option value="bardzo dobry">bardzo dobry</option>
                                        <option value="do odświerzenia">do odświerzenia</option>
                                        <option value="do remontu">do remontu</option>
                                        <option value="do wykończenia">do wykończenia</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="property_form"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" style="display: none">Forma własności</option>
                                        <option value="Własność">Własność</option>
                                        <option value="Współwłasność">Współwłasność</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="exclusivity"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" style="display: none">Na wyłączność</option>
                                        <option value="1">Tak</option>
                                        <option value="0">Nie</option>
                                    </select>
                                </div>

                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                                <div class="sm:col-span-3">
                                    <input type="text" name="broker_email"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Email pośrednika" value="{{ old('broker_email') }}"/>
                                    @error('broker_email')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-3">
                                    <input type="text" name="broker_phone"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Telefon pośrednika" value="{{ old('broker_phone') }}"/>
                                    @error('broker_phone')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>


                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1 text-gray-500">
                                <div class="sm:col-span-4">
                                    <label for="files">Zdjęcia dla oferty:</label>
                                    <input type="file" id="files" name="file[]" multiple accept="image/*" required><br><br>
                                    <pre id="file-list" style="display:none;"></pre>
                                </div>
                            </div>

                            <div class="gap-6 py-5 px-1">
                                <button type="submit"
                                    class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-blue-500 focus:ring-opacity-50 text-white py-2.5 px-2 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                                    <span class="inline-block mx-2">Dodaj dom</span>
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
        list.innerHTML = '';
        for (let i = 0; i < this.files.length; i++) {
            list.innerHTML += (i + 1) + '. ' + this.files[i].name + '\n';
        }
        if (list.innerHTML === '') {
            list.style.display = 'none';
        } else {
            list.style.display = 'block';
        }
    });
</script>
