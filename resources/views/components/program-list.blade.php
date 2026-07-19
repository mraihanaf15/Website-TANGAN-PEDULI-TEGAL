<section class="program-section py-5">

    <div class="container">

        <div class="row g-4 justify-content-center">

            @forelse($programs as $program)

                <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up">

                    <article class="program-card h-100">

                        <div class="program-image">

                            <img
                                src="{{ asset('storage/'.$program->gambar) }}"
                                alt="{{ $program->judul }}">

                            <span class="program-badge-card">
                                <i class="bi bi-check-circle-fill me-1"></i>
                                Terlaksana
                            </span>

                        </div>

                        <div class="program-body d-flex flex-column h-100">

                            <div class="program-date mb-2">

                                <i class="bi bi-calendar-event me-2"></i>

                                {{ \Carbon\Carbon::parse($program->tanggal_pelaksanaan)->translatedFormat('d F Y') }}

                            </div>

                            <h3 class="program-title-card">

                                {{ $program->judul }}

                            </h3>

                            <p class="program-text flex-grow-1">

                                {{ Str::limit(strip_tags($program->deskripsi),120) }}

                            </p>

                            <a href="{{ route('program.show',$program->id) }}"
                                class="program-link mt-auto">

                                Lihat Dokumentasi

                                <i class="bi bi-arrow-right ms-2"></i>

                            </a>

                        </div>

                    </article>

                </div>

            @empty

                <div class="col-12 text-center py-5">

                    <i class="bi bi-folder2-open display-1 text-success"></i>

                    <h3 class="mt-4">
                        Belum Ada Program
                    </h3>

                    <p class="text-muted">
                        Program sosial akan ditampilkan di halaman ini setelah ditambahkan oleh admin.
                    </p>

                </div>

            @endforelse

        </div>

    </div>

</section>