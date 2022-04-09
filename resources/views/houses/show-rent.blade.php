<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    /** {*/
    /*    margin: 0;*/
    /*    padding: 0;*/
    /*    box-sizing: border-box;*/
    /*    font-family: "Poppins";*/
    /*}*/
    /*body {*/
    /*    display: flex;*/
    /*    justify-content: center;*/
    /*    min-height: 100vh;*/
    /*    align-items: center;*/
    /*    background-color: #091921;*/
    /*}*/
    .heading {
        color: #fff;
        text-align: center;
        font-size: 2em;
        margin: 2em 0;
    }
    .images {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 1em;
        margin: 0 1em;
    }
    .images img {
        width: 100%;
        cursor: pointer;
        transition: 0.3s all ease;
    }
    .images img:hover {
        transform: scale(0.95);
    }
    .modal {
        position: fixed;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        background-color: rgba(0, 0, 0, 0.7);
        color: #fff;
        z-index: 1;
        overflow: auto;
        opacity: 0;
        pointer-events: none;
    }
    .modalContent {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .modalImg {
        width: 80%;
        max-width: 700px;
    }
    .modalTxt {
        margin-top: 1em;
    }
    .close {
        position: absolute;
        top: 1em;
        right: 1.5em;
        font-size: 1.5em;
        cursor: pointer;
    }
    .modal.appear {
        opacity: 1;
        pointer-events: all;
    }
    .modal.appear .modalImg,
    .modal.appear .modalTxt {
        animation: zoom 0.3s linear;
    }
    @keyframes zoom {
        from {
            transform: scale(0);
        }
        to {
            transform: scale(1);
        }
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-600 leading-tight">
            {{ $houseRent->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{--                    Tutaj p-10 - ustawiłem margines od krawędzi karty--}}
                    <div class="bg-orange-200">
                        <!-- component -->
                        <div class="py-1 text-center">
                            <span class="text-xl"><b>{{ $houseRent->title }}</b> - szczegóły oferty </span>
                        </div>
                        <div class="py-1 text-center">
                            <span class="italic">{{ $houseRent->description }}</span>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                            <div class="sm:col-span-6">
                                <div class="py-1">
                                    <span>Województwo: {{ $houseRent->voivodeship }}, powiat: {{ $houseRent->district }},<br> gmina: {{$houseRent->commune }}, ulica: {{ $houseRent->street }}, miasto: <b>{{$houseRent->city}}</b></span>
                                </div>
                                <div class="py-1">
                                    <span class="text-lg" style="display: inline-block;">Powierzchnia: <b>{{ $houseRent->area }} m<sup>2</sup></b></span></span>
                                </div>
                                <div class="py-1">
                                    <span
                                        class="text-lg">Cena: <b>{{ number_format($houseRent->price, 0 , ',', ' ') }} PLN</b></span>
                                </div>
                                <div class="py-1">
                                    <span class="text-lg">Cena za m<sup>2</sup>: <b>{{ number_format($houseRent->price / $houseRent->area, 0, ',', ' ') }} PLN</b></span>
                                </div>
                                <div class="py-1">
                                    <span>Liczba pokoi: <b>{{ $houseRent->rooms_nr }}</b></span>
                                </div>
                                <div class="py-1">
                                    <span>Liczba pomieszczeń: <b>{{ $houseRent->utility_rooms_nr }}</b></span>
                                </div>
                                <div class="py-1">
                                    <span>Liczba pomieszczeń: <b>{{ $houseRent->bathrooms_nr }}</b></span>
                                </div>
                                <div class="py-1">
                                    <span class="text-lg">Liczba pięter: <b>{{ $houseRent->floors_nr }}</b></span>
                                </div>
                                <div class="py-1">
                                    <span class="text-lg">Liczba pięter: <b>{{ $houseRent->floors_nr }}</b></span>
                                </div>
                                <div class="py-1">
                                    <span class="text-lg">Typ budowy: <b>{{ $houseRent->building_type }}</b></span>
                                </div>
                            </div>

                            <div class="sm:col-span-6">

                                @if ($houseRent->heating === 1)
                                    <div class="py-1">
                                        <b>Z ogrzewaniem</b>
                                    </div>
                                @endif
                                @if(isset($houseRent->driveway))
                                    <div class="py-1">
                                        <span>Droga dojazdowa: <b>{{ $houseRent->driveway }}</b></span>
                                    </div>
                                @endif
                                @if(isset($houseRent->balcony))
                                    <div class="py-1">
                                        @if($houseRent->balcony === 1)
                                            <span>Balkon: <b>Tak</b></span>
                                        @else
                                            <b>Nie</b>
                                        @endif
                                    </div>
                                @endif
                                @if ($houseRent->water_connection)
                                    <div class="py-1">
                                        <span>Podłączenie wody: <b>{{ $houseRent->water_connection }}</b></span>
                                    </div>
                                @endif
                                @if (isset($houseRent->decorated_garden))
                                    <div class="py-1">
                                        @if($houseRent->decorated_garden === 1)
                                            <span>Ogród urządzony: <b>Tak</b></span>
                                        @else
                                            <b>Nie</b>
                                        @endif
                                    </div>
                                @endif
                                @if (isset($houseRent->electricity))
                                    <div class="py-1">
                                        @if($houseRent->electricity === 1)
                                            <span>Prąd: <b>Tak</b></span>
                                        @else
                                            <b>Nie</b>
                                        @endif
                                    </div>
                                @endif
                                @if (isset($houseRent->power))
                                    <div class="py-1">
                                        @if($houseRent->power === 1)
                                            <span>Siła: <b>Tak</b></span>
                                        @else
                                            <b>Nie</b>
                                        @endif
                                    </div>
                                @endif
                                @if(isset($houseRent->sewers))
                                    <div class="py-1">
                                        <span>Kanalizacja: <b>{{ $houseRent->sewers }}</b></span>
                                    </div>
                                @endif
                                @if(isset($houseRent->roof_type))
                                    <div class="py-1">
                                        <span>Typ dachu: <b>{{ $houseRent->roof_type }}</b></span>
                                    </div>
                                @endif
                                @if(isset($houseRent->condition))
                                    <div class="py-1">
                                        <span>Stan budynku: <b>{{ $houseRent->condition }}</b></span>
                                    </div>
                                @endif
                                @if(isset($houseRent->exclusivity))
                                    <div class="py-1">
                                        @if($houseRent->exclusivity === 1)
                                            <span>Na wyłączność: <b>Tak</b></span>
                                        @else
                                            <b>Nie</b>
                                        @endif
                                    </div>
                                @endif
                                @if(isset($houseRent->property_form))
                                    <div class="py-1">
                                        <span>Forma własności: <b>{{ $houseRent->property_form }}</b></span>
                                    </div>
                                @endif
                                <div class="py-1">
                                    Kontakt do pośrednika:<br>
                                    tel: <b>{{ $houseRent->broker_phone }}</b>, mail:
                                    <b>{{ $houseRent->broker_email }}</b>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="container mx-auto px-4">

                        <section class="py-8">
                            <div class="flex flex-wrap -mx-4 -mb-8">
                                <div class="images">
                                    @foreach(json_decode($houseRent->images) as $image)
                                        <div class="px-2 mb-8">
                                            <button>
                                                <img class="modal-open img rounded shadow-md"
                                                     src="{{ asset('/storage/' . $image) }}"
                                                     style="width: 360px; height: 180px">
                                            </button>
                                        </div>
                                        <div class="modal">
                                            <span class="close"><i class="fas fa-times"></i></span>
                                            <div class="modalContent">
                                                <img src="" class="modalImg" />
                                                <span class="modalTxt"></span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

<script src="https://kit.fontawesome.com/7368c40b21.js" crossorigin="anonymous"></script>
<script type="text/javascript">
    const images = document.querySelectorAll(".images img");
    const modal = document.querySelector(".modal");
    const modalImg = document.querySelector(".modalImg");
    const modalTxt = document.querySelector(".modalTxt");
    const close = document.querySelector(".close");

    images.forEach((image) => {
        image.addEventListener("click", () => {
            modalImg.src = image.src;
            modalTxt.innerHTML = image.alt;
            modal.classList.add("appear");
            close.addEventListener("click", () => {
                modal.classList.remove("appear");
            });
        });
    });
</script>
