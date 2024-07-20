<x-layout>
    <div class="m-3">
        <a href="{{ route('add') }}">

            <button type="button" class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Back</button>
        </a>
    <a href="{{ route('hotel.create') }}">

        <button type="button" class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Create New</button>
    </a>
    </div>

    <!-- Table of Existing Hotels -->
     

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-8 py-4">
                    <span class="sr-only">Image</span>
                </th>
                <th scope="col" class="px-6 py-4">
                    Name
                </th>
                <th scope="col" class="px-6 py-4">
                    Address
                </th>
                <th scope="col" class="px-6 py-4">
                    Sub Address
                </th>
                <th scope="col" class="px-6 py-4">
                    Lodging
                </th>
                <th scope="col" class="px-6 py-4">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>

        @foreach( $hotels as $hotel )
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="p-4">
                    <img src="{{ asset($hotel->hotel_photo) }}" class="w-16 md:w-32 max-w-full max-h-full" alt="Hotels">
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                    {{ $hotel->hotel_name }}
                </td>
                <td class="px-6 py-4">
                {{ $hotel->hotel_address }}
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                {{ $hotel->hotel_sub_address }}
                </td>
                <td class="px-6 py-4">
                {{ $hotel->lodge }}
                </td>
                <td class="px-6 py-4">
                    <form action="{{ route('hotel.destroy', $hotel->id) }} " method="post">
                        @csrf
                        @method('delete')

                        <a href="{{ route('hotel.edit', $hotel->id) }}" class="font-medium text-yellow-600 dark:text-red-500 hover:underline m-2">Edit</a>
                        <button type="submit"  class="font-medium text-red-600 dark:text-red-500 hover:underline m-2">Delete</button>
                    </form>
                </td>
            </tr>

        @endforeach
           
       
        </tbody>
    </table>
</div>

</x-layout>