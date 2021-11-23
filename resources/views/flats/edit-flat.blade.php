<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-600 leading-tight">
            Edytowanie oferty mieszkania
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="p-10 bg-orange-200">
                        <form action="{{ route('flats.update', $flat->id) }}" method="post"
                              enctype="multipart/form-data">
                            @csrf

                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                                <div class="sm:col-span-2">
                                    <input type="number" disabled
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           value="{{ $flat->id }}"/>
                                </div>
                                <div class="sm:col-span-2" style="display: none">
                                    <input type="number" name="id"
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           value="{{ $flat->id }}"/>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="status"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" style="display: none">Status</option>
                                        <option value="Aktualna" @if ($flat->status === 'Aktualna') { selected } @endif>
                                            Aktualna
                                        </option>
                                        <option value="Zamknięta" @if ($flat->status === 'Zamknięta') { selected
                                                } @endif>Zamknięta
                                        </option>
                                    </select>
                                </div>
                                <div class="sm:col-span-3">
                                    <input type="text" name="voivodeship"
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Województwo *" value="{{ $flat->voivodeship }}"/>
                                    @error('voivodeship')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-3">
                                    <input type="text" name="district"
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Powiat *" value="{{ $flat->district }}"/>
                                    @error('district')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <input type="text" name="commune"
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Gmina *" value="{{ $flat->commune }}"/>
                                    @error('commune')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                                <div class="sm:col-span-3">
                                    <input type="text" name="city"
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Miasto *" value="{{ $flat->city }}"/>
                                    @error('city')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-3">
                                    <input type="text" name="street"
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Ulica *" value="{{ $flat->street }}"/>
                                    @error('street')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-3">
                                    <input type="number" step="0.5" name="area"
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Powierzchnia *" value="{{ $flat->area }}"/>
                                    @error('area')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-3">
                                    <input type="number" step="1" name="price"
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Cena *" value="{{ $flat->price }}"/>
                                    @error('price')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                                <div class="sm:col-span-2">
                                    <input type="number" name="rooms_nr"
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Liczba pokoi *" value="{{ $flat->rooms_nr }}"/>
                                    @error('room_nr')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-5">
                                    <input type="text" name="title"
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Tytuł w internecie *" value="{{ $flat->title }}"/>
                                    @error('title')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="sm:col-span-5">
                                <textarea name="description"
                                          class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                          placeholder="Opis ogólny *">{{ $flat->description }}</textarea>
                                    @error('street')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                                <div class="sm:col-span-2">
                                    <input type="number" name="phone_nr"
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Liczba telefonów" value="{{ $flat->phone_nr }}"/>
                                    @error('city')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <input type="number" name="floor" step="1"
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Piętro" value="{{ $flat->floor }}"/>
                                    @error('floor')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <input type="number" name="floor_nr" step="1"
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Liczba pięter" value="{{ $flat->floor_nr }}"/>
                                    @error('floor_nr')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <input type="number" name="year_build" step="1"
                                           class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Rok budowy" value="{{ $flat->year_build }}"/>
                                    @error('year_build')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="sm:col-span-8 text-gray-500 pt-5">
                                    <div style="display: inline-block"><p>Typ kuchni:</p></div>
                                    <div style="display: inline-block" class="text-sm">

                                        <input type="checkbox" name="kitchen_type[]" value="z aneksem"
                                               class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 ml-4 text-sm outline-none focus:shadow-outline"
                                               @if(is_array(json_decode($flat->kitchen_type))) {
                                               @foreach(json_decode($flat->kitchen_type) as $kitchen_type)
                                               @if($kitchen_type === 'z aneksem') { checked } @endif
                                               @endforeach }
                                            @endif
                                        />
                                        <label for="kitchen_type">z aneksem</label>

                                        <input type="checkbox" name="kitchen_type[]" value="widna"
                                               class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 ml-4 text-sm outline-none focus:shadow-outline"
                                               @if(is_array(json_decode($flat->kitchen_type))) {
                                               @foreach(json_decode($flat->kitchen_type) as $kitchen_type)
                                               @if($kitchen_type === 'widna') { checked } @endif
                                               @endforeach }
                                            @endif
                                        />
                                        <label for="kitchen_type">widna</label>

                                        <input type="checkbox" name="kitchen_type[]" value="z oknem"
                                               @if(is_array(json_decode($flat->kitchen_type))) {
                                               class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 ml-4 text-sm outline-none focus:shadow-outline"
                                               @foreach(json_decode($flat->kitchen_type) as $kitchen_type)
                                               @if($kitchen_type === 'ciemna') { checked } @endif
                                               @endforeach }
                                        @endif
                                        <label for="kitchen_type">z oknem</label>

                                        <input type="checkbox" name="kitchen_type[]" value="zamknięta"
                                               class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 ml-4 text-sm outline-none focus:shadow-outline"
                                               @if(is_array(json_decode($flat->kitchen_type))) {
                                               @foreach(json_decode($flat->kitchen_type) as $kitchen_type)
                                               @if($kitchen_type === 'zamknięta') { checked } @endif }
                                               @endforeach }
                                            @endif
                                        />
                                        <label for="kitchen_type">zamknięta</label>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                                <div class="sm:col-span-8 text-gray-500">
                                    <div style="display: inline-block"><p>Media:</p></div>
                                    <div style="display: inline-block" class="text-sm">
                                        <input type="checkbox" name="media[]" value="Światłowód"
                                               class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 ml-4 text-sm outline-none focus:shadow-outline"
                                               @if(is_array(json_decode($flat->media))) {
                                               @foreach(json_decode($flat->media) as $media)
                                               @if($media === 'Światłowód') { checked } @endif
                                               @endforeach }
                                            @endif
                                        />
                                        <label for="kitchen_type">Światłowód</label>

                                        <input type="checkbox" name="media[]" value="TV kablowa"
                                               class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 ml-4 text-sm outline-none focus:shadow-outline"
                                               @if(is_array(json_decode($flat->media))) {
                                               @foreach(json_decode($flat->media) as $media)
                                               @if($media === 'TV kablowa') { checked } @endif
                                               @endforeach }
                                            @endif
                                        />
                                        <label for="kitchen_type">TV kablowa</label>

                                        <input type="checkbox" name="media[]" value="Internet"
                                               class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 ml-4 text-sm outline-none focus:shadow-outline"
                                               @if(is_array(json_decode($flat->media))) {
                                               @foreach(json_decode($flat->media) as $media)
                                               @if($media === 'Internet') { checked } @endif
                                               @endforeach }
                                            @endif
                                        />
                                        <label for="kitchen_type">Internet</label>

                                        <input type="checkbox" name="media[]" value="klimatyzacja"
                                               class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 ml-4 text-sm outline-none focus:shadow-outline"
                                               @if(is_array(json_decode($flat->media))) {
                                               @foreach(json_decode($flat->media) as $media)
                                               @if($media === 'klimatyzacja') { checked } @endif
                                               @endforeach }
                                            @endif
                                        />
                                        <label for="kitchen_type">klimatyzacja</label>
                                    </div>
                                </div>
                            </div>


                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                                <div class="sm:col-span-2">
                                    <select name="heating"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" style="display: none">Ogrzewanie</option>
                                        <option value="miejskie" @if ($flat->heating === 'miejskie') { selected
                                                } @endif>miejskie
                                        </option>
                                        <option value="CO z własnej kotłowni"
                                                @if ($flat->heating === 'CO z własnej kotłowni') { selected } @endif>CO
                                            z własnej kotłowni
                                        </option>
                                        <option value="gazowe" @if ($flat->heating === 'gazowe') { selected } @endif>
                                            gazowe
                                        </option>
                                        <option value="inne" @if ($flat->heating === 'inne') { selected } @endif>inne
                                        </option>
                                        <option value="brak" @if ($flat->heating === 'brak') { selected } @endif>brak
                                        </option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="parking"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" style="display: none">M-ce parkingowe</option>
                                        <option value="garaż podziemny" @if ($flat->parking === 'garaż podziemny') {
                                                selected } @endif>garaż podziemny
                                        </option>
                                        <option value="garaż wolnostojący"
                                                @if ($flat->parking === 'garaż wolnostojący') { selected } @endif>garaż
                                            wolnostojący
                                        </option>
                                        <option value="przy ulicy" @if ($flat->parking === 'przy ulicy') { selected
                                                } @endif>przy ulicy
                                        </option>
                                        <option value="brak" @if ($flat->parking === 'brak') { selected } @endif>brak
                                        </option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <div class="sm:col-span-2">
                                        <select name="furniture"
                                                class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                            <option value="" style="display: none">Meble</option>
                                            <option value="1" @if ($flat->furniture === 1) { selected } @endif>Tak
                                            </option>
                                            <option value="0" @if ($flat->furniture === 0) { selected } @endif>Nie
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="lift"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" style="display: none">Winda</option>
                                        <option value="1" @if ($flat->lift === 1) { selected } @endif>Tak</option>
                                        <option value="0" @if ($flat->lift === 1) { selected } @endif>Nie</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="attic"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" style="display: none">Na poddaszu</option>
                                        <option value="1" @if ($flat->attic === 1) { selected } @endif>Tak</option>
                                        <option value="0" @if ($flat->attic === 1) { selected } @endif>Nie</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="two_levels"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" style="display: none">Dwupoziomowe</option>
                                        <option value="1" @if ($flat->two_levels === 1) { selected } @endif>Tak</option>
                                        <option value="0" @if ($flat->two_levels === 1) { selected } @endif>Nie</option>
                                    </select>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">

                                <div class="sm:col-span-2">
                                    <div class="sm:col-span-2">
                                        <select name="balcony"
                                                class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                            <option value="" style="display: none">Balkon</option>
                                            <option value="Balkon" @if ($flat->balcony === 'Balkon') { selected
                                                    } @endif>Balkon
                                            </option>
                                            <option value="Taras" @if ($flat->balcony === 'Taras') { selected } @endif>
                                                Taras
                                            </option>
                                            <option value="Loggia" @if ($flat->balcony === 'Loggia') { selected
                                                    } @endif>Loggia
                                            </option>
                                            <option value="Brak" @if ($flat->balcony === 'Brak') { selected } @endif>
                                                Brak
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="basement"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" style="display: none">Piwnica</option>
                                        <option value="Piwnica" @if ($flat->basement === 'Piwnica') { selected } @endif>
                                            Piwnica
                                        </option>
                                        <option value="Komórka Lokatorska"
                                                @if ($flat->basement === 'Komórka Lokatorska') { selected } @endif>
                                            Komórka Lokatorska
                                        </option>
                                        <option value="Brak" @if ($flat->basement === 'Brak') { selected } @endif>Brak
                                        </option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="fitted_kitchen"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" style="display: none">Kuchnia wyposaż.</option>
                                        <option value="1" @if ($flat->fitted_kitchen === 1) { selected } @endif>Tak
                                        </option>
                                        <option value="0" @if ($flat->fitted_kitchen === 0) { selected } @endif>Nie
                                        </option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="condition"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" style="display: none">Stan lokalu</option>
                                        <option value="nowy" @if ($flat->condition === 'nowy') { selected } @endif>
                                            nowy
                                        </option>
                                        <option value="bardzo dobry" @if ($flat->condition === 'bardzo dobry') {
                                                selected } @endif>bardzo dobry
                                        </option>
                                        <option value="do odświerzenia" @if ($flat->condition === 'do odświerzenia') {
                                                selected } @endif>do odświerzenia
                                        </option>
                                        <option value="do remontu" @if ($flat->condition === 'do remontu') { selected
                                                } @endif>do remontu
                                        </option>
                                        <option value="do wykończenia" @if ($flat->condition === 'do wykończenia') {
                                                selected } @endif>do wykończenia
                                        </option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="closed_estate"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" style="display: none">Osiedle zamknięte</option>
                                        <option value="1" @if ($flat->closed_estate === 1) { selected } @endif>Tak
                                        </option>
                                        <option value="0" @if ($flat->closed_estate === 0) { selected } @endif>Nie
                                        </option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="exclusivity"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" style="display: none">Na wyłączność</option>
                                        <option value="1" @if ($flat->exclusivity === 1) { selected } @endif>Tak
                                        </option>
                                        <option value="0" @if ($flat->exclusivity === 0) { selected } @endif>Nie
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                                <div class="sm:col-span-2">
                                    <select name="without_commission"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" style="display: none">Bez prowizji</option>
                                        <option value="1" @if ($flat->without_commission === 1) { selected } @endif>
                                            Tak
                                        </option>
                                        <option value="0" @if ($flat->without_commission === 0) { selected } @endif>
                                            Nie
                                        </option>
                                    </select>
                                </div>
                                <div class="sm:col-span-3">
                                    <input type="text" name="broker_email"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Email pośrednika" value="{{ $flat->broker_email }}"/>
                                    @error('broker_email')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-3">
                                    <input type="text" name="broker_phone"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Telefon pośrednika" value="{{ $flat->broker_phone }}"/>
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

                            @foreach(json_decode($flat->images) as $image)
                                <div class="text-gray-500">{{ $loop->index + 1 }}. {{ $image }}</div>
                            @endforeach

                            <div class="gap-6 py-5 px-1">
                                <button
                                    class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-blue-500 focus:ring-opacity-50 text-white py-2.5 px-2 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                                    <span class="inline-block mx-2">Uaktualnij</span>
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
