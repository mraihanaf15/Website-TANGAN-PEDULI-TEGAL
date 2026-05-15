<x-app-layout>
    <x-header />

    <section class="py-5">
        <div class="container">

            <!-- ===== TENTANG KAMI ===== -->
            <div class="row align-items-center mb-5 flex-md-row-reverse">

                <!-- TEXT -->
                <div class="col-md-6"
                     data-aos="fade-left">

                    <h2 class="fw-bold text-primary mb-3">
                        Tentang Kami
                    </h2>

                    <p class="text-muted">
                        Tangan Peduli Tegal adalah sebuah komunitas yang bergerak di bidang sosial dan pengabdian kepada masyarakat. Kami mewadahi pemuda, khususnya mahasiswa rantau di Kota/Kabupaten Tegal,
                        untuk bergerak dan peduli terhadap isu-isu sosial di sekitar mereka.
                    </p>

                    <p class="text-muted">
                        Melalui program-program sosial yang kami jalankan, kami memfasilitasi anggota kami untuk mengembangkan keterampilan dan kemampuan mereka. Dengan demikian, kami berharap dapat menjadi wadah yang efektif dalam membangun kesadaran dan
                        kepedulian pemuda di Tegal terhadap isu-isu sosial. Kami percaya bahwa dengan kerja sama dan kepedulian, kita dapat membangun
                        Tegal yang lebih baik, lebih sejahtera, dan lebih berkeadilan bagi
                        semua.
                    </p>

                    <h5 class="fw-bold mt-4">Visi</h5>

                    <p class="text-muted">
                        Tangan Peduli Tegal menjadi wadah pemuda, terkhususnya mahasiswa rantau,
                        yang peduli dengan isu-isu sosial dan berkomitmen untuk meningkatkan kualitas hidup dan kemajuan masyarakat Tegal melalui aksi-aksi nyata dan inovatif
                    </p>

                    <h5 class="fw-bold">Misi</h5>

                    <ul class="text-muted">
                        <li>
                            Mengembangkan kesadaran dan
                            kepedulian sosial di kalangan pemuda
                            dan mahasiswa rantau di Tegal
                        </li>

                        <li>
                            Meningkatkan keterampilan dan
                            kemampuan anggota dalam
                            mengembangkan program-program
                            sosial yang inovatif dan efektif.
                        </li>

                        <li>
                            Membangun jaringan kerja sama
                            dengan komunitas lain untuk meningkatkan dampak sosial di Tegal
                        </li>

                        <li>
                            Mengembangkan program-program
                            sosial yang berfokus pada pendidikan, kesehatan, dan pemberdayaan masyarakat.
                        </li>
                    </ul>
                </div>

                <!-- IMAGE -->
                <div class="col-md-6 text-center"
                     data-aos="zoom-in">

                    <img src="{{ asset('images/ramai.jpg') }}"
                         class="img-fluid rounded-4 shadow-lg"
                         alt="Tentang Kami">
                </div>

            </div>

            <!-- ===== PROGRAM ===== -->
            <div class="text-center mb-4"
                 data-aos="fade-up">

                <h2 class="fw-bold">
                    Program yang akan datang
                </h2>
            </div>

            <div class="row g-4 justify-content-center">

                @forelse($programs as $program)

                <div class="col-md-4"
                     data-aos="fade-up"
                     data-aos-delay="{{ $loop->index * 200 }}">

                    <div class="card border-0 shadow rounded-4 h-100">

                        <!-- GAMBAR -->
                        <div class="p-4 d-flex justify-content-center">

                            <img src="{{ asset('storage/' . $program->gambar) }}"
                                 alt="Program"
                                 width="70"
                                 height="70"
                                 class="rounded-circle shadow-sm object-fit-cover">
                        </div>

                        <!-- CONTENT -->
                        <div class="card-body text-center">

                            <h5 class="fw-bold text-primary">
                                {{ $program->judul }}
                            </h5>

                            <p class="text-muted">
                                {{ $program->deskripsi }}
                            </p>

                            <a href="#"
                               class="fw-semibold text-success text-decoration-none">
                                Melihat →
                            </a>

                        </div>

                    </div>
                </div>

                @empty

                <p class="text-muted text-center">
                    Belum ada program
                </p>

                @endforelse

            </div>

        </div>
    </section>

</x-app-layout>