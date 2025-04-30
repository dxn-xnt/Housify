<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['property']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['property']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="card">
    <?php if($property['is_favorite']): ?>
        <div class="absolute top-4 left-4 bg-airbnb-light py-1 px-3 rounded-xl text-xs font-semibold z-10">Guest Favorite</div>
    <?php endif; ?>
    
    <button class="absolute top-4 right-4 bg-transparent border-none text-white text-2xl cursor-pointer z-10 filter drop-shadow-md">
        <i data-lucide="heart"></i>
    </button>
    
    <a href="<?php echo e(route('property.show', $property['id'])); ?>" class="block">
        <img src="<?php echo e(asset($property['image'])); ?>" alt="<?php echo e($property['name']); ?>" class="w-full h-[290px] object-cover">
        
        <div class="p-4">
            <h3 class="text-base font-bold mb-1"><?php echo e($property['name']); ?></h3>
            <p class="text-airbnb-darkest text-sm mb-2"><?php echo e($property['location']); ?></p>
            <div class="flex justify-between items-center mt-2">
                <p class="text-sm">
                    <span class="font-normal">₱</span> 
                    <strong><?php echo e($property['price']); ?></strong> / night
                </p>
                <div class="flex items-center gap-1 bg-airbnb-darkest text-airbnb-light px-2 py-[0.15rem] rounded-xl text-xs font-semibold">
                    <i data-lucide="star" class="w-3 h-3 text-gold fill-gold"></i> 
                    <?php echo e($property['rating']); ?>

                </div>
            </div>
        </div>
    </a>
</div><?php /**PATH C:\xampp\htdocs\AirBnBreeze\resources\views/components/property-card.blade.php ENDPATH**/ ?>