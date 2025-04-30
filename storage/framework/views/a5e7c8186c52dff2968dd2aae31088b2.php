<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['icon', 'text' => null]));

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

foreach (array_filter((['icon', 'text' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php if($text): ?>
    <button <?php echo e($attributes->merge(['class' => 'flex items-center gap-2 bg-transparent border border-airbnb-light text-airbnb-light py-2 px-6 rounded-full whitespace-nowrap text-lg cursor-pointer justify-start'])); ?>>
        <i class="filter-icon" data-lucide="<?php echo e($icon); ?>"></i>
        <span class="text-center w-full"><?php echo e($text); ?></span>
    </button>
<?php else: ?>
    <button <?php echo e($attributes->merge(['class' => 'p-2 w-[38px] h-[38px] flex items-center justify-center bg-transparent border border-airbnb-light text-airbnb-light rounded-full cursor-pointer'])); ?>>
        <i data-lucide="<?php echo e($icon); ?>"></i>
    </button>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\AirBnBreeze\resources\views/components/filter-button.blade.php ENDPATH**/ ?>