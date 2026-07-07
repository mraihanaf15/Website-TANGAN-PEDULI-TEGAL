<x-app-layout title="{{ $program->judul }} - Tangan Peduli Tegal">

    <style>
        .detail-content { line-height: 1.8; color: #4b5563; font-size: 1.1rem; text-align: justify; white-space: pre-line; }
        .gallery-img-wrapper { height: 220px; overflow: hidden; border-radius: 12px; transition: all 0.4s ease; cursor: pointer; border: 1px solid #eee; }
        .gallery-img-wrapper:hover { transform: scale(1.03); box-shadow: 0 15px 30px rgba(0,0,0,0.1); }
        .gallery-img-wrapper img { width: 100%; height: 100%; object-fit: cover; }
        .back-link:hover { color: #1a4331 !important; transform: translateX(-5px); }
        .status-badge { font-size: 0.8rem; letter-spacing: 1px; text-transform: uppercase; }
        @media (max-width: 768px) { .detail-title { font-size: 2rem !important; } .gallery-img-wrapper { height: 160px; } }
    </style>

    <main class="py-5 bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    
                    <div class="mb-4">
                        <a href="{{ $program->status == 'selesai' ? route('program') : route('beranda') }}" 
                           class="text-muted text-decoration-none fw-bold small d-inline-flex align-items-center back-link" style="transition: 0.3s;">
                            <i class="bi bi-arrow-left me-2"></i> KEMBALI KE DAFTAR
                        </a>
                    </div>

                    <header class="mb-5" data-aos="fade-up">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            @if($program->status == 'selesai')
                                <span class="badge status-badge px-3 py-2" style="background-color: #eaf0ec; color: #1a4331; border: 1px solid #1a4331;">Selesai Terlaksana</span>
                            @else
                                <span class="badge status-badge px-3 py-2" style="background-color: #fff9e6; color: #d97706; border: 1px solid #f9d030;">Mendatang</span>
                            @endif
                            <span class="text-muted small fw-medium">
                                <i class="bi bi-calendar3 me-1"></i> {{ \Carbon\Carbon::parse($program->tanggal_pelaksanaan)->translatedFormat('d F Y') }}
                            </span>
                        </div>
                        <h1 class="fw-bold display-5 detail-title" style="color: #1f2937; letter-spacing: -1px;">{{ $program->judul }}</h1>
                    </header>

                    <div class="mb-5" data-aos="zoom-in" data-aos-delay="100">
                        <div class="position-relative">
                            <img src="{{ asset('storage/' . $program->gambar) }}" 
                                 class="img-fluid w-100 rounded-4 shadow-sm" 
                                 style="max-height: 500px; object-fit: cover;" 
                                 alt="{{ $program->judul }}">
                        </div>
                    </div>

                    <article class="detail-content mb-5" data-aos="fade-up">
                        {{ $program->deskripsi }}
                    </article>

                    @if($program->status == 'selesai' && !empty($program->foto_kegiatan))
                        <section class="mt-5 pt-5 border-top" data-aos="fade-up">
                            <div class="d-flex align-items-center gap-3 mb-4">
                                <h3 class="fw-bold mb-0" style="color: #1a4331;">Dokumentasi Kegiatan</h3>
                                <div class="flex-grow-1" style="height: 2px; background: linear-gradient(to right, #1a4331, transparent);"></div>
                            </div>
                            
                            <div class="row g-3">
                                @foreach($program->foto_kegiatan as $foto)
                                    <div class="col-md-4 col-6">
                                        <div class="gallery-img-wrapper" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 50 }}">
                                            <a href="{{ asset('storage/' . $foto) }}" target="_blank">
                                                <img src="{{ asset('storage/' . $foto) }}" alt="Dokumentasi {{ $program->judul }}">
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </section>
                    @endif

                    <section class="mt-5 p-4 p-md-5 rounded-4 text-center" style="background-color: #fbfbfb; border: 1px dashed #ddd;" data-aos="fade-up">
                        <h5 class="fw-bold mb-2">Ingin Berkontribusi?</h5>
                        <p class="text-muted mb-4 small">Dukung aksi-aksi nyata kami selanjutnya dengan berdonasi atau menjadi relawan.</p>
                        <div class="d-flex justify-content-center gap-3">
                            <a href="/donasi" class="btn btn-dark rounded-pill px-4 fw-bold shadow-sm" style="background-color: #1a4331;">Donasi Sekarang</a>
                            <a href="https://wa.me/62xxxxxxxxxx" class="btn btn-outline-dark rounded-pill px-4 fw-bold">Hubungi Kami</a>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </main>

</x-app-layout>