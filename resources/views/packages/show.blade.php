<x-app-layout title=" - {{ $banquet->name }}">

    <style>
        .custom-shadow {
            text-shadow: 0 2px 4px gray;
        }

        button:focus {
            outline: none;
        }

    </style>
    <div class="mx-auto">
        <div class="relative">
            {{-- Banquet Slide --}}
            <div class="swiper overflow-hidden">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="w-full sm:h-screen h-96 object-cover object-center"
                            src="https://images.unsplash.com/photo-1529636120425-66f3708694e7?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dmVudWV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="w-full sm:h-screen h-96 object-cover object-center"
                            src="https://images.unsplash.com/photo-1529636120425-66f3708694e7?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dmVudWV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="w-full sm:h-screen h-96 object-cover object-center"
                            src="https://images.unsplash.com/photo-1529636120425-66f3708694e7?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dmVudWV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="w-full sm:h-screen h-96 object-cover object-center"
                            src="https://images.unsplash.com/photo-1529636120425-66f3708694e7?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dmVudWV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="">
                    </div>
                </div>

            </div>
            <div class="z-10 absolute left-10 sm:bottom-20 bottom-12">
                <h1 class="custom-shadow text-white text-xl px-2 py-1">
                    {{ $banquet->banquet_type }}
                </h1>
            </div>
            <div class="absolute right-10 bottom-10 z-10">
                @livewire('add-banquet-image', ['id' => $banquet->id])
            </div>
        </div>
        <div class="grid grid-cols-5 gap-4 mt-5">
            {{-- Main Content --}}
            <div class="col-span-full lg:col-span-3 px-4">

                <h1 class="text-2xl sm:text-xl md:text-2xl xl:text-3xl pb-3 font-medium">
                    {{ $banquet->name }}
                </h1>
                <div class="flex justify-start items-center">
                    <span class="fa fa-city"></span>
                    <h2 class="pl-1 sm:text-sm md:text-lg xl:text-xl  font-medium">
                        {{ $banquet->address }}
                    </h2>
                </div>
                <div class="flex justify-start items-center pb-3 mb-5 border-b-2">
                    <span class="fa fa-map-marker-alt"></span>

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
                        <span class="fa fa-users text-blue-500"></span>
                        <h2 class="pl-2">
                            {{ $banquet->min_cap }}-{{ $banquet->max_cap }}
                        </h2>
                    </div>
                </div>
                <h1 class="text-lg lg:text-xl xl:text-2xl ">Services</h1>

                @livewire('service', ['banquet' => $banquet])

                <div class="border-b-2"></div>

            </div>
            {{-- * Main Content * --}}


            {{-- Book Content --}}
            <div
                class="shadow-none sm:shadow-none md:shadow-none lg:shadow-lg col-span-full md:col-span-3 lg:col-span-2 sm:col-start-1 md:col-start-2 border-blue-400 sm:border-0 lg:border-2 mr-0 sm:mr-4 p-4">
                <h1>Request For Booking</h1>
                @livewire('book', ['banquet' => $banquet])
                @livewire('review', ['banquet' => $banquet])
            </div>
            {{-- * Book Content * --}}
        </div>
        {{-- Related Slide --}}
        @if ($related->count() > 1)
            <div class="container mx-auto relative px-14">
                <h1 class="text-2xl py-5">Banquets in {{ $banquet->place }}</h1>
                <div id="related" class="related-swiper overflow-hidden">
                    <div class="swiper-wrapper">
                        @foreach ($related as $relatedBanquet)
                            @if ($banquet->id != $relatedBanquet->id)
                                <div class="swiper-slide">
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
            </div>
        @endif
        @livewire('reviews', ['banquet' => $banquet])
    </div>

    <script>
        const swiper = new Swiper('.swiper', {
            slidesPerView: 1,
            loop: true,
            autoplay: true,
        });
        const relatedSwiper = new Swiper('.related-swiper', {
            slidesPerView: 3,
            spaceBetween: 20,
            centeredSlides: false,
            breakpoints: {
                400: {
                    slidesPerView: 1,
                    centeredSlides: true,
                },
                600: {
                    slidesPerView: 2,
                },
                900: {
                    slidesPerView: 3,
                },
                1100: {
                    slidesPerView: 4,
                },
                1400: {
                    slidesPerView: 5,
                },
            }
        })
    </script>

</x-app-layout>
