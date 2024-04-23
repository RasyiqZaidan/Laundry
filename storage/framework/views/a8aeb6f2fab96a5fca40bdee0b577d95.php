
<aside class="left-sidebar">
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="./index.html" class="text-nowrap logo-img">
            <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
        </a>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
        </div>
        </div>
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['dashboard'])): ?>
                    <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                    </li>
                    <li class="sidebar-item">
                        <a href="/dashboard" class="sidebar-link" aria-expanded="false">
                            <span>
                            <i class="ti ti-layout-dashboard"></i>
                            </span>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['transaction-order'])): ?>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Transaksi</span>
                    </li>

                    <li class="sidebar-item">
                        <a href="/transaksi-order" class="sidebar-link" aria-expanded="false">
                            <span>
                            <i class="ti ti-wash-machine"></i>
                            </span>
                            <span class="hide-menu">Order</span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['history-order'])): ?>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">History</span>
                    </li>

                    <li class="sidebar-item">
                        <a href="/history-order" class="sidebar-link" aria-expanded="false">
                            <span>
                            <i class="ti ti-history"></i>
                            </span>
                            <span class="hide-menu">Order</span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['masterdata-konsumen', 'masterdata-petugas', 'masterdata-jenis_layanan', 'masterdata-jenis_pembayaran', 'masterdata-pemimpin'])): ?>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Master data</span>
                    </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['masterdata-konsumen'])): ?>
                    <li class="sidebar-item">
                        <a href="/konsumen" class="sidebar-link" aria-expanded="false">
                            <span>
                            <i class="ti ti-friends"></i>
                            </span>
                            <span class="hide-menu">Konsumen</span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['masterdata-petugas'])): ?>
                    <li class="sidebar-item">
                        <a href="/petugas" class="sidebar-link" aria-expanded="false">
                            <span>
                            <i class="ti ti-users"></i>
                            </span>
                            <span class="hide-menu">Petugas</span>
                        </a>
                    </li>
                <?php endif; ?>
                
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['masterdata-pemimpin'])): ?>
                    <li class="sidebar-item">
                        <a href="/pemimpin" class="sidebar-link" aria-expanded="false">
                            <span>
                            <i class="ti ti-users"></i>
                            </span>
                            <span class="hide-menu">Pemimpin</span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['masterdata-jenis_layanan'])): ?>
                    <li class="sidebar-item">
                        <a href="/jenis-layanan" class="sidebar-link" aria-expanded="false">
                            <span>
                            <i class="ti ti-hotel-service"></i>
                            </span>
                            <span class="hide-menu">Jenis Layanan</span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['masterdata-jenis_pembayaran'])): ?>
                    <li class="sidebar-item">
                        <a href="/jenis-pembayaran" class="sidebar-link" aria-expanded="false">
                            <span>
                            <i class="ti ti-wallet"></i>
                            </span>
                            <span class="hide-menu">Jenis Pembayaran</span>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
    </aside><?php /**PATH C:\laravel\ujikom-bersama\resources\views/components/sidebar.blade.php ENDPATH**/ ?>