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
            {{ $flat->title }}
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
                            <span class="text-xl"><b>{{ $flat->title }}</b> - szczegóły oferty </span>
                        </div>
                        <div class="py-1 text-center">
                            <span class="italic">{{ $flat->description }}</span>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 py-5 px-1">
                            <div class="sm:col-span-6">
                                <div class="py-1">
                                    <span>Województwo: {{ $flat->voivodeship }}, powiat: {{ $flat->district }},<br> gmina: {{$flat->commune }}, ulica: {{ $flat->street }}, miasto: <b>{{$flat->city}}</b></span>
                                </div>
                                <div class="py-1">
                                    <span class="text-lg" style="display: inline-block;">Powierzchnia: <b>{{ $flat->area }} m<sup>2</sup></b></span></span>
                                </div>
                                <div class="py-1">
                                    <span class="text-lg">Cena: <b>{{ $flat->price }} PLN</b></span>
                                </div>
                                <div class="py-1">
                                    <span class="text-lg">Cena za m<sup>2</sup>: <b>{{ round($flat->price / $flat->area) }} PLN</b></span>
                                </div>
                                <div class="py-1">
                                    <span>Liczba pokoi: <b>{{ $flat->rooms_nr }}</b></span>
                                </div>
                                <div class="py-1">
                                    <span>Liczba telefonów: <b>{{ $flat->phone_nr }}</b></span>
                                </div>
                                <div class="py-1">
                                    <span>Piętro: <b>{{ $flat->floor }}</b></span>
                                </div>
                                <div class="py-1">
                                    <span class="text-lg">Liczba pięter: <b>{{ $flat->floor_nr }}</b></span>
                                </div>
                                <div class="py-1">
                                    <span class="text-lg">Rok budowy: <b>{{ $flat->year_build }}</b></span>
                                </div>
                            </div>

                            <div class="sm:col-span-6">
                                @if (is_array($flat->kitchen_type))
                                    <div class="py-1">
                                    <span>Kuchnia:
                                            @foreach(json_decode($flat->kitchen_type) as $kitchen_type)
                                            <b>{{ $kitchen_type }}</b>,
                                        @endforeach
                                    </span>
                                    </div>
                                @endif
                                @if (is_array($flat->kitchen_type))
                                    <div class="py-1">
                                    <span>Media:
                                        @foreach(json_decode($flat->media) as $media)
                                            <b>{{ $media }}</b>,
                                        @endforeach
                                    </span>
                                    </div>
                                @endif
                                @if(isset($flat->heating))
                                    <div class="py-1">
                                        <span>Ogrzewanie: <b>{{ $flat->heating }}</b></span>
                                    </div>
                                @endif
                                @if(isset($flat->parking))
                                    <div class="py-1">
                                        <span>M-ce parkingowe: <b>{{ $flat->parking }}</b></span>
                                    </div>
                                @endif
                                @if(isset($flat->balcony))
                                    <div class="py-1">
                                        <span>Balkon: <b>{{ $flat->balcony }}</b></span>
                                    </div>
                                @endif
                                @if(isset($flat->basement))
                                    <div class="py-1">
                                        <span>Piwnica: <b>{{ $flat->basement }}</b></span>
                                    </div>
                                @endif
                                @if ($flat->lift === 1)
                                    <div class="py-1">
                                        <b>Winda</b>
                                    </div>
                                @endif
                                @if ($flat->furniture === 1)
                                    <div class="py-1">
                                        <b>Mieszkanie umeblowane</b>
                                    </div>
                                @endif
                                @if ($flat->fitted_kitchen === 1)
                                    <div class="py-1">
                                        <b>Kuchnia wyposażona</b>
                                    </div>
                                @endif
                                @if(isset($flat->condition))
                                    <div class="py-1">
                                        <span>Stan lokalu: <b>{{ $flat->condition }}</b></span>
                                    </div>
                                @endif
                                @if ($flat->exclusivity === 1)
                                    <div class="py-1">
                                        <b>Mieszkanie na wyłączność</b>
                                    </div>
                                @endif
                                @if ($flat->closed_estate == 1)
                                    <div class="py-1">
                                        <b>Osiedle zamknięte</b>
                                    </div>
                                @endif
                                <div class="py-1">
                                    Kontakt do pośrednika:<br>
                                    tel: <b>{{ $flat->broker_phone }}</b>, mail: <b>{{ $flat->broker_email }}</b>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="container mx-auto px-4">

                        <section class="py-8">
                            <div class="flex flex-wrap -mx-4 -mb-8">
                                <div class="images">
                                    @foreach(json_decode($flat->images) as $image)
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
