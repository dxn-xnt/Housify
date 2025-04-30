

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    <div class="h-[85vh] w-full overflow-hidden relative mt-[39px]">
        <img src="<?php echo e(asset('assets/images/airbnbreeze-bg.jpg')); ?>" alt="AirBnBreeze" class="h-full w-full object-cover object-center block">
    </div>

    <!-- Main Content -->
    <div class="relative w-full mt-[-100px]">
        <!-- Search Section -->
        <section class="mb-5 relative z-10 w-full">
            <?php if (isset($component)) { $__componentOriginal61542037d001e2034791c9aff5866543 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal61542037d001e2034791c9aff5866543 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.search-bar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('search-bar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal61542037d001e2034791c9aff5866543)): ?>
<?php $attributes = $__attributesOriginal61542037d001e2034791c9aff5866543; ?>
<?php unset($__attributesOriginal61542037d001e2034791c9aff5866543); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal61542037d001e2034791c9aff5866543)): ?>
<?php $component = $__componentOriginal61542037d001e2034791c9aff5866543; ?>
<?php unset($__componentOriginal61542037d001e2034791c9aff5866543); ?>
<?php endif; ?>
        </section>

        <!-- Filters Section -->
        <section class="relative mb-10 z-5 w-full">
            <div class="flex justify-center custom-green-gradient py-26 pt-[6.5rem] pb-[1.3rem] shadow-md mt-[-90px] w-full">
                <div class="flex gap-8 justify-center max-w-[1750px] mx-auto w-full px-8 overflow-x-auto scrollbar-hide">
                    <?php if (isset($component)) { $__componentOriginal011a65c6f2edc828af851aefc994efc1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal011a65c6f2edc828af851aefc994efc1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filter-button','data' => ['icon' => 'home','text' => 'House']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filter-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'home','text' => 'House']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal011a65c6f2edc828af851aefc994efc1)): ?>
<?php $attributes = $__attributesOriginal011a65c6f2edc828af851aefc994efc1; ?>
<?php unset($__attributesOriginal011a65c6f2edc828af851aefc994efc1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal011a65c6f2edc828af851aefc994efc1)): ?>
<?php $component = $__componentOriginal011a65c6f2edc828af851aefc994efc1; ?>
<?php unset($__componentOriginal011a65c6f2edc828af851aefc994efc1); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal011a65c6f2edc828af851aefc994efc1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal011a65c6f2edc828af851aefc994efc1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filter-button','data' => ['icon' => 'building-2','text' => 'Apartment']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filter-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'building-2','text' => 'Apartment']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal011a65c6f2edc828af851aefc994efc1)): ?>
<?php $attributes = $__attributesOriginal011a65c6f2edc828af851aefc994efc1; ?>
<?php unset($__attributesOriginal011a65c6f2edc828af851aefc994efc1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal011a65c6f2edc828af851aefc994efc1)): ?>
<?php $component = $__componentOriginal011a65c6f2edc828af851aefc994efc1; ?>
<?php unset($__componentOriginal011a65c6f2edc828af851aefc994efc1); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal011a65c6f2edc828af851aefc994efc1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal011a65c6f2edc828af851aefc994efc1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filter-button','data' => ['icon' => 'home','text' => 'Tiny Home']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filter-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'home','text' => 'Tiny Home']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal011a65c6f2edc828af851aefc994efc1)): ?>
<?php $attributes = $__attributesOriginal011a65c6f2edc828af851aefc994efc1; ?>
<?php unset($__attributesOriginal011a65c6f2edc828af851aefc994efc1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal011a65c6f2edc828af851aefc994efc1)): ?>
<?php $component = $__componentOriginal011a65c6f2edc828af851aefc994efc1; ?>
<?php unset($__componentOriginal011a65c6f2edc828af851aefc994efc1); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal011a65c6f2edc828af851aefc994efc1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal011a65c6f2edc828af851aefc994efc1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filter-button','data' => ['icon' => 'chef-hat','text' => 'Bed & Breakfast']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filter-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'chef-hat','text' => 'Bed & Breakfast']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal011a65c6f2edc828af851aefc994efc1)): ?>
<?php $attributes = $__attributesOriginal011a65c6f2edc828af851aefc994efc1; ?>
<?php unset($__attributesOriginal011a65c6f2edc828af851aefc994efc1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal011a65c6f2edc828af851aefc994efc1)): ?>
<?php $component = $__componentOriginal011a65c6f2edc828af851aefc994efc1; ?>
<?php unset($__componentOriginal011a65c6f2edc828af851aefc994efc1); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal011a65c6f2edc828af851aefc994efc1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal011a65c6f2edc828af851aefc994efc1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filter-button','data' => ['icon' => 'tent','text' => 'Cabin']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filter-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'tent','text' => 'Cabin']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal011a65c6f2edc828af851aefc994efc1)): ?>
<?php $attributes = $__attributesOriginal011a65c6f2edc828af851aefc994efc1; ?>
<?php unset($__attributesOriginal011a65c6f2edc828af851aefc994efc1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal011a65c6f2edc828af851aefc994efc1)): ?>
<?php $component = $__componentOriginal011a65c6f2edc828af851aefc994efc1; ?>
<?php unset($__componentOriginal011a65c6f2edc828af851aefc994efc1); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal011a65c6f2edc828af851aefc994efc1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal011a65c6f2edc828af851aefc994efc1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filter-button','data' => ['icon' => 'tent-tree','text' => 'Tent']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filter-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'tent-tree','text' => 'Tent']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal011a65c6f2edc828af851aefc994efc1)): ?>
<?php $attributes = $__attributesOriginal011a65c6f2edc828af851aefc994efc1; ?>
<?php unset($__attributesOriginal011a65c6f2edc828af851aefc994efc1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal011a65c6f2edc828af851aefc994efc1)): ?>
<?php $component = $__componentOriginal011a65c6f2edc828af851aefc994efc1; ?>
<?php unset($__componentOriginal011a65c6f2edc828af851aefc994efc1); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal011a65c6f2edc828af851aefc994efc1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal011a65c6f2edc828af851aefc994efc1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filter-button','data' => ['icon' => 'caravan','text' => 'Camper Van']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filter-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'caravan','text' => 'Camper Van']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal011a65c6f2edc828af851aefc994efc1)): ?>
<?php $attributes = $__attributesOriginal011a65c6f2edc828af851aefc994efc1; ?>
<?php unset($__attributesOriginal011a65c6f2edc828af851aefc994efc1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal011a65c6f2edc828af851aefc994efc1)): ?>
<?php $component = $__componentOriginal011a65c6f2edc828af851aefc994efc1; ?>
<?php unset($__componentOriginal011a65c6f2edc828af851aefc994efc1); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal011a65c6f2edc828af851aefc994efc1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal011a65c6f2edc828af851aefc994efc1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filter-button','data' => ['icon' => 'sliders-horizontal']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filter-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'sliders-horizontal']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal011a65c6f2edc828af851aefc994efc1)): ?>
<?php $attributes = $__attributesOriginal011a65c6f2edc828af851aefc994efc1; ?>
<?php unset($__attributesOriginal011a65c6f2edc828af851aefc994efc1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal011a65c6f2edc828af851aefc994efc1)): ?>
<?php $component = $__componentOriginal011a65c6f2edc828af851aefc994efc1; ?>
<?php unset($__componentOriginal011a65c6f2edc828af851aefc994efc1); ?>
<?php endif; ?>
                </div>
            </div>
        </section>

        <!-- Listings Section -->
        <section class="w-full px-8 md:px-32">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-9 gap-y-12 mb-8 max-w-[1750px] mx-auto">
                <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginal58439408c0a13a2b2db6109a4cd58e23 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal58439408c0a13a2b2db6109a4cd58e23 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.property-card','data' => ['property' => $property]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('property-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['property' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($property)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal58439408c0a13a2b2db6109a4cd58e23)): ?>
<?php $attributes = $__attributesOriginal58439408c0a13a2b2db6109a4cd58e23; ?>
<?php unset($__attributesOriginal58439408c0a13a2b2db6109a4cd58e23); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal58439408c0a13a2b2db6109a4cd58e23)): ?>
<?php $component = $__componentOriginal58439408c0a13a2b2db6109a4cd58e23; ?>
<?php unset($__componentOriginal58439408c0a13a2b2db6109a4cd58e23); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </section>

        <!-- Explore More Section -->
        <div class="text-center py-1 pb-4 max-w-[1200px] mx-auto">
            <p class="mb-3 text-gray-600 italic">Continue explore related airbnbs?</p>
            <button class="bg-airbnb-darkest text-airbnb-light py-2.5 px-6 border-none rounded-3xl cursor-pointer">
                Show More
            </button>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }
    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    .custom-green-gradient {
        background-image: linear-gradient(to bottom, rgba(55, 85, 52, 0.1) 0%, #375534 40%);
    }
</style>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\AirBnBreeze\resources\views/pages/home.blade.php ENDPATH**/ ?>