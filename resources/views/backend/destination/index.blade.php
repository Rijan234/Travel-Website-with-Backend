<x-layout>
    <div class="m-4 px-2">
        <a href="{{ route('add') }}">

            <button type="button" class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Back</button>
        </a>
        <a href="{{ route('destination.create') }}">

            <button type="button" class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Create New</button>
        </a>
    </div>

    <!-- Table of Existing destinations -->

    <div class="grid grid-cols-1 md:grid-cols-2 m-8 p-2  ">


        @foreach( $destinations as $destination )
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 my-4 flex flex-col">
            <a href="#">
                <img class="rounded-t-lg h-48 object-cover w-full" src="{{ asset($destination->destination_photo) }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">{{$destination->destination_name}}</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Address: {{ $destination->destination_address }}</p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Distance From Bhedetar: {{ $destination->destination_distance }}</p>
                <div class="flex m-4 ">
                    <div class="mx-4">
                        <a href="{{ route('destination.edit', $destination->id ) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-500 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Edit
                            <svg class="w-6 h-6 text-white-300 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                            </svg>

                        </a>

                    </div>
                    <div class="mx-4">

                        <form action="{{ route('destination.destroy', $destination->id) }} " method="post">
                            @csrf
                            @method('delete')

                            <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-500 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Delete <svg class="w-6 h-6 text-white-300 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M10 12v1h4v-1m4 7H6a1 1 0 0 1-1-1V9h14v9a1 1 0 0 1-1 1ZM4 5h16a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z" />
                                </svg>



                            </button>

                        </form>

                    </div>

                </div>

            </div>
        </div>


        @endforeach

    </div>







</x-layout>