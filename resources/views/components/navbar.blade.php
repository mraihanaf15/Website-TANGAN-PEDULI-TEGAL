<nav class="navbar navbar-expand-lg sticky-top custom-navbar">
    <div class="container">
        
        <!-- LOGO -->
        <a class="navbar-brand d-flex align-items-center gap-2" href="/">
            <img src="{{ asset('images/fotologo.png') }}" alt="Logo" width="40" height="40">
            <span class="fw-bold text-primary">
                Tangan Peduli <span class="text-success">Tegal</span>
            </span>
        </a>

        <!-- TOGGLER -->
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            ☰
        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center gap-3">

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active-link' : '' }}" href="/">Beranda</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('tentang') ? 'active-link' : '' }}" href="{{ route('tentang') }}">Tentang</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('program') ? 'active-link' : '' }}" href="{{ route('program') }}">Program</a>
                </li>

                <li class="nav-item">
                    <a href="/donasi" class="btn btn-donasi class="nav-link {{ request()->is('donasi') ? 'active-link' : '' }} ">Donasi</a>
                </li>

            </ul>
        </div>
    </div>
</nav>