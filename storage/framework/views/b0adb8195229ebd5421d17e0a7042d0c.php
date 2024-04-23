<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-light-primary">
                    <h3>Transaksi Order</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href='/'>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Transaksi Order</li>
                        </ol>
                    </nav>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="ti ti-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1"/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addKonsumen">
                                    Tambah Konsumen
                                </button>
                            </div>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="addKonsumen" tabindex="-1" aria-labelledby="addKonsumenLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="addKonsumenLabel">Tambah Konsumen</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php echo e(route('konsumen.store')); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" id="id" name="id" value="<?php echo e($data->id ?? ''); ?>" />
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Nama</label>
                                                    <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name', $data->name ?? '')); ?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="no_hp" class="form-label">No Telpon</label>
                                                    <input type="number" class="form-control" id="no_hp" name="no_hp" min="0" value="<?php echo e(old('no_hp', $data->no_hp ?? '')); ?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="alamat" class="form-label">Alamat</label>
                                                    <textarea class="form-control" name="alamat" id="alamat"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Tambah</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                                <h6 class="fw-semibold mb-0">Kode Konsumen</h6>
                                            </td>
                                            <td>
                                                <h6 class="fw-semibold mb-0">Nama Konsumen</h6>
                                            </td>
                                            <td>
                                                <h6 class="fw-semibold mb-0">No HP</h6>
                                            </td>
                                            <td>
                                                <h6 class="fw-semibold mb-0">Action</h6>
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $konsumen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($item->kode); ?></td>
                                            <td><?php echo e($item->name); ?></td>
                                            <td><?php echo e($item->no_hp); ?></td>
                                            <td>
                                                <a href="/transaksi-order/casier/<?php echo e($item->id); ?>" class="btn btn-secondary"><i class="ti ti-plus"></i> Order</a>
                                                
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\ujikom-bersama\resources\views/transaksi-order/index.blade.php ENDPATH**/ ?>