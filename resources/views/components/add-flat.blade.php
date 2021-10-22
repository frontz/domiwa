<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-600 leading-tight">
            Dodawanie oferty mieszkania
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="p-10 bg-orange-200">

                        <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                            <div class="sm:col-span-2">
                                <input type="number" name="id"
                                       class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                       placeholder="Nr" value="{{ old('id') }}"/>
                                @error('id')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="sm:col-span-2">
                                <input type="text" name="status"
                                       class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                       placeholder="Status" value="{{ old('status') }}"/>
                                @error('status')
                                <p class="text-red-500 text-sm">Niedobry status</p>
                                @enderror
                            </div>
                            <div class="sm:col-span-3">
                                <input type="text" name="voivodeship"
                                       class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                       placeholder="Województwo" value="{{ old('voivodeship') }}"/>
                                @error('voivodeship')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="sm:col-span-3">
                                <input type="text" name="district"
                                       class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                       placeholder="Powiat" value="{{ old('district') }}"/>
                                @error('district')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="sm:col-span-2">
                                <input type="text" name="district"
                                       class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                       placeholder="Gmina" value="{{ old('community') }}"/>
                                @error('community')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                            <div class="sm:col-span-3">
                                <input type="text" name="city"
                                       class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                       placeholder="Miasto" value="{{ old('city') }}"/>
                                @error('city')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="sm:col-span-3">
                                <input type="text" name="street"
                                       class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                       placeholder="Ulica" value="{{ old('city') }}"/>
                                @error('street')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="sm:col-span-3">
                                <input type="number" step="0.5" name="surface"
                                       class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                       placeholder="Powierzchnia" value="{{ old('surface') }}"/>
                                @error('surface')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="sm:col-span-3">
                                <input type="number" step="1" name="price"
                                       class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                       placeholder="Cena *" value="{{ old('price') }}"/>
                                @error('price')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                            <div class="sm:col-span-2">
                                <input type="number" name="room_nr"
                                       class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                       placeholder="Liczba pokoi" value="{{ old('room_nr') }}"/>
                                @error('room_nr')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="sm:col-span-5">
                                <input type="text" name="title"
                                       class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                       placeholder="Tytuł w internecie" value="{{ old('room_nr') }}"/>
                                @error('title')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="sm:col-span-5">
                                <textarea name="description"
                                       class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                          placeholder="Opis ogólny" value="{{ old('city') }}"></textarea>
                                @error('street')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                            <div class="sm:col-span-2">
                                <input type="number" name="phone_nr"
                                       class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                       placeholder="Liczba telefonów" value="{{ old('phone_nr') }}"/>
                                @error('city')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="sm:col-span-2">
                                <input type="number" name="floor" step="1"
                                       class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                       placeholder="Piętro" value="{{ old('floor') }}"/>
                                @error('floor')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="sm:col-span-2">
                                <input type="number" name="floor_nr" step="1"
                                       class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                       placeholder="Liczba pięter" value="{{ old('floor_nr') }}"/>
                                @error('floor')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="sm:col-span-2">
                                <select name="lift"
                                        class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                    <option>Winda</option>
                                    <option value="true">Tak</option>
                                    <option value="false">Nie</option>
                                </select>
                            </div>
                            <div class="sm:col-span-2">
                                <input type="number" name="year_build" step="1"
                                       class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                       placeholder="Rok budowy" value="{{ old('year_build') }}"/>
                                @error('year_build')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="sm:col-span-2">
                                <input type="text" name="kitchen_type"
                                       class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                       placeholder="Typ kuchni" value="{{ old('kitchen_type') }}"/>
                                @error('kitchen_type')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                            <div class="sm:col-span-2">
                                <div class="sm:col-span-2">
                                    <select name="parking"
                                            class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option>M-ce parkingowe</option>
                                        <option value="true">Tak</option>
                                        <option value="false">Nie</option>
                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <div class="sm:col-span-2">
                                    <select name="office"
                                            class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option>Biuro</option>
                                        <option value="true">Tak</option>
                                        <option value="false">Nie</option>
                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <div class="sm:col-span-2">
                                    <select name="furniture"
                                            class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option>Meble</option>
                                        <option value="true">Tak</option>
                                        <option value="false">Nie</option>
                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <select name="lift"
                                        class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                    <option>Winda</option>
                                    <option value="true">Tak</option>
                                    <option value="false">Nie</option>
                                </select>
                            </div>
                            <div class="sm:col-span-2">
                                <select name="garage"
                                        class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                    <option>Garaż</option>
                                    <option value="true">Tak</option>
                                    <option value="false">Nie</option>
                                </select>
                            </div>
                            <div class="sm:col-span-2">
                                <select name="attic"
                                        class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                    <option>Na poddaszu</option>
                                    <option value="true">Tak</option>
                                    <option value="false">Nie</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                            <div class="sm:col-span-2">
                                <div class="sm:col-span-2">
                                    <select name="two_level"
                                            class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option>Dwupoziomowe</option>
                                        <option value="true">Tak</option>
                                        <option value="false">Nie</option>
                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <div class="sm:col-span-2">
                                    <select name="balcony"
                                            class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option>Balkon</option>
                                        <option value="true">Tak</option>
                                        <option value="false">Nie</option>
                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <div class="sm:col-span-2">
                                    <select name="tarrace"
                                            class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option>Taras</option>
                                        <option value="true">Tak</option>
                                        <option value="false">Nie</option>
                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <select name="basement"
                                        class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                    <option>Piwnica</option>
                                    <option value="true">Tak</option>
                                    <option value="false">Nie</option>
                                </select>
                            </div>
                            <div class="sm:col-span-2">
                                <select name="gas_oven"
                                        class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                    <option>Piecyk gazowy</option>
                                    <option value="true">Tak</option>
                                    <option value="false">Nie</option>
                                </select>
                            </div>
                            <div class="sm:col-span-2">
                                <select name="washing"
                                        class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                    <option>Pralka</option>
                                    <option value="true">Tak</option>
                                    <option value="false">Nie</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                            <div class="sm:col-span-2">
                                <div class="sm:col-span-2">
                                    <select name="refrigerator"
                                            class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option>Lodówka</option>
                                        <option value="true">Tak</option>
                                        <option value="false">Nie</option>
                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <div class="sm:col-span-2">
                                    <select name="fitted_kitchen"
                                            class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option>Kuchnia wyposaż.</option>
                                        <option value="true">Tak</option>
                                        <option value="false">Nie</option>
                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <div class="sm:col-span-2">
                                    <select name="tv"
                                            class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option>Telewizja</option>
                                        <option value="true">Tak</option>
                                        <option value="false">Nie</option>
                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <select name="internet"
                                        class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                    <option>Internet</option>
                                    <option value="true">Tak</option>
                                    <option value="false">Nie</option>
                                </select>
                            </div>
                            <div class="sm:col-span-2">
                                <select name="closed_estate"
                                        class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                    <option>Osiedle zamknięte</option>
                                    <option value="true">Tak</option>
                                    <option value="false">Nie</option>
                                </select>
                            </div>
                            <div class="sm:col-span-2">
                                <select name="exclusivity"
                                        class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                    <option>Na wyłączność</option>
                                    <option value="true">Tak</option>
                                    <option value="false">Nie</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                            <div class="sm:col-span-2">
                                <div class="sm:col-span-2">
                                    <select name="without_commission"
                                            class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline">
                                        <option>Bez prowizji</option>
                                        <option value="true">Tak</option>
                                        <option value="false">Nie</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                            <div class="sm:col-span-3">
                                <input type="text" name="broker_name"
                                       class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                       placeholder="Nazwisko pośr." value="{{ old('broker_name') }}"/>
                                @error('broker_name')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="sm:col-span-3">
                                <input type="email" name="broker_email"
                                       class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                       placeholder="Email pośr." value="{{ old('broker_email') }}"/>
                                @error('broker_email')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="sm:col-span-2">
                                <input type="text" name="broker_office_phone"
                                       class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                       placeholder="Tel do biura pośr." value="{{ old('broker_office_phone') }}"/>
                                @error('broker_office_phone')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="sm:col-span-2">
                                <input type="text" name="broker_phone"
                                       class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                       placeholder="Telefon pośrednika" value="{{ old('broker_phone') }}"/>
                                @error('broker_phone')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="sm:col-span-2">
                                <input type="text" name="broker_licence_nr"
                                       class="border rounded-lg px-3 border border-gray-400 py-2 mt-1 mb-2 text-sm w-full outline-none focus:shadow-outline"
                                       placeholder="Nr licencji pośr" value="{{ old('broker_licence_nr') }}"/>
                                @error('broker_licence_nr')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>


                        {{--                        <param typ="text" nazwa="agent_nazwisko">Kowalski</param>--}}

{{--                        <param typ="text" nazwa="agent_email">email</param>--}}

{{--                        <param typ="text" nazwa="agent_tel_biuro">tel</param>--}}

{{--                        <param typ="text" nazwa="agent_tel_kom">tel</param>--}}

{{--                        <param nazwa="numer_licencji_posrednika" type="int">122</param>--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
