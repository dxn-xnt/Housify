@props(['type'])

<label class="relative block cursor-pointer">
    <input type="radio" name="prop_type" value="{{ is_array($type) ? $type['type_name'] : $type->type_name }}"
           class="absolute opacity-0 w-0 h-0 peer"
           data-value="{{ is_array($type) ? $type['type_name'] : $type->type_name }}"
        {{ old('prop_type') == (is_array($type) ? $type['type_name'] : $type->type_name) ? 'checked' : '' }}>
    <div class="flex items-center gap-2 py-2 px-6 rounded-sm whitespace-nowrap text-lg justify-start transition-colors duration-200 border border-housify-darkest text-housify-darkest peer-checked:bg-housify-darkest peer-checked:text-housify-light">
        <i class="filter-icon" data-lucide="{{ is_array($type) ? $type['icon_name'] : $type->icon_name }}" x-bind:class="isActive ? 'text-housify-light' : 'text-housify-darkest'"></i>
        <span class="text-center w-full">
            {{ is_array($type) ? $type['type_name'] : $type->type_name }}
        </span>
    </div>
</label>
