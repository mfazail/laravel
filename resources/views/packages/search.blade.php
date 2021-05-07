<x-app-layout title="{{ $search }}">
    @if ($banquets->count() <= 0)
    <h1 class="text-center text-xl py-5 font-medium">No Banquets Found</h1>
    @else
    <div class="flex flex-wrap justify-center items-center">
        @foreach ($banquets as $banquet)
            <a href="{{ route('packages.show', $banquet['id']) }}">
                <div class="flex sm:flex-row flex-col w-96 bg-white rounded-xl shadow-lg m-3">
                    <img class="w-full sm:w-44 h-52 object-cover object-center rounded-xl"
                        src="https://images.unsplash.com/photo-1529636120425-66f3708694e7?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dmVudWV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="">
                    <div class="p-3">
                        <h1 class="text-xl">{{ $banquet['name'] }}</h1>
                        <ul>
                            <li>@switch($banquet['banquet_type'])
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
                            </li>
                            <li>{{ $banquet['price'] }}</li>
                            <li>{{ $banquet['place'] }}</li>
                            <li>{{ $banquet['address'] }}</li>
                            {{-- <li>{{ $banquet->reviews->count() }} Reviews</li> --}}
                        </ul>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    @endif
</x-app-layout>