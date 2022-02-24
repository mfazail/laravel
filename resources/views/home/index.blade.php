<x-app-layout title="">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Cookie&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Mitr&display=swap');


        .custom-shadow {
            text-shadow: 0 2px 4px gray;
        }

        button:focus {
            outline: none;
        }

        .t-shadow {
            text-shadow: 0 2px 4px rgba(0, 55, 255, 0.551);
        }

    </style>

    <div>
        {{-- Head --}}
        <div class="top-head">
            <!-- Slider main container -->
            <div class="swiper relative">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div>
                            <img class=" w-full h-4/5 sm:h-screen object-cover
                            object-center"
                                src="https://images.unsplash.com/photo-1529636120425-66f3708694e7?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dmVudWV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                alt="">
                            <div class="absolute left-5 top-1/3 px-6 sm:p-14">
                                <h1 class="text-3xl sm:text-6xl mb-4 text-white custom-shadow">Get The Best Venues</h1>
                                <span class="text-white sm:text-4xl custom-shadow">No Ceremony Can Reach Its Full Aspect
                                    Unless
                                    A Best Venue Is Chosen</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <img class=" w-full h-4/5 sm:h-screen object-cover
                            object-center"
                                src="https://images.unsplash.com/photo-1469371670807-013ccf25f16a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8dmVudWV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                alt="">
                            <div class="absolute left-5 top-1/3 px-6 sm:p-14">
                                <h1 class="text-3xl sm:text-6xl mb-4 text-white custom-shadow">Best Finder For You</h1>
                                <span class="text-white sm:text-4xl custom-shadow">Start Planning Your Event By Choosing
                                    The
                                    Perfect Venue</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <img class=" w-full h-4/5 sm:h-screen object-cover
                            object-center"
                                src="https://images.unsplash.com/photo-1594666271705-6355eb1dd521?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fHZlbnVlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                alt="">
                            <div class="absolute left-5 top-1/3 px-6 sm:p-14">
                                <h1 class="text-3xl sm:text-6xl mb-4 text-white custom-shadow">Bengal Vibes</h1>
                                <span class="text-white sm:text-4xl custom-shadow">Get The Best List Of Banquets And
                                    Lawns In
                                    Bengal</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- If we need navigation buttons -->
                <button class="left-icon absolute left-2 sm:left-5 z-10 inset-y-0 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-5 sm:h-8 w-5 sm:w-8 bg-white bg-opacity-75 p-1 rounded-full hover:text-blue-400 transition-all duration-200 transform rotate-90"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <button class="right-icon absolute right-2 sm:right-5 z-10 inset-y-0 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-5 sm:h-8 w-5 sm:w-8 bg-white bg-opacity-75 p-1 rounded-full hover:text-blue-400 transition-all duration-200 transform -rotate-90"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

            </div>
        </div>

        <div class="container mx-auto">
            <h1 class="text-center my-4 pt-6 text-2xl sm:text-3xl">Search Venues By <span
                    class="text-blue-500">Banquet's
                    Name</span>, <span class="text-blue-500">Place</span> or <span
                    class="text-blue-500">Address</span>.
            </h1>

            <div class="pt-4">
                <form class="flex items-center justify-between w-3/4 bg-white sm:w-1/2 m-auto rounded-xl shadow-xl"
                    action="{{ route('search') }}" method="get">
                    <input type="text" class=" h-12 px-3 py-2 text-blue-400 border-none rounded-l-xl flex-grow "
                        name="s" placeholder="Search..." aria-label="Search Banquet" aria-describedby="basic-addon2">
                    <button type="submit"
                        class="h-12 outline-none border-none focus:outline-none bg-blue-500 text-white rounded-r-xl py-2 pl-2 pr-5 ">Search</button>
                </form>

            </div>
        </div>
        <h1 class="text-center my-4 pt-6 text-2xl sm:text-3xl">Select Venue Category</h1>
        <h5 class="text-center my-3 px-3">Find Venues Of All Categories Differentiated In Three Different Classes With A
            Wide Range Of Packages & Offers.
        </h5>

        {{-- Venue Plans --}}
        <div class="py-4">
            <div class="price-swiper w-full max-w-5xl mx-auto overflow-hidden pb-5">
                <div class="swiper-wrapper">
                    <div class="swiper-slide w-full pt-12">
                        <div class="w-80 rounded-lg hover:shadow-md shadow-xl bg-white border border-gray-300">
                            <img class="rounded-t-lg h-60"
                                src="https://lh3.googleusercontent.com/O-369Wv-rOHFSXEZkalH1jQzSu1cRnlKJt4VmN52etQyFOYYTVDyLAITntI2PEbOTNmhZB5VP1NN6M7__26cv2m0=w746-h498-l95">
                            <div class="p-2">
                                <h1 class="text-xl" style="font-family: 'Mitr', cursive;">Basic</h1>
                                <span style="font-family: 'Cookie', cursive; font-size: 25px">Budgeted Banquets At
                                    Affordable
                                    Price.</span>
                                <h4 class="border-bottom mt-2 py-2 text-center" style="font-family: 'Mitr', sans-serif">
                                    FEATURES
                                </h4>
                                <ul class="pl-3">
                                    <li class="py-1"><span class="fa fa-check pt-1 text-blue-500"></span>
                                        Exciting
                                        Complimentary
                                        Gifts</li>
                                    <li class="py-1"><span class="fa fa-check pt-1 text-blue-500"></span>
                                        4 Hours
                                        Event
                                        Assistance</li>
                                    <li class="py-1"><span class="fa fa-check pt-1 text-blue-500"></span>
                                        1 Welcome
                                        Girl To
                                        Greet Everyone On the Entrance</li>
                                </ul>
                                <div class="flex justify-end space-x-2 items-center">
                                    <a href="/packages/basic" class="text-blue-400 text-center">Check Banquets
                                    </a>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-full">
                        <div class="w-80 rounded-lg hover:shadow-md shadow-xl bg-white border border-blue-400">
                            <div class="w-full bg-blue-400 rounded-t-md">
                                <h1 style="font-family:'Cookie', cursive;"
                                    class="text-white text-2xl px-2 py-1 text-center ">
                                    Most Booked</h1>
                            </div>
                            <img class="h-60"
                                src="https://miro.medium.com/max/4032/1*PjE6ttv85GlsJqZMn-mrnQ.jpeg">
                            <div class="p-2">
                                <h1 class="text-xl" style="font-family: 'Mitr', cursive;">Economic</h1>
                                <span style="font-family: 'Cookie', cursive; font-size: 25px">Simple Class With The
                                    Required
                                    Amenities . We Care For Your Available Resources.</span>
                                <h4 class="border-bottom mt-2 py-2 text-center" style="font-family: 'Mitr', sans-serif">
                                    FEATURES
                                </h4>
                                <ul class="pl-3">
                                    <li class="py-1"><span class="fa fa-check pt-1 text-blue-500"></span>
                                        2 Hours Free
                                        Photography</li>
                                    <li class="py-1"><span class="fa fa-check pt-1 text-blue-500"></span>
                                        8 Hours
                                        Event
                                        Assistance</li>
                                    <li class="py-1"><span class="fa fa-check pt-1 text-blue-500"></span>
                                        2 Welcome
                                        Girls To
                                        Greet Everyone On the Entrance</li>
                                </ul>
                                <div class="flex justify-end space-x-2 items-center">
                                    <a href="/packages/economic" class="text-blue-400">Check Banquets</a>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-full pt-12">
                        <div class="w-80 rounded-lg hover:shadow-md shadow-xl bg-white  border border-gray-300">
                            <img class="rounded-t-lg h-60"
                                src="https://www.mayfairhotels.com/img/Slider/Banquets/Convention/Central%20hall%20Mayfair%20Convention.jpg">
                            <div class="p-2">
                                <h1 class="text-xl" style="font-family: 'Mitr', cursive;">Premium</h1>
                                <span style="font-family: 'Cookie', cursive; font-size: 25px">We Are An Elite
                                    Economic Class
                                    With
                                    Some Extra Bells And Whistles.</span>
                                <h4 class="border-bottom mt-2 py-2 text-center" style="font-family: 'Mitr', sans-serif">
                                    FEATURES
                                </h4>
                                <ul class="pl-3">
                                    <li class="py-1"><span class="fa fa-check pt-1 text-blue-500"></span>
                                        Free
                                        Pre-Wedding
                                        Photography</li>
                                    <li class="py-1"><span class="fa fa-check pt-1 text-blue-500"></span>
                                        24 Hours
                                        Event
                                        Assistance</li>
                                    <li class="py-1"><span class="fa fa-check pt-1 text-blue-500"></span>
                                        Planning Of
                                        Special
                                        Entry For Groom Or Bride With Additional Features</li>
                                </ul>
                                <div class="flex justify-end space-x-2 items-center">
                                    <a href="/packages/premium" class="text-blue-400">Check Banquets</a>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h1 class="text-center my-4 pt-6 text-2xl sm:text-3xl">Venues For <span class="text-blue-500">Everyone</span>,
            <span class="text-blue-500">Any Event</span>, <span class="text-blue-500">Any Budget</span>.
        </h1>

        {{-- All Venues --}}
        <div class="mt-5">
            <div class="venue-swiper overflow-hidden">
                <div class="swiper-wrapper ">
                    @foreach ($banquets as $banquet)
                        <div class="swiper-slide shadow-lg h-52 w-full">
                            <img class="h-52 w-full object-cover object-center px-2"
                                src="https://images.unsplash.com/photo-1529636120425-66f3708694e7?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dmVudWV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
                            <h2 class="absolute bottom-12 text-white text-xl custom-shadow left-10">
                                {{ $banquet->name }}
                            </h2>
                            <h4 class="absolute bottom-7 text-white left-10">{{ $banquet->banquet_type }}</h4>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Review Section --}}
        <div class="py-3">
            <div class="container mx-auto relative">
                <h1 class="text-center my-4 pt-6 text-2xl sm:text-3xl">About Us</h1>
                <h5 class="text-center sm:px-4 md:px-4 lg:px-40 xl:px-40 2xl:px-40 pb-8">Searching For A Perfect Venue
                    In Kolkata Is No More A Hassle Task Because Venue Website Is Here To Help You With It. We Offer
                    Versatile Venues That Are Best Suitable According To
                    Your
                    Event. Our Range Of Venues Is Elegant And Upscale At The Same Time.</h5>
                <div class="flex justify-center flex-col sm:flex-col md:flex-col lg:flex-row xl:flex-row items-center">
                    <div class="sm:w-full lg:w-1/2 pt-5 px-4 sm:pl-4 md:pl-8 lg:pl-16 xl:pl-24">
                        <h3 class="text-center text-2xl text-blue-400" style="font-family: 'Cookie', cursive;">Why
                            Choose Us?</h3>
                        <ul class="py-2">
                            <li class="sm:text-center lg:text-right pb-3"><span>We Avail Services For Small As Well As
                                    Big Celebrations.</span></li>
                            <li class="sm:text-center lg:text-right pb-3"><span>We Put Focus On Your Needs Such, As
                                    Your
                                    Budget & CeremonyRequirements.</span></li>
                            <li class="sm:text-center lg:text-right pb-3"><span>Our Services Are Fast, Easily
                                    Accessible
                                    & Efficient.</span></li>
                            <li class="sm:text-center lg:text-right pb-3"><span>We Assure You A Free Event Consultation
                                    With Any Venue YouChoose.</span></li>
                            <li class="sm:text-center lg:text-right pb-3"><span>We Provide Venues That Add Colors To
                                    Your Occasion.</span></li>
                        </ul>
                    </div>
                    <div class="w-11/12 md:w-full lg:w-1/2 xl:w-1/2  px-3 xl:pr-16">
                        <h2 class="text-center " style="font-family:'Cookie', cursive; font-size: 40px">Our Customers
                        </h2>
                        <div id="cr" class="review-swiper shadow-xl overflow-hidden" style="background-color: white">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide p-4">
                                    <h3 class="text-center border-bottom pb-2 text-gray-800 text-2xl font-semibold ">
                                        Fazail
                                        Alam</h3>
                                    <h6 class="text-center pt-2 text-gray-600">
                                        "They Provide Quality Venues And Services. I Am Looking Forward To Book Venues
                                        For
                                        My
                                        Future
                                        Events From Here."
                                    </h6>
                                </div>
                                <div class="swiper-slide p-4">
                                    <h3 class="text-center border-bottom pb-2 text-gray-800 text-2xl font-semibold">
                                        Sumit
                                        Kumar</h3>
                                    <h6 class="text-center pt-2 text-gray-600">
                                        "It Is The Best Place For Getting Everything Done Under One Roof. I Am Very
                                        Satisfied
                                        With
                                        The Guidance They Have Provided Me Throughout Event Preparation From Planning
                                        Till
                                        Conduction."
                                    </h6>
                                </div>
                                <div class="swiper-slide p-4">
                                    <h3 class="text-center border-bottom pb-2 text-gray-800 text-2xl font-semibold">
                                        Vivek
                                        Singh</h3>
                                    <h6 class="text-center pt-2 text-gray-600">
                                        "Venue Website Is Very Responsive And Punctual. They Suggested The Best Suitable
                                        Venue
                                        For
                                        My Event. I Got Additional Services In My Package That Made My Work
                                        Hassle-Free."
                                    </h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        {{-- Gallery --}}
        <div class="container py-5 m-auto">
            <h1 class="text-center my-4 pt-6 text-2xl sm:text-3xl">Gallery</h1>
            <h5 class="my3 text-center">Watch Events Organized By Us</h5>
            <div class="gallery-swiper mt-4 sm:w-11/12 m-auto overflow-hidden">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="h-80 w-full object-cover object-center"
                            src="https://www.mayfairhotels.com/img/Slider/Banquets/Convention/Crystal%20Room%20Mayfair%20Convention.jpg"
                            alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="h-80 w-full object-cover object-center"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcBjbprc7-3sQwf0hP5xLBnKnMmLV8HzINWQ&usqp=CAU"
                            alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="h-80 w-full object-cover object-center"
                            src="https://res.cloudinary.com/simplotel/image/upload/w_5000,h_3333/x_0,y_522,w_4997,h_2811,r_0,c_crop,q_60,fl_progressive/w_400,f_auto,c_fit/hotel-sree-gokulam-fort/Banquet_halls,_Hotel_Sree_Gokulam_Fort,_event_venues_in_Thalassery3"
                            alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="h-80 w-full object-cover object-center"
                            src="https://www.mayfairhotels.com/img/Slider/Banquets/Convention/Crystal%20Room%20Mayfair%20Convention.jpg"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        const swiper = new Swiper('.swiper', {
            loop: true,
            autoplay: true,

            // Navigation arrows
            navigation: {
                nextEl: '.right-icon',
                prevEl: '.left-icon',
            },

        });

        const priceSwiper = new Swiper('.price-swiper', {
            slidesPerView: 1.1,
            initialSlide: 1,
            centeredSlides: true,
            breakpoints: {
                400: {
                    slidesPerView: 1.25,
                },
                450: {
                    slidesPerView: 1.4,
                },
                500: {
                    slidesPerView: 1.6,
                },
                550: {
                    slidesPerView: 1.8,
                },
                700: {
                    slidesPerView: 2.4,
                },
                900: {
                    slidesPerView: 2.8,
                },
                1050: {
                    slidesPerView: 3,
                    allowTouchMove: false,
                },
            }

        });

        const venueSwiper = new Swiper('.venue-swiper', {
            autoplay: true,
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                480: {
                    slidesPerView: 2,
                },
                640: {
                    slidesPerView: 3,
                },
                750: {
                    slidesPerView: 4,
                },
                1200: {
                    slidesPerView: 5,
                },
            }

        });

        const reviewSwiper = new Swiper('.review-swiper', {
            loop: true,
            autoplay: true,

        });
        const gallerySwiper = new Swiper('.gallery-swiper', {
            loop: true,
            autoplay: true,
            breakpoints: {
                900: {
                    slidesPerView: 2,
                    spaceBetween: 10
                }
            }

        });
    </script>


</x-app-layout>
