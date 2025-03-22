<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>تطبيق SignBookOman</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}


    <!-- Favicons -->
    {{-- <link href="{{ asset('assets/img/logoup.png') }}" rel="icon"> --}}
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <!-- <link -->
    <!-- href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" -->
    <!-- rel="stylesheet"> -->


    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/mystyle.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>


    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> -->
    <!-- =======================================================
  * Template Name: Presento
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    @include('layout/navbar')
    <div class="container-fluid px-0" style="margin-top: 80px; background-color:white;">
        <main id="main" class="main">
            <!-- background-color: var(--secndery-color); (--primary-color) -->

            <!-- <div class="divvideo"> -->

            <div id="vidBox" class="vidBox position-fixed border rounded p-0 d-none bg-light shadow "
                style="z-index: 101;">
                <div class="d-flex flex-row p-2 gap-2 justify-content-between" style="flex:0 1 100%;">
                    <div class="float-start">
                        <button id="inc" class="btn rounded-pill px-1">
                            <img src="{{ asset('assets/img/icons/maxicon.png') }}" style="	width: 30px;height: 30px;"
                                alt="...">
                        </button>
                        <button id="dec" class="btn rounded-pill px-1 ">
                            <img src="{{ asset('assets/img/icons/minicon.png') }}" style="	width: 30px;height: 30px;"
                                alt="...">
                        </button>
                    </div>
                    <div>
                        <button class="btn rounded-pill px-1">
                            <img id="touch" src="{{ asset('assets/img/icons/touch.png') }}"
                                style="	width: 20px;height: 30px;" alt="...">
                        </button>
                    </div>
                    <div>
                        <button id="close" class="btn rounded-pill px-1">
                            <img id="close" src="{{ asset('assets/img/icons/removeicon.png') }}"
                                style="	width: 30px;height: 30px;" alt="...">
                        </button>
                    </div>
                </div>
                <div style="position: relative;">
                    <video class="align-bottom rounded " id="video" autoplay controls controlsList="nodownload" disablePictureInPicture>
                        <source src="" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                </div>
                {{-- <div class="divfooter"> --}}
                {{-- <h6>تم عمل هذا الموقع بواسطة نافذ </h6> --}}
                {{-- <h5> powered by Nafith </h5> --}}
                {{-- </div> --}}
            </div>

            <div class="sign">
                <a id="active-vid" class="rounded-pill floating-button ">
                    <img src="{{ asset('assets/img/icons/يد-ترجمه.png') }}" alt="...">
                </a>
            </div>
            @yield('body')
    </div>
    </main>

    @include('layout/footerbar')

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> --}}

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/myjs.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.js') }}"></script>
</body>

</html>
