<!DOCTYPE html>
<html lang="en">



<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - HeroBiz Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{  asset('assets/img/favicon.png')  }}" rel="icon">
  <link href="{{  asset('assets/img/apple-to)uch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{  asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{  asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{  asset('assets/vendor/aos/aos.css" rel="stylesheet') }}">
  <link href="{{  asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{  asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{  asset('assets/css/main.css') }}" rel="stylesheet">

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
        <img src="assets/img/Logo RPL.png" alt="" class="ms-5">
        <h1 class="sitename">RPL</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="" class="text-danger">Home<br></a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#produk">Produk</a></li>
          <li><a href="#galeri">Galeri</a></li>
          <li><a href="#guru">Guru</a></li>
          <li><a href="#siswa">Siswa</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn btn-danger fw-bolder" href="/admin/login">Login Kuy</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
        data-aos="zoom-out">
        <img src="assets/img/Logo RPL.png" class="img-fluid animated" alt="">
        <h1 class="fw-bold">Welcome to <span>Rekayasa Perangkat Lunak</span></h1>
        <p>Rekayasa Perangkat Lunak (RPL) adalah salah satu jurusan unggulan di SMKN 10 Semarang yang fokus pada
          pengembangan kemampuan siswa di bidang teknologi informasi dan pemrograman.</p>
        <div class="d-flex">
          <a href="#about" class="btn btn-danger btn-lg scrollto">Get Started</a>
          <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
            class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch
              Video</span></a>
        </div>
      </div>

    </section><!-- /Hero Section -->


    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="fw-bold">About Us</h2>
        <p>Tentang Rekayasa Perangkat Lunak SMK Negeri 10 Semarang</p>
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
            <h3 class="pt-0 pt-lg-5 fw-medium">SMK Negeri 10 Semarang adalah sekolah kejuruan unggulan yang mencetak
              lulusan kompeten dan siap bersaing di dunia kerja.</h3>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li><a class="nav-link active" data-bs-toggle="pill" href="#about-tab1">Program Keahlian</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#about-tab2">Jurusan RPL</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#about-tab3">Kerja Sama Industri</a></li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="about-tab1">

                <p class="fst-italic">SMKN 10 Semarang menawarkan berbagai program keahlian unggulan.</p>
                <div class="row">
                  <div class="col-mx-6 col-md-6">
                    <div class="d-flex align-items-center mt-4">
                      <i class="bi bi-check2"></i>
                      <h4>Teknik Kendaraan Ringan</h4>
                    </div>

                    <div class="d-flex align-items-center mt-4">
                      <i class="bi bi-check2"></i>
                      <h4>Teknik Sepeda Motor</h4>
                    </div>

                    <div class="d-flex align-items-center mt-4">
                      <i class="bi bi-check2"></i>
                      <h4>Rekayasa Perangkat Lunak</h4>
                    </div>

                    <div class="d-flex align-items-center mt-4">
                      <i class="bi bi-check2"></i>
                      <h4>Nautika Kapal Niaga</h4>
                    </div>
                  </div>

                  <div class="col-mx-6 col-md-6">
                    <div class="d-flex align-items-center mt-4">
                      <i class="bi bi-check2"></i>
                      <h4>Teknik Permesinan Kapal</h4>
                    </div>

                    <div class="d-flex align-items-center mt-4">
                      <i class="bi bi-check2"></i>
                      <h4>Konstruksi Kapal Baja</h4>
                    </div>

                    <div class="d-flex align-items-center mt-4">
                      <i class="bi bi-check2"></i>
                      <h4>Manajemen Ditigal</h4>
                    </div>

                    <div class="d-flex align-items-center mt-4">
                      <i class="bi bi-check2"></i>
                      <h4>Teknik Pengelasan</h4>
                    </div>
                  </div>
                </div>

              </div><!-- End Tab 1 Content -->

              <div class="tab-pane fade" id="about-tab2">

                <div class="d-flex align-items-center mt-2 mb-3">
                  <i class="bi bi-check2"></i>
                  <h4>Penjelasan Rekayasa Perangkat Lunak</h4>
                </div>
                <p>Rekayasa Perangkat Lunak (RPL) adalah salah satu jurusan unggulan di SMKN 10 Semarang yang fokus pada
                  pengembangan kemampuan siswa di bidang teknologi informasi dan pemrograman. Dalam jurusan ini, siswa
                  diajarkan dasar-dasar pemrograman, pengembangan aplikasi berbasis desktop, web, dan mobile, serta
                  pengelolaan basis data. Selain itu, siswa juga dilatih untuk memahami siklus pengembangan perangkat
                  lunak, mulai dari analisis kebutuhan, desain, implementasi, hingga pengujian dan pemeliharaan
                  aplikasi. Pembelajaran dilakukan dengan pendekatan berbasis proyek agar siswa dapat langsung
                  menerapkan ilmu yang dipelajari dalam simulasi dunia kerja.
                  <br><br>
                  Jurusan RPL di SMKN 10 Semarang dilengkapi dengan fasilitas laboratorium komputer yang canggih dan
                  perangkat lunak terkini untuk mendukung proses pembelajaran. Siswa juga memiliki peluang untuk
                  mengikuti program magang di perusahaan teknologi terkemuka, sehingga dapat memperoleh pengalaman
                  langsung dalam dunia kerja. Dengan kurikulum yang terus disesuaikan dengan perkembangan teknologi,
                  lulusan RPL dipersiapkan untuk menjadi programmer, software developer, atau bahkan technopreneur yang
                  siap bersaing di era digital.
                </p>

              </div><!-- End Tab 2 Content -->

              <div class="tab-pane fade clients" id="about-tab3">
                <section class="clients">
                  <div class="container" data-aos="fade-up">

                    <div class="row client-logo">
                      <div class="col-xl-6 col-md-6 col-3">
                        <div class="d-flex">
                          <img src="assets/img/clients/bpkpcg.png" class="img-fluid me-5" alt="">
                          <img src="assets/img/clients/crocodic.png" class="img-fluid mt-3 me-5" alt="">
                          <img src="assets/img/clients/itho.png" class="img-fluid mt-3 me-5" alt="">
                        </div>
                      </div><!-- End Client Item -->
                    </div>
                    <div class="row client-logo">
                      <div class="col-xl-6 col-md-6 col-3">
                        <div class="d-flex">
                          <img src="assets/img/clients/logosmkn10.png" class="img-fluid me-5" alt="">
                          <img src="assets/img/clients/educourse.png" class="img-fluid mt-3 me-5" alt="">
                          <img src="assets/img/clients/zicare.png" class="img-fluid mt-3 me-5 " alt="">
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

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">

      <div class="container" data-aos="zoom-out">

        <div class="row g-5">

          <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
            <h3 class="text-danger">Ardan Sirodjuddin, S.Pd</h3>
            <h4 class="fw-bold text-primary-emphasis">Kepala Sekolah SMKN 10 Semarang</h4>
            <p> Ardan Sirodjuddin, S.Pd., M.Pd., lahir di Brebes pada 8 Oktober 1973, saat ini menjabat sebagai Kepala
              Sekolah SMK Negeri 10 Semarang sejak 10 Januari 2022.
              SMKN 10 SEMARANG
              Beliau meraih gelar Sarjana Pendidikan Kimia pada tahun 1997 dan Magister Manajemen Pendidikan pada tahun
              2023.</p>
            <a class="cta-btn align-self-start" href="#">Call To Action</a>
          </div>

          <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
            <div class="img">
              <img src="assets/img/team/pak_ardan.png" alt="" class="img-fluid">
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Call To Action Section -->

    <!-- Onfocus Section -->
    <section id="onfocus" class="onfocus section dark-background">

      <div class="container-fluid p-0" data-aos="fade-up">

        <div class="row g-0">
          <div class="col-lg-6 video-play position-relative">
            <a href="https://www.youtube.com/watch?v=zw12xM9hKDg&pp=ygUocmVrYXlhc2EgcGVyYW5na2EgbHVuYWsgc21rbiAxMCBzZW1hcmFuZw%3D%3D"
              class="glightbox pulsating-play-btn"></a>
          </div>
          <div class="col-lg-6">
            <div class="content d-flex flex-column justify-content-center h-100">
              <h3 class="fw-bolder text-danger">Lab Komputer
                <h3 class="fw-medium">
                  Rekayasa Perangkat Lunak
                </h3>
              </h3>
              <p class="">
                Rekayasa Perangkat Lunak (RPL) adalah salah satu jurusan di bidang teknologi informasi yang fokus pada
                pengembangan perangkat lunak. Jurusan ini mengajarkan siswa tentang konsep, desain, pengembangan,
                pengujian, dan pemeliharaan perangkat lunak menggunakan berbagai teknologi dan bahasa pemrograman.
              </p>
              <p class="">
                Siswa RPL mempelajari:
              </p>
              <ul>
                <li><i class="bi bi-check-circle"></i> Pemrograman (seperti Python, Java, atau PHP).</li>
                <li><i class="bi bi-check-circle"></i> Database Management untuk pengelolaan data.</li>
                <li><i class="bi bi-check-circle"></i> Pengembangan Aplikasi Web dan Mobile.</li>
                <li><i class="bi bi-check-circle"></i> Analisis Sistem untuk merancang solusi teknologi yang efisien.
                </li>
              </ul>
              <a href="#" class="read-more align-self-start"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Onfocus Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row gy-4 d-flex">

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
              <img src="assets/img/bahasa/html.png" alt="" style="width: 50px;">
            </a>
          </li><!-- End Tab 1 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
              <img src="assets/img/bahasa/php.png" alt="" style="width: 50px;">
            </a>
          </li><!-- End Tab 2 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
              <img src="assets/img/bahasa/js.png" alt="" style="width: 75px;">
            </a>
          </li><!-- End Tab 3 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
              <img src="assets/img/bahasa/kotlin.png" alt="" style="width: 100px;">
            </a>
          </li><!-- End Tab 4 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-5">
              <img src="assets/img/bahasa/flutter.png" alt="" style="width: 50px;">
            </a>
          </li><!-- End Tab 5 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-6">
              <img src="assets/img/bahasa/laravel.png" alt="" style="width: 100px;">
            </a>
          </li><!-- End Tab 6 Nav -->

        </ul>

        <div class="tab-content">

          <div class="tab-pane fade active show" id="features-tab-1">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                <h3>HTML</h3>
                <p class="fst-italic">

                  HTML (HyperText Markup Language) adalah bahasa pemrograman dasar untuk membuat struktur dan konten
                  halaman web. Berikut adalah beberapa poin penting tentang HTML:
                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Struktur Halaman Web: HTML digunakan untuk menyusun
                    elemen-elemen dasar di halaman web, seperti teks, gambar, dan tautan.
                  </li>
                  <li><i class="bi bi-check-circle-fill"></i> Penggunaan Tag: HTML menggunakan tag untuk mendefinisikan
                    elemen-elemen, contohnya "h1" untuk judul, "p"" untuk paragraf, dan "a" untuk tautan.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Integrasi dengan CSS dan JavaScript: HTML sering
                    digabungkan dengan CSS untuk desain dan JavaScript untuk interaktivitas.</li>
                </ul>
                <p>
                  HTML adalah komponen penting yang membentuk struktur dasar dari halaman web modern.
                </p>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/features-1.svg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content 1 -->

          <div class="tab-pane fade" id="features-tab-2">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1">
                <h3>PHP</h3>
                <p>
                  PHP (Hypertext Preprocessor) adalah bahasa pemrograman server-side yang digunakan untuk mengembangkan
                  aplikasi web dinamis. Berikut adalah beberapa poin penting tentang PHP:
                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Pemrosesan Server-Side: PHP dijalankan di server dan
                    menghasilkan HTML yang dikirim ke browser pengguna, memungkinkan pembuatan situs web dinamis.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Interaksi dengan Database: PHP sangat sering digunakan
                    untuk berinteraksi dengan database seperti MySQL untuk menyimpan dan mengambil data, misalnya untuk
                    sistem login atau pengelolaan konten.
                  </li>
                  <li><i class="bi bi-check-circle-fill"></i> Pengolahan Formulir: PHP memproses data yang dikirim
                    melalui formulir HTML, memungkinkan aplikasi web untuk menerima input pengguna dan merespons sesuai
                    kebutuhan.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Dukungan untuk Banyak Framework: PHP mendukung berbagai
                    framework seperti Laravel, Symfony, dan CodeIgniter yang mempermudah pengembangan aplikasi web.</li>
                </ul>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
                <img src="assets/img/features-2.svg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content 2 -->

          <div class="tab-pane fade" id="features-tab-3">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1">
                <h3>JavaScript</h3>
                <p>
                  JavaScript adalah bahasa pemrograman yang digunakan untuk membuat halaman web interaktif dan dinamis.
                  Berikut adalah beberapa poin penting tentang JavaScript:
                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Pemrograman Client-Side: JavaScript dijalankan di sisi
                    klien (browser), memungkinkan halaman web untuk merespons tindakan pengguna secara real-time tanpa
                    memuat ulang halaman.</li>
                  <li><i class="bi bi-check-circle-fill"></i> JavaScript dapat mengakses dan memanipulasi DOM (Document
                    Object Model) untuk mengubah elemen-elemen HTML dan CSS secara dinamis.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Framework dan Library: JavaScript memiliki berbagai
                    framework dan library seperti React, Angular, dan Vue.js, yang memudahkan pengembangan aplikasi web
                    yang lebih kompleks.</li>
                </ul>
                <p class="fst-italic">
                  JavaScript adalah bahasa yang penting untuk pengembangan web modern, memberi kemampuan untuk membuat
                  aplikasi web yang dinamis dan responsif terhadap interaksi pengguna.
                </p>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
                <img src="assets/img/features-3.svg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content 3 -->

          <div class="tab-pane fade" id="features-tab-4">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1">
                <h3>Kotlin</h3>
                <p>
                  Kotlin adalah bahasa pemrograman modern yang digunakan untuk mengembangkan aplikasi, terutama di
                  platform Android. Berikut adalah beberapa poin penting tentang Kotlin:
                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Bahasa yang Ringan dan Efisien: Kotlin dirancang untuk
                    lebih ringkas dan efisien dibandingkan Java, mengurangi boilerplate code dan meningkatkan
                    produktivitas pengembang.
                  </li>
                  <li><i class="bi bi-check-circle-fill"></i> Pemrograman Berorientasi Objek dan Fungsional: Kotlin
                    mendukung paradigma pemrograman berorientasi objek dan fungsional, memberi fleksibilitas dalam
                    memilih gaya pengembangan.
                  </li>
                  <li><i class="bi bi-check-circle-fill"></i>Pustaka dan Framework: Kotlin mendukung berbagai pustaka
                    dan framework yang populer, seperti Ktor (untuk aplikasi server) dan Jetpack Compose (untuk UI
                    Android.)</li>
                </ul>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
                <img src="assets/img/features-4.svg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content 4 -->

          <div class="tab-pane fade" id="features-tab-5">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1">
                <h3>Flutter</h3>
                <p>

                  Flutter adalah framework open-source yang digunakan untuk membangun aplikasi mobile, web, dan desktop
                  dari satu kode sumber. Berikut adalah beberapa poin penting tentang Flutter:
                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Pengembangan Aplikasi Cross-Platform: Flutter memungkinkan
                    pengembangan aplikasi untuk berbagai platform (Android, iOS, web, dan desktop) hanya dengan satu
                    kode sumber, menghemat waktu dan usaha pengembangan.
                  </li>
                  <li><i class="bi bi-check-circle-fill"></i> Bahasa Pemrograman Dart: Flutter menggunakan bahasa
                    pemrograman Dart yang dirancang untuk kecepatan eksekusi dan pengembangan aplikasi yang efisien.
                  </li>
                  <li><i class="bi bi-check-circle-fill"></i> Widget yang Kustomizable: Flutter mengandalkan penggunaan
                    widget untuk membangun antarmuka pengguna. Pengembang dapat menggunakan widget bawaan atau membuat
                    widget kustom untuk desain yang lebih fleksibel dan responsif.</li>
                </ul>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
                <img src="assets/img/features-5.svg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content 5 -->

          <div class="tab-pane fade" id="features-tab-6">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1">
                <h3>Laravel</h3>
                <p>

                  Laravel adalah framework PHP yang digunakan untuk mengembangkan aplikasi web yang efisien dan elegan.
                  Berikut adalah beberapa poin penting tentang Laravel:
                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> MVC (Model-View-Controller): Laravel mengikuti arsitektur
                    MVC, yang memisahkan logika aplikasi (Model), antarmuka pengguna (View), dan pengendalian aplikasi
                    (Controller), sehingga memudahkan pengelolaan kode dan pengembangan aplikasi.
                  </li>
                  <li><i class="bi bi-check-circle-fill"></i> Routing yang Sederhana: Laravel menyediakan sistem routing
                    yang fleksibel dan mudah digunakan, memungkinkan pengembang untuk mendefinisikan URL dan
                    menghubungkannya dengan fungsi atau controller tertentu.
                  </li>
                  <li><i class="bi bi-check-circle-fill"></i> ORM Eloquent: Laravel dilengkapi dengan Eloquent ORM
                    (Object-Relational Mapping), yang memungkinkan pengembang berinteraksi dengan database menggunakan
                    objek PHP, tanpa menulis query SQL secara manual.</li>
                </ul>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
                <img src="assets/img/features-6.svg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content 6 -->

        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- Produk Section -->
    <section id="produk" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Produk Kami</h2>
        <p>SMKN 10 Semarang dapat membantu anda untuk menciptakan berbagai produk menarik, sebagai berikut</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-activity"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>Web Design</h3>
                </a>
                <p>Web design adalah proses merancang tampilan dan pengalaman pengguna (UX) dari sebuah situs web atau
                  aplikasi web.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/services-2.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-broadcast"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>Web Development</h3>
                </a>
                <p>
                  Pekerjaan web development mencakup pengembangan, pemeliharaan, dan pembaruan situs web atau aplikasi
                  web. </p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/services-3.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-easel"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>Product Management</h3>
                </a>
                <p>Product management adalah proses perencanaan, pengembangan, dan peluncuran produk yang bertujuan
                  untuk memenuhi kebutuhan pasar dan menciptakan nilai bagi pengguna serta perusahaan.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/services-4.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-bounding-box-circles"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>Marketing</h3>
                </a>
                <p>Marketing adalah proses merencanakan dan melaksanakan konsep, penetapan harga, promosi, dan
                  distribusi ide, barang, atau layanan untuk menciptakan pertukaran yang memenuhi tujuan individu dan
                  organisasi.</p>
                <a href="service-details.html" class="stretched-link"></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/services-5.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-calendar4-week"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>Graphic Design</h3>
                </a>
                <p>Graphic design adalah seni dan praktik menciptakan konten visual untuk komunikasi pesan yang efektif.
                </p>
                <a href="service-details.html" class="stretched-link"></a>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Portfolio Section -->
    <section id="galeri" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="fw-bolder">Galeri</h2>
        <p>Kegiatan pembelajaran jurusan RPL di SMKN 10 Semarang</p>
      </div><!-- End Section Title -->

      <div class="container-fluid">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

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
                  <a href="assets/img/portfolio/product-1.jpg" data-gallery="portfolio-gallery-product"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/branding-1.jpg" data-gallery="portfolio-gallery-branding"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
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
                  <a href="assets/img/portfolio/product-2.jpg" data-gallery="portfolio-gallery-product"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/branding-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/branding-2.jpg" data-gallery="portfolio-gallery-branding"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
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
                  <a href="assets/img/portfolio/product-3.jpg" data-gallery="portfolio-gallery-product"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/branding-3.jpg" data-gallery="portfolio-gallery-branding"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
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
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="fw-bolder">Contact</h2>
        <p>Hubungi Kami Untuk Informasi Lebih Lanjut</p>
      </div><!-- End Section Title -->

      <div class="mb-5">
        <iframe style="width: 100%; height: 400px;"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12334.880846906904!2d110.3835601796412!3d-6.966423842206338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70f4c8081bffaf%3A0xbb522f8061199b3!2sSMK%20Negeri%2010%20Semarang!5e1!3m2!1sid!2sus!4v1736919503381!5m2!1sid!2sus"
          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade" frameborder="0" allowfullscreen=""></iframe>
      </div><!-- End Google Maps -->

      <div class="container" data-aos="fade">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info">
              <h3>Rekayasa Perangkat Lunak</h3>
              <p>Apabila ada beberapa pertanyaan langsung isi kolom komentar dikanan ini</p>

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>Jl. Kokrosono No.75, Semarang, 50178</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>smkn10smg@yahoo.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" placeholder="Message" required=""></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="index.html" class="logo d-flex align-items-center">
              <span class="sitename">Rekayasa Perangkat Lunak</span>
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
            <img src="assets/img/Logo RPL.png" alt="" style="margin-left: 200px;">
          </div>

        </div>
      </div>
    </div>

    <div class="copyright text-center">
      <div
        class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div>
            © Copyright <strong><span>Misupa</span></strong>. All Rights Reserved
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