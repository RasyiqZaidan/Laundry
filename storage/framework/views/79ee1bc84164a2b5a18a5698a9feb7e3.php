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
                                <li class="breadcrumb-item"><a href="/transaksi-order">Transaksi Order</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Konsumen : <span class="fw-semibold"><?php echo e($konsumen->name); ?></span></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('transaksi-order.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="row gx-5">
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label for="">Jenis Laundry / Layanan</label>
                                        <select class="form-select" id="jns_layanan" name="id_jns_layanan">
                                            <option>-- Pilih Jenis --</option>
                                            <?php $__currentLoopData = $jns_layanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jns_lyn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($jns_lyn->id); ?>"><?php echo e($jns_lyn->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group my-3">
                                        <label for="">Berat (KG)</label>
                                        <input type="number" class="form-control" id="total_berat" name="total_berat" placeholder="Berat Laundry"/>
                                    </div>
                                    <div class="form-group my-3">
                                        <label for="">Jenis Pembayaran</label>
                                        <select class="form-select" name="id_jns_pembayaran">
                                            <option>-- Pilih Jenis --</option>
                                            <?php $__currentLoopData = $jns_pembayaran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jns_pmn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($jns_pmn->id); ?>"><?php echo e($jns_pmn->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <label for="">Pilih Waktu Pembayaran</label>
                                    <div class="d-flex justify-content-center">
                                        <div class="btn-group my-3" role="group" aria-label="Basic radio toggle button group">
                                            <input type="radio" class="btn-check" name="status" value="1" id="btnradio1" autocomplete="off"/>
                                            <label class="btn btn-outline-primary px-5" for="btnradio1">Bayar Sekarang</label>

                                            <input type="radio" class="btn-check" name="status" value="2" id="btnradio2" autocomplete="off" checked/>
                                            <label class="btn btn-outline-primary px-5" for="btnradio2">Bayar Nanti</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header bg-light-primary">
                                            <div class="text-center">
                                                <h4 class="fw-semibold">Detail Transaksi</h4>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p>Detail Konsumen :</p>
                                            <div class="d-flex justify-content-between">
                                                <input type="hidden" name="id_konsumen" value="<?php echo e($konsumen->id); ?>">
                                                <h6 class="fw-semibold"><?php echo e($konsumen->name); ?></h6>
                                                <h6 class="fw-semibold"><?php echo e($konsumen->no_hp); ?></h6>
                                            </div>
                                            <hr/>
                                            <div class="d-flex justify-content-between">
                                                <p><?php echo e(Carbon\Carbon::now()->format('d-M-Y')); ?></p>
                                                <p>Kode Transaksi: <span class="fw-semibold"><?php echo e($konsumen->kode); ?></span></p>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-primary">
                                            <div class="d-flex justify-content-between">
                                                <input type="hidden" name="total_harga" id="total_harga_input">
                                                <h5 class="text-white">Total : <span class="fw-semibold" id="total_harga">Rp. 0</span></h5>
                                                <button type="submit" class="btn btn-secondary"><i class="ti ti-cash fs-5"></i>Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $jns_layanan = document.getElementById('jns_layanan');
        $total_berat = document.getElementById('total_berat');

        // ambil value dari jenis layanan dan total berat setiap ada aksi pada total_berat kemudian kirim data ke route transaksi-order.detailOrder lalu simpan value ke id total_harga dengan innerHTML
        $total_berat.addEventListener('input', function() {
            fetch(`/transaksi-order/detailOrder/${$jns_layanan.value}/${$total_berat.value}`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('total_harga').innerHTML = `Rp. ${data}`;
                    document.getElementById('total_harga_input').value = data;
                });
        });
        
        
        
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\ujikom-bersama\resources\views/transaksi-order/casier.blade.php ENDPATH**/ ?>