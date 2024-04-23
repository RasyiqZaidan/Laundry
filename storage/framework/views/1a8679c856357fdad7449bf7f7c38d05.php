<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laundry</title>

    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('assets/images/logos/favicon.png')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/styles.min.css')); ?>" />
</head>
<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative hero-section overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                <img src="../assets/images/logos/dark-logo.svg" width="180" alt=""/>
                                </a>
                                <p class="text-center">Your Social Campaigns</p>

                                <?php if(session()->has('status') && session()->has('message')): ?>
                                    <div class="alert alert-<?php echo e(session('status')); ?>" role="alert">
                                        <?php echo e(session('message')); ?>

                                    </div>
                                <?php endif; ?>

                                <form action="<?php echo e(route('login')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="mb-3">
                                        <label htmlFor="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" valaria-describedby="emailHelp"/>
                                    </div>
                                    <div class="mb-4">
                                        <label htmlFor="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1"/>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo e(asset('/assets/libs/jquery/dist/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/sidebarmenu.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/app.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/libs/apexcharts/dist/apexcharts.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/libs/simplebar/dist/simplebar.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/dashboard.js')); ?>"></script>
</body>
</html><?php /**PATH C:\laravel\ujikom-bersama\resources\views/auth/login.blade.php ENDPATH**/ ?>