<footer class="footer">

    <div class="container">

        <div class="row g-5">

            <!-- Brand -->

            <div class="col-lg-4">

                <div class="footer-brand">

                    <img
                        src="{{ asset('images/fotologo.png') }}"
                        alt="Logo Tangan Peduli Tegal">

                    <div>

                        <h4>

                            Tangan Peduli Tegal

                        </h4>

                        <p>

                            Bersama Menebar Kebaikan

                        </p>

                    </div>

                </div>

                <p class="footer-text mt-4">

                    Tangan Peduli Tegal merupakan komunitas sosial yang
                    bergerak di bidang kemanusiaan, pendidikan, dan
                    pemberdayaan masyarakat untuk menghadirkan perubahan
                    yang bermanfaat bagi Kota maupun Kabupaten Tegal.

                </p>

            </div>

            <!-- Menu Cepat -->

            <div class="col-lg-3">

                <h5>

                    Menu Cepat

                </h5>

                <ul>

                    <li>

                        <a href="{{ route('beranda') }}">

                            Beranda

                        </a>

                    </li>

                    <li>

                        <a href="{{ route('tentang') }}">

                            Tentang Kami

                        </a>

                    </li>

                    <li>

                        <a href="{{ route('program') }}">

                            Rekam Jejak

                        </a>

                    </li>

                    <li>

                        <a href="{{ route('donasi') }}">

                            Donasi

                        </a>

                    </li>

                </ul>

            </div>

            <!-- Kontak Kami -->

            <div class="col-lg-5">

                <h5>

                    Kontak Kami

                </h5>

                <ul>

                    <li>

                        <i class="bi bi-geo-alt-fill"></i>

                        Kota Tegal, Jawa Tengah

                    </li>

                    <li>

                        <i class="bi bi-envelope-fill"></i>

                        tanganpedulitegal@gmail.com

                    </li>

                    <li>

                        <i class="bi bi-whatsapp"></i>

                        0882-0052-97040

                    </li>

                    <li>

                        <i class="bi bi-instagram"></i>

                        @tanganpedulitegal

                    </li>

                </ul>

                <div class="footer-social">

                    <a href="https://instagram.com/tanganpedulitegal"
                       target="_blank"
                       aria-label="Instagram">

                        <i class="bi bi-instagram"></i>

                    </a>

                    <a href="https://www.tiktok.com/@tanganpedulitegal"
                       target="_blank"
                       aria-label="TikTok">

                        <i class="bi bi-tiktok"></i>

                    </a>

                    <a href="https://wa.me/62882005297040"
                       target="_blank"
                       aria-label="WhatsApp">

                        <i class="bi bi-whatsapp"></i>

                    </a>

                    <a href="mailto:tanganpedulitegal@gmail.com"
                       aria-label="Email">

                        <i class="bi bi-envelope-fill"></i>

                    </a>

                </div>

            </div>

        </div>

        <hr>

        <div class="footer-bottom">

            <span>

                © {{ date('Y') }} Tangan Peduli Tegal.
                All Rights Reserved.

            </span>

            <span>

                Menebar Kebaikan • Menginspirasi Kepedulian • Membangun Harapan

            </span>

        </div>

    </div>

</footer>