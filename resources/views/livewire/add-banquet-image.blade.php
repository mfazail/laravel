<div>
    <form wire:submit.prevent="submit" class="flex" enctype="multipart/form-data">
        @csrf
        <div class="mr-3">
            <label for="img">
                <h1 class="text-center bg-white border-2 px-2 cursor-pointer  border-blue-500 rounded-md shadow-md py-2"
                    title="Front Image Of Banquet">
                    <span class="fa fa-folder-plus text-blue-500"></span>
                    Add Image
                </h1>
                <input wire:model="img" id="img" name="img" type="file" class="hidden" required>
            </label>
        </div>
        <x-jet-button class="ml-4">
            {{ __('Add') }}
        </x-jet-button>
        @if (session('success'))
            <div class="font-medium text-sm text-white ml-3  px-3 pt-3 border-l-2 border-green-600 bg-green-300">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="font-medium text-sm text-white ml-3  px-3 pt-3 border-l-2 border-red-600 bg-red-300">
                {{ session('success') }}
            </div>
        @endif
    </form>
</div>
