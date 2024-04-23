
<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical  menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/dashboard" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('assets/images/logos/dark-logo.svg') }}" alt="Image" width="52" height="52">
            </span>
            <h5 class="app-brand-text ms-2 mt-3">LAUNDRY<br>SMKN 1 CIAMIS</h5>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>
    <nav> <!-- Tambahkan tag nav di sini -->
        <ul class="menu-inner py-1">
            <!-- Dashboard -->
            @canany(['dashboard'])
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Home</span>
            </li>
            <li class="menu-item">
                <a href="/dashboard" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Analytics">Dashboard</div>
                </a>
            </li>
            @endcanany

            <!-- Transaksi -->
            @canany(['transaction-order'])
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Transaksi </span>
            </li>
            <li class="menu-item">
                <a href="/transaksi-order" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-clinic"></i>
                    <div data-i18n="Basic">Order</div>
                </a>
            </li>
            @endcanany

            <!-- History -->
            @canany(['history-order'])
            <li class="menu-header small text-uppercase">
                <span class="hide-menu">History</span>
            </li>
            <li class="menu-item">
                <a href="/history-order" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-clinic"></i>
                    <div data-i18n="Basic" class="hide-menu">Order</div>
                </a>
            </li>
            @endcanany

            <!-- Master Data -->
            @canany(['masterdata-konsumen', 'masterdata-petugas', 'masterdata-jenis_layanan', 'masterdata-jenis_pembayaran', 'masterdata-pemimpin'])
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Master Data </span>
            </li>
            @endcanany

            @canany(['masterdata-konsumen'])
            <li class="menu-item">
                <a href="/konsumen" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-clinic"></i>
                    <div data-i18n="Basic">Konsumen</div>
                </a>
            </li>
            @endcanany

            @canany(['masterdata-petugas'])
            <li class="menu-item">
                <a href="/petugas" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-clinic"></i>
                    <div data-i18n="Basic">Petugas</div>
                </a>
            </li>
            @endcanany

            @canany(['masterdata-pemimpin'])
            <li class="menu-item">
                <a href="/pemimpin" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-clinic"></i>
                    <div data-i18n="Basic">Pimpinan</div>
                </a>
            </li>
            @endcanany

            @canany(['masterdata-jenis_layanan'])
            <li class="menu-item">
                <a href="/jenis-layanan" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-group"></i>
                    <div data-i18n="Basic">Jenis Layanan</div>
                </a>
            </li>
            @endcanany

            @canany(['masterdata-jenis_pembayaran'])
            <li class="menu-item">
                <a href="/jenis-pembayaran" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-vial"></i>
                    <div data-i18n="Basic">Jenis Pembayaran</div>
                </a>
            </li>
            @endcanany
        </ul>
    </nav> <!-- Tambahkan tag nav di sini -->
</aside>
<!-- / Menu -->
