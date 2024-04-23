<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-light-primary">
                    <h3>Data Petugas</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Petugas</li>
                        </ol>
                    </nav>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            
                            <div class="d-flex justify-content-end mb-3">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Tambah Petugas
                                </button>
                            </div>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Petugas</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="<?php echo e(route('petugas.store')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="">Nama Petugas</label>
                                                    <input type="text" class="form-control" placeholder="Nama Petugas" name="name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">email</label>
                                                    <input type="email" class="form-control" placeholder="Email Petugas" name="email">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">password</label>
                                                    <input type="password" class="form-control" placeholder="Password Petugas" name="password">
                                                </div>      
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <td>
                                                <h6 class="fw-semibold mb-0">No</h6>
                                            </td>
                                            <td>
                                                <h6 class="fw-semibold mb-0">Nama Pegawai</h6>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\ujikom-bersama\resources\views/petugas/index.blade.php ENDPATH**/ ?>