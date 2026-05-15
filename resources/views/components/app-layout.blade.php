<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Tangan Peduli Tegal' }}</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        /* ===== GLOBAL ===== */
        body {
            font-family: 'Inter', sans-serif;
            background: #f6f6f6;
            scroll-behavior: smooth;
        }

        /* ===== HERO SECTION ===== */
        .hero {
            position: relative;
            overflow: hidden;
            min-height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* gambar hero */
        .hero img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            top: 0;
            left: 0;
            opacity: 0.9;
            transition: transform 8s ease;
        }

        .hero:hover img {
            transform: scale(1.05);
        }

        /* overlay gelap */
        .hero::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: rgba(0,0,0,0.45);
        }

        /* isi hero */
        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: white;
            max-width: 700px;
            padding: 60px 20px;

            animation: fadeUp 1.2s ease;
        }

        /* animasi awal */
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* judul hero */
        .hero-content h1 {
            font-size: 3rem;
            font-weight: 700;
            line-height: 1.2;
            text-shadow: 0 4px 20px rgba(0,0,0,0.6);
        }

        /* paragraf hero */
        .hero-content p {
            font-size: 1.1rem;
            text-shadow: 0 4px 15px rgba(0,0,0,0.6);
        }

        /* ===== BUTTON DONASI ===== */
        .btn-donasi {
            background: linear-gradient(135deg, #f4c542, #ffd95a);
            color: #1f2937;
            border-radius: 50px;
            font-weight: 600;
            padding: 12px 28px;
            transition: all 0.3s ease;
            border: none;
        }

        .btn-donasi:hover {
            background: #d4a82f;
            color: white;
            transform: translateY(-3px) scale(1.03);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        /* ===== NAVBAR ===== */
        .custom-navbar {
            background: rgba(255,255,255,0.8);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }

        .nav-link {
            position: relative;
            font-weight: 500;
            color: #1f2937 !important;
            transition: 0.3s;
        }

        .nav-link:hover {
            color: #355f2e !important;
        }

        .nav-link::after {
            content: "";
            position: absolute;
            width: 0%;
            height: 2px;
            left: 0;
            bottom: -4px;
            background: #355f2e;
            transition: 0.3s;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .active-link {
            color: #355f2e !important;
            font-weight: 600;
        }

        .active-link::after {
            width: 100%;
        }

        /* ===== WARNA BRAND ===== */
        .text-primary {
            color: #355f2e !important;
        }

        .text-success {
            color: #7a9e7e !important;
        }

        /* ===== CARD PROGRAM ===== */
        .program-card {
            position: relative;
            height: 300px;
            border-radius: 20px;
            background-size: cover;
            background-position: center;
            overflow: hidden;
            display: flex;
            align-items: flex-end;
            padding: 20px;
            transition: all 0.4s ease;
        }

        .program-card .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
        }

        .program-card .content {
            position: relative;
            z-index: 2;
        }

        .program-card:hover {
            transform: translateY(-10px) scale(1.03);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }

        /* ===== CARD UMUM ===== */
        .card {
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.12) !important;
        }

        /* ===== FOOTER ===== */
        footer {
            background: #1f2937;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .hero {
                min-height: 55vh;
            }

            .hero-content {
                padding: 50px 20px;
            }

            .hero-content h1 {
                font-size: 2rem;
            }

            .hero-content p {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- COMPONENT NAVBAR -->
    <x-navbar />

    <!-- ISI HALAMAN -->
    <main class="flex-fill">
        {{ $slot }}
    </main>

    <!-- FOOTER -->
    <footer class="text-white text-center py-4">
        <small>&copy; {{ date('Y') }} Tangan Peduli Tegal</small>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
    </script>

</body>
</html>