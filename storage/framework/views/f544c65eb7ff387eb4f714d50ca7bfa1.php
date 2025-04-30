

<?php $__env->startSection('title', 'Your Bookings'); ?>

<?php $__env->startSection('content'); ?>
<?php if (isset($component)) { $__componentOriginala750db7e6abaa7d19f8fd2ceb7c1fd0d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala750db7e6abaa7d19f8fd2ceb7c1fd0d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout.bookings-header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout.bookings-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala750db7e6abaa7d19f8fd2ceb7c1fd0d)): ?>
<?php $attributes = $__attributesOriginala750db7e6abaa7d19f8fd2ceb7c1fd0d; ?>
<?php unset($__attributesOriginala750db7e6abaa7d19f8fd2ceb7c1fd0d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala750db7e6abaa7d19f8fd2ceb7c1fd0d)): ?>
<?php $component = $__componentOriginala750db7e6abaa7d19f8fd2ceb7c1fd0d; ?>
<?php unset($__componentOriginala750db7e6abaa7d19f8fd2ceb7c1fd0d); ?>
<?php endif; ?>

<!-- success message container -->
<?php if(session('success')): ?>
    <div class="fixed top-20 left-1/2 transform -translate-x-1/2 bg-airbnb-light-500 text-airbnb-darkest px-6 py-3 rounded-lg z-50 animate-fade-in-out">
        <?php echo e(session('success')); ?>

        <button class="ml-4" onclick="this.parentElement.remove()">×</button>
    </div>
<?php endif; ?>

    <div class="bg-[#E3EED4] min-h-screen pt-[120px]">
        <div class="max-w-[1750px] mx-auto px-8 md:px-32">
            <!-- Bookings Title -->
            <h1 class="text-[32px] font-semibold text-airbnb-darkest mb-1">Bookings</h1>
            
            <!-- Booking Tabs -->
            <div class="flex gap-3 mb-8">
                <button class="bg-airbnb-dark text-airbnb-light py-1.5 px-5 rounded-xl text-sm font-medium">Upcoming</button>
                <button class="bg-airbnb-light text-airbnb-darkest py-1.5 px-5 rounded-xl border border-airbnb-darkest text-sm font-medium">Pending</button>
                <button class="bg-airbnb-light text-airbnb-darkest py-1.5 px-5 rounded-xl border border-airbnb-darkest text-sm font-medium">Recent</button>
                <button class="bg-airbnb-light text-airbnb-darkest py-1.5 px-5 rounded-xl border border-airbnb-darkest text-sm font-medium">Cancelled</button>
            </div>
            
            <!-- Booking Cards -->
            <div class="space-y-5 mb-2">
                <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-airbnb-light rounded-xl border border-airbnb-darkest overflow-hidden shadow-sm flex">
                        <!-- Property Image -->
                        <div class="w-[340px] h-[250px]">
                            <img src="<?php echo e(asset($booking['image'])); ?>" alt="<?php echo e($booking['property_name']); ?>" class="w-full h-full object-cover">
                        </div>
                        
                        <!-- Booking Details -->
                        <div class="flex flex-1 justify-between p-5">
                            <div class="flex flex-col">
                                <div class="text-xs text-gray-600 italic mb-none">Property Name</div>
                                <div class="text-lg font-semibold text-airbnb-darkest mb-1"><?php echo e($booking['property_name']); ?></div>
                                
                                <div class="text-xs text-gray-600 italic mb-none">Schedule</div>
                                <div class="text-lg font-semibold text-airbnb-darkest mb-1"><?php echo e($booking['schedule']['start_date']); ?> - <?php echo e($booking['schedule']['end_date']); ?></div>
                                
                                <div class="text-xs text-gray-600 italic mb-none">Costs</div>
                                <div class="text-lg font-semibold text-airbnb-darkest mb-1">₱ <?php echo e($booking['cost']); ?></div>
                                
                                <div class="text-xs text-gray-600 italic mb-none">Notes</div>
                                <div class="text-base font-medium text-airbnb-darkest"><?php echo e($booking['notes']); ?></div>
                                
                                <a href="<?php echo e(route('bookings.show', $booking['id'])); ?>" class="text-xs text-airbnb-darkest italic underline mt-2">View details</a>
                            </div>
                            
                            <!-- Action Buttons -->
                            <div class="flex flex-col gap-2 ml-4">
                                <button class="bg-[#E3EED4] text-airbnb-darkest border border-airbnb-darkest py-1.5 px-8 rounded-full text-sm hover:bg-[#d5e0c6]">Edit</button>
                                <form action="<?php echo e(route('bookings.cancel', $booking['id'])); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="bg-airbnb-dark text-airbnb-light py-1.5 px-4 rounded-full text-sm w-full hover:bg-opacity-90">Cancel Booking</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            
            <!-- Add More Bookings -->
            <div class="text-center py-5">
                <p class="text-gray-600 italic mb-3">Add more booking trips?</p>
                <a href="<?php echo e(route('home')); ?>" class="inline-block bg-airbnb-darkest text-airbnb-light py-2 px-10 rounded-full hover:bg-opacity-90">Browse</a>
            </div>
        </div>
    </div>

    <style>
        body {
            background-color: #E3EED4;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\AirBnBreeze\resources\views/pages/bookings.blade.php ENDPATH**/ ?>