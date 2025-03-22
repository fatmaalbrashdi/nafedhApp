<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center  justify-content-between">
        <h1 class="logo">
            
             
            </a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <?php echo e(request()); ?> -->
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto <?php echo e((request()->is('/')) ? 'active' : ''); ?>" href="<?php echo e(url('/')); ?>">الرئيسية</a></li>
                <li><a class="nav-link scrollto <?php echo e((request()->path()==='about') ? 'active' : ''); ?>" href="<?php echo e(url('about')); ?>">من
                        نحن</a></li>
                <li><a class="nav-link scrollto <?php echo e((request()->is('services')) ? 'active' : ''); ?>"
                        href="services">خدماتنا</a></li>
                <li><a class="nav-link scrollto <?php echo e((request()->is('contact')) ? 'active' : ''); ?>" href="contact">تواصل
                        معنا</a></li>
                <li><a class="nav-link scrollto <?php echo e((request()->is('questions')) ? 'active' : ''); ?>"
                        href="questions">الأسئلة الأكثر شيوعاً</a></li>
                <li class=" d-sm-none">
                    <div class="social-icon  d-flex align-items-center mx-auto  justify-content-around">
                        <a href="https://www.youtube.com/@SignBookOman" class="youtube"><i
                                class="bi bi-youtube "></i></a>
                        <a href="https://api.whatsapp.com/send?phone=96891444902" class="whatsappe"><i
                                class="bi bi-whatsapp"></i></a>
                        <a href="https://instagram.com/signbook_oman?igshid=YmMyMTA2M2Y=" class="instagram"><i
                                class="bi bi-instagram"></i></a>
                        <a href="https://twitter.com/SignBook_Oman?t=IFuh0NDjZUcXvwA0e4gIlw&s=09"><i
                        class="bi bi-twitter-x"></i></i></a>
                    </div>
                </li>
            </ul>

        </nav>
        <!-- web -->
        <div class="social-icon social-links  d-none d-md-flex align-items-center">
            <ul>
                <li> <a href="https://www.youtube.com/@SignBookOman" class="youtube"><i
                            class="bi bi-youtube "></i></a></li>
                <li> <a href="https://api.whatsapp.com/send?phone=96891444902" class="whatsappe"><i
                            class="bi bi-whatsapp"></i></a></li>
                <li> <a href="https://instagram.com/signbook_oman?igshid=YmMyMTA2M2Y=" class="instagram"><i
                            class="bi bi-instagram"></i></a></li>
                <li> <a href="https://twitter.com/SignBook_Oman?t=IFuh0NDjZUcXvwA0e4gIlw&s=09" class="twitter"><i
                            class="bi bi-twitter-x"></i></i></a></li>
            </ul>
        </div>
        <i class="bi bi-list mobile-nav-toggle"></i>
        
    </div>
</header>
<!-- End Header -->
<?php /**PATH C:\Users\fatma\Desktop\project1\nafedhApp\resources\views/layout/navbar.blade.php ENDPATH**/ ?>