@extends('layouts.app')

@section('title', $property->prop_title)

@section('content')
    <div class="max-w-[1750px] mx-auto px-8 md:px-32 mt-[120px]">
        <!-- Property Title -->
        <h1 class="text-[28px] font-semibold text-housify-darkest mb-5">{{ $property->prop_title }}</h1>

        <!-- Image Gallery -->
        <div class="flex flex-col lg:flex-row mb-5 gap-4">
            <div class="flex-[1.5]">
                <img src="{{ asset($property->main_image_path) }}"
                     alt="Main view"
                     class="w-full h-[400px] object-cover rounded-2xl border border-housify-darkest shadow-md">
            </div>
            <div class="flex-1 flex flex-col gap-4">
                <div class="flex gap-4 h-1/2">
                    <img src="{{ asset($property->gallery_image_1) }}"
                         alt="View"
                         class="w-full h-[190px] object-cover rounded-2xl border border-housify-darkest shadow-md">
                    <img src="{{ asset($property->gallery_image_2) }}"
                         alt="View"
                         class="w-full h-[190px] object-cover rounded-2xl border border-housify-darkest shadow-md">
                </div>
                <div class="flex gap-4 h-1/2">
                    <img src="{{ asset($property->gallery_image_3) }}"
                         alt="View"
                         class="w-full h-[190px] object-cover rounded-2xl border border-housify-darkest shadow-md">
                    <div class="relative w-full">
                        <img src="{{ asset($property->gallery_image_4) }}"
                             alt="View"
                             class="w-full h-[190px] object-cover rounded-2xl border border-housify-darkest shadow-md">
                        <span class="absolute bottom-[10px] right-[10px] bg-housify-light text-housify-darkest py-1 px-2.5 rounded-2xl text-xs font-semibold cursor-pointer">
                            Show All Photos
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Property Info Row -->
        <div class="flex flex-col lg:flex-row justify-between items-start mb-5">
            <div class="flex flex-col gap-1.5">
                <div class="text-xl font-semibold text-housify-darkest">{{ $property->prop_address }}</div>
                <div class="text-sm text-housify-darkest mb-1.5">{{ $property->prop_max_guest }} Guests · {{ $property->prop_room_count }} Rooms · {{ $property->prop_bathroom_count }} Bathroom</div>
                <div class="flex items-center">
                    <div class="flex items-center">
                        <i class="w-4 h-4 text-gold fill-gold" data-lucide="star"></i>
                    </div>
                    <span class="font-semibold text-sm ml-1.5 mr-1.5 text-housify-darkest">{{ $property->rating ?? 4.8 }} · </span>
                    <span class="text-sm text-housify-darkest underline italic">{{ $property->reviews_count ?? 24 }} Reviews</span>
                </div>
            </div>

            <div class="mt-4 lg:mt-0">
                <form action="{{ route('bookings.book', $property->prop_id) }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-housify-darkest text-housify-light border-none py-3 px-12 text-base font-light rounded-3xl cursor-pointer hover:bg-opacity-90">
                        Book Now
                    </button>
                </form>
            </div>
        </div>

        <!-- Property Description -->
        <div class="text-lg leading-relaxed text-housify-darkest mb-8">
            <p>{{ $property->prop_description }}</p>
        </div>

        <!-- Host Information -->
        <div class="flex items-center gap-4 mb-8">
            <img src="{{ asset($property->host->profile_image ?? 'default-profile.jpg') }}"
                 alt="{{ $property->host->name }}"
                 class="w-20 h-20 rounded-full border border-housify-darkest object-cover">
            <div>
                <h3 class="text-base font-semibold m-0 mb-0.5 text-housify-darkest">{{ $property->host->name }}</h3>
                <p class="text-housify-dark text-sm m-0 italic">Host</p>
            </div>
        </div>
    </div>

    <!-- Amenities Section -->
    <div class="relative w-screen left-[50%] right-[50%] -ml-[50vw] -mr-[50vw] bg-housify-dark mb-[18px] py-8">
        <div class="w-full text-housify-light">
            <div class="max-w-[1750px] mx-auto px-8 md:px-32">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-5">
                    <h2 class="text-[22px] font-semibold m-0">What this place offers</h2>
                    <button class="bg-transparent border border-housify-light text-housify-light py-2 px-4 rounded-3xl text-sm cursor-pointer mt-3 md:mt-0 w-full md:w-auto">
                        Show All Amenities
                    </button>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                    @foreach($property->amenities as $amenity)
                        <x-amenity-item :icon="$amenity->icon" :name="$amenity->name" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Things to Know -->
    <div class="max-w-[1750px] mx-auto px-8 md:px-32 py-6 mb-12 bg-housify-light rounded-2xl">
        <h2 class="text-[22px] font-semibold mb-6 text-housify-darkest">Things to know</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-lg font-semibold mb-4 text-housify-darkest">House rules</h3>
                <ul class="list-none p-0 m-0">
                    @foreach(['Check-in: 3:00 PM', 'Check-out: 11:00 AM', 'No smoking', 'No pets'] as $rule)
                        <li class="text-sm mb-3 text-housify-darkest relative pl-5 before:content-['•'] before:absolute before:left-0 before:text-housify-dark before:font-bold">
                            {{ $rule }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4 text-housify-darkest">Safety & property</h3>
                <ul class="list-none p-0 m-0">
                    @foreach(['Carbon monoxide alarm', 'Smoke alarm', 'First aid kit'] as $item)
                        <li class="text-sm mb-3 text-housify-darkest relative pl-5 before:content-['•'] before:absolute before:left-0 before:text-housify-dark before:font-bold">
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4 text-housify-darkest">Cancellation policy</h3>
                <ul class="list-none p-0 m-0">
                    @foreach(['Free cancellation for 48 hours', 'Full refund if canceled at least 14 days before check-in'] as $item)
                        <li class="text-sm mb-3 text-housify-darkest relative pl-5 before:content-['•'] before:absolute before:left-0 before:text-housify-dark before:font-bold">
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
