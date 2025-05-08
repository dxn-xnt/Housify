@extends('layouts.app')

@section('title', 'Property Creation')

@section('content')
    <!-- Save & Cancel Button -->
    <div></div>

    <!-- Main Content -->
    <div class="relative w-full h-full mt-28 mb-10 bg-housify-lightest gap-2">
        <div class="px-[8%]">
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
                <form method="POST" action="{{ route('property.storeType') }}" id="propertyTypeForm">
                    @csrf
                    <!-- Property Type Selection -->
                    <div>
                        <label class="block text-xl font-medium text-housify-darkest mb-2">Property type</label>
                        <div class="grid grid-cols-3 gap-3">
                            @foreach($types as $type)
                                <x-option-item :type="$type" />
                            @endforeach
                        </div>
                        @error('prop_type')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Navigation Buttons -->
                    <div class="relative flex justify-between px-[8%] pt-60">
                        <a href="{{ url()->previous() }}" class="min-w-[150px] inline-flex justify-center py-2 px-4 border-[1px] border-housify-darkest shadow-sm text-lg font-medium rounded-sm text-housify-darkest bg-housify-light hover:bg-housify-lightest focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-housify-lightest">
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

    @section('scripts')
        <script>
            document.getElementById('propertyTypeForm').addEventListener('submit', function(e) {
                const selected = document.querySelector('input[name="prop_type"]:checked');
                if (!selected) {
                    e.preventDefault();
                    alert('Please select a property type before proceeding');
                }
            });
        </script>
    @endsection
@endsection
