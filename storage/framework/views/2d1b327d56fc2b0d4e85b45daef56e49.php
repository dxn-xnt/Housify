

<?php $__env->startSection('title', $property['name']); ?>

<?php $__env->startSection('content'); ?>
    <div class="max-w-[1750px] mx-auto px-8 md:px-32 mt-[120px]">
        <!-- Property Title -->
        <h1 class="text-[28px] font-semibold text-airbnb-darkest mb-5"><?php echo e($property['name']); ?></h1>
        
        <!-- Image Gallery -->
        <div class="flex flex-col lg:flex-row mb-5 gap-4">
            <div class="flex-[1.5]">
                <img src="<?php echo e(asset($property['images']['main'])); ?>" 
                     alt="Main view" 
                     class="w-full h-[400px] object-cover rounded-2xl border border-airbnb-darkest shadow-md">
            </div>
            <div class="flex-1 flex flex-col gap-4">
                <div class="flex gap-4 h-1/2">
                    <?php $__currentLoopData = array_slice($property['images']['gallery'], 0, 2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <img src="<?php echo e(asset($image)); ?>" 
                             alt="View" 
                             class="w-full h-[190px] object-cover rounded-2xl border border-airbnb-darkest shadow-md">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="flex gap-4 h-1/2">
                    <img src="<?php echo e(asset($property['images']['gallery'][2])); ?>" 
                         alt="View" 
                         class="w-full h-[190px] object-cover rounded-2xl border border-airbnb-darkest shadow-md">
                    <div class="relative w-full">
                        <img src="<?php echo e(asset($property['images']['gallery'][3])); ?>" 
                             alt="View" 
                             class="w-full h-[190px] object-cover rounded-2xl border border-airbnb-darkest shadow-md">
                        <span class="absolute bottom-[10px] right-[10px] bg-airbnb-light text-airbnb-darkest py-1 px-2.5 rounded-2xl text-xs font-semibold cursor-pointer">
                            Show All Photos
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Property Info Row -->
        <div class="flex flex-col lg:flex-row justify-between items-start mb-5">
            <div class="flex flex-col gap-1.5">
                <div class="text-xl font-semibold text-airbnb-darkest"><?php echo e($property['location']); ?></div>
                <div class="text-sm text-airbnb-darkest mb-1.5"><?php echo e($property['guests']); ?> Guests · <?php echo e($property['rooms']); ?> Rooms · <?php echo e($property['bathrooms']); ?> Bathroom</div>
                <div class="flex items-center">
                    <div class="flex items-center">
                        <i class="w-4 h-4 text-gold fill-gold" data-lucide="star"></i>
                    </div>
                    <span class="font-semibold text-sm ml-1.5 mr-1.5 text-airbnb-darkest"><?php echo e($property['rating']); ?> · </span>
                    <span class="text-sm text-airbnb-darkest underline italic"><?php echo e($property['reviews']); ?> Reviews</span>
                </div>
            </div>
            
            <div class="mt-4 lg:mt-0">
                <form action="<?php echo e(route('bookings.book', $property['id'])); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="bg-airbnb-darkest text-airbnb-light border-none py-3 px-12 text-base font-light rounded-3xl cursor-pointer hover:bg-opacity-90">
                        Book Now
                    </button>
                </form>
            </div>
        </div>
        
        <!-- Property Description -->
        <div class="text-lg leading-relaxed text-airbnb-darkest mb-8">
            <p><?php echo e($property['description']); ?></p>
        </div>
        
        <!-- Host Information -->
        <div class="flex items-center gap-4 mb-8">
            <img src="<?php echo e(asset($property['host']['image'])); ?>" 
                 alt="<?php echo e($property['host']['name']); ?>" 
                 class="w-20 h-20 rounded-full border border-airbnb-darkest object-cover">
            <div>
                <h3 class="text-base font-semibold m-0 mb-0.5 text-airbnb-darkest"><?php echo e($property['host']['name']); ?></h3>
                <p class="text-airbnb-dark text-sm m-0 italic"><?php echo e($property['host']['role']); ?></p>
            </div>
        </div>
    </div>
    
    <!-- Amenities Section -->
    <div class="relative w-screen left-[50%] right-[50%] -ml-[50vw] -mr-[50vw] bg-airbnb-dark mb-[18px] py-8">
        <div class="w-full text-airbnb-light">
            <div class="max-w-[1750px] mx-auto px-8 md:px-32">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-5">
                    <h2 class="text-[22px] font-semibold m-0">What this place offers</h2>
                    <button class="bg-transparent border border-airbnb-light text-airbnb-light py-2 px-4 rounded-3xl text-sm cursor-pointer mt-3 md:mt-0 w-full md:w-auto">
                        Show All Amenities
                    </button>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                    <?php $__currentLoopData = $property['amenities']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $amenity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if (isset($component)) { $__componentOriginal71c8a529ed54d52ef5ab12bbcf660647 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal71c8a529ed54d52ef5ab12bbcf660647 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.amenity-item','data' => ['icon' => $amenity['icon'],'name' => $amenity['name']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('amenity-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($amenity['icon']),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($amenity['name'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal71c8a529ed54d52ef5ab12bbcf660647)): ?>
<?php $attributes = $__attributesOriginal71c8a529ed54d52ef5ab12bbcf660647; ?>
<?php unset($__attributesOriginal71c8a529ed54d52ef5ab12bbcf660647); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c8a529ed54d52ef5ab12bbcf660647)): ?>
<?php $component = $__componentOriginal71c8a529ed54d52ef5ab12bbcf660647; ?>
<?php unset($__componentOriginal71c8a529ed54d52ef5ab12bbcf660647); ?>
<?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Things to Know -->
    <div class="max-w-[1750px] mx-auto px-8 md:px-32 py-6 mb-12 bg-airbnb-light rounded-2xl">
        <h2 class="text-[22px] font-semibold mb-6 text-airbnb-darkest">Things to know</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-lg font-semibold mb-4 text-airbnb-darkest">House rules</h3>
                <ul class="list-none p-0 m-0">
                    <?php $__currentLoopData = $property['rules']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="text-sm mb-3 text-airbnb-darkest relative pl-5 before:content-['•'] before:absolute before:left-0 before:text-airbnb-dark before:font-bold">
                            <?php echo e($rule); ?>

                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4 text-airbnb-darkest">Safety & property</h3>
                <ul class="list-none p-0 m-0">
                    <?php $__currentLoopData = $property['safety']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="text-sm mb-3 text-airbnb-darkest relative pl-5 before:content-['•'] before:absolute before:left-0 before:text-airbnb-dark before:font-bold">
                            <?php echo e($item); ?>

                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4 text-airbnb-darkest">Cancellation policy</h3>
                <ul class="list-none p-0 m-0">
                    <?php $__currentLoopData = $property['cancellation']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="text-sm mb-3 text-airbnb-darkest relative pl-5 before:content-['•'] before:absolute before:left-0 before:text-airbnb-dark before:font-bold">
                            <?php echo e($item); ?>

                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\AirBnBreeze\resources\views/pages/property-details.blade.php ENDPATH**/ ?>