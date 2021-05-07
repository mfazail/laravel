<div>
    <form wire:submit.prevent="submit">
        @csrf

        <div class="mt-3">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input disabled="{{ $isBooked }}" id="name" class="block mt-1 w-full" type="text" wire:model="name" :value="old('name')"
                required />
            @error('name')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-3">
            <x-jet-label for="number" value="{{ __('Contact Number') }}" />
            <x-jet-input disabled="{{ $isBooked }}" id="number" class="block mt-1 w-full" type="number" wire:model="number" :value="old('number')"
                required/>
            @error('number')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-3">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input disabled="{{ $isBooked }}" id="email" class="block mt-1 w-full" type="email" wire:model="email" :value="old('email')"
                required />
            @error('email')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-3">
            <x-jet-label for="v_date" value="{{ __('Venue Date') }}" />
            <x-jet-input disabled="{{ $isBooked }}" id="v_date" class="block mt-1 w-full" type="date" wire:model="v_date" :value="old('date')"
                required />
            @error('v_date')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-3">
            <x-jet-label for="e_detail" value="{{ __('Tell Us About Your Event') }}" />
            <textarea {{ $isBooked ? 'disabled': '' }} wire:model="e_detail" id="e_detail" rows="5" required
                class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"></textarea>
            @error('e_detail')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        @if ($isBooked)

        <div class="bg-blue-100 border-l-2 border-blue-500 text-blue-700 px-4 py-3" role="alert">
            <p class="font-bold">Already Applied For Booking</p>
            <p class="text-sm">We will Contact You Soon</p>
        </div>
            
        @else
        <div class="flex items-center justify-end mt-4">
            <x-jet-button class="ml-4">
                {{ __('Book') }}
            </x-jet-button>
        </div>
        @endif
    </form>
</div>
