<x-app-layout title="">
    <div class="container mx-auto px-0 xl:px-14">
        <table class="table-auto w-full mt-5">
            <thead>
                <tr class="border-blue-200 border-2">
                    <th>Name</th>
                    <th>Email</th>
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
                        <td class="border-blue-200 border-2 px-3 text-center">{{ $user->reviews_count }}</td>
                        <td class="border-blue-200 border-2 px-3 text-center">{{ $user->booking_count }}</td>
                        <td class="border-blue-200 border-2 px-3 text-center">{{ $user->created_at->diffForHumans() }}
                        </td>
                        <td class="border-blue-200 border-2 px-3 text-center">{{ $user->updated_at->diffForHumans() }}
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>
