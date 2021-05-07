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

        .owl-prev {
            position: absolute;
            top: 45vh;
            left: 0;
            width: 50px;
            outline: none;
            border: none;

        }

        .owl-next {
            position: absolute;
            top: 45vh;
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

        .type-head {
            font-family: 'Archivo Black', sans-serif;
            position: absolute;
            bottom: 80px;
            left: 40px;
            font-size: 3rem;
            opacity: 0.08;
            color: blue;
            z-index: 10;
            transform: rotate(-35deg)
        }

        .extra {
            left: 70px
        }

        .t-shadow {
            text-shadow: 0 2px 4px rgba(0, 55, 255, 0.551);
        }

        @media (max-width:500px) {
            #slider {
                height: 40vh !important;
            }

            #slider img {
                height: 40vh !important;
            }

            .heads h1 {
                font-size: 2rem;
            }

            .heads span {
                font-size: 1.2rem;
            }

            .searchDiv {
                bottom: -50px;
                width: 80%;
            }

            .owl-next,
            .owl-prev {
                top: 16vh;
            }

            #gallery .owl-next,
            #gallery .owl-prev {
                top: 14vh;
            }
        }

    </style>
    <div>
        <div class="top-head">
            <div id="slider" class="owl-carousel owl-theme">
                <div class="item relative">
                    <img class="w-full h-4/5 sm:h-screen object-cover object-center"
                        src="https://images.unsplash.com/photo-1529636120425-66f3708694e7?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dmVudWV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="">
                    <div class="absolute left-5 top-1/3 px-6 sm:p-14">
                        <h1 class="text-3xl sm:text-6xl mb-4 text-white custom-shadow">Get The Best Venues</h1>
                        <span class="text-white sm:text-4xl custom-shadow">No Ceremony Can Reach Its Full Aspect Unless
                            A Best Venue Is Chosen</span>
                    </div>
                </div>
                <div class="item relative">
                    <img class="w-full h-4/5 sm:h-screen object-cover object-center"
                        src="https://images.unsplash.com/photo-1469371670807-013ccf25f16a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8dmVudWV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="">
                    <div class="absolute left-5 top-1/3 px-6 sm:p-14">
                        <h1 class="text-3xl sm:text-6xl mb-4 text-white custom-shadow">Best Finder For You</h1>
                        <span class="text-white sm:text-4xl custom-shadow">Start Planning Your Event By Choosing The
                            Perfect Venue</span>
                    </div>
                </div>
                <div class="item relative">
                    <img class="w-full h-4/5 sm:h-screen object-cover object-center"
                        src="https://images.unsplash.com/photo-1594666271705-6355eb1dd521?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fHZlbnVlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="">
                    <div class="absolute left-5 top-1/3 px-6 sm:p-14">
                        <h1 class="text-3xl sm:text-6xl mb-4 text-white custom-shadow">Bengal Vibes</h1>
                        <span class="text-white sm:text-4xl custom-shadow">Get The Best List Of Banquets And Lawns In
                            Bengal</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto">
            <h1 class="text-center my-4 pt-6 text-2xl sm:text-3xl">Search Venues By <span
                    class="text-blue-500">Banquet's
                    Name</span>, <span class="text-blue-500">Place</span> or <span class="text-blue-500">Address</span>.
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
            Wide Range Of Packages & Offers.</h5>
        <div id="venuePlan" class="flex flex-wrap justify-center items-center py-4">
            <a href="/packages/basic">
                <div class="w-80 relative mx-2 rounded-lg hover:shadow-md shadow-lg bg-white mt-3">
                    <h2 class="type-head extra">BASIC</h2>
                    <img class="rounded-t-lg h-60"
                        src="https://lh3.googleusercontent.com/O-369Wv-rOHFSXEZkalH1jQzSu1cRnlKJt4VmN52etQyFOYYTVDyLAITntI2PEbOTNmhZB5VP1NN6M7__26cv2m0=w746-h498-l95">
                    <div class="p-2">
                        <span style="font-family: 'Cookie', cursive; font-size: 25px">Budgeted Banquets At Affordable
                            Price.</span>
                        <h4 class="border-bottom mt-2 py-2 text-center" style="font-family: 'Mitr', sans-serif">FEATURES
                        </h4>
                        <ul class="pl-3">
                            <li class="py-1"><span class="material-icons">check</span>Exciting Complimentary Gifts</li>
                            <li class="py-1"><span class="material-icons">check</span>4 Hours Event Assistance</li>
                            <li class="py-1"><span class="material-icons">check</span>1 Welcome Girl To Greet Everyone On the Entrance</li>
                        </ul>
                    </div>
                </div>
            </a>
            <a href="/packages/economic">
                <div class="w-80 relative mx-2 rounded-lg hover:shadow-md shadow-lg bg-white mt-3">
                    <h2 class="type-head">ECONOMIC</h2>
                    <img class="rounded-t-lg h-60" src="https://miro.medium.com/max/4032/1*PjE6ttv85GlsJqZMn-mrnQ.jpeg">
                    <div class="p-2">
                        <span style="font-family: 'Cookie', cursive; font-size: 25px">Simple Class With The Required
                            Amenities . We Care For Your Available Resources.</span>
                        <h4 class="border-bottom mt-2 py-2 text-center" style="font-family: 'Mitr', sans-serif">FEATURES
                        </h4>
                        <ul class="pl-3">
                            <li class="py-1"><span class="material-icons">check</span>2 Hours Free Photography</li>
                            <li class="py-1"><span class="material-icons">check</span>8 Hours Event Assistance</li>
                            <li class="py-1"><span class="material-icons">check</span>2 Welcome Girls To Greet Everyone On the Entrance</li>
                        </ul>
                    </div>
                </div>
            </a>
            <a href="/packages/premium">
                <div class="w-80 relative mx-2 rounded-lg hover:shadow-md shadow-lg bg-white mt-3">
                    <h2 class="type-head">PREMIUM</h2>
                    <img class="rounded-t-lg h-60"
                        src="https://www.mayfairhotels.com/img/Slider/Banquets/Convention/Central%20hall%20Mayfair%20Convention.jpg">
                    <div class="p-2">
                        <span style="font-family: 'Cookie', cursive; font-size: 25px">We Are An Elite Economic Class
                            With
                            Some Extra Bells And Whistles.</span>
                        <h4 class="border-bottom mt-2 py-2 text-center" style="font-family: 'Mitr', sans-serif">FEATURES
                        </h4>
                        <ul class="pl-3">
                            <li class="py-1"><span class="material-icons">check</span>Free Pre-Wedding Photography</li>
                            <li class="py-1"><span class="material-icons">check</span>24 Hours Event Assistance</li>
                            <li class="py-1"><span class="material-icons">check</span>Planning Of Special Entry For Groom Or Bride With Additional Features</li>
                        </ul>
                    </div>
                </div>
            </a>
        </div>

        <h1 class="text-center my-4 pt-6 text-2xl sm:text-3xl">Venues For <span class="text-blue-500">Everyone</span>,
            <span class="text-blue-500">Any Event</span>, <span class="text-blue-500">Any Budget</span>.</h1>
        <div class="mt-5">
            <div id="venueSlider" class="owl-carousel owl-theme">
                <div class="item m-5 shadow-lg">
                    <img class="h-52 w-60"
                        src="https://images.unsplash.com/photo-1529636120425-66f3708694e7?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dmVudWV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
                    <h2 class="absolute bottom-12 text-white text-xl custom-shadow left-10">Banquet Name</h2>
                    <h4 class="absolute bottom-7 text-white left-10">Banquet Type</h4>
                </div>
                <div class="item m-5 shadow-lg">
                    <img class="h-52 w-60"
                        src="https://images.unsplash.com/photo-1469371670807-013ccf25f16a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8dmVudWV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="">
                    <h2 class="absolute bottom-12 text-white text-xl custom-shadow left-10">Banquet Name</h2>
                    <h4 class="absolute bottom-7 text-white left-10">Banquet Type</h4>
                </div>
                <div class="item m-5 shadow-lg">
                    <img class="h-52 w-60"
                        src="https://images.unsplash.com/photo-1594666271705-6355eb1dd521?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fHZlbnVlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60   "
                        alt="">
                    <h2 class="absolute bottom-12 text-white text-xl custom-shadow left-10">Banquet Name</h2>
                    <h4 class="absolute bottom-7 text-white left-10">Banquet Type</h4>
                </div>
                <div class="item m-5 shadow-lg">
                    <img class="h-52 w-60"
                        src="https://images.unsplash.com/photo-1594666271705-6355eb1dd521?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fHZlbnVlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60   "
                        alt="">
                    <h2 class="absolute bottom-12 text-white text-xl custom-shadow left-10">Banquet Name</h2>
                    <h4 class="absolute bottom-7 text-white left-10">Banquet Type</h4>
                </div>
                <div class="item m-5 shadow-lg">
                    <img class="h-52 w-60"
                        src="https://images.unsplash.com/photo-1594666271705-6355eb1dd521?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fHZlbnVlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60   "
                        alt="">
                    <h2 class="absolute bottom-12 text-white text-xl custom-shadow left-10">Banquet Name</h2>
                    <h4 class="absolute bottom-7 text-white left-10">Banquet Type</h4>
                </div>
                <div class="item m-5 shadow-lg">
                    <img class="h-52 w-60"
                        src="https://images.unsplash.com/photo-1594666271705-6355eb1dd521?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fHZlbnVlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60   "
                        alt="">
                    <h2 class="absolute bottom-12 text-white text-xl custom-shadow left-10">Banquet Name</h2>
                    <h4 class="absolute bottom-7 text-white left-10">Banquet Type</h4>
                </div>
                <div class="item m-5 shadow-lg">
                    <img class="h-52 w-60"
                        src="https://images.unsplash.com/photo-1594666271705-6355eb1dd521?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fHZlbnVlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60   "
                        alt="">
                    <h2 class="absolute bottom-12 text-white text-xl custom-shadow left-10">Banquet Name</h2>
                    <h4 class="absolute bottom-7 text-white left-10">Banquet Type</h4>
                </div>
                <div class="item m-5 shadow-lg">
                    <img class="h-52 w-60"
                        src="https://images.unsplash.com/photo-1594666271705-6355eb1dd521?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fHZlbnVlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60   "
                        alt="">
                    <h2 class="absolute bottom-12 text-white text-xl custom-shadow left-10">Banquet Name</h2>
                    <h4 class="absolute bottom-7 text-white left-10">Banquet Type</h4>
                </div>
            </div>
        </div>


        <div class="py-3">
            <div class="container mx-auto relative">
                <h1 class="text-center my-4 pt-6 text-2xl sm:text-3xl">About Us</h1>
                <h5 class="text-center sm:px-4 md:px-4 lg:px-40 xl:px-40 2xl:px-40 pb-8">Searching For A Perfect Venue
                    In Kolkata Is No More A Hassle Task Because Venue Website Is Here To Help You With It. We Offer Versatile Venues That Are Best Suitable According To
                    Your
                    Event. Our Range Of Venues Is Elegant And Upscale At The Same Time.</h5>
                <div class="flex justify-center flex-col sm:flex-col md:flex-col lg:flex-row xl:flex-row items-center">
                    <div class="sm:w-full lg:w-1/2 pt-5 px-4 sm:pl-4 md:pl-8 lg:pl-16 xl:pl-24">
                        <h3 class="text-center text-2xl text-blue-400" style="font-family: 'Cookie', cursive;">Why
                            Choose Us?</h3>
                        <ul class="py-2">
                            <li class="sm:text-center lg:text-right pb-3"><span>We Avail Services For Small As Well As
                                    Big Celebrations.</span></li>
                            <li class="sm:text-center lg:text-right pb-3"><span>We Put Focus On Your Needs Such, As Your
                                    Budget & CeremonyRequirements.</span></li>
                            <li class="sm:text-center lg:text-right pb-3"><span>Our Services Are Fast, Easily Accessible
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
                        <div id="cr" class="owl-carousel owl-theme shadow-xl" style="background-color: white">
                            <div class="item p-4">
                                <h3 class="text-center border-bottom pb-2 text-gray-800 text-2xl font-semibold ">Fazail
                                    Alam</h3>
                                <h6 class="text-center pt-2 text-gray-600">
                                    "They Provide Quality Venues And Services. I Am Looking Forward To Book Venues For
                                    My
                                    Future
                                    Events From Here."
                                </h6>
                            </div>
                            <div class="item p-4">
                                <h3 class="text-center border-bottom pb-2 text-gray-800 text-2xl font-semibold">Sumit
                                    Kumar</h3>
                                <h6 class="text-center pt-2 text-gray-600">
                                    "It Is The Best Place For Getting Everything Done Under One Roof. I Am Very
                                    Satisfied
                                    With
                                    The Guidance They Have Provided Me Throughout Event Preparation From Planning Till
                                    Conduction."
                                </h6>
                            </div>
                            <div class="item p-4">
                                <h3 class="text-center border-bottom pb-2 text-gray-800 text-2xl font-semibold">Vivek
                                    Singh</h3>
                                <h6 class="text-center pt-2 text-gray-600">
                                    "Venue Website Is Very Responsive And Punctual. They Suggested The Best Suitable
                                    Venue
                                    For
                                    My Event. I Got Additional Services In My Package That Made My Work Hassle-Free."
                                </h6>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container py-5 m-auto">
            <h1 class="text-center my-4 pt-6 text-2xl sm:text-3xl">Gallery</h1>
            <h5 class="my3 text-center">Watch Events Organized By Us</h5>
            <div id="gallery" class="owl-carousel owl-theme mt-4 sm:w-11/12 m-auto">
                <div class="item m-2">
                    <a data-effect="mfp-zoom-in"
                        href="https://www.mayfairhotels.com/img/Slider/Banquets/Convention/Crystal%20Room%20Mayfair%20Convention.jpg">
                        <img class="h-64 object-cover object-center z-0"
                            src="https://www.mayfairhotels.com/img/Slider/Banquets/Convention/Crystal%20Room%20Mayfair%20Convention.jpg"
                            alt="">
                    </a>
                </div>
                <div class="item m-2">
                    <a data-effect="mfp-zoom-in"
                        href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcBjbprc7-3sQwf0hP5xLBnKnMmLV8HzINWQ&usqp=CAU">
                        <img class="h-64 object-cover object-center z-0"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcBjbprc7-3sQwf0hP5xLBnKnMmLV8HzINWQ&usqp=CAU"
                            alt="">
                    </a>
                </div>
                <div class="item m-2">
                    <a data-effect="mfp-zoom-in"
                        href="https://res.cloudinary.com/simplotel/image/upload/w_5000,h_3333/x_0,y_522,w_4997,h_2811,r_0,c_crop,q_60,fl_progressive/w_400,f_auto,c_fit/hotel-sree-gokulam-fort/Banquet_halls,_Hotel_Sree_Gokulam_Fort,_event_venues_in_Thalassery3">
                        <img class="h-64 object-cover object-center z-0"
                            src="https://res.cloudinary.com/simplotel/image/upload/w_5000,h_3333/x_0,y_522,w_4997,h_2811,r_0,c_crop,q_60,fl_progressive/w_400,f_auto,c_fit/hotel-sree-gokulam-fort/Banquet_halls,_Hotel_Sree_Gokulam_Fort,_event_venues_in_Thalassery3"
                            alt="">
                    </a>
                </div>
                <div class="item m-2">
                    <a data-effect="mfp-zoom-in"
                        href="https://www.mayfairhotels.com/img/Slider/Banquets/Convention/Crystal%20Room%20Mayfair%20Convention.jpg">
                        <img class="h-64 object-cover object-center z-0"
                            src="https://www.mayfairhotels.com/img/Slider/Banquets/Convention/Crystal%20Room%20Mayfair%20Convention.jpg"
                            alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>


    <script>
        $('#slider').owlCarousel({
            items: 1,
            loop: true,
            nav: true,
            dots: false
        })
        $('#cr').owlCarousel({
            items: 1,
            loop: true,
            nav: false,
            dots: false,
            autoplay: true
        })
        $('#gallery').owlCarousel({
            items: 1,
            loop: true,
            nav: true,
            dots: false,
            autoplay: true,
            responsiveClass: true,
            autowidth: true,
            responsive: {
                0: {
                    items: 1,
                    center: true,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 3,
                },
                1200: {
                    items: 3,
                }
            }
        })
        $('#venueSlider').owlCarousel({
            loop: true,
            margin: 10,
            dots: false,
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
                    loop: false
                },
                1100: {
                    items: 4,
                    loop: false
                },
                1400: {
                    items: 5,
                    loop: false
                }
            }
        })

        $('#gallery').magnificPopup({
            delegate: '.owl-item:not(.cloned) a',
            type: 'image',
            removalDelay: 400,
            callbacks: {
                beforeOpen: function() {
                    this.st.image.markup = this.st.image.markup.replace('mfp-figure',
                        'mfp-figure mfp-with-anim');
                    this.st.mainClass = this.st.el.attr('data-effect');
                }
            },
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                // titleSrc: function(item) {
                //     return item.el.attr('title') + '<small></small>';
                // }
            }
        });

    </script>


</x-app-layout>
