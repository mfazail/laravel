<x-app-layout title=" - {{ $banquets[0]->banquet_type }}">
    @livewire('filter', ['banquetType'=>$banquets[0]->banquet_type] )

    @livewire('list-banquets', ['banquets' => $banquets])
</x-app-layout>
