@extends('layouts.app')

@section('content')
    <div class="relative w-full h-full mt-28 mb-10 bg-housify-lightest gap-2">
        <div class="px-[8%]">
            <div>
                <h2 class="text-left text-3xl font-extrabold text-gray-900">
                    Step 2: Add highlights
                </h2>
            </div>

            <div class="flex justify-start gap-2 pt-5">
                <div class="p-2 border-[1px] border-housify-darkest bg-housify-darkest rounded-sm text-housify-light">Description</div>
                <div class="p-2 border-[1px] border-housify-darkest bg-housify-darkest rounded-sm text-housify-light">Amenities</div>
                <div class="p-2 border-[1px] border-housify-darkest bg-housify-darkest rounded-sm text-housify-light">Pictures</div>
            </div>
        </div>

        <div class="m-auto w-full max-w-screen-md px-8 py-2">
            <!-- Photo Upload Section -->
            <form id="picturesForm" action="{{ route('property.storePictures') }}" method="POST" enctype="multipart/form-data" class="p-6 space-y-8">
                @csrf

                <!-- General Error Message -->
                @if($errors->any())
                    <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-md">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <h3 class="text-xl font-medium text-gray-900 mb-4">Add some photos of your house</h3>

                <!-- Display Uploaded Images -->
                <div id="image-thumbnails" class="grid grid-cols-3 gap-4 mb-4">
                    @php
                        $hasImages = session()->has('property_images') && count(session('property_images')) > 0;
                    @endphp

                    @if($hasImages)
                        @foreach(session('property_images') as $index => $imageUrl)
                            <div class="relative group">
                                <img src="{{ asset('storage/' . $imageUrl) }}" alt="Thumbnail" class="w-32 h-32 object-cover rounded-sm border border-housify-darkest">
                                <button type="button" onclick="removeImage({{ $index }})" class="absolute top-1 right-1 bg-white rounded-full p-1 opacity-0 group-hover:opacity-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        @endforeach
                    @endif
                </div>

                <!-- File Input -->
                <div class="border-2 border-dashed border-housify-dark rounded-sm px-6 py-4 text-center mb-4 min-h-72">
                    <label for="images" class="block text-sm font-medium text-gray-700">
                        Select Images
                    </label>
                    <input type="file" name="images[]" multiple accept="image/*" class="mt-1 block w-full" id="file-upload">
                    <p class="mt-2 text-sm text-gray-500">
                        PNG, JPG, GIF up to 10MB
                    </p>
                    @if(!$hasImages)
                        <p class="mt-4 text-sm text-gray-500">
                            No images selected yet
                        </p>
                    @endif
                </div>

                <!-- Navigation Buttons -->
                <div class="relative flex justify-between pt-32">
                    <a href="{{ route('property.step5') }}" class="min-w-[150px] inline-flex justify-center py-2 px-4 border-[1px] border-housify-darkest shadow-sm text-lg font-medium rounded-sm text-housify-darkest bg-housify-light hover:bg-housify-lightest focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-housify-lightest">
                        Back
                    </a>
                    <button type="submit" class="min-w-[150px] inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-lg font-medium rounded-sm text-housify-light bg-housify-darkest hover:bg-housify-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-housify-dark">
                        Next
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Array to store uploaded images
        let uploadedImages = @json(session('property_images', []));

        // Function to display uploaded images
        function displayImageThumbnails() {
            const thumbnailsContainer = document.getElementById('image-thumbnails');
            thumbnailsContainer.innerHTML = ''; // Clear existing thumbnails

            if (uploadedImages.length === 0) {
                thumbnailsContainer.innerHTML = '<p class="col-span-3 text-center text-gray-500">No images selected yet</p>';
                return;
            }

            uploadedImages.forEach((image, index) => {
                const thumbnail = document.createElement('div');
                thumbnail.className = 'relative group';
                thumbnail.innerHTML = `
                    <img src="${image}" alt="Thumbnail" class="w-32 h-32 object-cover rounded-sm border border-housify-darkest">
                    <button type="button" onclick="removeImage(${index})" class="absolute top-1 right-1 bg-white rounded-full p-1 opacity-0 group-hover:opacity-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                `;
                thumbnailsContainer.appendChild(thumbnail);
            });
        }

        // Handle file upload
        document.getElementById('file-upload').addEventListener('change', function (e) {
            const files = e.target.files;

            // Process each file
            for (let i = 0; i < files.length; i++) {
                const file = files[i];

                // Validate file type
                if (!file.type.match('image.*')) {
                    continue;
                }

                // Create a URL for the thumbnail
                const imageUrl = URL.createObjectURL(file);

                // Add to uploaded images array
                uploadedImages.push(imageUrl);

                // Display thumbnails
                displayImageThumbnails();
            }
        });

        // Remove an image
        function removeImage(index) {
            fetch(`/property/remove-image/${index}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        uploadedImages.splice(index, 1); // Remove the image at the specified index
                        displayImageThumbnails(); // Update the displayed thumbnails
                    }
                });
        }

        // Initialize thumbnails on page load
        displayImageThumbnails();
    </script>
@endsection
