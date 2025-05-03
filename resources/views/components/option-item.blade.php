@props(['type'])

<button {{ $attributes->merge(['class' => 'flex items-center gap-2 bg-transparent border border-housify-darkest text-housify-light py-2 px-6 rounded-sm whitespace-nowrap text-lg cursor-pointer justify-start']) }}>
    <i class="filter-icon" data-lucide="{{ $type['icon'] }}"></i>
    <span class="text-center w-full text-housify-darkest">{{ $type['name'] }}</span>
</button>

