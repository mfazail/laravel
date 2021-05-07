<x-app-layout title="{{ $banquet->name }}">

    <style>
        #head img {
            height: 90vh;
        }

        .custom-shadow {
            text-shadow: 0 2px 4px gray;
        }

        button:focus {
            outline: none;
        }

        .owl-prev {
            position: absolute;
            top: 40vh;
            left: 0;
            width: 50px;
            outline: none;
            border: none;

        }

        .owl-next {
            position: absolute;
            top: 40vh;
            right: 0;
            width: 50px;
            outline: none;
            border: none;
        }

        .owl-prev span,
        .owl-next span {
            font-size: 2rem;
            color: white;
        }

        @media(max-width:500px) {
            #head img {
                height: 40vh;
            }

            .owl-next,
            .owl-prev {
                top: 20vh;
            }
        }

    </style>
    <div class="mx-auto">
        <div class="relative">
            <div id="head" class="owl-carousel owl-theme">
                <div class="item">
                    <img class="w-full object-cover object-center"
                        src="https://images.unsplash.com/photo-1529636120425-66f3708694e7?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dmVudWV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="">
                </div>
                <div class="item">
                    <img class="w-full object-cover object-center"
                        src="https://images.unsplash.com/photo-1529636120425-66f3708694e7?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dmVudWV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="">
                </div>
                <div class="item">
                    <img class="w-full object-cover object-center"
                        src="https://images.unsplash.com/photo-1529636120425-66f3708694e7?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dmVudWV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="">
                </div>
                <div class="item">
                    <img class="w-full object-cover object-center"
                        src="https://images.unsplash.com/photo-1529636120425-66f3708694e7?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dmVudWV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="">
                </div>
            </div>
            <div class="z-10 absolute left-10 sm:bottom-20 bottom-12">
                <h1 class="custom-shadow text-white text-xl px-2 py-1">
                    @switch($banquet->banquet_type)
                        @case(0)
                            Premium
                        @break
                        @case(1)
                            Economic
                        @break
                        @case(2)
                            Basic
                        @break
                        @default
                    
                    @endswitch
                </h1>
            </div>
        </div>
        <div class="grid grid-cols-5 gap-4">
            {{-- Main Content --}}
            <div class="col-span-full lg:col-span-3 px-4">

                <h1 class="text-2xl sm:text-xl md:text-2xl xl:text-3xl pb-3 font-medium">
                    {{ $banquet->name }}
                </h1>
                <div class="flex justify-start items-center">
                    <span class="material-icons">location_city</span>
                    <h2 class="pl-1 sm:text-sm md:text-lg xl:text-xl  font-medium">
                        {{ $banquet->address }}
                    </h2>
                </div>
                <div class="flex justify-start items-center pb-3 mb-5 border-b-2">
                    <span class="material-icons">place</span>

                    <h3 class="text-sm pl-1">
                        {{ $banquet->place }}
                    </h3>
                </div>
                <div class="flex justify-around flex-wrap items-center py-6">
                    <div class="flex flex-col justify-center items-center">
                        <span class="border-2 border-green-400 w-5 h-5 fa fa-circle text-green-400"></span>
                        <h3 class="pl-2 text-green-400">{{ $banquet->price }}/Plate</h3>
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <span class="border-2 border-red-400 w-5 h-5 fa fa-circle text-red-400"></span>
                        <h3 class="pl-2 text-red-400">{{ $banquet->price }}/Plate</h3>
                    </div>
                    <div class="flex flex-col justify-start items-center">
                        <span class="material-icons w-5 h-5">groups</span>
                        <h2 class="pl-2">
                            {{ $banquet->min_cap }}-{{ $banquet->max_cap }}
                        </h2>
                    </div>
                </div>
                <h1 class="text-lg lg:text-xl xl:text-2xl ">Services</h1>
                <ul class="pl-2 pb-4 pt-2">
                    @foreach ($services as $service)
                        <li class="pt-2">{{ $service->service_name }}</li>
                    @endforeach
                </ul>
                <div class="border-b-2"></div>

            </div>
            {{-- * Main Content * --}}


            {{-- Book Content --}}
            <div
                class=" shadow-none sm:shadow-none md:shadow-none lg:shadow-lg col-span-full md:col-span-3 lg:col-span-2 sm:col-start-1 md:col-start-2 border-blue-400 sm:border-0 lg:border-2 mr-0 sm:mr-4 p-4">
                <h1>Request For Booking</h1>
                @livewire('book', ['banquet' => $banquet])
                @livewire('review', ['banquet' => $banquet])
            </div>
            {{-- * Book Content * --}}
        </div>
        @if ($related->count() > 1)
            <div class="container mx-auto relative px-14">
                <h1 class="text-2xl py-5">Banquets in {{ $banquet->place }}</h1>
                <div id="related" class="owl-carousel owl-theme">
                    @foreach ($related as $relatedBanquet)
                        @if ($banquet->id != $relatedBanquet->id)
                            <div class="item">
                                <a href="{{ route('packages.show', $relatedBanquet->id) }}">
                                    <img class="h-64 object-cover object-center z-0"
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcBjbprc7-3sQwf0hP5xLBnKnMmLV8HzINWQ&usqp=CAU"
                                        alt="{{ $relatedBanquet->name }}">
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        @endif
        @livewire('reviews', ['banquet' => $banquet])
    </div>

    <script>
        $('#head').owlCarousel({
            items: 1,
            loop: true,
            nav: true
        })
        $('#related').owlCarousel({
            items: 3,
            margin: 20,
            loop: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    center: true,
                    autowidth: true,
                },
                600: {
                    items: 2,
                    nav: false
                },
                900: {
                    items: 3,
                },
                1100: {
                    items: 4,
                },
                1400: {
                    items: 5,
                }
            }
        })

    </script>

</x-app-layout>
