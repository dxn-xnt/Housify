<header class="bg-housify-light text-housify-darkest py-3 px-8 flex justify-between items-center fixed top-0 left-0 right-0 z-50 h-20 w-full">
    <!-- Logo -->
    <a href="{{ route('home') }}" class="flex items-center gap-2">
        <span class="font-dm-serif-display text-[28px] font-normal text-dark-red">Housify</span>
    </a>

    <!-- Search Section -->
    <section class="mb-5 relative z-10 w-full">
        <x-search-bar />
    </section>

    <!-- Menu with Alpine.js -->
    <div x-data="{ open: false }" class="relative">
        <button
            @click="open = !open"
            @click.away="open = false"
            class="flex items-center gap-2 bg-housify-light border-[1px] border-housify-darkest rounded-full px-[10px] py-[5px] hover:bg-opacity-90 shadow-xl"
        >
            <i class="w-[20px] h-[20px] text-housify-darkest" data-lucide="menu"></i>
            <i class="w-[25px] h-[25px] text-housify-darkest" data-lucide="user-circle"></i>
        </button>

        <div
            x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="absolute top-12 right-0 bg-housify-light border-housify-darkest border-[0.5px] text-housify-dark rounded-sm shadow-lg min-w-[230px] p-2 z-10"
            style="display: none;"
        >
            @auth
                <!-- Show when logged in -->
                <div class="px-2 py-1 border-b border-gray-200">
                    <p class="font-medium">Hi, {{ auth()->user()->user_fname }}!</p>
                </div>
                <a href="{{ route('property.create') }}" class="block py-[0.35rem] px-2 text-gray-800 hover:bg-[#FBFFF6] rounded font-medium">AirBnB your house</a>
                <a href="{{ route('bookings.index') }}" class="block py-[0.35rem] px-2 text-gray-800 hover:bg-[#FBFFF6] rounded font-medium">My Bookings</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left block py-[0.35rem] px-2 text-gray-800 hover:bg-[#FBFFF6] rounded font-medium">Log out</button>
                </form>
            @else
                <!-- Show when guest -->
                <a href="{{ route('login') }}" class="block py-[0.35rem] px-2 text-gray-800 hover:bg-[#FBFFF6] rounded font-medium">Log in</a>
                <a href="{{ route('signup') }}" class="block py-[0.35rem] px-2 text-gray-800 hover:bg-[#FBFFF6] rounded font-medium">Sign up</a>
                <a href="{{ route('login') }}"
                   onclick="sessionStorage.setItem('property_creation_intent', true)"
                   class="block py-[0.35rem] px-2 text-gray-800 hover:bg-[#FBFFF6] rounded font-medium">AirBnB your house</a>
            @endauth

            <!-- Common links for all users -->
            <div class="border-t border-gray-200 mt-1 pt-1">
                <a href="#" class="block py-[0.35rem] px-2 text-gray-800 hover:bg-[#FBFFF6] rounded font-medium">About us</a>
                <a href="#" class="block py-[0.35rem] px-2 text-gray-800 hover:bg-[#FBFFF6] rounded font-medium">Help Center</a>
            </div>
        </div>
    </div>
</header>
