<div id="footer" class="bg-blue-600">

    <!-- start container -->
    <div class="container max-w-7xl mx-auto pt-8 pb-4">

        <div class="flex flex-wrap overflow-hidden sm:-mx-1 md:-mx-px lg:-mx-2 xl:-mx-2 grid grid-cols-3 gap-4">

            {{--            <div class="w-full overflow-hidden sm:my-1 sm:px-1 sm:w-1/2 md:my-px md:px-px md:w-1/2 lg:my-2 lg:px-2 lg:w-1/4 xl:my-2 xl:px-2 xl:w-1/4 pb-6">--}}
            {{--                <!-- Column 1 Content -->--}}
            {{--                <img style="max-width: 70%;height:auto;" class="" src="https://pngimage.net/wp-content/uploads/2019/05/fake-logo-png-.png" alt="Logo">--}}
            {{--            </div>--}}

            <div class="w-full text-center pb-6">
                <!-- Column 1 Content -->
                <h4 class="text-white">Lista aktualnych ofert</h4>
                <ul class="">
                    <li id="navi-2">
                        <a href="{{ route('aftermarket') }}"
                           class="text-gray-300 hover:text-white text-small underline">
                            Oferty </a>
                    </li>
                </ul>
            </div>

            <div class="w-full text-center pb-6">
                <!-- Column 2 Content -->
                <h4 class="text-white">Kontakt</h4>
                <ul class="">
                    <li id="navi-2" class="leading-7 text-sm font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-300 h-5 w-5;" viewBox="0 0 20 20"
                             fill="currentColor" style="display: inline-block">
                            <path
                                d="M14.414 7l3.293-3.293a1 1 0 00-1.414-1.414L13 5.586V4a1 1 0 10-2 0v4.003a.996.996 0 00.617.921A.997.997 0 0012 9h4a1 1 0 100-2h-1.586z"/>
                            <path
                                d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                        </svg>
                        <a href="#" class="text-gray-300 hover:text-white text-small underline">
                            tel. 782 077 003
                        </a>
                    </li>
                    <li id="navi-2" class="leading-7 text-sm font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-300 h-5 w-5" viewBox="0 0 20 20"
                             fill="currentColor" style="display: inline-block">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                        </svg>
                        <a href="mailto:biuro@domiwa.nieruchomosci.pl" class="text-gray-300 hover:text-white text-small underline">
                            biuro@domiwa.nieruchomosci.pl
                        </a>
                    </li>
                    <li id="navi-2" class="leading-7 text-sm font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-300 h-5 w-5"
                             viewBox="0 0 155.139 155.139" fill="currentColor" style="display: inline-block">
                            <path id="f_1_" d="M89.584,155.139V84.378h23.742l3.562-27.585H89.584V39.184
		                            c0-7.984,2.208-13.425,13.67-13.425l14.595-0.006V1.08C115.325,0.752,106.661,0,96.577,0C75.52,0,61.104,12.853,61.104,36.452
                                    v20.341H37.29v27.585h23.814v70.761H89.584z"/>
                        </svg>
                        <a href="#" class="text-gray-300 hover:text-white text-small underline">
                            Sprawdź nas na FB
                        </a>
                    </li>
                </ul>
                <p class="text-gray-300 text-center text-sm font-medium">
                </p>
            </div>

            <div class="w-full text-center pb-6">
                <!-- Column 4 Content -->
                <img src="{{ URL::to('/img/laureat.png') }}" style="width: 100px; display: block; margin-left: auto; margin-right: auto">
            </div>

        </div>

        <div class="pt-4" style="border-top:1px solid white">
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <p class="text-left text-gray-300 text-sm font-medium">© 2021 DOMiwa | All Rights Reserved</p>
                </div>
                <div>
                    <p class="text-right text-gray-300 text-sm font-medium">
                        Site made by
                        <a href="http://beinspired.com.pl/"
                           class="text-gray-300 hover:text-white py-2 rounded-md text-sm font-medium underline"
                           target="_blank">Be Inspired</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>
