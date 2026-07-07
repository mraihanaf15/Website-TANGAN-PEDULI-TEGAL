<section class="program-section">

    <div class="container">

        <div class="row g-4">

            @forelse($programs as $program)

            <div class="col-lg-4 col-md-6" data-aos="fade-up">

                <article class="program-card h-100">

                    <div class="program-image">

                        <img
                            src="{{ asset('storage/'.$program->gambar) }}"
                            alt="{{ $program->judul }}">

                        <span class="program-badge-card">

                            Terlaksana

                        </span>

                    </div>

                    <div class="program-body">

                        <div class="program-date">

                            <i class="bi bi-calendar-event"></i>

                            {{ \Carbon\Carbon::parse($program->tanggal_pelaksanaan)->translatedFormat('d F Y') }}

                        </div>

                        <h3>

                            {{ $program->judul }}

                        </h3>

                        <p>

                            {{ Str::limit($program->deskripsi,120) }}

                        </p>

                        <a href="{{ route('program.show',$program->id) }}"
                            class="program-link">

                            Lihat Dokumentasi

                            <i class="bi bi-arrow-right ms-2"></i>

                        </a>

                    </div>

                </article>

            </div>

            @empty

                <x-program-empty />

            @endforelse

        </div>

    </div>

</section>