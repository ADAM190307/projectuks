<nav class="main-header navbar navbar-expand navbar-black navbar-dark fixed-top">
    <ul class="navbar-nav">
        <!-- Dashboard Button -->
        <li class="nav-item">
            <a href="/dashboard" class="btn btn-primary nav-link @yield('active-dashboard')">
                <i class="fas fa-tachometer-alt"></i> Dashboard
            </a>
        </li>

        <!-- Data Dropdown Button (Merged with Transaksi) -->
        <li class="nav-item dropdown">
            <button class="btn btn-secondary dropdown-toggle nav-link" id="dataDropdown" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-copy"></i> Menu
            </button>
            <div class="dropdown-menu" aria-labelledby="dataDropdown">
                <!-- Data Section -->
                <h6 class="dropdown-header">Data-Data</h6>
                <a href="/kategori" class="dropdown-item @yield('active-kategori')">
                    <i class="fas fa-tags nav-icon"></i> isi
                </a>
                <a href="/rak" class="dropdown-item @yield('active-rak')">
                    <i class="fas fa-archive nav-icon"></i> isi
                </a>
                <a href="/penerbit" class="dropdown-item @yield('active-penerbit')">
                    <i class="fas fa-building nav-icon"></i> isi
                </a>
                <a href="/buku" class="dropdown-item @yield('active-buku')">
                    <i class="fas fa-book nav-icon"></i> isi
                </a>

                <!-- Divider -->
                <div class="dropdown-divider"></div>

                <!-- Transaksi Section -->
                <a href="/transaksi" class="dropdown-item @yield('active-transaksi')">
                    <i class="fas fa-exchange-alt nav-icon"></i> isi
                </a>
            </div>
        </li>
    </ul>

    <!-- Teks di Tengah Navbar -->
    <div class="navbar-text">
        <h4 class="text-white">UKS SYSTEM</h4>
    </div>

    <!-- Right navbar links (Profile and Logout) -->
    <ul class="navbar-nav ml-auto">
        <!-- User Profile Dropdown Button -->
        <li class="nav-item dropdown">
            <button class="btn btn-info dropdown-toggle nav-link" id="profileDropdown" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">


            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profileDropdown">

                <a href="/user" class="dropdown-item @yield('active-user')">
                    <i class="fas fa-user mr-2"></i> kosong
                </a>



                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>

<!-- CSS Styling -->
<style>
    .user-image {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
    }

    .info {
        margin-left: 10px;
    }

    .btn {
        padding: 8px 15px;
        margin-right: 5px;
    }

    .navbar-text {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
    }

    .navbar-text h4 {
        margin: 0;
        font-weight: bold;
    }

    .dropdown-menu {
        min-width: 200px;
    }

    .dropdown-item {
        padding: 10px;
    }

    .dropdown-item i {
        margin-right: 5px;
    }

    .dropdown-header {
        font-size: 14px;
        font-weight: bold;
        color: #6c757d;
    }
</style>
