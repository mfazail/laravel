<x-app-layout title=" - {{ $search }}">
    <style>
        .hover-img {
            top: 0px;
            left: 0px;
        }

        .custom-shadow {
            text-shadow: 0 2px 4px gray;
        }

        @media(hover:hover) and (pointer:fine) {
            .hover-img:hover {
                width: 24rem;
            }
        }

    </style>
    @if ($banquets->count() <= 0)
        <h1 class="text-center text-xl py-5 font-medium">No Banquets Found</h1>
    @else
        <div class="flex flex-wrap justify-center items-center">
            @foreach ($banquets as $banquet)
                <a href="{{ route('packages.show', $banquet['id']) }}">
                    <div
                        class="flex sm:flex-row flex-col w-80 sm:w-96 bg-white rounded-xl shadow-lg m-3 justify-end relative h-96 sm:h-60">
                        <img class=" absolute hover-img w-full sm:w-44 h-48 sm:h-full object-cover object-center rounded-xl transition-all duration-500"
                            src="https://images.unsplash.com/photo-1529636120425-66f3708694e7?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dmVudWV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="">
                        <h1
                            class="text-xl custom-shadow absolute bottom-52 sm:bottom-5 left-4 text-white min-w-min  font-bold w-full sm:w-44">
                            {{ $banquet['name'] }}</h1>
                        <div class="p-3 w-full sm:w-52 h-48 sm:h-full">
                            <h1 class="text-2xl font-semibold text-blue-500 pb-1">Features</h1>
                            <ul class="pt-1">
                                <li>{{ $banquet['banquet_type'] }}</li>
                                <li><span class="fa fa-users text-blue-500 text-center"></span>
                                    {{ $banquet['min_cap'] }}-{{ $banquet['max_cap'] }}
                                </li>
                                <li><span class="fa fa-map-marker-alt text-blue-500 mx-1 text-center"></span>
                                    {{ $banquet['place'] }}
                                </li>
                                <li>
                                    @forelse ($banquet['banquetService'] as $service)
                                        @if ($loop->first)
                                            <span class="fa fa-certificate text-blue-500 mr-1"></span>
                                        @endif
                                        {{ $service['service_name'] }}
                                        @if (!$loop->last)
                                            ,
                                        @endif
                                    @empty

                                    @endforelse
                                </li>
                                <li class="">{{ $banquet['reviews_count'] }}
                                    Review{{ $banquet['reviews_count'] > 1 ? 's' : '' }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    @endif
</x-app-layout>
