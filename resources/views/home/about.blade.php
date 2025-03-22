@extends('layout.app')

@section('title', 'welcome')

@section('body')
    {{-- <section id="services" class="services sections-bg">
        <img src="{{ asset('assets/img/تجربه.jpg') }}" class="img-fluid" alt="...">
    </section> --}}

    <section id="hero" class="hero ">
        <div id="carouselExampleInterval" class="carousel slide " data-aos="zoom-out" data-aos-delay="100">
            <div class="carousel-inner">
                {{-- <div class="carousel-item active" style="background-color: #0DA4AE;" data-bs-interval="10000">
                    <img src="{{ asset('assets/img/مدير3.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                        <div class="row">
                            <div class="col-7 col-lg-7">
                                <p style="color: #ffffff;text-align: justify; " class="vid"
                                    vid-path="{{ asset('assets/vid/رئيسة هيئة تنمية المؤسسات.mp4') }}">
                                    نـــشعر بـالفخر لتقديم هـذا التطبيق الذي صمم خــصيصا
                                    لـخدمة ذوي الإعــاقة وبـالأخص ذوي الإعاقة السمـعية
                                    عبر مــجموعة مــن الحــلول التـكنولـوجية الـمبتكرة التي
                                    تسهم في تحسين حياة الأفراد من ذوي الإعاقة،وتعكس
                                    رؤيـتنا للـشمولية والتنوع، وتـعتمد عـلى أحـدث الــتقنيات
                                    لضمان تقديم أفضل الخدمات.
                                </p>
                                <p style="text-align: justify;color: #ffffff; " class="vid"
                                    vid-path="{{ asset('assets/vid/33.mp4') }}">
                                    تطبيق نافذ يهدف إلى تعزيز الاستقلالية، وفتح آفاق جديدة
                                    للمستخدمين، مــن خــلال منصة شاملة وسهلة الاستخدام.
                                    نــحن ملتزمون بالسعي المســتمر نــحو تــحسين وتــطويــر
                                    التطبيق بناءً على احتياجاتكم ومقترحاتكم.
                                </p>
                            </div>
                        </div>
                    </div>
                </div> --}}

                 {{-- <div class="carousel-item vid" data-bs-interval="2000" vid-path="{{ asset('assets/vid/33.mp4') }}">     --}}
                 {{-- <p class="vid w-100 h-100  position-absolute z-3" vid-path="{{ asset('assets/vid/33.mp4') }}">
                 </p> --}}
                  {{-- <img src="{{ asset('assets/img/قيمنا.png') }}" class="d-block w-100" style="mix-blend-mode:screen" alt="...">
                  
                </div> 
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div> --}}
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="{{ asset('assets/img/مدير1.png') }}"  class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item vid" data-bs-interval="2000" vid-path="{{ asset('assets/vid/33.mp4') }}">
      <img src="{{ asset('assets/img/قيمنا.png') }}" class="d-block w-100" style="mix-blend-mode:screen" alt="...">
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
    <!--About us-->
    <section class="section about section-bg">
        <div class="container">
            <div class="section-title">
                <h2 style="color:white">من نحن</h2>
            </div>
            <div class="row gy-4">
                <div class="col-12 col-md-4">
                    <div class=" feature-1 position-relative vid" vid-path="{{ asset('assets/vid/nf1.mp4') }}"
                        data-aos="fade-up" data-aos-delay="200">
                        <div class="text-center">
                            <div class="wrap-icon icon-1">
                                <i>
                                    <img src="{{ asset('assets/img/icons/الهدف.png') }}" class="d-block w-100"
                                        alt="...">
                                </i>
                            </div>
                            <h3 class="mb-3">هدفنا</h3>
                            <p>
                                تمكين ذوي الإعاقة للعيش باستقلالية وتحسين جودة حياتهم من خلال توفير حلول رقمية مبتكرة وسهلة
                                الاستخدام.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="vid feature-1  position-relative" vid-path="{{ asset('assets/vid/nf3.mp4') }}"
                        data-aos="fade-up" data-aos-delay="200">
                        <div class="text-center">
                            <div class="wrap-icon icon-1">
                                <i>
                                    <img src="{{ asset('assets/img/icons/الرسالة.png') }}" class="d-block w-100"
                                        alt="...">
                                </i>
                            </div>
                            <h3 class="mb-3">رسالتنا</h3>
                            <p>
                                نعمل على تقديم تجربة رقمية فريدة ومتكاملة لذوي الإعاقة، تُلبي احتياجاتهم المتنوعة وتساهم في
                                تحقيق استقلاليتهم وإدماجهم الكامل في المجتمع.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="vid feature-1  position-relative" vid-path="{{ asset('assets/vid/nf2.mp4') }}"
                        data-aos="fade-up" data-aos-delay="200">
                        <div class="text-center">
                            <div class="wrap-icon icon-1">
                                <i>
                                    <img src="{{ asset('assets/img/icons/الرؤية.png') }}" class="d-block w-100"
                                        alt="...">
                                </i>
                            </div>
                            <h3 class="mb-3">رؤيتنا</h3>
                            <p>
                                أن نكون التطبيق الرائد في تمكين ذوي الإعاقة حول العالم، من خلال توفير منصة شاملة تتيح لهم
                                الوصول إلى الموارد والدعم والفرص بشكل متساوٍ وفعال.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">

        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>مشاركاتنا</h2>
            </div>
            <div class="portfolio-isotope" data-portfolio-filter=".filter-external" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter=".filter-internal">المشاركات الداخلية</li>
                            <li data-filter=".filter-external" class="filter-active">المشاركات الخارجية</li>
                        </ul>

                    </div>
                </div>
                <div class="row gy-4 portfolio-container">

                    {{-- <div class="col-xl-4 col-md-6 portfolio-item filter-external">
                    <div class="card portfolio-wrap carousel-item active">

                        <div class="card-body">
                            <div id="carouselExampleIndicators8" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators8"
                                        data-bs-slide-to="0" class="active" aria-current="true"
                                        aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators8"
                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators8"
                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>

                                <div class="carousel-inner">
                                    <div class="portfolio-wrap carousel-item active">
                                        <div class="overlay">
                                            <p class="title">2022</p>
                                        </div>
                                        <img src="assets/img/Posts/ملتقى الأشخاص ذوي الإعاقة الأول.jpg"
                                            class="card-img-top img-fluid" alt="...">
                                    </div>
                                    <div class="portfolio-wrap carousel-item">
                                        <div class="overlay">
                                            <p class="title">2020</p>
                                        </div>
                                        <img src="assets/img/Posts/المعرض السعودي الدولي لمستلزمات.jpg"
                                            class="card-img-top img-fluid" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators8" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators8" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                        </div>
                        <div class="card-footer">
                            <p class="card-text">المعرض السعودي الدولي لمستلزمات</p>
                        </div>

                    </div>

                </div> --}} <!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-external">
                        <div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="carousel">
                            {{-- <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div> --}}
                            <div class="carousel-inner">
                                <div class="card portfolio-wrap carousel-item active">
                                    <img src="{{ asset('assets/img/Posts/مشاركه2.jpg') }}" class="card-img-top img-fluid"
                                        alt="...">
                                    <div class="card-body">
                                        <p class="card-text">معرض كيتكوم بدولة قطر | 2019</p>
                                    </div>
                                </div>
                                {{-- <div class="card portfolio-wrap carousel-item">
                                    <img src="{{ asset('assets/img/Posts/مشاركه2.jpg') }}" class="card-img-top img-fluid"
                                        alt="...">
                                    <div class="card-body">
                                        <p class="card-text">معرض كيتوم بدولة قطر | 2019</p>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button> --}}
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-external">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                            {{-- <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div> --}}
                            <div class="carousel-inner">
                                <div class="card portfolio-wrap carousel-item active">
                                    <img src= "{{ asset('assets/img/Posts/معرض_اكسبو_أصحاب_الهمم_الدولي_2022.jpg') }}"
                                        class="card-img-top img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">معرض أصحاب الهمم الدولي | 2022</p>
                                    </div>
                                </div>
                                <div class="card portfolio-wrap carousel-item">
                                    <img src="{{ asset('assets/img/Posts/معرض_اكسبو_أصحاب_الهمم_الدولي_2019.png') }}"
                                        class="card-img-top img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">معرض أصحاب الهمم الدولي | 2019</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-external">
                        <div id="carouselExampleIndicators3" class="carousel slide" data-bs-ride="carousel">
                            {{-- <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div> --}}
                            <div class="carousel-inner">
                                <div class="card portfolio-wrap carousel-item active">
                                    <img src="{{ asset('assets/img/Posts/زيارة الوفد العماني.jpg') }}"
                                        class="card-img-top img-fluid" alt="...">
                                    <div class="card-body">
                                        {{-- <p class="card-text">زيارة الوفد العماني</p> --}}
                                        <p class="card-text">
                                            فعالية عرض الشركات الناشئة العمانية على المستثمرين بالمملكة العربية السعودية |
                                            2023
                                        </p>
                                    </div>
                                </div>
                                {{-- <div class="card portfolio-wrap carousel-item">
                                    <img src="{{ asset('assets/img/Posts/زيارة الوفد العماني.jpg') }}"
                                        class="card-img-top img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">زيارة الوفد العماني</p>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators3"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators3"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button> --}}
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-external">
                        <div id="carouselExampleIndicators4" class="carousel slide" data-bs-ride="carousel">
                            {{-- <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div> --}}
                            <div class="carousel-inner">
                                <div class="card portfolio-wrap carousel-item active">
                                    <img src="{{ asset('assets/img/Posts/معرض كومكس البحرين.jpg') }}"
                                        class="card-img-top img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">
                                            معرض كومكس للتكنولوجيا بدولة البحرين | 2023
                                        </p>
                                    </div>
                                </div>
                                {{-- <div class="card portfolio-wrap carousel-item">
                                    <img src="{{ asset('assets/img/Posts/معرض كومكس البحرين.jpg') }}"
                                        class="card-img-top img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">
                                            معرض كومكس للتكنولوجيا بدولة البحرين | 2023
                                        </p>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators4"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators4"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button> --}}
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-external">
                        <div id="carouselExampleIndicators5" class="carousel slide" data-bs-ride="carousel">
                            {{-- <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div> --}}
                            <div class="carousel-inner">
                                <div class="card portfolio-wrap carousel-item active">
                                    <img src="{{ asset('assets/img/Posts/المعرض السعودي الدولي لمستلزمات.jpg') }} "
                                        class="card-img-top img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">
                                            المعرض السعودي الدولي لمستلزمات الإعاقة والتأهيل | 2023
                                        </p>
                                    </div>
                                </div>
                                {{-- <div class="card portfolio-wrap carousel-item">
                                    <img src="{{ asset('assets/img/Posts/المعرض السعودي الدولي لمستلزمات.jpg') }}"
                                        class="card-img-top img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">
                                            المعرض السعودي الدولي لمستلزمات الإعاقة والتأهيل | 2023
                                        </p>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators5"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators5"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button> --}}
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-internal">
                        <div id="carouselExampleIndicators6" class="carousel slide" data-bs-ride="carousel">
                            {{-- <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators6" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators6" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators6" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div> --}}
                            <div class="carousel-inner">
                                <div class="card portfolio-wrap carousel-item active">
                                    <img src=" {{ asset('assets/img/Posts/ملتقى الأشخاص ذوي الإعاقة الأول.jpg') }}"
                                        class="card-img-top img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">
                                            الملتقى الأول للأشخاص ذوي الإعاقة | 2023
                                        </p>
                                    </div>
                                </div>

                                {{-- <div class="card portfolio-wrap carousel-item">
                                    <img src=" {{ asset('assets/img/Posts/ملتقى الأشخاص ذوي الإعاقة الأول.jpg') }}"
                                        class="card-img-top img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">
                                            ملتقى الأول للأشخاص ذوي الإعاقة | 2023
                                        </p>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators6"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators6"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button> --}}
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-internal">
                        <div id="carouselExampleIndicators7" class="carousel slide" data-bs-ride="carousel">
                            {{-- <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators7" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators7" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators7" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div> --}}
                            <div class="carousel-inner">
                                <div class="card portfolio-wrap carousel-item active">
                                    <img src="{{ asset('assets/img/Posts/معرض_كومكس_2023.jpg') }}"
                                        class="card-img-top img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text ">
                                            معرض كومكس للتكنولوجيا | 2023 </p>
                                    </div>
                                </div>
                                <div class="card portfolio-wrap carousel-item">
                                    <img src="{{ asset('assets/img/Posts/معرض_كومكس_2022.png') }}"
                                        class="card-img-top img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text ">
                                            معرض كومكس للتكنولوجيا | 2022 </p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators7"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators7"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-internal">
                        <div id="carouselExampleIndicators8" class="carousel slide" data-bs-ride="carousel">
                            {{-- <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators8" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators8" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators8" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div> --}}
                            <div class="carousel-inner">
                                <div class="card portfolio-wrap carousel-item active">
                                    <img src="{{ asset('assets/img/Posts/ترجمة جلسات ملهمون.jpg') }}"
                                        class="card-img-top img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text ">
                                            الترجمة الفورية لجلسات ملهمون
                                        </p>
                                    </div>
                                </div>
                                {{-- <div class="card portfolio-wrap carousel-item">
                                    <img src="{{ asset('assets/img/Posts/ترجمة الملتقى.jpg') }}"
                                        class="card-img-top img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text ">
                                            ترجمة الملتقى شبة الاقليمي حول تعزير مبادئي الحوار والناء وقيم التسامح | 2022
                                        </p>
                                        </p>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators8"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators8"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button> --}}
                    </div><!-- End Portfolio Item -->

                    <!-- End Portfolio Container -->
                </div>
            </div>
    </section>
    <!-- End Portfolio Section -->

    <section id="tabs" class="tabs team about section-bg">
        <div class="section-title">
            <h2 style="color:white;">فريق العمل</h2>
        </div>
        <div class="container" data-aos="fade-up">
            <ul class="nav nav-tabs justify-content-center row d-flex">
                <li class="nav-item col-6 col-md-2">
                    <a class="nav-link1 active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                        <h6> الهيكل الإداري</h6>
                    </a>
                </li>
                <li class="nav-item col-6 col-md-2">
                    <a class="nav-link1" data-bs-toggle="tab" data-bs-target="#tab-2">
                        <h6>فريق العمل</h6>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                    <div class="row row-cols-md-3 testimonials-slider swiper">
                        <div class="swiper-wrapper p-4">
                            <div class=" swiper-slide col-lg-3 col-md-6 d-flex align-items-stretch m-1">
                                <div class="member" data-aos="fade-up" data-aos-delay="100">
                                    <div class="member-img">
                                        <img src="assets/img/team/سلطان.jpg" class="img-fluid" alt="">
                                        <div class="social">
                                            <a href=""><i class="bi bi-envelope-at-fill"></i></a>
                                            <a href=""><i class="bi bi-whatsapp"></i></a>
                                        </div>
                                    </div>
                                    <div class="member-info ">
                                        <h4>الإعلامي سلطان العامري</h4>
                                        <span>الرئيس التنفذي</span>
                                    </div>
                                </div>
                            </div>

                            <div class="  swiper-slide col-lg-3 col-md-6 d-flex align-items-stretch  m-1">
                                <div class="member" data-aos="fade-up" data-aos-delay="200">
                                    <div class="member-img">
                                        <img src="assets/img/team/ريا.jpg" class="img-fluid" alt="">
                                        <div class="social">
                                            <a href=""><i class="bi bi-envelope-at-fill"></i></a>
                                            <a href=""><i class="bi bi-whatsapp"></i></a>
                                        </div>
                                    </div>
                                    <div class="member-info">
                                        <h4>ريــا النعمانية</h4>
                                        <span>المدير العام</span>
                                    </div>
                                </div>
                            </div>

                            <div class=" swiper-slide col-lg-3 col-md-6 d-flex align-items-stretch  m-1">
                                <div class="member" data-aos="fade-up" data-aos-delay="300">
                                    <div class="member-img">
                                        <img src="assets/img/team/فاطمة.jpg" class="img-fluid" alt="">
                                        <div class="social">
                                            <a href=""><i class="bi bi-envelope-at-fill"></i></a>
                                            <a href=""><i class="bi bi-whatsapp"></i></a>
                                        </div>
                                    </div>
                                    <div class="member-info">
                                        <h4> فاطمة البراشدية</h4>
                                        <span>مهندسة برمجيات</span>
                                    </div>
                                </div>
                            </div>

                            <div class=" swiper-slide col-lg-3 col-md-6 d-flex align-items-stretch  m-1">
                                <div class="member" data-aos="fade-up" data-aos-delay="400">
                                    <div class="member-img">
                                        <img src="assets/img/team/سمية.jpg" class="img-fluid" alt="">
                                        <div class="social">
                                            <a href=""><i class="bi bi-envelope-at-fill"></i></a>
                                            <a href=""><i class="bi bi-whatsapp"></i></a>
                                        </div>
                                    </div>
                                    <div class="member-info">
                                        <h4>سمية المعمرية</h4>
                                        <span>ممصمة جرافيك</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="tab-2">
                    <div class="row testimonials-slider swiper">
                        <div class="swiper-wrapper">
                            <div class=" swiper-slide col-lg-3 col-md-6 d-flex align-items-stretch">
                                <div class="member" data-aos="fade-up" data-aos-delay="100">
                                    <div class="member-img">
                                        <img src="assets/img/team/البداعي.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info ">
                                        <h4>سعيد البداعي</h4>
                                        <span> خبير الترجمة الإشارية والمشرف عليها</span>
                                    </div>
                                </div>
                            </div>
                            <div class=" swiper-slide col-lg-3 col-md-6 d-flex align-items-stretch">
                                <div class="member" data-aos="fade-up" data-aos-delay="400">
                                    <div class="member-img">
                                        <img src="assets/img/team/يحيى.jpg" class="img-fluid" alt="">

                                    </div>
                                    <div class="member-info">
                                        <h4>يحيى البراشدي</h4>
                                        <span>مترجم إشاري</span>
                                    </div>
                                </div>
                            </div>
                            <div class=" swiper-slide col-lg-3 col-md-6 d-flex align-items-stretch">
                                <div class="member" data-aos="fade-up" data-aos-delay="400">
                                    <div class="member-img">
                                        <img src="assets/img/team/حمد.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                        <h4>حمد العامري</h4>
                                        <span>مترجم إشاري</span>
                                    </div>
                                </div>
                            </div>
                            <div class=" swiper-slide col-lg-3 col-md-6 d-flex align-items-stretch">
                                <div class="member" data-aos="fade-up" data-aos-delay="400">
                                    <div class="member-img">
                                        <img src="assets/img/team/أويس.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                        <h4> أويس</h4>
                                        <span>مترجم إشاري</span>
                                    </div>
                                </div>
                            </div>

                            <div class=" swiper-slide col-lg-3 col-md-6 d-flex align-items-stretch">
                                <div class="member" data-aos="fade-up" data-aos-delay="400">
                                    <div class="member-img">
                                        <img src="assets/img/team/ياسر.jpg" class="img-fluid" alt="">

                                    </div>
                                    <div class="member-info">
                                        <h4> ياسر البلوشي</h4>
                                        <span>مصور</span>
                                    </div>
                                </div>
                            </div>

                            <div class=" swiper-slide col-lg-3 col-md-6 d-flex align-items-stretch">
                                <div class="member" data-aos="fade-up" data-aos-delay="400">
                                    <div class="member-img">

                                        <img src="assets/img/team/شيماء.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                        <h4> شيماء الحسنية</h4>
                                        <span>مصورة</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>



    {{-- <div id="active-vid" class="position-absolute border rounded-pill shadow btn p-4"
        style="left: 8rem; bottom: 8rem; transition: all ease-out .3s;">
        <p class="m-2">active</p>
    </div> --}}
@endsection
