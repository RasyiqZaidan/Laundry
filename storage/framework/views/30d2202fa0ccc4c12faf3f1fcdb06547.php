<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laundry</title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    
    <!-- Fonts -->
    

    <script src="<?php echo e(asset('assets/vendor/js/helpers.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/config.js')); ?>"></script>
    
    
    
    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('assets/images/logos/favicon.png')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/styles.min.css')); ?>" />
</head>
<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        
        <?php echo $__env->make('components.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <div class="body-wrapper">
            
            <?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
    
    <!-- Core JS -->

    
    
    
    <script src="<?php echo e(asset('/assets/libs/jquery/dist/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/sidebarmenu.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/app.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/libs/apexcharts/dist/apexcharts.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/libs/simplebar/dist/simplebar.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/dashboard.js')); ?>"></script>
    
    
</body>
</html><?php /**PATH C:\laravel\ujikom-bersama\resources\views/layouts/app.blade.php ENDPATH**/ ?>