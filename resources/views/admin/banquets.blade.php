<x-app-layout title=" - All Banquets">
    <table class="table-auto w-full mt-5">
        <thead>
            <tr class="border-blue-200 border-2">
                <th>Banquet Name</th>
                <th>Banquet Type</th>
                <th>Price</th>
                <th>Food Type</th>
                <th>Capacity</th>
                <th>Sevices</th>
                <th>Place</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($banquets as $banquet)
                <tr>
                    <td class="border-blue-200 border-2 px-3 text-center">
                        {{ $banquet->id }}.{{ $banquet->name }}</a></td>
                    <td class="border-blue-200 border-2 px-3 text-center">{{ $banquet->banquet_type }}</td>
                    <td class="border-blue-200 border-2 px-3 text-center">{{ $banquet->price }}</td>
                    <td class="border-blue-200 border-2 px-3 text-center">
                        {{ $banquet->non_veg ? 'Veg-NonVeg' : 'Veg' }}
                    </td>
                    <td class="border-blue-200 border-2 px-3 text-center">
                        {{ $banquet->min_cap }}-{{ $banquet->max_cap }}</td>
                    <td class="border-blue-200 border-2 px-3 text-center">
                        @forelse ($banquet->banquetService as $service)
                            {{ $service->service_name }}
                            @if (!$loop->last)
                                -
                            @endif
                        @empty

                        @endforelse
                    </td>
                    <td class="border-blue-200 border-2 px-3 text-center">
                        {{ $banquet->place }}
                    </td>
                    <td class="border-blue-200 border-2 px-3 text-center">
                        {{ $banquet->address }}
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>
</x-app-layout>
