@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <x-layout.filter-search />
    <!-- Main Content -->
    <div class="relative w-full mt-28 bg-housify-lightest">
        <!-- Listings Section -->
        <section class="w-full px-8 md:px-14">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-9 gap-y-12 mb-8 max-w-[1750px] mx-auto">
                @foreach($properties as $property)
                    <x-property-card :property="$property" />
                @endforeach
            </div>
        </section>

        <!-- Explore More Section -->
        <div class="text-center py-1 pb-4 max-w-[1200px] mx-auto">
            <p class="mb-3 text-gray-600 italic">Continue explore related airbnbs?</p>
            <button class="bg-housify-darkest text-housify-light py-2.5 px-6 border-none rounded-3xl cursor-pointer">
                Show More
            </button>
        </div>
    </div>
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
