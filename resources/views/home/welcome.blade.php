@extends('layout.app')

@section('title', 'welcome')

@section('body')

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        {{-- <div id="carouselExampleCaptions" class="carousel slide h-100" data-aos="zoom-out" data-aos-delay="100"
            style="height:30erm;">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" >
                    <div class="row">
                        <div class="col-12">
                            <div class="align-items-center d-flex">
                                <img src="{{ asset('assets/img/تغير.png') }}" class="d-block img img-fluid w-100 h-100"
                                    alt="...">
                            </div>
                            <div class="carousel-caption d-md-block">
                                <div class="row">
                                    <div class="col-12 col-md-3">
                                        <div class="p-2">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-5">
                                        <div class="p-2">
                                            <h3 style=" font-size: 26px;"
                                                class=" vid " vid-path="{{ asset('assets/vid/33.mp4') }}">
                                                أول مـــنصـة رقمية <span style="color: #FED303;">عُــــــمانيـة</span>
                                                لتمكين الأشخاص ذوي الإعاقة
                                            </h3>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             
              <div class="carousel-item " style="background-color: #0DA4AE;">
                    <div class="row flex-column-reverse flex-md-row" >
                        <div class="col-12 col-md-6 ">
                            <div class="p-2 d-flex align-items-center h-100 justify-content-center mx-3">
                                <p style="text-align: justify;" class="vid " vid-path="{{ asset('assets/vid/33.mp4') }}">
                                    حـــصل تـطبيق<span style="color: #FED303;"> نافـذ </span>(SignBook سـابقاً)
                                    على جائزة مدى-ألكسو لأفضل التطبيقات
                                    الجـــوالة لـفائدة الأشخاص ذوي الإعاقـة
                                    وكـــبار السن لـــــعـام 2020 مــن بين 449
                                    متنافسا من الوطن العربي.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="p-2 align-items-center d-flex">
                                <img src="{{ asset('assets/img/مدى3.png') }}" class="d-block img img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                </div> 
             
               <div class="carousel-item h-100" style="background-color: #FFFACD;" style="height:400px">
                    <div class="row">
                        <div class="col-1 col-md-1">
                        </div>
                        <div class="col-5 col-md-5">
                            <div class="p-2 d-flex align-items-center h-100">
                                <h3 style="text-align: justify;color: #000000; " class=" vid "
                                    vid-path="{{ asset('assets/vid/33.mp4') }}">
                                    <b> جــائزة الإجــادة الـــشبابـية </b>
                                    في مجال الاقتصاد الرقمي
                                    لعام <b> 2023</b>
                                </h3>
                            </div>
                        </div>
                        <div class="col-6 col-md-6" style="height:400px">
                            <img src="{{ asset('assets/img/ج.png') }}" class="d-block w-100" alt="...">
                        </div>

                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div> --}}

        {{-- <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row flex-md-row">
                        <div class="col-12">
                            <img src="{{ asset('assets/img/تغير.png') }}" class="d-block img img-fluid w-100"
                                alt="...">
                        </div>
                        <div class="carousel-caption d-md-block">
                            <div class="row flex-md-row m-2">
                                <div class="col-6 col-md-5">
                                    <div class="p-2 d-flex align-items-center justify-content-center gap-2">
                                        <h3 class="vid" style="font-size: 1.5rem;"
                                            vid-path="{{ asset('assets/vid/33.mp4') }}">
                                            أول مـــنصـة رقمية <span style="color: #FED303;">عُــــــمانيـة</span>
                                            لتمكين الأشخاص ذوي الإعاقة
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <div class="row flex-md-row">
                        <div class="col-12">
                            <img src="{{ asset('assets/img/مدى2.png') }}"
                                class="d-block img img-fluid w-100 overflow-hidden" alt="...">
                        </div>
                        <div class="carousel-caption d-md-block">
                            <div class="row flex-md-row">
                                <div class="col-7 col-md-4">
                                    <div class="p-2  align-items-center justify-content-center mx-3">
                                        <p style="text-align: justify;" class="vid"
                                            vid-path="{{ asset('assets/vid/33.mp4') }}">
                                            حـــصل تـطبيق<span style="color: #FED303;"> نافـذ </span>(SignBook سـابقاً)
                                            على جائزة مدى-ألكسو لأفضل التطبيقات
                                            الجـــوالة لـفائدة الأشخاص ذوي الإعاقـة
                                            وكـــبار السن لـــــعـام 2020 مــن بين 449
                                            متنافسا من الوطن العربي.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/جائزه.png') }}" class="d-block w-100 img-fluid " alt="...">
                    <div class="carousel-caption d-md-block">
                        <div class="row flex-md-row">
                            <div class="col-6 col-md-4">
                                <div class="p-2 d-flex align-items-center justify-content-center">
                                    <h3 style="text-align: justify; color: #000000;" class="vid"
                                        vid-path="{{ asset('assets/vid/33.mp4') }}">
                                        <b> جــائزة الإجــادة الـــشبابـية </b>
                                        في مجال الاقتصاد الرقمي
                                        لعام <b> 2023</b>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> --}}
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="{{ asset('assets/img/الصفحة الرئيسيه.png') }}"  class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="{{ asset('assets/img/مدى1.png') }}"  class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/img/جائزة 3.png') }}"  class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </section>
    {{-- <section id="hero" class="d-flex align-items-center"> --}}
    {{-- <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="row">
                <div>
                    <h3>
                        أول مـــنصـة رقمية <span style="color: #FED303;">عُــــــمانيـة</span>
                        <br>لتمكين الأشخاص ذوي الإعاقة
                    </h3>
                </div>
            </div> --}}
    {{-- <div class="row">
                <div>
                    <h3 style="text-align: justify;">
                        حــــصل تــــطبيق<span style="color: #FED303;"> نـافـذ </span>(SignBook سـابقاً) <br>
                        على جـائزة مدى-ألكسو لأفضل التطبيقات<br>
                        الجـــوالة لــفائدة الأشخاص ذوي الإعاقـة<br>
                        وكـــبار السن لـــــعـام 2020 مــن بين 449 <br>
                        متنافسا من الوطن العربي.
                    </h3>
                </div>
            </div> --}}
    {{-- <div class="row">
                <div>
                    <h3 style="text-align: justify;">
                      <b> جــائزة الإجــادة الـــشبابـية </b>

                        <br>
                        في مجال الاقتصاد الرقمي<br>
                       لعام <b> 2023</b>
                    </h3>
                </div>
            </div>
        </div> --}}
    {{-- </section> --}}
    <!-- End Hero -->
    <!-- /Hero Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container" data-aos="zoom-in">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="clients-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/clients/client-1.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/clients/client-2.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/clients/client-3.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/clients/client-4.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/clients/client-5.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/clients/client-6.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/clients/client-7.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/clients/client-8.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/clients/client-9.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/clients/client-10.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/clients/client-12.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/clients/client-13.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/clients/client-14.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/clients/client-15.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/clients/client-16.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/clients/client-17.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/clients/client-18.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/clients/client-19.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/clients/client-20.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/clients/client-21.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/clients/client-22.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/clients/client-23.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/clients/client-24.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/clients/client-25.jpg') }}" class="img-fluid"
                                    alt="">
                            </div>
                            {{-- <div class="swiper-slide">
                                <img src="{{ asset('assets/img/clients/client-26.png') }}" class="img-fluid"
                                    alt="">
                            </div> --}}
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/clients/client-27.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                        </div>
                        {{-- <div class="swiper-pagination"></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Clients Section -->


    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container">
            <div class=" row gy-5" data-aos="fade-in">
                <div class="col-6 col-md-6" style="text-align: center;">
                    <div class="row" style="color: white;">
                        <h2>تعرّف على خدمات التطبيق </h2>

                        <video class="embed-responsive-item w-100" style="padding-top: 20px;" controls>
                            <source src="{{ asset('assets/vid/video11.mp4') }}" type="video/mp4">
                        </video>

                        {{-- <div class="col-12 col-md-6 counts container " data-aos="fade-up">
                            <div class="count-box">
                                <i>
                                    <img src="{{ asset('assets/img/icons/ايقونه-السمعية.png') }}" class="d-block w-100 "
                                        alt="...">
                                </i>
                                <span data-purecounter-start="0" data-purecounter-end="14409"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>
                                    شخص من ذوي الإعاقة السمعية في السلطنة
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 counts container " data-aos="fade-up">
                            <div class="count-box">
                                <i>
                                    <img src="{{ asset('assets/img/icons/ايقونه-الحركيه.png') }}" class="d-block w-100 "
                                        alt="...">
                                </i>
                                <span data-purecounter-start="0" data-purecounter-end="600" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>
                                    شخص من ذوي الإعاقة الحركية والبصرية في السلطنة
                                    ​</p>
                            </div>
                        </div> 
                        <p>
                            احصائيات الفئات المستهدفة:
                        </p> --}}
                    </div>

                </div>
                <div class="col-6 col-md-6 row " style="padding-top: 120px ;padding-bottom: 50px ">
                    {{-- <video class="embed-responsive-item w-100 " controls>
                        <source src="{{ asset('assets/vid/video11.mp4') }}" type="video/mp4">
                    </video> --}}

                    <div class="col-12 col-md-6 counts container " data-aos="fade-up">
                        <div class="count-box">
                            <i>
                                <img src="{{ asset('assets/img/icons/ايقونه-السمعية.png') }}" class="d-block w-100 "
                                    alt="...">
                            </i>
                            {{-- <span data-purecounter-start="0" data-purecounter-end="14409" data-purecounter-duration="1"
                                class="purecounter"></span> --}}
                            <span data-purecounter-separator="true" data-purecounter-start="0"
                                data-purecounter-end="14409" data-purecounter-duration="1"
                                class="purecounter number"></span>
                            <p>
                                شخص من ذوي الإعاقة السمعية في السلطنة
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 counts container " data-aos="fade-up">
                        <div class="count-box">
                            <i>
                                <img src="{{ asset('assets/img/icons/ايقونه-الحركيه.png') }}" class="d-block w-100 "
                                    alt="...">
                            </i>
                            {{-- <span data-purecounter-start="0" data-purecounter-end="600" data-purecounter-duration="1"
                                class="purecounter"></span> --}}
                            <span data-purecounter-separator="true" data-purecounter-start="0" data-purecounter-end="600"
                                data-purecounter-duration="1" class="purecounter number"></span>
                            <p>
                                شخص من ذوي الإعاقة الحركية والبصرية في السلطنة
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-12">
                        <h4 style="color: white; text-align: center;">
                            احصائيات الفئات المستهدفة
                        </h4>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2> آراء العملاء </h2>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="vid testimonial-item" vid-path="{{ asset('assets/vid/nf1.mp4') }}">
                                <div class="testimonial-content">
                                    <img src="{{ asset('assets/img/testimonials/وزير الأوقاف.jpg') }}"
                                        class="testimonial-img" alt="">
                                    <div>
                                        <h5>سعادة الدكتور/ محمد بن سعيد المعمري</h5>
                                        <h6>وزير وزارة الأوقاف والشؤون الدينية</h6>
                                    </div>
                                </div>
                                <p>
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    تعزيزاً للجوانب الدينية في بناء المواطن الصالح أرتأت وزارة الأوقاف والشؤون الدينية توفير
                                    خدماتها بلغة الإشارة
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class=" testimonial-wrap">
                            <div class="vid testimonial-item" vid-path="{{ asset('assets/vid/nf2.mp4') }}">
                                <div class="testimonial-content">
                                    <img src="{{ asset('assets/img/testimonials/د.علي.jpg') }}" class="testimonial-img"
                                        alt="">
                                    <div>
                                        <h5>د.علي الكلباني</h5>
                                        <h6>اللجنة العمانية لحقوق الإنسان</h6>
                                    </div>
                                </div>
                                <p>
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    نحيي الشركة على تنفيذ الحلول التقنية من أجل خدمة ذوي
                                    الإعاقة السمعية عبر تطبيق signbook ، وتؤكد اللجنة دعمها ومباركتها لأية جهود إنسانية تخدم
                                    شرائح المجتمع المختلفة وخاصة ذوي الإعاقة
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class=" testimonial-wrap">
                            <div class="vid testimonial-item" vid-path="{{ asset('assets/vid/nf3.mp4') }}">
                                <div class="testimonial-content">
                                    <img src="{{ asset('assets/img/testimonials/client-2.png') }}"
                                        class="testimonial-img" alt="">
                                    <div>
                                        <h5> مركز التواصل الحكومي</h5>
                                        <h6>
                                            الأمانة العامة لمجلس الوزراء
                                        </h6>
                                    </div>
                                </div>
                                <p>
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    نشيد باحترافية ومهنية الشركة في الالتزام بإنجاز النشرات الإخبارية اليومية بلغة الإشارة"

                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class=" testimonial-wrap">
                            <div class="vid testimonial-item" vid-path="{{ asset('assets/vid/nf1.mp4') }}">
                                <div class="testimonial-content">
                                    <img src="{{ asset('assets/img/testimonials/وزارة الداخلية.png') }}"
                                        class="testimonial-img" alt="">
                                    <div>
                                        <h5>طلال بن أحمد السعدي </h5>
                                        <h6>وزارة الداخلية</h6>
                                    </div>
                                </div>
                                <p>
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    تم التعاون مع شركة signBook لإنتاج مقاطع مرئية بلغة الإشارة، بالإضافة إلى تعاونها الكبير
                                    والمثمر بالترجمة المباشرة في المحاور المرئية الذي كان له الأثر الإيجابي. كما تم لأول مرة
                                    في تاريخ الانتخابات إنشاء مركز اتصالات مرئي مخصص لذوي الإعاقة السمعية والذي كان له صداه
                                    الإيجابي على كافة المستويات.

                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->
                    <div class="swiper-slide">
                        <div class=" testimonial-wrap">
                            <div class="vid testimonial-item" vid-path="{{ asset('assets/vid/nf2.mp4') }}">
                                <div class="testimonial-content">
                                    <img src="{{ asset('assets/img/testimonials/بنك العز.jpg') }}"
                                        class="testimonial-img" alt="">
                                    <div>
                                        <h5>
                                            علي المعني
                                        </h5>
                                        <h6> الرئيس التنفيذي
                                            لبنك العز</h6>
                                    </div>
                                </div>
                                <p>
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    ذوي الإعاقة السمعية شريحة لا تتجزأ من المجتمع العماني ووجب علينا تقديم الخدمات المناسبة
                                    لهم والتواصل معهم مباشرة عبر تطبيق SignBook، وهو من إطار المسؤولية الاجتماعية لبنك العز.
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

@endsection
