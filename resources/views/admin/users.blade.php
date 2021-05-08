<x-app-layout title="">
    <div class="container mx-auto px-0 xl:px-14">


        <div x-data="{tab:'users'}" class="mt-5">
            <div>
                <button class="focus:outline-none px-4 py-2"
                    :class="{'bg-blue-600 text-white rounded-md shadow-lg':tab === 'users'}"
                    @click="tab='users'">Users</button>
                <button class="focus:outline-none px-4 py-2"
                    :class="{'bg-blue-600 text-white rounded-md shadow-lg':tab === 'booking'}"
                    @click="tab='booking'">Booking</button>
                <button class="focus:outline-none px-4 py-2"
                    :class="{'bg-blue-600 text-white rounded-md shadow-lg':tab === 'reviews'}"
                    @click="tab='reviews'">Reviews</button>
            </div>
            <div x-show.transition.opacity.duration.300ms="tab==='users'">
                <table class="table-auto w-full mt-5">
                    <thead>
                        <tr class="border-blue-200 border-2">
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Reviewed</th>
                            <th>Booked</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="border-blue-200 border-2 px-3 text-center"><a class="text-purple-600"
                                        href="{{ route('user.details', $user->id) }}">{{ $user->name }}</a></td>
                                <td class="border-blue-200 border-2 px-3 text-center">{{ $user->email }}</td>
                                <td class="border-blue-200 border-2 px-3 text-center">{{ $user->mobile }}</td>
                                <td class="border-blue-200 border-2 px-3 text-center">{{ $user->reviews_count }}</td>
                                <td class="border-blue-200 border-2 px-3 text-center">{{ $user->booking_count }}</td>
                                <td class="border-blue-200 border-2 px-3 text-center">
                                    {{ $user->created_at->diffForHumans() }}
                                </td>
                                <td class="border-blue-200 border-2 px-3 text-center">
                                    {{ $user->updated_at->diffForHumans() }}
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
            <div x-show.transition.opacity.duration.300ms="tab==='booking'">
                <table class="table-auto w-full mt-5">
                    <thead>
                        <tr class="border-blue-200 border-2">
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Banquet Name</th>
                            <th>Event Detail</th>
                            <th>Booked At</th>
                            <th>Venue Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $booking)
                            <tr>
                                <td class="border-blue-200 border-2 px-3 text-center"><a class="text-purple-600"
                                        href="{{ route('user.details', $booking->user->id) }}">{{ $booking->user->name }}</a>
                                </td>
                                <td class="border-blue-200 border-2 px-3 text-center">{{ $booking->user->email }}
                                </td>
                                <td class="border-blue-200 border-2 px-3 text-center">{{ $booking->user->mobile }}
                                </td>
                                <td class="border-blue-200 border-2 px-3 text-center">{{ $booking->banquet->name }}
                                </td>
                                <td class="border-blue-200 border-2 px-3 text-center">{{ $booking->event_detail }}
                                </td>
                                <td class="border-blue-200 border-2 px-3 text-center">
                                    {{ $booking->created_at->diffForHumans() }}
                                </td>
                                <td class="border-blue-200 border-2 px-3 text-center">{{ $booking->venue_date }}</td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
            <div x-show.transition.opacity.duration.300ms="tab==='reviews'">
                <table class="table-auto w-full mt-5">
                    <thead>
                        <tr class="border-blue-200 border-2">
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Review</th>
                            <th>Banquet Name</th>
                            <th>Reviewed At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reviews as $review)
                            <tr>
                                <td class="border-blue-200 border-2 px-3 text-center"><a class="text-purple-600"
                                        href="{{ route('user.details', $review->user->id) }}">{{ $review->user->name }}</a>
                                </td>
                                <td class="border-blue-200 border-2 px-3 text-center">{{ $review->user->email }}
                                </td>
                                <td class="border-blue-200 border-2 px-3 text-center">{{ $review->user->mobile }}
                                </td>
                                <td class="border-blue-200 border-2 px-3 text-center">{{ $review->review }}
                                </td>
                                <td class="border-blue-200 border-2 px-3 text-center">{{ $review->banquet->name }}
                                </td>
                                <td class="border-blue-200 border-2 px-3 text-center">
                                    {{ $review->created_at->diffForHumans() }}
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>



    </div>

</x-app-layout>
