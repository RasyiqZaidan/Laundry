<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-light-primary">
                        <h3>Data Pemimpin</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Pemimpin</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <td>
                                                    <h6 class="fw-semibold mb-0">No</h6>
                                                </td>
                                                <td>
                                                    <h6 class="fw-semibold mb-0">Nama Pemimpin</h6>
                                                </td>
                                                <td>
                                                    <h6 class="fw-semibold mb-0">Email</h6>
                                                </td>
                                                <td>
                                                    <h6 class="fw-semibold mb-0">Action</h6>
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($loop->iteration); ?></td>
                                                <td><?php echo e($item->name); ?></td>
                                                <td><?php echo e($item->email); ?></td>
                                                <td>
                                                    <div class="btn-group" role="grup" aria-label="Basic Example">
                                                        <button class="btn btn-sm btn-info"><i class="ti ti-edit"></i> Edit</button>
                                                        <button class="btn btn-sm btn-danger"><i class="ti ti-trash"></i> Delete</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\ujikom-bersama\resources\views/pemimpin/index.blade.php ENDPATH**/ ?>