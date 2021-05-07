<x-app-layout title="">
    <div class="container mx-auto">
        <div class="flex justify-between items-center  px-4">
            <h1 class="text-2xl">{{ $user->name }}</h1>
            <h1 class="text-lg ">ID: {{ $user->id }}</h1>
        </div>
        <h2 class="px-4">{{ $user->email }}</h2>
        <div class="grid grid-cols-2 px-2 xl:px-14">
            <table class="table-auto mt-5 col-span-2 lg:col-span-1">
                <thead>
                    <tr class="border-blue-200 border-2">
                        <th>Review</th>
                        <th>Banquet Name</th>
                        <th>Review Time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user->reviews as $review)
                        <tr>
                            <td class="border-blue-200 border-2 px-3 text-center">{{ $review->review }}</td>
                            <td class="border-blue-200 border-2 px-3 text-center">{{ $review->banquet->name }}</td>
                            <td class="border-blue-200 border-2 px-3 text-center">
                                {{ $review->created_at->diffForHumans() }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <table class="table-auto mt-5 col-span-2 lg:col-span-1">
                <thead>
                    <tr class="border-blue-200 border-2">
                        <th>Banquet Name</th>
                        <th>Event Detail</th>
                        <th>Contact</th>
                        <th>Venue Date</th>
                        <th>Booking Time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user->booking as $book)
                        <tr>
                            <td class="border-blue-200 border-2 px-3 text-center">
                                {{ $book->banquet->name }}</td>
                            <td class="border-blue-200 border-2 px-3 text-center">{{ $book->event_detail }}</td>
                            <td class="border-blue-200 border-2 px-3 text-center">{{ $book->mobile }}</td>
                            <td class="border-blue-200 border-2 px-3 text-center">{{ $book->venue_date }}</td>
                            <td class="border-blue-200 border-2 px-3 text-center">
                                {{ $book->created_at->diffForHumans() }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
