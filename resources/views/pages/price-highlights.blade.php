@extends('layouts.app')

@section('content')
    <div class="relative w-full h-full mt-28 mb-10 bg-housify-lightest gap-2">
        <div class="px-[8%]">
            <div>
                <h2 class="text-left text-3xl font-extrabold text-gray-900">
                    Step 3: Set your price
                </h2>
            </div>

            <div class="flex justify-start gap-2 pt-5">
                <div class="p-2 border-[1px] border-housify-darkest bg-housify-darkest rounded-sm text-housify-light">Price</div>
            </div>
        </div>

        <div class="m-auto w-full max-w-screen-sm px-8">
            <div class="px-6 py-6">
                <p class="text-xl text-housify-darkest mb-2 ml-24">Set price for the property</p>

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

                <form id="priceForm" action="{{ route('property.storePriceAndSave') }}" method="POST">
                    @csrf

                    <div class="flex-col bg-housify-lightest justify-items-center">
                        <div class="py-1 px-1 flex align-bottom items-end">
                            <span class="text-housify-darkest text-[2rem] align-bottom pb-2">₱</span>
                            <input type="number" name="prop_price_per_night" id="price"
                                   value="{{ old('prop_price_per_night', session('property_data.prop_price_per_night', 0)) }}"
                                   class="text-[5rem] max-w-[300px] h-20 align-bottom font-semibold text-center bg-housify-lightest appearance-none [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none focus:outline-none"
                                   min="1"
                                   step="1">
                        </div>
                        <span class="text-housify-dark text-md">rate per night</span>
                    </div>

                    <!-- Validation Error for Price -->
                    @error('prop_price_per_night')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror

                    <!-- Navigation Buttons -->
                    <div class="relative flex justify-between px-[8%] pt-[300px]">
                        <a href="{{ route('property.step6') }}" class="min-w-[150px] inline-flex justify-center py-2 px-4 border-[1px] border-housify-darkest shadow-sm text-lg font-medium rounded-sm text-housify-darkest bg-housify-light hover:bg-housify-lightest focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-housify-lightest">
                            Back
                        </a>
                        <button type="submit" class="min-w-[150px] inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-lg font-medium rounded-sm text-housify-light bg-housify-darkest hover:bg-housify-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-housify-dark">
                            Create Property
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
