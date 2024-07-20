<x-frontend-layout>


    <div class="grid grid-cols-1 lg:grid-cols-3 m-8 p-2  gap-10 justify-center items-center h-screen">


        @foreach( $destinations as $destination )
        <div class="">

        
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 my-4 flex flex-col m-auto hover:shadow-2xl transition-shadow duration-400">
            <a href="{{ route('fe.destinationpost', $destination->id) }}">
                <img class="rounded-t-lg h-60 object-cover w-full" src="{{ asset($destination->destination_photo) }}" alt="" />
                <h5 class="mt-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">{{$destination->destination_name}}</h5>
            </a>
            <div class="p-5">

                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Address: {{ $destination->destination_address }}</p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Distance From Bhedetar : {{ $destination->destination_distance }}</p>


            </div>
        </div>
        </div>


        @endforeach



    </div>
</x-frontend-layout>