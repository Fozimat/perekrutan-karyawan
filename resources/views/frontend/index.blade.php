<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>e-Rekrutmen CV JROSA Tanjungpinang</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets-frontend/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets-frontend/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets-frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-frontend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-frontend/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-frontend/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-frontend/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/lightbox/dist/css/lightbox.min.css') }}">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets-frontend/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="#">E-REKRUTMEN</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assetsff/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#lowongan">Lowongan</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                    <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container position-relative">
            <h1>Selamat Datang di Website</h1>
            <h2>Rekrutmen Online CV JROSA Tanjungpinang</h2>
            <a href="#lowongan" class="btn-get-started scrollto">Join Us</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">



        <!-- ======= Services Section ======= -->
        <section id="lowongan" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Lowongan</h2>
                </div>

                <div class="row">

                    @foreach ($lowongan as $data)
                    <div class="col-lg-6 col-md-6 d-flex align-items-stretch px-4" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div
                            class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <strong class="d-inline-block mb-2 text-primary">{{ $data->posisi }}</strong>
                                <div class="mb-1 text-muted">Diposting: {{ $data->created_at->isoFormat('D MMMM Y') }}
                                </div>
                                <p class="card-text mb-auto">This is a wider card with supporting text below as a
                                    natural lead-in to additional content.</p>
                                <a style="border-radius: 50px;" href="{{ route('login') }}"
                                    class="btn btn-primary">Kirim Lamaran</a>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <a data-lightbox="photos" href="{{ asset('poster/'.$data->poster) }}">
                                    <img src="{{ asset('poster/'.$data->poster) }}" style="width: 200px;height: 250px;">
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Services Section -->





        <!-- ======= Kontak Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Kontak</h2>
                </div>

                <div class="row">

                    <div class="col-lg-6">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <h3>Our Address</h3>
                                    <p>A108 Adam Street, New York, NY 535022</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>info@example.com<br>contact@example.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-phone-call"></i>
                                    <h3>Call Us</h3>
                                    <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <iframe class="mb-4 mb-lg-0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127657.8325778243!2d104.41455673631054!3d0.9170613149076923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d972f6dec85825%3A0xec4ab548c30d02a1!2sTanjungpinang%2C%20Kota%20Tanjung%20Pinang%2C%20Kepulauan%20Riau!5e0!3m2!1sid!2sid!4v1647507615981!5m2!1sid!2sid"
                            frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen=""></iframe>
                    </div>

                </div>

            </div>
        </section><!-- End Kontak Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">



        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    <strong><span>e-Rekrutmen CV JROSA Tanjungpinang</span></strong>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets-frontend/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('assets-frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets-frontend/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets-frontend/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets-frontend/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets-frontend/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets-admin/vendors/lightbox/dist/js/lightbox-plus-jquery.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets-frontend/js/main.js') }}"></script>

</body>

</html>