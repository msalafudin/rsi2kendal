<!--==================================================-->
<!-- Start mediic Main Menu  -->
<!--==================================================-->
<div id="sticky-header" class="mediic_nav_manu">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-2">
                <div class="logo cursor-scale small">
                    <a class="logo_img" href="index.html" title="mediic">
                        <img src="assets/images/logo.png" alt="logo" />
                    </a>
                    <a class="main_sticky" href="index.html" title="mediic">
                        <img src="assets/images/logo2.png" alt="logo" />
                    </a>
                </div>
            </div>
            <div class="col-lg-10">
                <nav class="mediic_menu">
                    <ul class="nav_scroll">
                        <li>
                            <a class="mdy-hover cursor-scale small" href="#">Beranda </a>
                        </li>
                        <li>
                            <a class="mdy-hover cursor-scale small" href="/kamar">Kamar</a>
                        </li>
                        <li>
                            <form action="/logout" method="post">
                            @csrf
                            <a class="mdy-hover cursor-scale small">
                                <button type="submit" style="color: brown; background: none; border: none; padding: 0; cursor: pointer; font-size: inherit;">
                                    LOGOUT
                                </button>
                            </a>
                            </form>
                        </li>
                    </ul>
                    <div class="mediic-right-side cursor-scale small">
                        <div class="header-button">
                            <a href="appointment.html">
                                Get Appoinment
                                <img src="assets/images/resource/arrow.png" alt="" />
                                <div class="mediic-hover-btn hover-btn"></div>
                                <div class="mediic-hover-btn hover-btn2"></div>
                                <div class="mediic-hover-btn hover-btn3"></div>
                                <div class="mediic-hover-btn hover-btn4"></div>
                            </a>
                        </div>
                    </div>

                </nav>
            </div>
        </div>
    </div>
</div>

<!-- mediic Mobile Menu  -->
<div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none">
    <div class="mobile-menu">
        <nav class="mediic_menu">
            <ul class="nav_scroll">
                <li>
                    <a class="mdy-hover cursor-scale small" href="#">Beranda </a>
                </li>
                <li><a class="mdy-hover" href="about.html">About</a></li>
                <li>
                    <a class="mdy-hover" href="#">Tentang Kami </a>
                    <ul class="sub-menu">
                        <li><a href="about.html">Informasi Umum</a></li>
                        <li><a href="service.html">Sejarah</a></li>
                        <li><a href="team.html">Visi & Misi</a></li>
                        <li><a href="team-details.html">Tim Kami</a></li>
                        <li><a href="project.html">Indikator Mutu</a></li>
                    </ul>
                </li>
                <li>
                    <a class="mdy-hover" href="#">Layanan </a>
                    <ul class="sub-menu">
                        <li><a href="about.html">Dokter</a></li>
                        <li><a href="service.html">Poliklinik</a></li>
                        <li><a href="team.html">Jadwal</a></li>
                        <li><a href="team-details.html">Rawat Inap</a></li>
                        <li><a href="project.html">Pelayanan Unit Khusus</a></li>
                        <li><a href="project.html">Pelayanan Penunjang</a></li>
                        <li><a href="project.html">Fasilitas Umum</a></li>
                        <li><a href="project.html">Medical Check Up</a></li>
                    </ul>
                </li>
                <li>
                    <a class="mdy-hover cursor-scale small" href="#">Berita </a>
                </li>
                <li>
                    <a class="mdy-hover cursor-scale small" href="#">Pendaftaran </a>
                </li>
                <li>
                    <a class="mdy-hover cursor-scale small" href="contact.html">Hubungi Kami</a>
                    <ul class="sub-menu">
                        <li><a href="about.html">Kontak Kami</a></li>
                        <li><a href="service.html">Kritik & Saran</a></li>
                        <li><a href="team.html">Survey Kepuasan</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!--==================================================-->
<!-- End mediic Main Menu  -->
<!--==================================================-->
