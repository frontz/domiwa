<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-600 leading-tight">
            Zgłoś nieruchomość
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="p-10 bg-orange-200">
                        <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                            <div class="sm:col-span-3"></div>
                            <div class="sm:col-span-6">
                                <h3 class="text-center text-lg">Jeśli chcesz zgłosić nieruchomość, napisz do nas</h3>
                                @livewire('report-form')
                                @livewireScripts
                            </div>
                            <div class="sm:col-span-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
