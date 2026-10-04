<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Desa Jalatrang')</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    >

    <style>

        /* =====================================================
           DASAR
        ===================================================== */

        :root {
            --navy-dark: #111827;
            --navy: #172033;
            --navy-light: #24324a;

            --blue: #1e88e5;
            --blue-dark: #1769aa;
            --yellow: #ffc400;

            --white: #ffffff;
            --gray: #6b7280;
            --light: #f5f7fa;
            --border: #e5e7eb;

            --text: #20252d;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            padding: 0;

            background: #ffffff;

            color: var(--text);

            font-family:
                Arial,
                Helvetica,
                sans-serif;
        }

        a {
            text-decoration: none;
        }


        /* =====================================================
           INFO TERKINI
        ===================================================== */

        .top-bar {
            width: 100%;

            height: 42px;

            background: var(--navy-dark);

            color: white;
        }

        .top-bar .container {
            height: 100%;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .info-terkini {
            display: inline-flex;
            align-items: center;

            color: white;

            font-size: 13px;
            font-weight: 700;

            letter-spacing: .3px;
        }

        .info-terkini i {
            margin-right: 7px;

            color: var(--yellow);
        }

        .tanggal-sekarang {
            color: #d1d5db;

            font-size: 12px;
        }

        .tanggal-sekarang i {
            margin-right: 5px;

            color: var(--yellow);
        }


        /* =====================================================
           NAVBAR
        ===================================================== */

        .navbar-desa {
            width: 100%;

            background: var(--navy);

            border-bottom: 1px solid rgba(255,255,255,.08);
        }

        .navbar-inner {
            min-height: 82px;

            display: flex;
            align-items: center;

            padding: 0 25px;
        }


        /* =====================================================
           BRAND
        ===================================================== */

        .brand-desa {
            display: flex;
            align-items: center;

            min-width: 405px;

            color: white;

            padding: 8px 0;
        }

        .brand-desa:hover {
            color: white;
        }

        .logo-desa {
            width: 50px;
            height: 50px;

            flex-shrink: 0;

            display: flex;
            align-items: center;
            justify-content: center;

            margin-right: 12px;

            background: #ffffff;

            border-radius: 8px;

            color: var(--navy);

            font-size: 24px;
        }

        .brand-title {
            color: white;

            font-size: 17px;

            font-weight: 800;

            line-height: 1.25;

            text-transform: uppercase;
        }

        .brand-subtitle {
            display: block;

            margin-top: 4px;

            color: #cbd5e1;

            font-size: 11px;

            line-height: 1.3;

            text-transform: uppercase;
        }


        /* =====================================================
           MENU NAVBAR
        ===================================================== */

        .menu-navbar {
            margin-left: auto;

            display: flex;
            align-items: center;

            gap: 3px;
        }

        .nav-item-custom {
            display: flex;
            align-items: center;

            min-height: 42px;

            padding: 0 13px;

            border-radius: 5px;

            color: #e5e7eb;

            font-size: 13px;

            font-weight: 600;

            white-space: nowrap;

            transition: .2s ease;
        }

        .nav-item-custom:hover {
            background: rgba(255,255,255,.08);

            color: white;
        }

        .nav-item-custom.active {
            background: var(--blue);

            color: white;
        }


        /* =====================================================
           HOME
        ===================================================== */

        .home-button {
            width: 42px;
            height: 42px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin-right: 5px;

            border-radius: 5px;

            background: transparent;

            color: white;

            font-size: 17px;

            transition: .2s ease;
        }

        .home-button:hover {
            background: rgba(255,255,255,.08);

            color: white;
        }


        /* =====================================================
           GRID
        ===================================================== */

        .grid-button {
            width: 42px;
            height: 42px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin-left: 6px;

            border-radius: 5px;

            background: transparent;

            color: #dbeafe;

            font-size: 19px;

            transition: .2s ease;
        }

        .grid-button:hover {
            background: rgba(255,255,255,.08);

            color: white;
        }


        /* =====================================================
           CONTENT
        ===================================================== */

        .main-content {
            min-height: calc(100vh - 200px);

            background: #ffffff;
        }

        .main-content > .container {
            max-width: 1200px;
        }


        /* =====================================================
           ALERT
        ===================================================== */

        .alert {
            margin-top: 20px;
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        .footer-desa {
            width: 100%;

            background: var(--navy-dark);

            color: #d1d5db;
        }

        .footer-main {
            background: var(--navy);

            padding: 55px 0 35px;
        }


        /* =====================================================
           FOOTER BRAND
        ===================================================== */

        .footer-brand-top {
            display: flex;
            align-items: center;

            gap: 14px;

            margin-bottom: 20px;
        }

        .footer-logo {
            width: 64px;
            height: 64px;

            object-fit: contain;

            background: white;

            border-radius: 6px;
        }

        .footer-brand h3 {
            margin: 0;

            color: white;

            font-size: 20px;

            font-weight: 700;

            line-height: 1.4;
        }

        .footer-brand-yellow {
            color: var(--yellow) !important;
        }


        /* =====================================================
           FOOTER ALAMAT
        ===================================================== */

        .footer-address {
            color: #d1d5db;

            font-size: 14px;

            line-height: 1.9;
        }

        .footer-contact {
            margin-top: 3px;
        }

        .footer-contact i {
            width: 25px;

            color: #cbd5e1;
        }


        /* =====================================================
           FOOTER PETA
        ===================================================== */

        .footer-map {
            display: inline-block;

            margin-top: 20px;

            padding: 8px 13px;

            border: 1px solid var(--yellow);

            border-radius: 4px;

            color: white;

            font-size: 13px;

            transition: .2s ease;
        }

        .footer-map:hover {
            background: var(--yellow);

            color: var(--navy-dark);
        }


        /* =====================================================
           FOOTER JUDUL
        ===================================================== */

        .footer-title {
            margin: 0 0 20px;

            color: var(--yellow);

            font-size: 17px;

            font-weight: 700;

            letter-spacing: .5px;
        }


        /* =====================================================
           FOOTER MENU
        ===================================================== */

        .footer-menu,
        .footer-social {
            list-style: none;

            padding: 0;

            margin: 0;
        }

        .footer-menu li,
        .footer-social li {
            margin-bottom: 12px;
        }

        .footer-menu a,
        .footer-social a {
            color: #d1d5db;

            font-size: 14px;

            transition: .2s ease;
        }

        .footer-menu a:hover,
        .footer-social a:hover {
            color: var(--yellow);
        }

        .footer-menu i {
            margin-right: 7px;

            font-size: 11px;
        }

        .footer-social i {
            display: inline-block;

            width: 27px;

            font-size: 16px;
        }


        /* =====================================================
           FOOTER BOTTOM
        ===================================================== */

        .footer-bottom {
            background: #0b1120;

            border-top: 1px solid rgba(255,255,255,.07);

            padding: 17px 0;

            color: #9ca3af;

            font-size: 12px;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 1400px) {

            .brand-desa {
                min-width: 350px;
            }

            .nav-item-custom {
                padding-left: 9px;
                padding-right: 9px;

                font-size: 12px;
            }
        }


        @media (max-width: 1200px) {

            .brand-desa {
                min-width: 300px;
            }

            .brand-title {
                font-size: 14px;
            }

            .brand-subtitle {
                font-size: 9px;
            }

            .nav-item-custom {
                padding-left: 7px;
                padding-right: 7px;

                font-size: 11px;
            }
        }


        @media (max-width: 991px) {

            .navbar-inner {
                flex-direction: column;

                align-items: stretch;

                padding: 10px 15px;
            }

            .brand-desa {
                min-width: 0;

                width: 100%;
            }

            .menu-navbar {
                margin-top: 10px;

                justify-content: center;

                flex-wrap: wrap;
            }

            .nav-item-custom {
                margin-bottom: 4px;
            }
        }


        @media (max-width: 767px) {

            .top-bar {
                height: auto;

                padding: 7px 0;
            }

            .top-bar .container {
                gap: 8px;
            }

            .tanggal-sekarang {
                font-size: 10px;
            }

            .footer-main {
                padding: 40px 20px 25px;
            }

            .footer-title {
                margin-top: 20px;
            }
        }


        @media (max-width: 576px) {

            .top-bar .container {
                flex-direction: column;

                align-items: flex-start;
            }

            .brand-title {
                font-size: 13px;
            }

            .brand-subtitle {
                font-size: 8px;
            }

            .menu-navbar {
                justify-content: flex-start;
            }

            .nav-item-custom {
                font-size: 11px;
            }
        }

    </style>

</head>


<body>


    <!-- =====================================================
         TOP BAR
    ====================================================== -->

    <div class="top-bar">

        <div class="container">

            <div class="info-terkini">

                <i class="bi bi-megaphone-fill"></i>

                INFO TERKINI

            </div>


            <div class="tanggal-sekarang">

                <i class="bi bi-calendar3"></i>

                {{ now()->translatedFormat('l, d F Y') }}

            </div>

        </div>

    </div>



    <!-- =====================================================
         NAVBAR UTAMA
    ====================================================== -->

    <nav class="navbar-desa">

        <div class="container-fluid px-0">

            <div class="navbar-inner">


                <!-- =================================================
                     IDENTITAS DESA
                ================================================== -->

                <a
                    href="{{ url('/') }}"
                    class="brand-desa"
                >

                    <div class="logo-desa">

                        <i class="bi bi-building"></i>

                    </div>


                    <div>

                        <div class="brand-title">

                            PEMERINTAH DESA JALATRANG

                        </div>


                        <span class="brand-subtitle">

                            KECAMATAN CIPAKU KABUPATEN CIAMIS

                        </span>

                    </div>

                </a>



                <!-- =================================================
                     MENU
                ================================================== -->

                <div class="menu-navbar">


                    <!-- BERANDA -->

                    <a
                        href="{{ url('/') }}"
                        class="home-button"
                        title="Beranda"
                    >

                        <i class="bi bi-house-fill"></i>

                    </a>



                    <!-- PROFIL -->

                    <a
                        href="#"
                        class="nav-item-custom"
                    >

                        Profil

                    </a>



                    <!-- KEPENDUDUKAN -->

                    <a
                        href="#"
                        class="nav-item-custom"
                    >

                        Kependudukan

                    </a>



                    <!-- BERITA -->

                    <a
                        href="{{ route('berita.index') }}"
                        class="nav-item-custom active"
                    >

                        Berita

                    </a>



                    <!-- POTENSI WISATA -->

                    <a
                        href="#"
                        class="nav-item-custom"
                    >

                        Potensi Wisata

                    </a>



                    <!-- IDM -->

                    <a
                        href="#"
                        class="nav-item-custom"
                    >

                        IDM & SDGs

                    </a>



                    <!-- KETAHANAN PANGAN -->

                    <a
                        href="#"
                        class="nav-item-custom"
                    >

                        Ketahanan Pangan

                    </a>



                    <!-- KEUANGAN -->

                    <a
                        href="#"
                        class="nav-item-custom"
                    >

                        Keuangan

                    </a>



                    <!-- DOWNLOAD -->

                    <a
                        href="#"
                        class="nav-item-custom"
                    >

                        Download

                    </a>



                    <!-- MENU GRID -->

                    <a
                        href="#"
                        class="grid-button"
                        title="Menu"
                    >

                        <i class="bi bi-grid-3x3-gap-fill"></i>

                    </a>

                </div>

            </div>

        </div>

    </nav>



    <!-- =====================================================
         CONTENT
    ====================================================== -->

    <main class="main-content">

        @if (session('success'))

            <div class="container">

                <div class="alert alert-success mt-3">

                    {{ session('success') }}

                </div>

            </div>

        @endif


        @yield('content')

    </main>



    <!-- =====================================================
         FOOTER
    ====================================================== -->

    <footer class="footer-desa">


        <!-- =================================================
             FOOTER UTAMA
        ================================================== -->

        <div class="footer-main">

            <div class="container">

                <div class="row">


                    <!-- =========================================
                         KOLOM 1 — IDENTITAS
                    ========================================== -->

                    <div class="col-lg-4 col-md-6 mb-4">

                        <div class="footer-brand">

                            <div class="footer-brand-top">


                                <img
                                    src="{{ asset('images/logo.png') }}"
                                    alt="Logo Desa Jalatrang"
                                    class="footer-logo"
                                >


                                <div>

                                    <h3>
                                        PEMERINTAH DESA
                                    </h3>

                                    <h3 class="footer-brand-yellow">
                                        JALATRANG
                                    </h3>

                                </div>

                            </div>


                            <div class="footer-address">

                                <div>
                                    Jalan Raya Cipaku Nomor 181
                                </div>

                                <div>
                                    Desa Jalatrang, Kecamatan Cipaku
                                </div>

                                <div>
                                    Kabupaten Ciamis
                                </div>


                                <div class="footer-contact">

                                    <i class="bi bi-telephone-fill"></i>

                                    Pemerintah Desa Jalatrang

                                </div>


                                <div class="footer-contact">

                                    <i class="bi bi-envelope-fill"></i>

                                    Pemerintah Desa Jalatrang

                                </div>

                            </div>


                            <a
                                href="#"
                                class="footer-map"
                            >

                                <i class="bi bi-geo-alt-fill"></i>

                                Lihat Peta

                            </a>

                        </div>

                    </div>



                    <!-- =========================================
                         KOLOM 2 — MENU
                    ========================================== -->

                    <div class="col-lg-3 col-md-6 mb-4">

                        <h4 class="footer-title">

                            MENU

                        </h4>


                        <ul class="footer-menu">

                            <li>

                                <a href="{{ url('/') }}">

                                    <i class="bi bi-chevron-right"></i>

                                    Beranda

                                </a>

                            </li>


                            <li>

                                <a href="{{ route('berita.index') }}">

                                    <i class="bi bi-chevron-right"></i>

                                    Berita

                                </a>

                            </li>


                            <li>

                                <a href="#">

                                    <i class="bi bi-chevron-right"></i>

                                    Struktural

                                </a>

                            </li>


                            <li>

                                <a href="#">

                                    <i class="bi bi-chevron-right"></i>

                                    APBDes

                                </a>

                            </li>


                            <li>

                                <a href="#">

                                    <i class="bi bi-chevron-right"></i>

                                    Prestasi

                                </a>

                            </li>

                        </ul>

                    </div>



                    <!-- =========================================
                         KOLOM 3 — LINK TERKAIT
                    ========================================== -->

                    <div class="col-lg-3 col-md-6 mb-4">

                        <h4 class="footer-title">

                            LINK TERKAIT

                        </h4>


                        <ul class="footer-menu">

                            <li>

                                <a href="#">

                                    <i class="bi bi-box-arrow-up-right"></i>

                                    Kemendesa

                                </a>

                            </li>


                            <li>

                                <a href="#">

                                    <i class="bi bi-box-arrow-up-right"></i>

                                    Kabupaten Ciamis

                                </a>

                            </li>


                            <li>

                                <a href="#">

                                    <i class="bi bi-box-arrow-up-right"></i>

                                    Pemprov Jawa Barat

                                </a>

                            </li>


                            <li>

                                <a href="#">

                                    <i class="bi bi-shield-lock"></i>

                                    Panel Admin

                                </a>

                            </li>

                        </ul>

                    </div>



                    <!-- =========================================
                         KOLOM 4 — MEDIA SOSIAL
                    ========================================== -->

                    <div class="col-lg-2 col-md-6 mb-4">

                        <h4 class="footer-title">

                            MEDIA SOSIAL

                        </h4>


                        <ul class="footer-social">


                            <li>

                                <a href="#">

                                    <i class="bi bi-twitter-x"></i>

                                    twitter/x

                                </a>

                            </li>


                            <li>

                                <a href="#">

                                    <i class="bi bi-facebook"></i>

                                    facebook

                                </a>

                            </li>


                            <li>

                                <a href="#">

                                    <i class="bi bi-youtube"></i>

                                    youtube

                                </a>

                            </li>


                            <li>

                                <a href="#">

                                    <i class="bi bi-instagram"></i>

                                    instagram

                                </a>

                            </li>


                        </ul>

                    </div>


                </div>

            </div>

        </div>



        <!-- =================================================
             COPYRIGHT
        ================================================== -->

        <div class="footer-bottom">

            <div class="container text-center">

                © {{ date('Y') }}
                Pemerintah Desa Jalatrang —
                Semua hak dilindungi

            </div>

        </div>


    </footer>



    <!-- =====================================================
         BOOTSTRAP JS
    ====================================================== -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>


</body>

</html>