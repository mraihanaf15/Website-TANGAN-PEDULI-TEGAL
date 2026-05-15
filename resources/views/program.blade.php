<x-app-layout>

    <section class="py-5 bg-light">
        <div class="container">

            <!-- ===== JUDUL ===== -->
            <div class="text-center mb-5"
                 data-aos="fade-up">

                <h2 class="fw-bold text-primary">
                    Program Sosial Yang Telah Dilaksanakan
                </h2>

                <p class="text-muted">
                    Bersama masyarakat, kami telah menghadirkan berbagai aksi nyata
                    untuk membantu sesama dan menyebarkan kebaikan.
                </p>
            </div>

            <!-- ===== CARD PROGRAM ===== -->
            <div class="row g-4">

                <!-- PROGRAM 1 -->
                <div class="col-md-4"
                     data-aos="fade-up"
                     data-aos-delay="100">

                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">

                        <img src="{{ asset('images/cp1.jpg') }}"
                             class="card-img-top"
                             style="height: 230px; object-fit: cover;"
                             alt="Program Pendidikan">

                        <div class="card-body p-4">

                            <span class="badge bg-success mb-3">
                                Sosial
                            </span>

                            <h5 class="fw-bold">
                                Panti Asuhan Suko Mulyo
                            </h5>

                            <p class="text-muted small">
                                Melakukan kunjungan sosial untuk berbagi kebahagiaan serta mempererat rasa kepedulian terhadap sesama.
                            </p>

                            <div class="d-flex justify-content-between mt-3">

                                <small class="text-secondary">
                                    15 Januari 2026
                                </small>


                            </div>

                        </div>
                    </div>
                </div>

                <!-- PROGRAM 2 -->
                <div class="col-md-4"
                     data-aos="fade-up"
                     data-aos-delay="200">

                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">

                        <img src="{{ asset('images/program2.jpg') }}"
                             class="card-img-top"
                             style="height: 230px; object-fit: cover;"
                             alt="Program Kemanusiaan">

                        <div class="card-body p-4">

                            <span class="badge bg-warning text-dark mb-3">
                                Kemanusiaan
                            </span>

                            <h5 class="fw-bold">
                                Aksi Galang Dana & Trauma Healing
                            </h5>

                            <p class="text-muted small">
                                Kegiatan penggalangan dana dan pendampingan untuk membantu serta memberikan dukungan moral kepada korban terdampak.
                            </p>

                            <div class="d-flex justify-content-between mt-3">

                                <small class="text-secondary">
                                    2 Februari 2026
                                </small>

                               

                            </div>

                        </div>
                    </div>
                </div>

                <!-- PROGRAM 3 -->
                <div class="col-md-4"
                     data-aos="fade-up"
                     data-aos-delay="300">

                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">

                        <img src="{{ asset('images/ramai.jpg') }}"
                             class="card-img-top"
                             style="height: 230px; object-fit: cover;"
                             alt="Program Kesehatan">

                        <div class="card-body p-4">

                            <span class="badge bg-primary mb-3">
                                Sosial
                            </span>

                            <h5 class="fw-bold">
                                Panti Welas Asih Tegal
                            </h5>

                            <p class="text-muted small">
                                Berpartisipasi dalam kegiatan sosial bersama anak-anak panti untuk menciptakan suasana yang hangat dan penuh semangat.
                            </p>

                            <div class="d-flex justify-content-between mt-3">

                                <small class="text-secondary">
                                    10 Maret 2026
                                </small>

                            </div>

                        </div>
                    </div>
                </div>

                <!-- PROGRAM 4 -->
                <div class="col-md-4"
                     data-aos="fade-up"
                     data-aos-delay="400">

                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">

                        <img src="{{ asset('images/cp4.jpg') }}"
                             class="card-img-top"
                             style="height: 230px; object-fit: cover;"
                             alt="Program Sosial">

                        <div class="card-body p-4">

                            <span class="badge bg-danger mb-3">
                                Kemanusiaan
                            </span>

                            <h5 class="fw-bold">
                                ART THERAPY
                            </h5>

                            <p class="text-muted small">
                                Kegiatan terapi seni sebagai media ekspresi diri dan pengembangan kreativitas secara positif.
                            </p>

                            <div class="d-flex justify-content-between mt-3">

                                <small class="text-secondary">
                                    April 2026
                                </small>


                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

</x-app-layout>