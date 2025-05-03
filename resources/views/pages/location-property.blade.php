{{-- resources/views/properties/step1-address.blade.php --}}
@extends('layouts.app')

@section('content')
    <div></div>

    <!-- Main Content -->
    <div class="relative w-full h-full mt-28 mb-10 bg-housify-lightest gap-2">
        <div class="pl-44">
            <div>
                <h2 class="text-left text-3xl font-extrabold text-gray-900">
                    Step 1: Identify your property
                </h2>
            </div>

            <div class="flex justify-start gap-2 pt-5">
                <div class="p-2 border-[1px] border-housify-darkest bg-housify-darkest rounded-sm text-housify-light">Property Type</div>
                <div class="p-2 border-[1px] border-housify-darkest rounded-sm text-housify-darkest">Location</div>
                <div class="p-2 border-[1px] border-housify-darkest rounded-sm text-housify-darkest">Capacity</div>
            </div>
        </div>


        <div class="m-auto w-full max-w-screen-lg px-8">
            <div class="bg-transparent py-8 px-4 sm:px-10 max-w-[1750px] mx-auto">
                <form class="space-y-6" action="#" method="POST">
                    @csrf

                    <!-- Property Type Selection -->
                    <div >
                        <label class="block text-xl font-medium text-housify-darkest mb-2">Property type</label>
                        <div class="grid grid-cols-3 gap-3">
                            @foreach($types as $type)
                                <x-option-item :type="$type" />
                            @endforeach
                        </div>
                        @error('property_type')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </form>
            </div>
        </div>

        <!-- Navigation Buttons -->
        <div class="relative flex justify-between px-44 pt-52">
            <a href="{{ url()->previous() }}" class="min-w-[150px] inline-flex justify-center py-2 px-4 border-[1px] border-housify-darkest shadow-sm text-lg font-medium rounded-sm text-housify-darkest bg-housify-light hover:bg-housify-lightest focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-housify-lightest">
                Back
            </a>
            <button type="submit" class="min-w-[150px] inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-lg font-medium rounded-sm text-housify-light bg-housify-darkest hover:bg-housify-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-housify-dark">
                Next
            </button>
        </div>
    </div>




<div class="relative w-full mt-28 bg-housify-lightest">
    <div class="max-w-3xl mx-auto">
        <h1 class="text-2xl font-bold text-gray-900 mb-8">Step 1: Identify your property</h1>

        <div class="bg-white shadow rounded-lg overflow-hidden">
            <!-- Address Section -->
            <div class="p-6 border-b border-gray-200">
                <h2 class="text-lg font-medium text-gray-900 mb-4">Add the address of the property</h2>

                <form id="addressForm">
                    <div class="grid grid-cols-1 gap-y-4 gap-x-6 sm:grid-cols-6">
                        <!-- Sweet Address -->
                        <div class="sm:col-span-6">
                            <label for="street_address" class="block text-sm font-medium text-gray-700">Street Address</label>
                            <input type="text" name="street_address" id="street_address" autocomplete="street-address"
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>

                        <!-- City/Municipality -->
                        <div class="sm:col-span-3">
                            <label for="city" class="block text-sm font-medium text-gray-700">City/Municipality</label>
                            <input type="text" name="city" id="city" autocomplete="address-level2"
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>

                        <!-- ZIP Code -->
                        <div class="sm:col-span-2">
                            <label for="zip_code" class="block text-sm font-medium text-gray-700">ZIP Code</label>
                            <input type="text" name="zip_code" id="zip_code" autocomplete="postal-code"
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>

                        <!-- Province -->
                        <div class="sm:col-span-3">
                            <label for="province" class="block text-sm font-medium text-gray-700">Province</label>
                            <input type="text" name="province" id="province" autocomplete="address-level1"
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                    </div>
                </form>
            </div>
                <!-- Location Privacy Notice -->
                <p class="mt-4 text-xs text-gray-500">
                    Check location is only shared with guests after they've made a reservation.
                </p>
            </div>

            <!-- Navigation -->
            <div class="bg-gray-50 px-6 py-4 flex justify-between">
                <a href="#" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Back
                </a>
                <button type="button" id="saveLocationBtn" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Save and Continue
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
