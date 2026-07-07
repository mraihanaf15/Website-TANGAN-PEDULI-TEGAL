<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Admin Panel - Tangan Peduli Tegal' }}</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f3f4f6; }
        .admin-navbar { background-color: #1a4331; }
        .sidebar { min-height: calc(100vh - 60px); background: #ffffff; border-right: 1px solid #e5e7eb; }
        .nav-admin-link { color: #4b5563; font-weight: 500; padding: 12px 20px; transition: 0.2s; border-radius: 8px; margin-bottom: 5px; display: block; text-decoration: none;}
        .nav-admin-link:hover, .nav-admin-link.active { background-color: #eaf0ec; color: #1a4331; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg admin-navbar shadow-sm" data-bs-theme="dark">
        <div class="container-fluid px-4">
            <a class="navbar-brand fw-bold text-white d-flex align-items-center gap-2" href="/admin/program">
                <i class="bi bi-shield-lock-fill text-warning"></i> Admin Panel Tali
            </a>
            <div class="d-flex">
                <a href="/" target="_blank" class="btn btn-outline-light btn-sm"><i class="bi bi-box-arrow-up-right me-1"></i> Lihat Website</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 d-none d-md-block sidebar py-4 px-3">
                <div class="text-muted small fw-bold mb-3 px-3 text-uppercase">Menu Utama</div>
                <a href="/admin/program" class="nav-admin-link active"><i class="bi bi-card-list me-2"></i> Kelola Program</a>
                </div>

            <main class="col-md-10 ms-sm-auto px-md-4 py-4">
                
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm" role="alert">
                    <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                {{ $slot }}
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>