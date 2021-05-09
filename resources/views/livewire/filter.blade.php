<div class="container sm:px-5 md:px-10 xl:px-40 mx-auto" x-data="{open:false}">
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
                <input type="radio" name="price" class="" wire:model="price" value="0"><span class="ml-2">none</span>
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
                <input type="radio" name="capacity" class="" wire:model="capacity" value="2"><span class="ml-2">500 -
                    1000</span>
            </label>
            <br>
            <label class="inline-flex items-center cursor-pointer mt-3">
                <input type="radio" name="capacity" class="" wire:model="capacity" value="3"><span class="ml-2">1000 -
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

            @if ($i == 0) <button class="ml-3 cursor-pointer py-1 font-medium
            px-3 rounded-full border-2 transition-all duration-300 focus:outline-none
            {{ $currentPlace == 0 ? 'bg-blue-600 text-white border-transparent' : '' }}"
            wire:click="filterPlace({{ $i }})">
            All
            </button>
        @else
            <button class="ml-3 cursor-pointer py-1 font-medium px-3 rounded-full border-2
            transition-all duration-300 focus:outline-none
            {{ $currentPlace == $i ? 'bg-blue-600 text-white  border-transparent' : '' }}"
            wire:click="filterPlace({{ $i }})">
            {{ $places[$i - 1] }}
            </button> @endif
        @endfor

    </div>
</div>
