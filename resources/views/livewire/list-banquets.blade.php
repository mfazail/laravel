<div>
    <style>
        .hover-img {
            top: 0px;
            left: 0px;
        }

        @media(hover:hover) and (pointer:fine) {
            .hover-img:hover {
                width: 24rem;
            }
        }

    </style>
    <div class="flex flex-wrap justify-center items-center">
        @forelse ($banquets as $banquet)
            <a href="{{ route('packages.show', $banquet->id) }}" class="mt-7 ">
                <div
                    class="flex sm:flex-row flex-col w-80 sm:w-96 bg-white rounded-xl shadow-lg m-3 justify-end relative hover:shadow-2xl h-96 sm:h-60">
                    <img class=" absolute hover-img w-full sm:w-44 h-44 sm:h-full object-cover object-center rounded-xl transition-all duration-500"
                        src="https://images.unsplash.com/photo-1529636120425-66f3708694e7?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dmVudWV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="">
                    <div class="p-3 w-52">
                        <h1 class="text-xl">{{ $banquet->name }}</h1>
                        <ul>
                            <li>{{ $banquet->banquet_type }}</li>
                            <li><span class="fa fa-users text-blue-500 text-center"></span>
                                {{ $banquet->min_cap }}-{{ $banquet->max_cap }}
                            </li>
                            <li><span class="fa fa-map-marker-alt text-blue-500 mx-1 text-center"></span>
                                {{ $banquet->place }}
                            </li>
                            <li>
                                @forelse ($banquet->banquetService as $service)
                                    @if ($loop->first)
                                        <span class="fa fa-certificate text-blue-500 mr-1"></span>
                                    @endif
                                    {{ $service->service_name }}
                                    @if (!$loop->last)
                                        ,
                                    @endif
                                @empty

                                @endforelse
                            </li>
                            <li>{{ $banquet->reviews->count() }} Review{{ $banquet->reviews->count() > 1 ? 's' : '' }}
                            </li>
                        </ul>
                    </div>
                </div>
            </a>
        @empty
            <h1>No Banquets Found</h1>
        @endforelse
    </div>
</div>
