@props(['type'])

<label class="relative block cursor-pointer">
    <input type="radio" name="prop_type" value="{{ $type->type_id }}"
           class="absolute opacity-0 w-0 h-0 peer"
        {{ old('prop_type') == $type->type_id ? 'checked' : '' }}>
    <div class="flex items-center gap-2 py-2 px-6 rounded-sm whitespace-nowrap text-lg justify-start transition-colors duration-200 border border-housify-darkest text-housify-darkest peer-checked:bg-housify-darkest peer-checked:text-housify-light">
        <i class="filter-icon" data-lucide="{{ $type->icon_name }}" x-bind:class="isActive ? 'text-housify-light' : 'text-housify-darkest'"></i>
        <span class="text-center w-full">
            {{ $type->type_name }}
        </span>
    </div>
</label>
