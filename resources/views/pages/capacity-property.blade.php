@extends('layouts.app')

@section('content')
    <div class="relative w-full h-full mt-28 mb-10 bg-housify-lightest gap-2">
        <div class="px-[8%]">
            <div>
                <h2 class="text-left text-3xl font-extrabold text-gray-900">
                    Step 1: Identify your property
                </h2>
            </div>

            <div class="flex justify-start gap-2 pt-5">
                <div class="p-2 border-[1px] border-housify-darkest bg-housify-darkest rounded-sm text-housify-light">Property Type</div>
                <div class="p-2 border-[1px] border-housify-darkest bg-housify-darkest rounded-sm text-housify-light">Location</div>
                <div class="p-2 border-[1px] border-housify-darkest bg-housify-darkest rounded-sm text-housify-light">Capacity</div>
            </div>
        </div>

        <div class="m-auto w-full max-w-screen-sm px-8">
            <!-- Capacity Configuration -->
            <div class="px-6 py-8 border-b border-gray-200">
                <h3 class="text-xl font-medium text-gray-900 mb-4">Configure property capacity</h3>

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

                <!-- Form -->
                <form id="capacityForm" action="{{ route('property.storeCapacity') }}" method="POST">
                    @csrf

                    <!-- Backrooms Counter -->
                    <div class="flex items-center justify-between py-3">
                        <div>
                            <h4 class="text-md font-medium text-gray-700">Rooms</h4>
                        </div>
                        <div class="flex items-center">
                            <button type="button" onclick="updateValue('prop_room_count', -1)" class="counter-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <input type="number" name="prop_room_count" id="prop_room_count" value="{{ old('prop_room_count', 1) }}"
                                   class="mx-4 text-lg font-medium w-16 text-center border border-gray-300 rounded" min="1" step="1">
                            <button type="button" onclick="updateValue('prop_room_count', 1)" class="counter-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                        @error('prop_room_count')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Guests Counter -->
                    <div class="flex items-center justify-between py-3 border-t border-gray-200">
                        <div>
                            <h4 class="text-md font-medium text-gray-700">Guests</h4>
                        </div>
                        <div class="flex items-center">
                            <button type="button" onclick="updateValue('prop_max_guest', -1)" class="counter-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <input type="number" name="prop_max_guest" id="prop_max_guest" value="{{ old('prop_max_guest', 1) }}"
                                   class="mx-4 text-lg font-medium w-16 text-center border border-gray-300 rounded" min="1" step="1">
                            <button type="button" onclick="updateValue('prop_max_guest', 1)" class="counter-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                        @error('prop_max_guest')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Bathrooms Counter -->
                    <div class="flex items-center justify-between py-3 border-t border-gray-200">
                        <div>
                            <h4 class="text-md font-medium text-gray-700">Bathrooms</h4>
                        </div>
                        <div class="flex items-center">
                            <button type="button" onclick="updateValue('prop_bathroom_count', -1)" class="counter-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <input type="number" name="prop_bathroom_count" id="prop_bathroom_count" value="{{ old('prop_bathroom_count', 1) }}"
                                   class="mx-4 text-lg font-medium w-16 text-center border border-gray-300 rounded" min="1" step="1">
                            <button type="button" onclick="updateValue('prop_bathroom_count', 1)" class="counter-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                        @error('prop_bathroom_count')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Navigation Buttons -->
                    <div class="relative flex justify-between pt-40">
                        <a href="{{ route('property.step2') }}" class="min-w-[150px] inline-flex justify-center py-2 px-4 border-[1px] border-housify-darkest shadow-sm text-lg font-medium rounded-sm text-housify-darkest bg-housify-light hover:bg-housify-lightest focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-housify-lightest">
                            Back
                        </a>
                        <button type="submit" class="min-w-[150px] inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-lg font-medium rounded-sm text-housify-light bg-housify-darkest hover:bg-housify-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-housify-dark">
                            Next
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Increment or decrement input value
        function updateValue(id, change) {
            const input = document.getElementById(id);
            let value = parseInt(input.value) || 1; // Default to 1 if empty
            value += change;

            if (value < 1) {
                value = 1; // Ensure minimum value is 1
            }

            input.value = value;
        }
    </script>
@endsection
