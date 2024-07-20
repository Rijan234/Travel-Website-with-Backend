<x-layout>

<div class="m-3">
    <a href="{{ route('hotel.index') }}">
        <button type="button" class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Back</button>

    </a>
    </div>

    <div class="m-4 container mx-auto">
        <div class="w-1/2 mx-auto">


            <form action="{{ route('hotel.store') }}" method="post" enctype="multipart/form-data">
                @csrf



                <div class="mb-2">
                    <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hotel Name</label>
                    <input type="text" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="hotel_name" required>
                </div>

                <div class="mb-2">
                    <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                    <input type="text" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="hotel_address" required>
                </div>

                <div class="mb-2">
                    <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sub-address</label>
                    <input type="text" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="hotel_sub_address">
                </div>



                <div class="mb-2">
                    <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lodging</label>


                    <div class="flex flex-wrap">
                        <div class="flex items-center me-4">
                            <label for="green-radio" class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Available</label>
                            <input id="green-radio" type="radio" value="available" name="lodging" class="w-4 ms-2 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                        </div>
                        <div class="flex items-center me-4">
                            <label for="red-radio" class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Not Available</label>
                            <input id="red-radio" type="radio" value="not-available" name="lodging" class="w-4 ms-2 h-4 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                        </div>


                    </div>

                </div>

                <div class="mb-2">

                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Photo of Hotel</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="hotel_photo" required>

                </div>

                <div class="mb-2">

                    <button type="submit" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Submit</button>

                </div>




            </form>


        </div>
    </div>
</x-layout>