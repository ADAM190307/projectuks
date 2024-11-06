<aside class="main-sidebar sidebar-purple elevation-4">
    <!-- Brand Logo -->
    <a href="/layout/collapsed-sidebar.html" class="brand-link">
        <img src="/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="d-block">Sistem Perpustakaan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link @yield('active-dashboard')">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-header">AKSES DATA</li>

                <li class="nav-item">
                    <a href="#" class="nav-link @yield('active-data-master')">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Data
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/kategori" class="nav-link @yield('active-kategori')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kategori</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/rak" class="nav-link @yield('active-rak')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rak</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/penerbit" class="nav-link @yield('active-penerbit')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Penerbit</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/buku" class="nav-link @yield('active-buku')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Buku</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="/transaksi" class="nav-link @yield('active-transaksi')">
                        <i class="fas fa-hands"></i>
                        <p>Transaksi</p>
                    </a>
                </li>


            </ul>
        </nav>
    </div>
</aside>
