<div>
    <form wire:submit.prevent="submit">
        @csrf
        <div class="flex items-center justify-start">
            <div class="mt-3">
                <x-jet-label for="service" value="{{ __('Add Service') }}" />
                <x-jet-input id="service" class="block mt-1 w-full" type="text" wire:model="service"
                    :value="old('service')" required />
                @error('service')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex items-center justify-end pt-2 mt-6">
                <x-jet-button class="ml-4">
                    {{ __('Add') }}
                </x-jet-button>
            </div>
        </div>
        <div>
            @if (session()->has('addService'))
                <div class="alert alert-success bg-blue-100 border-l-2 border-blue-500 text-blue-700 px-4 py-3 mt-2"
                    role="alert">
                    {{ session('addService') }}
                </div>
            @endif
        </div>
    </form>
</div>
