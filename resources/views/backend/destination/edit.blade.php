<x-layout>

    <div class="m-3">
        <a href="{{ route('destination.index') }}">
            <button type="button" class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Back</button>

        </a>
    </div>

    <div class="m-4 container mx-auto">
        <div class="w-1/2 mx-auto">


            <form action="{{ route('destination.update', $destination->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')



                <div class="mb-2">
                    <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Destination Name</label>
                    <input type="text" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="destination_name" value="{{ $destination->destination_name }}" required>
                </div>

                <div class="mb-2">
                    <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                    <input type="text" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="destination_address" value="{{ $destination->destination_address }}" required>
                </div>

                <div class="mb-2">
                    <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sub-address</label>
                    <input type="text" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="destination_sub_address" value="{{ $destination->destination_sub_address }}">
                </div>
                <div class="mb-2">
                    <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Distance from Bhedetar</label>
                    <input type="text" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="destination_distance"value="{{ $destination->destination_distance }}" required>
                </div>




                <div class="mb-2">

                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Photo of destination</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="destination_photo" >

                </div>

                <div class="mb-2">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Existing Photo</label>


                <img src="{{ asset($destination->destination_photo) }}" alt="hotel photo" >


                </div>

                <div class="mb-2">



                    <div class="max-w-2xl mx-auto p-4">


                        <div class="mb-6">
                            <label for="content" class="block text-lg font-medium text-gray-800 mb-1">Additional Info</label>
                            <textarea id="content" name="destination_info" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" rows="6" >{{ $destination->destination_info }}</textarea>
                        </div>




                    </div>





                </div>



                <div class="mb-2">

                    <button type="submit" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Submit</button>

                </div>




            </form>


        </div>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
    </script>
</x-layout>