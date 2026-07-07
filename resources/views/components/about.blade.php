<section class="about-section bg-white">
    <div class="container">

        <div class="row align-items-center g-5">

            {{-- Gambar --}}
            <div class="col-lg-6" data-aos="fade-right">

                <div class="about-image">

                    <img
                        src="{{ asset('images/ramai.jpg') }}"
                        alt="Kegiatan Tangan Peduli Tegal"
                        class="img-fluid rounded-4 shadow">

                </div>

            </div>

            {{-- Konten --}}
            <div class="col-lg-6" data-aos="fade-left">

                <span class="section-badge">
                    Mengenal Kami
                </span>

                <h2 class="display-6 fw-bold mt-3 mb-4">
                    Tentang Tangan Peduli Tegal
                </h2>

                <p class="text-secondary">
                    <strong>Tangan Peduli Tegal</strong> merupakan komunitas sosial
                    yang mewadahi pemuda, khususnya mahasiswa rantau, untuk
                    berkontribusi dalam kegiatan sosial, pendidikan, kemanusiaan,
                    dan pemberdayaan masyarakat di Kota maupun Kabupaten Tegal.
                </p>

                <div class="row mt-4">

                    <div class="col-md-6 mb-4">

                        <h5 class="fw-bold text-brand">
                            Visi
                        </h5>

                        <p class="text-secondary mb-0">
                            Menjadi komunitas sosial yang mampu memberikan
                            manfaat nyata serta meningkatkan kepedulian
                            masyarakat melalui aksi yang berkelanjutan.
                        </p>

                    </div>

                    <div class="col-md-6">

                        <h5 class="fw-bold text-brand">
                            Misi
                        </h5>

                        <ul class="text-secondary ps-3 mb-0">

                            <li>Membangun kepedulian sosial.</li>

                            <li>Mengembangkan program yang inovatif.</li>

                            <li>Menjalin kolaborasi dengan berbagai pihak.</li>

                            <li>Memberdayakan masyarakat melalui aksi nyata.</li>

                        </ul>

                    </div>

                </div>

                <a href="{{ route('tentang') }}"
                   class="btn btn-brand mt-4">

                    Selengkapnya

                </a>

            </div>

        </div>

    </div>
</section>