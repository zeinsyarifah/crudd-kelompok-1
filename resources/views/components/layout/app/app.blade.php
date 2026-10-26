<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manajemen Buku Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f1f4f8;
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            min-height: 100vh;
        }
        .navbar-custom {
            background-color: #5c6875;
        }
        .navbar-brand {
            font-size: 1.15rem;
            color: #ffffff !important;
        }
        .nav-link {
            color: #c9d2db !important;
            font-size: 0.95rem;
            padding: 0.4rem 0.8rem !important;
        }
        .nav-link:hover {
            color: #ffffff !important;
        }
        .nav-link.active {
            color: #ffffff !important;
            font-weight: 600;
        }
        .btn-warning {
            background-color: #e5a50a;
            border-color: #e5a50a;
            color: #ffffff !important;
        }
        .btn-warning:hover {
            background-color: #d19405;
            border-color: #d19405;
            color: #ffffff !important;
        }
        .btn-danger {
            background-color: #c83243;
            border-color: #c83243;
            color: #ffffff !important;
        }
        .btn-danger:hover {
            background-color: #b02a37;
            border-color: #b02a37;
            color: #ffffff !important;
        }
        .btn-success {
            background-color: #198754;
            border-color: #198754;
            color: #ffffff !important;
        }
        .btn-success:hover {
            background-color: #157347;
            border-color: #157347;
            color: #ffffff !important;
        }
        .table thead th {
            background-color: #f8fafc;
            color: #334155;
            font-weight: 600;
            border-bottom: 2px solid #e2e8f0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom mb-4 shadow-sm">
        <div class="container-fluid px-4">
            <a class="navbar-brand fw-semibold" href="{{ route('bukus.index') }}">Manajemen Buku Perpustakaan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-2">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('bukus.*') ? 'active' : '' }}" href="{{ route('bukus.index') }}">Management Buku</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid px-4 pb-5">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
