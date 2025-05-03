<div x-data="{ scrolled: false }"
     @scroll.window="scrolled = window.scrollY > 100"
     class="relative z-50 transition-all duration-75">

    <!-- Main Search Container -->
    <div class="sticky top-4 mx-auto transition-all duration-75 ease-out"
         :class="{
         'w-full px-4 pt-[150px]' : !scrolled,
         'w-[85%] pt-[20px]': scrolled
       }">

        <!-- Search Bar -->
        <div class="flex bg-housify-lightest rounded-full border-housify-darkest border-[1px] py-2 px-3 shadow-md justify-between items-center max-w-[1350px] mx-auto transition-all duration-300"
             :class="{
           'py-2': !scrolled,
           'py-1': scrolled
         }">

            <!-- Location (compresses on scroll) -->
            <div class="px-4 border-r border-housify-darkest transition-all duration-75"
                 :class="{
                     'flex-1': !scrolled,
                     'w-[22%]': scrolled
                   }">
                <label class="block text-sm mb-0.5 text-housify-dark">Location</label>
                <div class="flex items-center gap-2">
                    <i class="w-7 h-7 text-housify-darkest" data-lucide="map-pin"></i>
                    <input type="text" placeholder="Enter location" class="input-field text-xl font-medium text-housify-darkest">
                </div>
            </div>

            <!-- Arrival Date (compresses on scroll) -->
            <div class="px-4 border-r border-housify-darkest transition-all duration-75"
                 :class="{
                     'flex-1': !scrolled,
                     'w-[18%]': scrolled
                   }">
                <label class="block text-sm mb-0.5 text-housify-dark">Arrival Date</label>
                <div class="flex items-center gap-2">
                    <i class="w-7 h-7 text-housify-darkest" data-lucide="calendar"></i>
                    <input type="text" value="24/06/25" class="input-field text-xl font-semibold">
                </div>
            </div>

            <!-- Departure Date (compresses on scroll) -->
            <div class="px-4 border-r border-housify-darkest transition-all duration-75"
                 :class="{
                     'flex-1': !scrolled,
                     'w-[18%]': scrolled
                   }">
                <label class="block text-sm mb-0.5 text-housify-dark">Departure Date</label>
                <div class="flex items-center gap-2">
                    <i class="w-7 h-7 text-housify-darkest" data-lucide="calendar"></i>
                    <input type="text" value="24/06/25" class="input-field text-xl font-semibold">
                </div>
            </div>

            <!-- Room & Guests (compresses on scroll) -->
            <div class="px-4 border-r border-housify-darkest transition-all duration-75"
                 :class="{
                     'flex-1': !scrolled,
                     'w-[22%]': scrolled
                   }">
                <label class="block text-sm mb-0.5 text-housify-dark">Room & Guests</label>
                <div class="flex items-center gap-2">
                    <i class="w-7 h-7 text-housify-darkest" data-lucide="door-open"></i>
                    <input type="text" value="2" class="w-[30px] text-center bg-transparent border-none outline-none text-xl font-semibold mr-[10px]">
                    <i class="w-7 h-7 text-housify-darkest" data-lucide="users"></i>
                    <input type="text" value="5" class="w-[30px] text-center bg-transparent border-none outline-none text-xl font-semibold mr-[10px]">
                </div>
            </div>

            <!-- Search Button (stays consistent) -->
            <button class="bg-housify-darkest text-housify-light border-none py-3 px-6 rounded-full text-lg font-medium cursor-pointer ml-[10px] min-w-[150px] transition-all duration-300"
                    :class="{
                'py-3': !scrolled,
                'py-2': scrolled
              }">
                Search
            </button>
        </div>
    </div>
</div>
