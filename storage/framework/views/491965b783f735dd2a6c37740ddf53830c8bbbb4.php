<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>تطبيق SignBookOman</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    


    <!-- Favicons -->
    
    <link href="<?php echo e(asset('assets/img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <!-- <link -->
    <!-- href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" -->
    <!-- rel="stylesheet"> -->


    <!-- Vendor CSS Files -->
    <link href="<?php echo e(asset('assets/vendor/aos/aos.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/mystyle.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('assets/js/jquery-3.7.1.min.js')); ?>"></script>


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

    <?php echo $__env->make('layout/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container-fluid px-0" style="margin-top: 80px; background-color:white;">
        <main id="main" class="main">
            <!-- background-color: var(--secndery-color); (--primary-color) -->

            <!-- <div class="divvideo"> -->

            <div id="vidBox" class="vidBox position-fixed border rounded p-0 d-none bg-light shadow "
                style="z-index: 101;">
                <div class="d-flex flex-row p-2 gap-2 justify-content-between" style="flex:0 1 100%;">
                    <div class="float-start">
                        <button id="inc" class="btn rounded-pill px-1">
                            <img src="<?php echo e(asset('assets/img/icons/maxicon.png')); ?>" style="	width: 30px;height: 30px;"
                                alt="...">
                        </button>
                        <button id="dec" class="btn rounded-pill px-1 ">
                            <img src="<?php echo e(asset('assets/img/icons/minicon.png')); ?>" style="	width: 30px;height: 30px;"
                                alt="...">
                        </button>
                    </div>
                    <div>
                        <button class="btn rounded-pill px-1">
                            <img id="touch" src="<?php echo e(asset('assets/img/icons/touch.png')); ?>"
                                style="	width: 20px;height: 30px;" alt="...">
                        </button>
                    </div>
                    <div>
                        <button id="close" class="btn rounded-pill px-1">
                            <img id="close" src="<?php echo e(asset('assets/img/icons/removeicon.png')); ?>"
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
                
                
                
                
            </div>

            <div class="sign">
                <a id="active-vid" class="rounded-pill floating-button ">
                    <img src="<?php echo e(asset('assets/img/icons/يد-ترجمه.png')); ?>" alt="...">
                </a>
            </div>
            <?php echo $__env->yieldContent('body'); ?>
    </div>
    </main>

    <?php echo $__env->make('layout/footerbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Vendor JS Files -->
    <script src="<?php echo e(asset('assets/vendor/purecounter/purecounter_vanilla.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/aos/aos.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/php-email-form/validate.js')); ?>"></script>
    

    <!-- Template Main JS File -->
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/myjs.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/swiper.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\Users\fatma\Desktop\project1\nafedhApp\resources\views/layout/app.blade.php ENDPATH**/ ?>