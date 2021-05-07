<div>
    <form wire:submit.prevent="submit">
        @csrf
        
        <div class="border-t-2 mt-5">
            <h1 class="mb-4">Write a Review</h1>
            <textarea wire:model="review" id="review" rows="5"
                class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"></textarea>
                @error('review')
                    <span class="error">{{ $message }}</span>    
                @enderror
        </div>
        <div class="flex items-center justify-end mt-4">
            <x-jet-button class="ml-4">
                {{ __('Submit') }}
            </x-jet-button>
        </div>
        <div>
            @if (session()->has('reviewSubmitted'))
                <div class="alert alert-success bg-blue-100 border-l-2 border-blue-500 text-blue-700 px-4 py-3" role="alert">
                    {{ session('reviewSubmitted') }}
                </div>
            @endif
        </div>
    </form>
</div>
