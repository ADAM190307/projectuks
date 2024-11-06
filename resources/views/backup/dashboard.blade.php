<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- CSS dari Creative Tim Template -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        @include('layouts.sidebar')

        <div class="main-panel">
            <!-- Navbar -->
            @include('layouts.navbar')

            <!-- Konten Utama -->
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

            <!-- Footer -->
            @include('layouts.footer')
        </div>
    </div>

    <!-- JavaScript dari Creative Tim Template -->
    <script src="{{ asset('dashboard/assets/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/material-dashboard.min.js') }}"></script>
</body>
</html>
