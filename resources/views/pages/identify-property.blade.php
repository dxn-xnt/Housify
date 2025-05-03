@extends('layouts.app')

@section('title', 'Property Creation')

@section('content')
    <!-- Save & Cancel Button -->
   <div></div>

    <!-- Main Content -->
    <div class="relative w-full h-screen mt-28 bg-housify-lightest ">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <h2 class="text-center text-3xl font-extrabold text-gray-900">
                Step 1: Identify your property
            </h2>
        </div>

        <div class="flex justify-start gap-2">
            <div class="p-2 border-[1px] border-housify-darkest bg-housify-darkest rounded-sm text-housify-light">Property Type</div>
            <div class="p-2 border-[1px] border-housify-darkest rounded-sm text-housify-darkest">Location</div>
            <div class="p-2 border-[1px] border-housify-darkest rounded-sm text-housify-darkest">Capacity</div>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md px-8 md:px-14">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10 max-w-[1750px] mx-auto">
                <form class="space-y-6" action="#" method="POST">
                    @csrf

                    <!-- Property Type Selection -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Property type</label>
                        <div class="grid grid-cols-2 gap-3">
                            @foreach($types as $type)
                                <x-option-item :type="$type" />
                            @endforeach
                        </div>
                        @error('property_type')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Navigation Buttons -->
                    <div class="flex justify-between">
                        <a href="{{ url()->previous() }}" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-500 hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                            Back
                        </a>
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Next
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add visual feedback when property type is selected
            const propertyTypeInputs = document.querySelectorAll('input[name="property_type"]');
            propertyTypeInputs.forEach(input => {
                input.addEventListener('change', function() {
                    // Remove all selected styles first
                    document.querySelectorAll('label[for^="property_type_"]').forEach(label => {
                        label.classList.remove('peer-checked:border-indigo-500', 'peer-checked:bg-indigo-50', 'peer-checked:text-indigo-700');
                    });

                    // Add to the selected one
                    if (this.checked) {
                        const label = document.querySelector(`label[for="${this.id}"]`);
                        label.classList.add('peer-checked:border-indigo-500', 'peer-checked:bg-indigo-50', 'peer-checked:text-indigo-700');
                    }
                });
            });
        });
    </script>
@endsection

@push('styles')
    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
@endpush
