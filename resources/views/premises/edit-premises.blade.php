<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-600 leading-tight">
            Edycja oferty lokalu
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="p-10 bg-orange-200">
                        <form method="post" action="{{ route('premises.update', $premises->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                                <div class="sm:col-span-2">
                                    <input type="number" name="id" disabled
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Nr" value="{{ $premises->id }}"/>
                                </div>
                                <div class="sm:col-span-2" style="display: none;">
                                    <input type="number" name="id"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Nr" value="{{ $premises->id }}"/>
                                </div>
                                <div class="sm:col-span-2" style="display: none">
                                    <input type="number" name="id"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           value="{{ $premises->id }}"/>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="market"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Rynek *</option>
                                        <option value="Pierwotny" @if ($premises->market === 'Pierwotny') { selected } @endif>Pierwotny</option>
                                        <option value="Wt??rny" @if ($premises->market === 'Wt??rny') { selected } @endif>Wt??rny</option>
                                    </select>
                                    @error('market')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="status"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Status *</option>
                                        <option value="Aktualna" @if ($premises->status === 'Aktualna') { selected } @endif>Aktualna</option>
                                        <option value="Zamkni??ta" @if ($premises->status === 'Zamkni??ta') { selected } @endif>Zamkni??ta</option>
                                    </select>
                                    @error('status')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-3">
                                    <input type="text" name="voivodeship"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Wojew??dztwo *" value="{{ $premises->voivodeship }}"/>
                                    @error('voivodeship')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-3">
                                    <input type="text" name="district"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Powiat *" value="{{ $premises->district }}"/>
                                    @error('district')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                                <div class="sm:col-span-3">
                                    <input type="text" name="commune"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Gmina *" value="{{ $premises->commune }}"/>
                                    @error('commune')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-3">
                                    <input type="text" name="city"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Miasto *" value="{{ $premises->city }}"/>
                                    @error('city')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-3">
                                    <input type="text" name="street"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Ulica *" value="{{ $premises->street }}"/>
                                    @error('street')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-3">
                                    <input type="number" step="0.5" min="0" name="area"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Powierzchnia *" value="{{ $premises->area }}"/>
                                    @error('area')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <input type="number" step="1" min="0" name="price"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Cena *" value="{{ $premises->price }}"/>
                                    @error('price')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <input type="number" step="1" min="0" name="rooms_nr"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Liczba pokoi *" value="{{ $premises->rooms_nr }}"/>
                                    @error('rooms_nr')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-8">
                                    <input type="text" name="title"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Tytu?? w Internecie *" value="{{ $premises->title }}"/>
                                    @error('title')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                                <div class="sm:col-span-12">
                                    <textarea name="description"
                                              class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                              placeholder="Opis og??lny *">{{ $premises->description }}</textarea>
                                    @error('description')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                                <div class="sm:col-span-2">
                                    <input type="number" name="phones_nr" min="0"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Liczba telefon??w" value="{{ $premises->phones_nr }}"/>
                                    @error('phones_nr')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="sm:col-span-2">
                                    <input type="number" name="year_build" step="1" min="1900"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Rok budowy" value="{{ $premises->year_build }}"/>
                                    @error('year_build')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2 text-gray-500">
                                    <input type="number" name="n_geo_x" step="0.01"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Geo X" value="{{ $premises->n_geo_x }}"/>
                                </div>
                                <div class="sm:col-span-2 text-gray-500">
                                    <input type="number" name="n_geo_y" step="0.01"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Geo Y" value="{{ $premises->n_geo_y }}"/>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="type"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Typ lokalu</option>
                                        <option value="Handlowo-us??ugowy" @if ($premises->type === 'handlowo-us??ugowy') { selected } @endif>Handlowo-us??ugowy</option>
                                        <option value="Do pracy" @if ($premises->type === 'do pracy') { selected } @endif>Do pracy</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="destination"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Przeznaczenie</option>
                                        <option value="Handlowo-us??ugowe" @if ($premises->destination === 'handlowo-us??ugowe') { selected } @endif>Handlowo-us??ugowe</option>
                                        <option value="Pracownicze" @if ($premises->destination === 'pracownicze') { selected } @endif>Pracownicze</option>
                                    </select>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                                <div class="sm:col-span-2">
                                    <select name="air_conditioning"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Klimatyzacja</option>
                                        <option value="1" @if ($premises->air_conditioning === 1) { selected } @endif>Tak</option>
                                        <option value="0" @if ($premises->air_conditioning === 0) { selected } @endif>Nie</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="security"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Zabezpieczenia</option>
                                        <option value="Alarm" @if ($premises->security === 'Alarm') { selected } @endif>Alarm</option>
                                        <option value="Ochrona" @if ($premises->security === 'Ochrona') { selected } @endif>Ochrona</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="office"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Biuro</option>
                                        <option value="1" @if ($premises->office === 1) { selected } @endif>Tak</option>
                                        <option value="0" @if ($premises->office === 0) { selected } @endif>Nie</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="office_type"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Typ biura</option>
                                        <option value="Lokal us??ugowy" @if ($premises->office_type === 'lokal us??ugowy') { selected } @endif>Lokal us??ugowy</option>
                                        <option value="Lokal handlowy" @if ($premises->office_type === 'lokal handlowy') { selected } @endif>Lokal handlowy</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="shopwindow"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Ma witryn??</option>
                                        <option value="1" @if ($premises->shopwindow === 1) { selected } @endif>Tak</option>
                                        <option value="0" @if ($premises->shopwindow === 0) { selected } @endif>Nie</option>
                                    </select>
                                </div>

                                <div class="sm:col-span-2">
                                    <select name="water_connection"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Typ pod????czenia wody</option>
                                        <option value="Gazowe przep??ywowe" @if ($premises->water_connection === 'Gazowe przep??ywowe') { selected } @endif>Gazowe przep??ywowe</option>
                                        <option value="Studia g????binowa" @if ($premises->water_connection === 'Studia g????binowa') { selected } @endif>Studia g????binowa</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="intercom"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Domofon</option>
                                        <option value="1" @if ($premises->intercom === 1) { selected } @endif>Tak</option>
                                        <option value="0" @if ($premises->intercom === 0) { selected } @endif>Nie</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2 text-gray-500">
                                    <input type="number" step="0.1" name="height"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Wysoko????" value="{{ $premises->height }}"/>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="condition"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Stan lokalu</option>
                                        <option value="Nowy" @if ($premises->condition === 'nowy') { selected } @endif>Nowy</option>
                                        <option value="Bardzo dobry" @if ($premises->condition === 'bardzo dobry') { selected } @endif>Bardzo dobry</option>
                                        <option value="Do od??wierzenia" @if ($premises->condition === 'do od??wierzenia') { selected } @endif>Do od??wierzenia</option>
                                        <option value="Do remontu" @if ($premises->condition === 'do remontu') { selected } @endif>Do remontu</option>
                                        <option value="Do wyko??czenia" @if ($premises->condition === 'do wyko??czenia') { selected } @endif>Do wyko??czenia</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="exclusivity"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Na wy????czno????</option>
                                        <option value="1" @if ($premises->exclusivity === 1) { selected } @endif>Tak</option>
                                        <option value="0" @if ($premises->exclusivity === 0) { selected } @endif>Nie</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="without_commission"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Bez prowizji</option>
                                        <option value="1" @if ($premises->without_commission === 1) { selected } @endif>Tak</option>
                                        <option value="0" @if ($premises->without_commission === 0) { selected } @endif>Nie</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <select name="property_form"
                                            class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option value="" disabled>Typ w??asno??ci</option>
                                        <option value="W??asno????" @if ($premises->property_form === 'w??asno????') { selected } @endif>w??asno????</option>
                                        <option value="Dzier??awa" @if ($premises->property_form === 'dzier??awa') { selected } @endif>dzier??awa</option>
                                    </select>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">

                                <div class="sm:col-span-3">
                                    <input type="text" name="broker_email"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Email po??rednika" value="{{ $premises->broker_email }}"/>
                                    @error('broker_email')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-3">
                                    <input type="text" name="broker_phone"
                                           class="border rounded-lg px-3 border text-gray-500 border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                           placeholder="Telefon po??rednika" value="{{ $premises->broker_phone }}"/>
                                    @error('broker_phone')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <input type="text" name="images" value="{{ $premises->images }}" style="display: none">
                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1 text-gray-500">
                                <div class="sm:col-span-4">
                                    <label for="files">Zdj??cia dla oferty:</label>
                                    <input type="file" id="files" name="file[]" multiple accept="image/*"
                                           ><br><br>
                                    <pre id="file-list" style="display:none;"></pre>
                                    <div id="old-images">
                                        @foreach(json_decode($premises->images) as $image)
                                            <div class="text-gray-500">{{ $loop->index + 1 }}. {{ $image }}</div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="gap-6 py-5 px-1">
                                <button
                                    class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-blue-500 focus:ring-opacity-50 text-white py-2.5 px-2 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                                    <span class="inline-block mx-2">Uaktualnij lokal</span>
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
