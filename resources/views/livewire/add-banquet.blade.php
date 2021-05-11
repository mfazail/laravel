<div x-data="{show: @entangle('success'),myError:@entangle('myError')}">
    <div class="absolute top-0 left-0 right-0 z-50 bg-gray-400 w-full h-full bg-opacity-40"
        x-show.transition.origin.top.right.duration.300ms="show">
        <div x-show.transition.origin.left.duration.500ms="myError" @click.away="$wire.set('myError',false)"
            class="bg-red-400 border-l-2 flex justify-between border-red-600 px-5">
            <h2 class="text-white px-3 py-1">Error While Adding Banquet </h2>
            <span @click="myError=false" class="fa fa-times text-white mt-2"></span>

        </div>
        <form wire:submit.prevent="submit" class="bg-white rounded-lg mx-auto mt-24 shadow-lg w-8/12 p-5">

            <h1 class="text-center text-2xl text-blue-500">Banquet Details</h1>
            <div>
                <x-jet-label for="banquet_name" value="{{ __('Name') }}" />
                <x-jet-input wire:model.defer="name" id="banquet_name" class="block mt-1 w-full" type="text"
                    name="banquet_name" required autofocus />
            </div>
            <div>
                <x-jet-label for="price" value="{{ __('Price') }}" />
                <x-jet-input wire:model.defer="price" id="price" class="block mt-1 w-full" type="number" name="price"
                    required />
            </div>
            <div>
                <x-jet-label for="place" value="{{ __('Place') }}" />
                <x-jet-input wire:model.defer="place" id="place" class="block mt-1 w-full" type="text" name="place"
                    required />
            </div>
            <div>
                <x-jet-label for="address" value="{{ __('Address') }}" />
                <x-jet-input wire:model.defer="address" id="address" class="block mt-1 w-full" type="text"
                    name="address" required />
            </div>
            <div class="flex justify-between items-center flex-wrap pb-2">
                <div>
                    <x-jet-label for="banquet_type" value="{{ __('Type') }}" />
                    <select wire:model="banquet_type" name="banquet_type" id="banquet_type" required
                        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option class="border-gray-300 bg-white rounded-md hover:bg-blue-500" value="Premium">Premium
                        </option>
                        <option class="border-gray-300 bg-white rounded-md hover:bg-blue-500" value="Economic">Economic
                        </option>
                        <option class="border-gray-300 bg-white rounded-md hover:bg-blue-500" value="Basic">Basic
                        </option>
                    </select>
                </div>
                <div>
                    <x-jet-label for="food_type" value="{{ __('Food Type') }}" />
                    <select name="food_type" id="food_type" required wire:model.defer="food_type"
                        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option class="border-gray-300 bg-white rounded-md hover:bg-blue-500" value="0">Veg</option>
                        <option class="border-gray-300 bg-white rounded-md hover:bg-blue-500" value="1">Non-Veg
                        </option>
                    </select>
                </div>
                <div>
                    <x-jet-label for="min_cap" value="{{ __('Minimum Capacity') }}" />
                    <x-jet-input wire:model.defer="min_cap" id="min_cap" class="block mt-1" type="number" name="min_cap"
                        required />
                </div>
                <div>
                    <x-jet-label for="max_cap" value="{{ __('Maximum Capacity') }}" />
                    <x-jet-input wire:model.defer="max_cap" id="max_cap" class="block mt-1" type="number" name="max_cap"
                        required />
                </div>

            </div>
            <div class="flex justify-end pt-4 sm:p-0">
                <button @click="show=false" class="rounded-md text-white px-3 py-2 bg-red-500 focus:outline-none">
                    Cancel
                </button>
                <x-jet-button class="ml-4">
                    {{ __('Add') }}
                </x-jet-button>
            </div>
        </form>
    </div>
    <div class="flex justify-end mt-4">
        <button @click="show=true" class="rounded-md text-white px-3 py-2 bg-blue-500 focus:outline-none">
            <span class="fa fa-plus"></span>
            Add Banquet
        </button>
    </div>
</div>
