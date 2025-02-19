<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - HeroBiz Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-to)uch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css" rel="stylesheet') }}">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: HeroBiz
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="assets/img/simikael.png" alt="" class="ms-5">
                <h1 class="sitename">RPL</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="" class="text-danger">Home<br></a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#galeri">Galeri</a></li>
                    <li><a href="#guru">Guru</a></li>
                    <li><a href="#siswa">Siswa</a></li>
                    <li><a href="#place">Place</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn btn-danger fw-bolder" href="/admin/login">Ajukan PKL</a>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
                data-aos="zoom-out">
                <img src="assets/img/simikael.png" class="img-fluid animated" alt="">
                <h1 class="fw-bold">Welcome to <span>SIMIKAEL</span></h1>
                <p>Digitalisasi Pengajuan PKL, Mudah, Cepat, Transparan!</p>
                <div class="d-flex">
                    <a href="/admin/login" class="btn btn-danger btn-lg scrollto">Ajukan Praktik Kerja Lapangan</a>
                </div>
            </div>

        </section><!-- /Hero Section -->


        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2 class="fw-bold">About Us</h2>
                <p>Tentang Sistem Informasi Manejemen Pengajuan Praktik Kerja Lapangan Elektronik</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up">

                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-5">
                        <div class="about-img">
                            <img src="assets/img/about-us.png" class="img-fluid" alt=""
                                style="width: 400px; height: 400px; object-fit: cover;">
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <h3 class="pt-0 pt-lg-5 fw-medium">SIMIKAEL adalah sebuah aplikasi inovatif yang dirancang untuk
                            mempermudah proses pengajuan Praktik Kerja Lapangan (PKL) bagi siswa SMKN 10 Semarang.</h3>

                        <!-- Tabs -->
                        <ul class="nav nav-pills mb-3">
                            <li><a class="nav-link active" data-bs-toggle="pill" href="#about-tab1">Program Keahlian</a>
                            </li>
                            <li><a class="nav-link" data-bs-toggle="pill" href="#about-tab2">Jurusan RPL</a></li>
                            <li><a class="nav-link" data-bs-toggle="pill" href="#about-tab3">Kerja Sama Industri</a>
                            </li>
                        </ul><!-- End Tabs -->

                        <!-- Tab Content -->
                        <div class="tab-content">

                            <div class="tab-pane fade show active" id="about-tab1">

                                <p class="fst-italic">Aplikasi ini dikembangkan oleh IOTek, sebuah software house yang
                                    berfokus pada solusi digital berbasis teknologi modern, guna mendukung transformasi
                                    digital di lingkungan pendidikan.
                                </p>
                                <div class="row">
                                    <div class="col-mx-6 col-md-6">
                                        <div class="d-flex align-items-center mt-4">
                                            <i class="bi bi-check2"></i>
                                            <h4>Efisiensi Pengajuan</h4>
                                        </div>

                                        <div class="d-flex align-items-center mt-4">
                                            <i class="bi bi-check2"></i>
                                            <h4>Transparansi dan Kejelasan Proses</h4>
                                        </div>

                                        <div class="d-flex align-items-center mt-4">
                                            <i class="bi bi-check2"></i>
                                            <h4>Kemudahan bagi Sekolah dan Industri</h4>
                                        </div>
                                    </div>

                                    <div class="col-mx-6 col-md-6">
                                        <div class="d-flex align-items-center mt-4">
                                            <i class="bi bi-check2"></i>
                                            <h4>Keamanan dan Akurasi Data</h4>
                                        </div>

                                        <div class="d-flex align-items-center mt-4">
                                            <i class="bi bi-check2"></i>
                                            <h4>Digitalisasi dan Ramah Lingkungan</h4>
                                        </div>

                                        <div class="d-flex align-items-center mt-4">
                                            <i class="bi bi-check2"></i>
                                            <h4>Dikembangkan oleh Software House Profesional</h4>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- End Tab 1 Content -->

                            <div class="tab-pane fade" id="about-tab2">

                                <div class="d-flex align-items-center mt-2 mb-3">
                                    <i class="bi bi-check2"></i>
                                    <h4>Penjelasan SIMIKAEL</h4>
                                </div>
                                <p>Dengan menerapkan sistem digitalisasi, aplikasi ini memungkinkan siswa untuk
                                    mengajukan PKL secara lebih efisien tanpa perlu menggunakan dokumen fisik yang
                                    rentan hilang atau rusak. Tidak hanya itu, SIMIKAEL juga dilengkapi dengan fitur
                                    validasi otomatis yang memastikan setiap pengajuan sesuai dengan ketentuan yang
                                    berlaku, sehingga memudahkan pihak sekolah dalam memantau dan menyetujui permohonan
                                    PKL secara transparan dan akurat. Aplikasi ini dikembangkan oleh IOTek, sebuah
                                    software house yang berfokus pada solusi digital berbasis teknologi modern, guna
                                    mendukung transformasi digital di lingkungan pendidikan. Dengan adanya SIMIKAEL,
                                    diharapkan proses PKL menjadi lebih terstruktur, cepat, dan mudah diakses oleh
                                    seluruh siswa SMKN 10 Semarang.
                                </p>

                            </div><!-- End Tab 2 Content -->

                            <div class="tab-pane fade clients" id="about-tab3">
                                <section class="clients">
                                    <div class="container" data-aos="fade-up">

                                        <div class="row client-logo">
                                            <div class="col-xl-6 col-md-6 col-3">
                                                <div class="d-flex">
                                                    <img src="assets/img/clients/bpkpcg.png" class="img-fluid me-5"
                                                        alt="">
                                                    <img src="assets/img/clients/crocodic.png"
                                                        class="img-fluid mt-3 me-5" alt="">
                                                    <img src="assets/img/clients/itho.png" class="img-fluid mt-3 me-5"
                                                        alt="">
                                                </div>
                                            </div><!-- End Client Item -->
                                        </div>
                                        <div class="row client-logo">
                                            <div class="col-xl-6 col-md-6 col-3">
                                                <div class="d-flex">
                                                    <img src="assets/img/clients/logosmkn10.png"
                                                        class="img-fluid me-5" alt="">
                                                    <img src="assets/img/clients/educourse.png"
                                                        class="img-fluid mt-3 me-5" alt="">
                                                    <img src="assets/img/clients/zicare.png"
                                                        class="img-fluid mt-3 me-5 " alt="">
                                                </div>
                                            </div><!-- End Client Item -->
                                        </div>

                                    </div>
                                </section>
                            </div><!-- End Tab 3 Content -->

                        </div>

                    </div>

                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Portfolio Section -->
        <section id="galeri" class="portfolio section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2 class="fw-bolder">Galeri</h2>
                <p>Kegiatan pembelajaran jurusan RPL di SMKN 10 Semarang</p>
            </div><!-- End Section Title -->

            <div class="container-fluid">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry"
                    data-sort="original-order">

                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-product">Product</li>
                        <li data-filter=".filter-branding">Branding</li>
                        <li data-filter=".filter-books">Books</li>
                    </ul><!-- End Portfolio Filters -->

                    <div class="row g-0 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/product-1.jpg"
                                        data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/branding-1.jpg"
                                        data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/books-1.jpg" data-gallery="portfolio-gallery-book"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/app-2.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/product-2.jpg"
                                        data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/branding-2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/branding-2.jpg"
                                        data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/books-2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/books-2.jpg" data-gallery="portfolio-gallery-book"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/app-3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/app-3.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/product-3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/product-3.jpg"
                                        data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/branding-3.jpg"
                                        data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/books-3.jpg" data-gallery="portfolio-gallery-book"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section><!-- /Portfolio Section -->

        <!-- Team Section -->
        <section id="guru" class="team section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Guru Jurusan RPL</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-5">

                    <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="assets/img/team/pak_sona.png" class="img-fluid w-76 h-50" alt="">
                            </div>
                            <div class="member-info">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                                <h4>Sonalita Wiguna, S.Pd.</h4>
                                <span>Guru Produktif RPL</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="400">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="assets/img/team/pak_gatot.png" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                                <h4>R. Gatot Nurhadi Priyono, S.Kom</h4>
                                <span>Guru Produktif RPL</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="assets/img/team/bu_endang.png" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                                <h4>Endang Widayati, S.Kom</h4>
                                <span>Guru Produktif RPL</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>

        </section><!-- /Team Section -->

        <!-- Recent Posts Section -->
        <section id="siswa" class="recent-posts section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2 class="fw-bolder">Siswa RPL</h2>
                <p>Beberapa Siswa RPL SMKN 10 Semarang</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <article>

                            <div class="post-img">
                                <img src="assets/img/team/murid/Imman.jpg" alt="" class="img-fluid">
                            </div>

                            <p class="post-category">XI RPL 1</p>

                            <h2 class="title">
                                <a href="blog-details.html">Immanuel</a>
                            </h2>

                        </article>
                    </div><!-- End post list item -->

                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <article>

                            <div class="post-img">
                                <img src="assets/img/team/murid/joel.jpg" alt="" class="img-fluid">
                            </div>

                            <p class="post-category">XII RPL 1</p>

                            <h2 class="title">
                                <a href="blog-details.html">Joel Nissi</a>
                            </h2>

                        </article>
                    </div><!-- End post list item -->

                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <article>

                            <div class="post-img">
                                <img src="assets/img/team/murid/Jovan.jpg" alt="" class="img-fluid">
                            </div>

                            <p class="post-category">XII RPL 1</p>

                            <h2 class="title">
                                <a href="blog-details.html">Jovan Atha</a>
                            </h2>

                        </article>
                    </div><!-- End post list item -->

                </div><!-- End recent posts list -->

            </div>

        </section><!-- /Recent Posts Section -->

        <!-- Contact Section -->
        <section id="place" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2 class="fw-bolder">Software House IOTek</h2>
                <p>Hubungi Kami Untuk Informasi Lebih Lanjut</p>
            </div><!-- End Section Title -->

            <div class="mb-5">
                <iframe style="width: 100%; height: 400px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12334.880846906904!2d110.3835601796412!3d-6.966423842206338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70f4c8081bffaf%3A0xbb522f8061199b3!2sSMK%20Negeri%2010%20Semarang!5e1!3m2!1sid!2sus!4v1736919503381!5m2!1sid!2sus"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" frameborder="0" allowfullscreen=""></iframe>
            </div><!-- End Google Maps -->

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer dark-background">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 footer-about">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span class="sitename">SIMIKAEL</span>
                        </a>
                        <div class="footer-contact pt-3">
                            <p>Jl. Kokrosono No.75</p>
                            <p>Semarang, 50178</p>
                            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                            <p><strong>Email:</strong> <span>smkn10smg@yahoo.com</span></p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Terms of service</a></li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">Product Management</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <img src="assets/img/simikael.png" alt="" style="margin-left: 200px; width: 300px">
                    </div>

                </div>
            </div>
        </div>

        <div class="copyright text-center">
            <div
                class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    <div>
                        © Copyright <strong><span>IOTek</span></strong>. All Rights Reserved
                    </div>
                </div>

                <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>

            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
