@extends('layout.app')

@section('title', 'welcome')


@section('body')

    <!-- ======= Tabs Section ======= -->
    <section id="tabs" class="tabs section-bg about">
        <div class="section-title">
            <h2 style="color:white;">خــدماتنا</h2>
        </div>
        <div class="container" data-aos="fade-up">
            <ul class="nav nav-tabs  row row-cols-md-5  gy-3">
                <li class="col-12">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                        <img src="{{ asset('assets/img/icons/1.png') }}" class="d-block">
                        <h6> مركز الاتصال المرئي لذوي الإعاقة السمعية</h6>
                    </a>
                </li>
                <li class=" col-12">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                        <!-- <i class="ri-body-scan-line"></i> -->
                        <img src="{{ asset('assets/img/icons/2.png') }}" class="d-block">
                        <h6>
                            الترجمة الإشارية المسجلة للمواد الإعلامية
                        </h6>
                    </a>
                </li>
                <li class="col-12">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                        <!-- <i class="ri-sun-line"></i> -->
                        <img src="{{ asset('assets/img/icons/33.png') }}" class="d-block" alt="...">
                        <h6> تهيئة المطبوعات لذوي الإعاقة عبر رمز الاستجابة السريع </h6>
                    </a>
                </li>
                <li class="col-12">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                        <!-- <i class="ri-store-line"></i> -->
                        <img src="{{ asset('assets/img/icons/44.png') }}" class="d-block" alt="...">
                        <h6> الترجمة الإشـارية الـفـوريـة للـورش والفعاليات</h6>
                    </a>
                </li>
                <li class="col-12">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
                        <!-- <i class="ri-store-line"></i> -->
                        <img src="{{ asset('assets/img/icons/55.png') }}" class="d-block00" alt="...">
                        <h6> إضافة المكون الإشارى للمواقع الإلكترونية</h6>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                    <div class="row info-box">
                        <div class=" col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                            <!-- <h3>الترجمة الفورية عبر الإتصال المرئي​</h3> -->
                            <p class=" text-justify vid " vid-path="{{ asset('assets/vid/تمويل شراء سياره جديده.mp4') }}">
                                يقدم مركز الاتصال المرئي لذوي الإعاقة السمعية خدمة مبتكرة تتيح للأفراد من ذوي الإعاقة
                                السمعية التواصل بسهولة وفعالية مع مقدمي الخدمة في الجهات المختلفة عبر مترجمي لغة الإشارة
                                وذلك باستخدام تقنية الاتصال المرئي، مما يضمن حصولهم على الدعم والمساعدة الفورية التي
                                يحتاجونها.
                            </p>
                            <p class=" text-justify vid " vid-path="{{ asset('assets/vid/nf2.mp4') }}">
                                نهدف إلى توفير تجربة سلسة وشاملة، تعزز الاستقلالية وتُمكّن ذوي الإعاقة السمعية من الوصول إلى
                                الخدمات والمعلومات بطريقة مريحة وآمنة.
                            </p>
                            <!-- watch-video -->
                            <a href="#" class="glightbox btn-watch-video d-flex align-items-center"
                                onclick="toggle(0);">
                                <i class="bi bi-play-circle"></i>
                                <span>نموذج للخدمة</span>
                            </a>
                            <!-- <a href="#" class="btn" onclick="toggle(0);"> فيديو</a> -->
                        </div>
                        <div class="video-container">
                            <video id="vid1" src="{{ asset('assets/vid/الاتصال المرئي.mp4') }}"
                                controls="true"></video>
                            <!-- <video src="{{ asset('assets/vid/C0089.mp4') }}" controls="true"></video> -->
                            <img src="{{ asset('assets/img/icons/removeicon.png') }}" class="close" onclick="toggle(0);">
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ asset('assets/img/services/الاتصال المرئي.png') }}" alt=""
                                class="imgservice-fluid">
                        </div>

                    </div>
                    {{-- <!-- service1 video -->
                    <!-- <div class="modal">
                            <a href="#" class="btn"> watch video</a>
                            <div class="video-container">
                                <span class="close">&#10006; </span>
                                <video src="{{ asset('assets/vid/2.mp4') }}" controls></video>
                            </div>
                        </div> --> --}}

                </div>
                <div class="tab-pane" id="tab-2">
                    <div class="row info-box">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <!-- <h3>ترجمة الأخبار الرسمية والحالات الطارئة</h3> -->

                            <p class=" text-justify vid" vid-path="{{ asset('assets/vid/nf2.mp4') }}">
                                توفر خدمة الترجمة الإشارية المسجلة للمواد الإعلامية حلاً مخصصاً لضمان وصول المحتوى الإعلامي
                                بكافة أشكاله إلى الأفراد ذوي الإعاقة السمعية، وذلك عبر ترجمته إلى لغة الإشارة بطرق سهلة
                                الفهم ومناسبة للجميع.
                            </p>
                            <p class=" text-justify  vid" vid-path="{{ asset('assets/vid/nf3.mp4') }}">
                                هذه الخدمة تساهم في تعزيز الشمولية والوصول إلى المعلومات، مما يمكن الأفراد ذوي الإعاقة
                                السمعية من متابعة الأخبار، والتعليم، والترفيه، وغيرها من المواد الإعلامية بفعالية واستقلالية
                                تامة.
                            </p>
                            <!-- watch-video -->
                            <a href="#" class="glightbox btn-watch-video d-flex align-items-center"
                                onclick="toggle(1);">
                                <i class="bi bi-play-circle"></i>
                                <span>نموذج للخدمة</span></a>
                            <!-- <a href="#" class="btn" onclick="toggle(1);"> فيديو</a> -->
                        </div>
                        <div class="video-container">
                            <video src="{{ asset('assets/vid/جائزة بلعرب بن هيثم للتصميم المعماري.mp4') }}"
                                controls="true"></video>
                            <img src="{{ asset('assets/img/icons/removeicon.png') }}" class="close" onclick="toggle(1);">
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="{{ asset('assets/img/services/الترجمة الإشارية للمحتوى المكتوب والمسموع.png') }}"
                                alt="" class="imgservice-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-3">
                    <div class="row info-box">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 vid "
                            vid-path="{{ asset('assets/vid/nf2.mp4') }}">
                            <!-- <h3> الترجمة المسبقة للمحتوى عبر الكود</h3> -->
                            <p class=" text-justify ">
                                تهيئة المطبوعات عملية هامة لضمان وصول المعلومات لذوي الإعاقة السمعية والبصرية، مما يحقق
                                الشمولية والتكافؤ، وهنا الخطوات:
                            </p>
                            <ol style="color: white;">
                                <li class=" text-justify ">
                                    ترجمة المحتوى إلى لغة الإشارة لذوي الإعاقة السمعية وتحويل النص إلى صوت لذوي الإعاقة
                                    البصرية
                                </li>
                                <li class=" text-justify ">
                                    توليد رموز الاستجابة السريعة (QR-Code)
                                </li>
                                <li class=" text-justify ">
                                    وضع (QR-Code) في المطبوعات
                                </li>
                                <li class=" text-justify ">
                                    استخدام تطبيق " نافذ" لمسح الـ (QR-Code) و الوصول إلى المحتوى المترجم والمسموع.
                                </li>
                            </ol>
                            <!-- watch-video -->
                            <a href="#" class="glightbox btn-watch-video d-flex align-items-center"
                                onclick="toggle(2);">
                                <i class="bi bi-play-circle"></i>
                                <span>نموذج للخدمة</span></a>
                            <!-- <a href="#" class="btn" onclick="toggle(2);"> فيديو</a> -->
                        </div>
                        <div class="video-container">
                            <video src="{{ asset('assets/vid/كود.mp4') }}" controls="true"></video>
                            <img src="{{ asset('assets/img/icons/removeicon.png') }}" class="close"
                                onclick="toggle(2);">
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="{{ asset('assets/img/services/qr code.png') }}" alt=""
                                class="imgservice-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-4">
                    <div class="row info-box">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 ">
                            <!-- <h3>الترجمة الفورية للورش والفعاليات​​</h3> -->
                            <p class=" text-justify vid " vid-path="{{ asset('assets/vid/nf2.mp4') }}">
                                خدمة تهدف إلى ضمان مشاركة ذوي الإعاقة السمعية في الفعاليات على قدم المساواة مع الآخرين و
                                تحسين تجربة التعلم وتمكين ذوي الإعاقة السمعية من التفاعل والمشاركة في النقاشات والأنشطة مما
                                يساهم في إثراء الفعاليات بآراء وتجارب متنوعة.
                                ​ </p>
                            <div class="text-justify vid " vid-path="{{ asset('assets/vid/nf2.mp4') }}">
                                <h3>ميزات الخدمة:</h3>
                                <ul>
                                    <li><i class="ri-check-double-line"></i>
                                        مترجمون محترفون: الاستعانة بمترجمين مؤهلين ومتمرسين في لغة الإشارة يمكنهم نقل
                                        المحتوى
                                        بشكل دقيق وسلس. </li>
                                    <li><i class="ri-check-double-line"></i>
                                        التكامل مع التقنيات الحديثة: استخدام تقنيات الفيديو والبث الحي لضمان وصول الترجمة
                                        الإشارية إلى جميع المشاركين في الفعالية، سواء كانوا حاضرين فعلياً أو عن بعد.
                                    </li>
                                    <li><i class="ri-check-double-line"></i>
                                        تجربة مخصصة: تكييف الخدمة لتلبية متطلبات الفعالية المحددة، سواء كانت جلسات نقاش، أو
                                        ورش
                                        عمل تفاعلية.
                                    </li>
                                </ul>
                            </div>
                            <!-- watch-video -->
                            <a href="#" class="glightbox btn-watch-video d-flex align-items-center"
                                onclick="toggle(3);">
                                <i class="bi bi-play-circle"></i>
                                <span>نموذج للخدمة</span></a>
                            <!-- <a href="#" class="btn" onclick="toggle(3);"> فيديو</a> -->
                        </div>
                        <div class="video-container">
                            <video src="{{ asset('assets/vid/خدمة ترجمة الفعاليات.mp4') }}" controls="true"></video>
                            <img src="{{ asset('assets/img/icons/removeicon.png') }}" class="close"
                                onclick="toggle(3);">
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center ">
                            <img src="{{ asset('assets/img/services/الترجمة الإشارية الفورية للورش والفعاليات.png') }}"
                                alt="" class="imgservice-fluid">
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="tab-5">
                    <div class="row info-box y-5">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <!-- <h3>إضافة المكون الإشاري للمواقع الالكترونية​</h3> -->
                            <p class=" text-justify vid " vid-path="{{ asset('assets/vid/nf3.mp4') }}">
                                تعزيز الوصول المتساوي إلى المعلومات والخدمات الرقمية، من خلال دمج المكون الإشاري في الموقع،
                                لتقديم الترجمة بلغة الإشارة للنصوص المكتوبة لفائدة ذوي الإعاقة السمعية، مما يعزز من شمولية
                                الموقع وسهولة استخدامه.
                            </p>
                             <div class="text-justify vid " vid-path="{{ asset('assets/vid/nf2.mp4') }}">
                            <h3>ميزات الخدمة:</h3>
                            <ul>
                                <li><i class="ri-check-double-line"></i>
                                    تفاعل سهل: واجهة سهلة الاستخدام تتيح للمستخدمين تشغيل وإيقاف الترجمة واختيار المحتوى
                                    الذي يرغبون في ترجمته.
                                </li>
                                <li><i class="ri-check-double-line"></i>
                                    تكامل سلس: دمج المكون بسهولة في أي موقع إلكتروني دون الحاجة إلى تغييرات كبيرة.
                                </li>
                                <li><i class="ri-check-double-line"></i>
                                    تحسين تجربة المستخدم: تسهيل تجربة التصفح لذوي الإعاقة السمعية وزيادة تفاعلهم مع
                                    المحتوى.
                                </li>
                                <li><i class="ri-check-double-line"></i>
                                    تعزيز السمعة: إظهار التزام الموقع بضوابط النفاذ الرقمي.
                                </li>
                            </ul>
                            </div>
                            <!-- watch-video -->
                            <a href="#" class="glightbox btn-watch-video d-flex align-items-center"
                                onclick="toggle(4);">
                                <i class="bi bi-play-circle"></i>
                                <span>نموذج للخدمة</span></a>
                            <!-- <a href="#" class="btn" onclick="toggle(4);"> فيديو</a> -->
                        </div>
                        <div class="video-container">
                            <video src="{{ asset('assets/vid/ترجمة موقع رؤية عمان2040.mp4') }}" controls="true"></video>
                            <img src="{{ asset('assets/img/icons/removeicon.png') }}" class="close"
                                onclick="toggle(4);">
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="{{ asset('assets/img/services/اضافة المكون الإشاري للمواقع الالكترونية.png') }}"
                                alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Tabs Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">
            <div class="row row-cols-md-5   gy-5">
                <div class="col-12 ">
                    <div class="count-box">
                        <i>
                            <img src="{{ asset('assets/img/icons/ترجمة (3).png') }}" class="d-block w-100 "
                                alt="...">
                        </i>
                        {{-- <span data-purecounter-start="0" data-purecounter-end="3900" data-purecounter-duration="1"
                            class="purecounter"></span> --}}

                               <span data-purecounter-separator="true" data-purecounter-start="0"
                                data-purecounter-end="3900" data-purecounter-duration="1"
                                class="purecounter number"></span>
                        <p>إتصال مرئي </p>
                    </div>
                </div>

                <div class="col-12 ">
                    <div class="count-box">
                        <i>
                            <img src="{{ asset('assets/img/icons/ترجمة (2).png') }}" class="d-block w-100 "
                                alt="...">
                        </i>

                        {{-- <span data-purecounter-start="0" data-purecounter-end="1200" data-purecounter-duration="1"
                            class="purecounter" id="counter"></span> --}}
                               <span data-purecounter-separator="true" data-purecounter-start="0"
                                data-purecounter-end="1200" data-purecounter-duration="1"
                                class="purecounter number"></span>
                        <p>
                            مقطع مرئي مترجم إشاريا
                        </p>
                    </div>
                </div>

                <div class="col-12 ">
                    <div class="count-box">
                        <i>
                            <img src="{{ asset('assets/img/icons/3.png') }}" class="d-block w-100 " alt="...">
                        </i>
                        {{-- <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1"
                            class="purecounter"></span> --}}
                               <span data-purecounter-separator="true" data-purecounter-start="0"
                                data-purecounter-end="25" data-purecounter-duration="1"
                                class="purecounter number"></span>
                        <p>
                            مستند مترجم إشاريا عبر
                            (QR code)
                        </p>
                    </div>
                </div>

                <div class="col-12 ">
                    <div class="count-box">
                        <i> <img src="{{ asset('assets/img/icons/4.png') }}" class="d-block w-100 " alt="...">
                        </i>
                        {{-- <span data-purecounter-start="0" data-purecounter-end="250" data-purecounter-duration="1"
                            class="purecounter"></span> --}}
                               <span data-purecounter-separator="true" data-purecounter-start="0"
                                data-purecounter-end="250" data-purecounter-duration="1"
                                class="purecounter number"></span>
                        <p>
                            فعالية مترجمة إشاريا
                        </p>
                    </div>
                </div>
                <div class="col-12 ">
                    <div class="count-box">
                        <i> <img src="{{ asset('assets/img/icons/5.png') }}" class="d-block w-100 " alt="...">
                        </i>
                        {{-- <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1"
                            class="purecounter"></span> --}}
                               <span data-purecounter-separator="true" data-purecounter-start="0"
                                data-purecounter-end="5" data-purecounter-duration="1"
                                class="purecounter number"></span>
                        <p>
                            موقع الكتروني مترجم إشاريا
                        </p>
                    </div>
                </div>
            </div>

    </section><!-- End Counts Section -->

@endsection
