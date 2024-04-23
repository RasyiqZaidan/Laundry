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
                    
                    <?php ($isEdit = isset($data)); ?>                             
                    <div class="d-flex justify-content-end mb-2">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#addJenisLayanan"> Tambah Jenis Layanan</button>
                    </div>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="addJenisLayanan" tabindex="-1" aria-labelledby="addJenisLayananLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addJenisLayananLabel">Tambah Jenis Layanan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo e(route('jenis-layanan.store')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" id="id" name="id" value="<?php echo e($data->id ?? ''); ?>" />
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Jenis Layanan</label>
                                            <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name', $data->name ?? '')); ?>" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="price" class="form-label">Harga</label>
                                            <input type="number" class="form-control" id="price" name="price" min="0" value="<?php echo e(old('price', $data->price ?? '')); ?>" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="fw-semibold mb-0 text-center" style="width: 10px;">No</th>
                                            <th class="fw-semibold mb-0" style="width: 350px;">Jenis Layanan</th>
                                            <th class="fw-semibold mb-0" style="width: 250px;">Harga</th>
                                            <th class="fw-semibold mb-0 text-center" style="width: 150px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($layanan->isEmpty()): ?>
                                        <tr>
                                            <td colspan="4" class="fw-semibold text-center">Data Kosong</td>
                                        </tr>
                                        <?php else: ?>
                                        <?php $__currentLoopData = $layanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($item->name); ?></td>
                                            <td>Rp. <?php echo e($item->price); ?></td>
                                            <td class="text-center">
                                                <div class="btn-group" role="grup" aria-label="Basic Example">
                                                    
                                                    <button type="button" class="btn btn-sm btn-info btn-edit" data-bs-toggle="modal" data-bs-target="#modalEdit<?php echo e($item->id); ?>"><i class="ti ti-edit"></i> Edit</button>
                                                    
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="modalEdit<?php echo e($item->id); ?>" tabindex="-1" aria-labelledby="addJenisLayananLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="addJenisLayananLabel">Tambah Jenis Layanan</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="<?php echo e(route('jenis-layanan.store')); ?>" method="POST">
                                                                        <?php echo csrf_field(); ?>
                                                                        <input type="hidden" id="id" name="id" value="<?php echo e($item->id ?? ''); ?>" />
                                                                        <div class="mb-3">
                                                                            <label for="name" class="form-label">Jenis Layanan</label>
                                                                            <input type="text" class="form-control" id="name" name="name" value="<?php echo e($item->name); ?>" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="price" class="form-label">Harga</label>
                                                                            <input type="number" class="form-control" id="price" name="price" min="0" value="<?php echo e($item->price); ?>" required>
                                                                        </div>
                                                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-sm btn-danger delete" data-id="<?php echo e($item->id); ?>" href="#"><i class="ti ti-trash"></i> Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>                                         
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('.delete').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const id = this.getAttribute('data-id');
                
                Swal.fire({
                    icon: 'warning',
                    title: 'Apakah Anda yakin?',
                    text: 'Data akan dihapus!',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal',
                    customClass: {
                        popup: 'custom-size-popup',
                        confirmButton: 'btn btn-sm',
                        cancelButton: 'btn btn-sm',
                    },
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: `/jenis-layanan/${id}`,
                            type: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function (response) {
                                Swal.fire({
                                    title: 'Berhasil!',
                                    text: 'Data berhasil dihapus.',
                                    icon: 'success',
                                }).then(() => {
                                    window.location.reload();
                                });
                            },
                            error: function (xhr, status, error) {
                                Swal.fire({
                                    title: 'Error!',
                                    text: 'Gagal menghapus data.',
                                    icon: 'error',
                                });
                            },
                        });
                    }
                });
            });
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\ujikom-bersama\resources\views/jenis-layanan/index.blade.php ENDPATH**/ ?>