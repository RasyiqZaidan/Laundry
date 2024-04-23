<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-light-primary">
                    <h3>Jenis Layanan</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Jenis Layanan</li>
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
                                                <h6 class="fw-semibold mb-0">Tanggal</h6>
                                            </td>
                                            <td>
                                                <h6 class="fw-semibold mb-0">Nama Konsumen</h6>
                                            </td>
                                            <td>
                                                <h6 class="fw-semibold mb-0">Jenis Layanan</h6>
                                            </td>
                                            <td>
                                                <h6 class="fw-semibold mb-0">Berat</h6>
                                            </td>
                                            <td>
                                                <h6 class="fw-semibold mb-0">Jenis Pembayaran</h6>
                                            </td>
                                            <td>
                                                <h6 class="fw-semibold mb-0">Total</h6>
                                            </td>
                                            <td>
                                                <h6 class="fw-semibold mb-0">Status</h6>
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
                                            <td><?php echo e(Carbon\Carbon::parse($item->tanggal)->format('d-M-Y')); ?></td>
                                            <td><?php echo e($item->konsumen->name); ?></td>
                                            <td><?php echo e($item->jenis_layanan->name); ?></td>
                                            <td><?php echo e($item->total_berat); ?> Kg</td>
                                            <td><?php echo e($item->jenis_pembayaran->name); ?></td>
                                            <td>Rp <?php echo e($item->total_harga); ?></td>
                                            <td>
                                                <?php if($item->status == 1): ?>
                                                    <span class="badge bg-warning">Dalam Proses</span>
                                                <?php elseif($item->status == 2): ?>
                                                    <span class="badge bg-danger">Belum Bayar</span>
                                                <?php else: ?>
                                                    <span class="badge bg-success">Selesai</span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <div class="btn-group" role="grup" aria-label="Basic Example">
                                                    
                                                    
                                                    <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#modalEdit<?php echo e($item->konsumen->id); ?>">
                                                        <i class="ti ti-edit"></i> Edit
                                                    </button>
                                                      
                                                      <!-- Modal Edit-->
                                                    <div class="modal fade" id="modalEdit<?php echo e($item->konsumen->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Tambah History Order</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form action="<?php echo e(route('transaksi-order.update', $item->konsumen->id)); ?>" method="POST">
                                                                <?php echo method_field('PUT'); ?>;
                                                                <?php echo csrf_field(); ?>
                                                                <div class="modal-body">
                                                                    <div class="form-group mb-3">
                                                                        <label for="">Status Order</label>
                                                                        <select class="form-select" id="status" name="status">
                                                                            <option>-- Pilih Jenis --</option>
                                                                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <option value="<?php echo e($item->status); ?>"><?php echo e($item->status); ?></option>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                                </div>
                                                            </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <form action="<?php echo e(route('transaksi-order.destroy', $item->konsumen->id)); ?>" method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit" class="btn btn-sm btn-danger"><i class="ti ti-trash"></i> Delete</button>
                                                    </form>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\ujikom-bersama\resources\views/history-order/index.blade.php ENDPATH**/ ?>