<section class="program-section py-5">

    <div class="container">

        <div class="text-center mb-5">
            <span class="program-label">PROGRAM TERBARU</span>

            <h2 class="fw-bold display-5 mt-3">
                Kegiatan Tangan Peduli Tegal
            </h2>

            <p class="text-muted col-lg-7 mx-auto">
                Berbagai kegiatan sosial yang telah dan akan dilaksanakan
                sebagai bentuk kepedulian terhadap masyarakat.
            </p>
        </div>

        @if($programs->count())

        {{-- Program Utama --}}
        @php $utama = $programs->first(); @endphp

        <div class="row g-5 align-items-center mb-5">

            <div class="col-lg-7">

                <img src="{{ asset('storage/'.$utama->gambar) }}"
                     class="img-fluid rounded-4 shadow program-main-image"
                     alt="{{ $utama->judul }}">

            </div>

            <div class="col-lg-5">

                <small class="text-success fw-semibold">

                    <i class="bi bi-calendar-event me-2"></i>

                    {{ \Carbon\Carbon::parse($utama->tanggal_pelaksanaan)->translatedFormat('d F Y') }}

                </small>

                <h2 class="fw-bold mt-3">

                    {{ $utama->judul }}

                </h2>

                <p class="text-muted my-4">

                    {{ Str::limit($utama->deskripsi,250) }}

                </p>

                <a href="{{ route('program.show',$utama->id) }}"
                   class="btn btn-success rounded-pill px-4">

                    Lihat Detail

                </a>

            </div>

        </div>

        {{-- Program Lainnya --}}

        <div class="row g-4">

            @foreach($programs->skip(1) as $program)

            <div class="col-lg-4">

                <div class="program-small">

                    <img src="{{ asset('storage/'.$program->gambar) }}"
                         class="img-fluid rounded-top-4">

                    <div class="p-4">

                        <small class="text-success">

                            {{ \Carbon\Carbon::parse($program->tanggal_pelaksanaan)->translatedFormat('d M Y') }}

                        </small>

                        <h5 class="fw-bold mt-2">

                            {{ $program->judul }}

                        </h5>

                        <p class="text-muted">

                            {{ Str::limit($program->deskripsi,90) }}

                        </p>

                        <a href="{{ route('program.show',$program->id) }}"
                           class="text-success fw-semibold text-decoration-none">

                            Selengkapnya →

                        </a>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

        @endif

    </div>

</section>