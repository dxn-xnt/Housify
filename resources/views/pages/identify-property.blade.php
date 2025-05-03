@extends('layouts.app')

@section('title', 'Property Creation')

@section('content')
    <!-- Save & Cancel Button -->
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
