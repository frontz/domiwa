<!-- This example requires Tailwind CSS v2.0+ -->
<nav class="bg-blue-600">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!--
                      Icon when menu is closed.

                      Heroicon name: outline/menu

                      Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!--
                      Icon when menu is open.

                      Heroicon name: outline/x

                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div>
                <img src="{{ URL::to('/img/domiwa-logo.png') }}" alt="no logo" style="width: 86px">
            </div>

            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">

                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="{{ route('dashboard') }}" class="text-gray-300 hover:bg-blue-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                        <a href="{{ route('about') }}" class="text-gray-300 hover:bg-blue-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium">O nas</a>
                        <a href="{{ route('offers') }}" class="text-gray-300 hover:bg-blue-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Oferty</a>

                    </div>
                </div>

                <div class="relative inline-block text-left" style="margin-left: 10px">
                    <div>
                        <button id="dropdownServBtn" type="button" class="bg-blue-600 inline-flex justify-center w-full rounded-md px-4 py-2 text-sm font-medium text-gray-300 text-gray-300 hover:bg-blue-800 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="menu-button" aria-expanded="true" aria-haspopup="true">
                            Usługi dodatkowe
                            <!-- Heroicon name: solid/chevron-down -->
                            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <!--
                      Dropdown menu, show/hide based on menu state.

                      Entering: "transition ease-out duration-100"
                        From: "transform opacity-0 scale-95"
                        To: "transform opacity-100 scale-100"
                      Leaving: "transition ease-in duration-75"
                        From: "transform opacity-100 scale-100"
                        To: "transform opacity-0 scale-95"
                    -->
                    <div id="dropdownServDiv" class="class=origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"  style="display: none">
                        <div class="bg-blue-600 py-1" role="none">
                            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                            <a href="{{ route('design') }}" class="text-gray-300 hover:bg-blue-800 block px-4 py-2 rounded-md text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Zaprojektuj swoje wnętrze</a>
                            <a href="{{ route('eko') }}" class="text-gray-300 hover:bg-blue-800 block px-4 py-2 rounded-md text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Bądź eko, obniż rachunki</a>
                            <a href="{{ route('insurance') }}" class="text-gray-300 hover:bg-blue-800 block px-4 py-2 rounded-md text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Ubezpiecz nieruchomość</a>
                            <a href="{{ route('credit') }}" class="text-gray-300 hover:bg-blue-800 block px-4 py-2 rounded-md text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Skredytuj nieruchomość</a>
                            <a href="{{ route('quotation') }}" class="text-gray-300 hover:bg-blue-800 block px-4 py-2 rounded-md text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Wyceń nieruchomość</a>
                            <a href="{{ route('geodesy') }}" class="text-gray-300 hover:bg-blue-800 block px-4 py-2 rounded-md text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Geodezja i kartografia</a>
                        </div>
                    </div>
                </div>
                <div class="hidden sm:block sm:ml-6" style="margin-left: 10px">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="{{ route('contact') }}" class="text-gray-300 hover:bg-blue-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Kontakt</a>
                        <a href="{{ route('report') }}" class="text-gray-300 hover:bg-blue-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Zgłoś nieruchomość</a>
                    </div>
                </div>
            </div>

            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <div>
                    @if (Auth::guest())
                        <a href="{{ route('login') }}" class="text-gray-300 hover:bg-blue-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Administracja</a>
                    @else
                        <div>
                            <button id="dropdownAdminBtn" type="button" class="bg-blue-600 inline-flex justify-center w-full rounded-md px-4 py-2 text-sm font-medium text-gray-300 text-gray-300 hover:bg-blue-800 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="menu-button" aria-expanded="true" aria-haspopup="true">
                            {{ Auth::user()->name }}
                            <!-- Heroicon name: solid/chevron-down -->
                                <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                        <div id="dropdownAdminDiv" class="class=origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"  style="display: none">
                            <div class="bg-blue-600 py-1" role="none">
                                <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                <a href="{{ route('admins') }}" class="text-gray-300 hover:bg-blue-800 block px-4 py-2 rounded-md text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Zarządzaj użytkownikami</a>
                                <a href="{{ route('offers') }}" class="text-gray-300 hover:bg-blue-800 block px-4 py-2 rounded-md text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Zarządzaj ofertami</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="#" class="text-gray-300 hover:bg-blue-800 block px-4 py-2 rounded-md text-sm" onclick="event.preventDefault(); this.closest('form').submit();">Wyloguj</a>
                                </form>
                            </div>
                        </div>


                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
        </div>
    </div>
</nav>


<script type="text/javascript">
    let dropdownServBtn = document.getElementById('dropdownServBtn');
    let dropdownServDiv = document.getElementById('dropdownServDiv');
    dropdownServDiv.addEventListener('click', openCloseServDropdown);
    dropdownServBtn.addEventListener('click', openCloseServDropdown);
    function openCloseServDropdown() {
        if (dropdownServDiv.style.display === "none") {
            dropdownServDiv.style.display = "block";
        } else {
            dropdownServDiv.style.display = "none";
        }
    }
    let dropdownAdminBtn = document.getElementById('dropdownAdminBtn');
    let dropdownAdminDiv = document.getElementById('dropdownAdminDiv');
    dropdownAdminDiv.addEventListener('click', openCloseAdminDropdown);
    dropdownAdminBtn.addEventListener('click', openCloseAdminDropdown);
    function openCloseAdminDropdown() {
        if (dropdownAdminDiv.style.display === "none") {
            dropdownAdminDiv.style.display = "block";
        } else {
            dropdownAdminDiv.style.display = "none";
        }
    }
</script>


