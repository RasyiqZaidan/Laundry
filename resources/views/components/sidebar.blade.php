
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
                @canany(['dashboard'])
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
                @endcanany

                @canany(['transaction-order'])
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
                @endcanany

                @canany(['history-order'])
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
                @endcanany

                @canany(['masterdata-konsumen', 'masterdata-petugas', 'masterdata-jenis_layanan', 'masterdata-jenis_pembayaran', 'masterdata-pemimpin'])
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Master data</span>
                    </li>
                @endcanany

                @canany(['masterdata-konsumen'])
                    <li class="sidebar-item">
                        <a href="/konsumen" class="sidebar-link" aria-expanded="false">
                            <span>
                            <i class="ti ti-friends"></i>
                            </span>
                            <span class="hide-menu">Konsumen</span>
                        </a>
                    </li>
                @endcanany

                @canany(['masterdata-petugas'])
                    <li class="sidebar-item">
                        <a href="/petugas" class="sidebar-link" aria-expanded="false">
                            <span>
                            <i class="ti ti-users"></i>
                            </span>
                            <span class="hide-menu">Petugas</span>
                        </a>
                    </li>
                @endcanany
                
                @canany(['masterdata-pemimpin'])
                    <li class="sidebar-item">
                        <a href="/pemimpin" class="sidebar-link" aria-expanded="false">
                            <span>
                            <i class="ti ti-users"></i>
                            </span>
                            <span class="hide-menu">Pemimpin</span>
                        </a>
                    </li>
                @endcanany

                @canany(['masterdata-jenis_layanan'])
                    <li class="sidebar-item">
                        <a href="/jenis-layanan" class="sidebar-link" aria-expanded="false">
                            <span>
                            <i class="ti ti-hotel-service"></i>
                            </span>
                            <span class="hide-menu">Jenis Layanan</span>
                        </a>
                    </li>
                @endcanany

                @canany(['masterdata-jenis_pembayaran'])
                    <li class="sidebar-item">
                        <a href="/jenis-pembayaran" class="sidebar-link" aria-expanded="false">
                            <span>
                            <i class="ti ti-wallet"></i>
                            </span>
                            <span class="hide-menu">Jenis Pembayaran</span>
                        </a>
                    </li>
                @endcanany
            </ul>
        </nav>
    </div>
    </aside>