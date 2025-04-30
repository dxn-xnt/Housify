<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title', 'AirBnBreeze'); ?> - Find Your Perfect Stay</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo e(asset('assets/images/air-logo.png')); ?>">
    
    <!-- Scripts and Styles -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    
    <!-- Additional Styles -->
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body class="font-montserrat">
    <!-- Header (includes sticky search bar functionality) -->
    <?php if(!\Request::is('bookings*')): ?>
        <?php if (isset($component)) { $__componentOriginale30b2855ee1e4ae30e50fcbbc76a33ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale30b2855ee1e4ae30e50fcbbc76a33ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale30b2855ee1e4ae30e50fcbbc76a33ff)): ?>
<?php $attributes = $__attributesOriginale30b2855ee1e4ae30e50fcbbc76a33ff; ?>
<?php unset($__attributesOriginale30b2855ee1e4ae30e50fcbbc76a33ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale30b2855ee1e4ae30e50fcbbc76a33ff)): ?>
<?php $component = $__componentOriginale30b2855ee1e4ae30e50fcbbc76a33ff; ?>
<?php unset($__componentOriginale30b2855ee1e4ae30e50fcbbc76a33ff); ?>
<?php endif; ?>
    <?php endif; ?>
    
    <!-- Page Content -->
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    
    <!-- Footer -->
    <?php if (isset($component)) { $__componentOriginal4766510e0268a7a5917e77b146281554 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4766510e0268a7a5917e77b146281554 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4766510e0268a7a5917e77b146281554)): ?>
<?php $attributes = $__attributesOriginal4766510e0268a7a5917e77b146281554; ?>
<?php unset($__attributesOriginal4766510e0268a7a5917e77b146281554); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4766510e0268a7a5917e77b146281554)): ?>
<?php $component = $__componentOriginal4766510e0268a7a5917e77b146281554; ?>
<?php unset($__componentOriginal4766510e0268a7a5917e77b146281554); ?>
<?php endif; ?>
    
    <!-- Additional Scripts -->
    <?php echo $__env->yieldPushContent('scripts'); ?>
    
    <!-- Lucide Icons - Only loaded once at the end of body -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\AirBnBreeze\resources\views/layouts/app.blade.php ENDPATH**/ ?>