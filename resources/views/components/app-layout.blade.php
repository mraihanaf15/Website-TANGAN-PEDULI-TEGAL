<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Tangan Peduli Tegal' }}</title>

    <meta name="description"
        content="Website resmi Tangan Peduli Tegal sebagai wadah kegiatan sosial, kemanusiaan, dan donasi.">

    <meta name="theme-color" content="#355f2e">

    <link rel="icon" href="{{ asset('images/fotologo.png') }}">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    {{-- CSS --}}
    @vite(['resources/css/app.css'])

    @stack('styles')
</head>

<body class="d-flex flex-column min-vh-100 bg-light">

    {{-- Navbar --}}
    <x-navbar />

    {{-- Content --}}
    <main class="flex-fill">
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <footer class="bg-dark text-white py-4 mt-auto">
        <div class="container text-center">

            <h6 class="fw-bold mb-2">
                Tangan Peduli Tegal
            </h6>

            <p class="small text-white-50 mb-2">
                Bersama Menebar Kebaikan untuk Sesama
            </p>

            <small class="text-white-50">
                © {{ date('Y') }} Tangan Peduli Tegal.
                All Rights Reserved.
            </small>

        </div>
    </footer>

    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 700,
            once: true
        });
    </script>

    @stack('scripts')

</body>

</html>