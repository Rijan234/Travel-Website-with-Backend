<style>


</style>
<x-frontend-layout>

    <div class="m-4 pt-6">
        <h1 class="mb-4 text-center  text-4xl leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">{{ $destination->destination_name }}</h1>
        <hr class="w-48 h-1 mx-auto my-4 bg-gray-300 border-0 rounded md:my-10 dark:bg-gray-700">
    </div>

    <div class=" flex h-80 gap-10 m-8 flex-row justify-center mx-auto">
        <div class=" mt-14 ">

            <p class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                Address : <span class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $destination->destination_address }}</span>
            </p>
            <br>
            <p class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                Sub Address : <span class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $destination->destination_sub_address }}</span>
            </p>
            <br>
            <p class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                Distacne from Bhedetar chowk : <span class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $destination->destination_distance }}</span>
            </p>
            <br>



        </div>

        <div class=" about-image bg-cover h-auto bg-center  bg-cover  ">

            <img src="{{  asset($destination->destination_photo) }}" alt="" class=" h-[300px] mx-auto w-[500px]">

        </div>
    </div>

    <div class="mx-12">
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 ">{{ strip_tags($destination->destination_info) }}</p>
    </div>



</x-frontend-layout>