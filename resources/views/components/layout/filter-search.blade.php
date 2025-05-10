<section x-data="{ scrolled: false }"
         @scroll.window="scrolled = window.scrollY > 50"
         class="sticky top-0 z-40 w-full transition-all duration-75">

    <div class="flex justify-center bg-housify-lightest py-4 pb-4 mt-[-90px] w-full transition-all duration-75"
         :class="{
            'pt-[5.5rem] shadow-md': scrolled,
            'pt-40' : !scrolled
          }">

        <div class="flex gap-8 justify-center max-w-[1750px] mx-auto w-full px-8 overflow-x-auto scrollbar-hide text-housify-darkest">
            <x-filter-button icon="home" text="House"/>
            <x-filter-button icon="building-2" text="Apartment" />
            <x-filter-button icon="home" text="Tiny Home" />
            <x-filter-button icon="chef-hat" text="Bed & Breakfast" />
            <x-filter-button icon="tent" text="Cabin" />
            <x-filter-button icon="tent-tree" text="Tent" />
            <x-filter-button icon="caravan" text="Camper Van" />
            <x-filter-button icon="sliders-horizontal" />
        </div>
    </div>
</section>
