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
                <div class="p-2 border-[1px] border-housify-darkest rounded-sm text-housify-darkest">Pictures</div>
            </div>
        </div>

        <div class="m-auto w-full max-w-screen-md px-8 py-2">
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

            <!-- Amenities Form -->
            <form id="amenitiesForm" action="{{ route('property.storeAmenities') }}" method="POST" class="p-6 space-y-8">
                @csrf

                <!-- Basic Amenities (BA) -->
                <div>
                    <h3 class="text-xl font-medium text-gray-900 mb-4">Identify basic amenities</h3>
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                        @foreach($amenities->get('BA', []) as $amenity)
                            <label class="block cursor-pointer relative">
                                <input type="checkbox" name="amenities[]" value="{{ $amenity->amn_id }}"
                                       class="absolute opacity-0 w-0 h-0 peer">
                                <div class="block px-4 py-2 border rounded-md text-sm font-medium text-center transition-colors duration-200
                                    peer-checked:bg-housify-darkest peer-checked:text-housify-light hover:bg-gray-50">
                                    <i class="filter-icon" data-lucide="{{ $amenity->amn_icon }}"></i>
                                    {{ $amenity->amn_name }}
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>

                <!-- Standout Amenities (SA) -->
                <div>
                    <h3 class="text-xl font-medium text-gray-900 mb-4">Identify standout amenities</h3>
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                        @foreach($amenities->get('SA', []) as $amenity)
                            <label class="block cursor-pointer relative">
                                <input type="checkbox" name="amenities[]" value="{{ $amenity->amn_id }}"
                                       class="absolute opacity-0 w-0 h-0 peer">
                                <div class="block px-4 py-2 border rounded-md text-sm font-medium text-center transition-colors duration-200
                                    peer-checked:bg-housify-darkest peer-checked:text-housify-light hover:bg-gray-50">
                                    <i class="filter-icon" data-lucide="{{ $amenity->amn_icon }}"></i>
                                    {{ $amenity->amn_name }}
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>

                <!-- Safety Items (SI) -->
                <div>
                    <h3 class="text-xl font-medium text-gray-900 mb-4">Identify safety items</h3>
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                        @foreach($amenities->get('SI', []) as $amenity)
                            <label class="block cursor-pointer relative">
                                <input type="checkbox" name="amenities[]" value="{{ $amenity->amn_id }}"
                                       class="absolute opacity-0 w-0 h-0 peer">
                                <div class="block px-4 py-2 border rounded-md text-sm font-medium text-center transition-colors duration-200
                                    peer-checked:bg-housify-darkest peer-checked:text-housify-light hover:bg-gray-50">
                                    <i class="filter-icon" data-lucide="{{ $amenity->amn_icon }}"></i>
                                    {{ $amenity->amn_name }}
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>

                <!-- Other Amenities -->
                <div>
                    <h3 class="text-xl font-medium text-gray-900 mb-4">Other amenities</h3>
                    <div class="flex items-center space-x-2 mb-3">
                        <input type="text" id="custom_amenity"
                               class="flex-1 px-3 py-2 border border-housify-darkest rounded-sm shadow-sm text-md bg-housify-lightest"
                               placeholder="Enter custom amenity">
                        <button type="button" onclick="addCustomAmenity()"
                                class="px-4 py-2 border border-housify-darkest text-md font-medium rounded-sm shadow-sm text-housify-lightest bg-housify-darkest hover:bg-housify-dark">
                            Add
                        </button>
                    </div>
                    <div id="custom_amenities_list" class="grid grid-cols-2 sm:grid-cols-3 gap-3"></div>
                </div>

                <!-- Navigation Buttons -->
                <div class="relative flex justify-between pt-32">
                    <a href="{{ route('property.step4') }}" class="min-w-[150px] inline-flex justify-center py-2 px-4 border-[1px] border-housify-darkest shadow-sm text-lg font-medium rounded-sm text-housify-darkest bg-housify-light hover:bg-housify-lightest focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-housify-lightest">
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
        // Add custom amenities dynamically
        function addCustomAmenity() {
            const input = document.getElementById('custom_amenity');
            const value = input.value.trim();

            if (!value) return;

            // Create a hidden input for the custom amenity
            const hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'custom_amenities[]';
            hiddenInput.value = value;

            // Create a label for the custom amenity
            const div = document.createElement('div');
            div.className = 'amenity-item block px-4 py-2 border rounded-md text-sm font-medium text-center cursor-pointer bg-green-100 border-green-300 text-green-800 hover:bg-gray-50';
            div.innerHTML = `${value} <button type="button" onclick="removeCustomAmenity(this)" class="ml-2 text-red-600">Remove</button>`;

            // Append elements to the DOM
            document.getElementById('custom_amenities_list').appendChild(div);
            document.getElementById('custom_amenities_list').appendChild(hiddenInput);

            // Clear the input field
            input.value = '';
        }

        // Remove custom amenities
        function removeCustomAmenity(button) {
            const parentDiv = button.parentElement;
            const hiddenInput = parentDiv.nextElementSibling;

            // Remove the label and hidden input
            parentDiv.remove();
            hiddenInput.remove();
        }
    </script>
@endsection
