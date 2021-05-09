<div x-data="{open:false, place:'All'}">
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
    <div class="container sm:px-5 md:px-10 xl:px-40 mx-auto">

        <div class="flex justify-between items-center px-3 pb-1  pt-4 cursor-pointer" @click="open = !open">
            <h1>Filter</h1>
            <span x-show="!open" class="material-icons text-gray-600">filter_list</span>
            <span x-show="open" class="material-icons text-gray-600">close</span>
        </div>
        <div x-show="open"
            class="flex flex-wrap justify-around items-start pl-4 sm:items-center mt-3 border-t-2 py-2  transition-all duration-300">
            <div>
                <h1>Budget</h1>
                <label class="inline-flex items-centercursor-pointer mt-3">
                    <input type="radio" name="price" class="" wire:model="price" value="0"><span
                        class="ml-2">none</span>
                </label>
                <br>
                <label class="inline-flex items-centercursor-pointer mt-3">
                    <input type="radio" name="price" class="" wire:model="price" value="1"><span class="ml-2">0 -
                        100000</span>
                </label>
                <br>
                <label class="inline-flex items-centercursor-pointer mt-3">
                    <input type="radio" name="price" class="" wire:model="price" value="2"><span class="ml-2">100000 -
                        200000</span>
                </label>
                <br>
                <label class="inline-flex items-centercursor-pointer mt-3">
                    <input type="radio" name="price" class="" wire:model="price" value="3"><span class="ml-2">200000 -
                        300000</span>
                </label>
            </div>
            <div>
                <h1>Capacity</h1>
                <label class="inline-flex items-center cursor-pointer mt-3">
                    <input type="radio" name="capacity" class="" wire:model="capacity" value="0"><span
                        class="ml-2">none</span>
                </label>
                <br>
                <label class="inline-flex items-center cursor-pointer mt-3">
                    <input type="radio" name="capacity" class="" wire:model="capacity" value="1"><span class="ml-2">0 -
                        500</span>
                </label>
                <br>
                <label class="inline-flex items-center cursor-pointer mt-3">
                    <input type="radio" name="capacity" class="" wire:model="capacity" value="2"><span class="ml-2">500
                        -
                        1000</span>
                </label>
                <br>
                <label class="inline-flex items-center cursor-pointer mt-3">
                    <input type="radio" name="capacity" class="" wire:model="capacity" value="3"><span class="ml-2">1000
                        -
                        1600</span>
                </label>
            </div>
            <div class="flex flex-row md:flex-col justify-around items-center pt-4">
                <button @click="open = false"
                    class="mx-2 sm:my-4 bg-blue-500 px-4 py-2 text-white focus:outline-none rounded-lg"
                    wire:click="applyFilter">Apply</button>
                <button @click="open = false"
                    class="mx-2 sm:my-4 bg-blue-500 px-4 py-2 text-white focus:outline-none rounded-lg"
                    wire:click="resetFilter">Reset</button>
            </div>
        </div>
        <div class="w-full py-1 flex overflow-x-auto">
            @for ($i = 0; $i < count($places) + 1; $i++)
                @if ($i == 0) <button class="ml-3 cursor-pointer py-1
                font-medium
                px-3 rounded-full border-2 transition-all duration-300 focus:outline-none"
                :class="{'bg-blue-600 text-white border-transparent':place === 'All'}"
                wire:click="$set('currentPlace',0)"
                @click="place = 'All'"
                >
                All
                </button>
            @else
                <button class="ml-3 cursor-pointer py-1 font-medium px-3 rounded-full border-2
                transition-all duration-300 focus:outline-none"
                :class="{'bg-blue-600 text-white border-transparent':place ===
                '{{ $places[$i - 1] }}'}"
                wire:click="$set('currentPlace',{{ $i }})"
                @click="place = '{{ $places[$i - 1] }}'"
                >
                {{ $places[$i - 1] }}
                </button> @endif
            @endfor

        </div>

    </div>
    <div class="flex flex-wrap justify-center items-center ">
        @forelse ($banquets as $banquet)
            <a x-show.transition.in.duration.300ms="place === '{{ $banquet->place }}'| place === 'All'"
                href="{{ route('packages.show', $banquet->id) }}" class="mt-7 ">
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
                            <li>{{ $banquet->reviews->count() }}
                                Review{{ $banquet->reviews->count() > 1 ? 's' : '' }}
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
