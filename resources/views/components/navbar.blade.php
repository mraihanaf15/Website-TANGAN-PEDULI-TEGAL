<nav class="navbar navbar-expand-lg bg-white sticky-top shadow-sm py-3">
    <div class="container-fluid px-lg-5">

        {{-- Logo --}}
        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('beranda') }}">
            <img src="{{ asset('images/fotologo.png') }}" alt="Logo" width="45" height="45">

            <div class="d-flex flex-column">
                <span class="fw-bold fs-5 mb-0 text-primary">
                    Tangan Peduli Tegal
                </span>

                <span class="small text-secondary" style="margin-top:-4px;">
                    Ulurkan Tangan, Hadirkan Senyuman
                </span>
            </div>
        </a>

        {{-- Toggle --}}
        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Menu --}}
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav mx-auto gap-lg-4 fw-medium">

                <li class="nav-item">
                    <a href="{{ route('beranda') }}"
                        class="nav-link {{ request()->routeIs('beranda') ? 'active-link' : '' }}">
                        Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('tentang') }}"
                        class="nav-link {{ request()->routeIs('tentang') ? 'active-link' : '' }}">
                        Tentang
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('program') }}"
                        class="nav-link {{ request()->routeIs('program') ? 'active-link' : '' }}">
                        Program
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('donasi') }}"
                        class="nav-link {{ request()->routeIs('donasi') ? 'active-link' : '' }}">
                        Donasi
                    </a>
                </li>

            </ul>

            {{-- Admin --}}
            @auth

                <div class="d-flex align-items-center gap-2 ms-lg-3 mt-3 mt-lg-0">

                    @if(auth()->user()->role === 'admin')

                        <a href="{{ route('admin.program.index') }}"
                           class="btn btn-success rounded-pill px-4">

                            Dashboard

                        </a>

                    @endif

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit"
                                class="btn btn-outline-danger rounded-pill px-4">

                            Keluar

                        </button>

                    </form>

                </div>

            @endauth

        </div>

    </div>
</nav>