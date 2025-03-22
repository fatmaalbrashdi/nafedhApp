@extends('layout.app')

@section('title', 'welcome')

@section('body')

    {{-- <section id="hero">

        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" >
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/تغير.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block" >
                        <h3>
                            أول مـــنصـة رقمية <span style="color: #FED303;">عُــــــمانيـة</span>
                            <br>لتمكين الأشخاص ذوي الإعاقة
                        </h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/مدى2.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 style="text-align: justify;" class="vid " vid-path="{{ asset('assets/vid/33.mp4') }}">
                            حــــصل تــــطبيق<span style="color: #FED303;"> نـافـذ </span>(SignBook سـابقاً) <br>
                            على جـائزة مدى-ألكسو لأفضل التطبيقات<br>
                            الجـــوالة لــفائدة الأشخاص ذوي الإعاقـة<br>
                            وكـــبار السن لـــــعـام 2020 مــن بين 449 <br>
                            متنافسا من الوطن العربي.
                        </h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/جائزه.png') }}"  class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block ">
                        <h3 style="text-align: justify;color: #000000;">
                            <b> جــائزة الإجــادة الـــشبابـية </b>

                            <br>
                            في مجال الاقتصاد الرقمي<br>
                            لعام <b> 2023</b>
                        </h3>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section> --}}


    <!-- ======= Frequently Asked Questions Section ======= -->

    <section id="faq" class="faq section-bg about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2 style="color: white;">الأسئلة الأكثر شيوعاً​</h2>
            </div>
            <div class="row gy-4">
                {{-- <div class="col-lg-10">  --}}
                <div class="col">
                    <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed vid " vid-path="{{ asset('assets/vid/33.mp4') }}"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                    {{-- <span class="num">1.</span> --}}
                                    ماهي لغة الإشارة؟
                                </button>
                            </h3>
                            <div id="faq-content-1" class="accordion-collapse collapse show" data-bs-parent="#faqlist">
                                <div class="accordion-body vid" vid-path="{{ asset('assets/vid/nf1.mp4') }}">
                                    <p>
                                        لغة الإشارة هو مصطلح يطلق على وسيلة التواصل غير الصوتية التي يستخدمها ذوي الإعاقة
                                        السمعية، وهي
                                        اللغة الفطرية (الأم) الأولى للأفراد الصم وهي لغة نشأت ونمت في مجتمع الصم، ويستخدم
                                        فيها
                                        نظام من
                                        الرموز اليدوية التي تمثل بعض الكلمات أو الأفكار أو المفاهيم وهي تنتج وتدرك من خلال
                                        قنوات
                                        حركية
                                        وبصرية. لذا قيل أن الأصم …( عينيه التي تسمع .. ويديه التي تتكلم).

                                    </p>
                                    <p>
                                        ذكرت لغة الإشارة في القرآن الكريم بمصطلح "الرمز"

                                        قال تعالى: ( قال ربي اجعل لي آية قال آيتك ألا تكلم الناس ثلاث أيام إلا رمزا )
                                        - سورة آل عمران الآية (42)
                                        ( قال
                                        رب
                                        اجعل لي
                                        آية قال آيتك ألا تكلم الناس ثلاث ليال سويا)
                                        سورة مريم الآية (10)
                                    </p>
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed vid" vid-path="{{ asset('assets/vid/nf2.mp4') }}"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                    {{-- <span class="num">2.</span> --}}
                                    كيف يكتسب الأشخاص ذوي الإعاقة السمعية لغة الإشارة ؟
                                </button>
                            </h3>
                            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body vid" vid-path="{{ asset('assets/vid/nf3.mp4') }}">
                                    أثبتت الدراسات والأبحاث أن الأطفال الصم يتعلمون لغة الإشارة بنفس العمر الزمني الذي يتعلم
                                    فيه الأطفال اللغة المنطوقة ويرتكبون نفس الأخطاء من ناحية المفردات والقواعد فهي لغة تنمو
                                    بشكل طبيعي حينما تتهيأ لها الظروف المساعدة والبيئة الملائمة التي تحفز الطفل الأصم على
                                    اكتساب وتطوير لغته الإشارية.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed vid" vid-path="{{ asset('assets/vid/nf3.mp4') }}"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                    {{-- <span class="num">3.</span> --}}
                                    كيف أتعامل مع الأشخاص ذوي الإعاقة السمعية ؟
                                </button>
                            </h3>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body vid" vid-path="{{ asset('assets/vid/nf3.mp4') }}">
                                    <ul>
                                        <li>
                                            <i class="ri-check-double-line"></i>
                                            إذا كان لديه بقايا سمع ينبغي الجلوس بجانب الأذن السليمة حتى يستطيع سماعك.
                                        </li>
                                        <li> <i class="ri-check-double-line"></i>
                                            أما في حالة الشخص الذي لديه صمم كلي ، الطريقة الوحيدة للتواصل المرئي معه من خلال
                                            قراءة
                                            الشفاه أو لغة الإشارة. </li>
                                        </li>
                                        <li>
                                            <i class="ri-check-double-line"></i>
                                            عندما تتحدث ينبغي أن يكون ذلك ببطء وبوضوح، لا تغالي في حركة الشفاه لأنها قد
                                            تربكه
                                            .
                                        </li>
                                        <li>
                                            <i class="ri-check-double-line"></i>
                                            لا ترفع الصوت لجذب الانتباه ، فهذا لا يجدي لأن الشخص ليس بوسعه سماعك مهما رفعت
                                            من نبرة صوتك.
                                        </li>
                                        <li>
                                            <i class="ri-check-double-line"></i>
                                            كن صبورا عندما تتحدث أو عندما تكرر الكلمات أو تعيد صياغتها مرة أخرى .
                                        </li>
                                        <li>
                                            <i class="ri-check-double-line"></i>
                                            شجعهم على المشاركة مع العائلة في جميع نشاطاتهم الاجتماعية لأن الشخص الذي
                                            يعاني
                                            من إعاقة هو بطبيعته
                                            انطوائي.
                                        </li>

                                        <li> <i class="ri-check-double-line"></i>
                                            اجعله يشارك في الحديث والمناقشات كأنه فرد طبيعي.</li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed vid"
                                    vid-path="{{ asset('assets/vid/nf3.mp4') }}" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-4">
                                    {{-- <span class="num">4.</span> --}}
                                    ما أهمية وجود مترجم لغة الإشارة؟
                                </button>
                            </h3>
                            <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body vid" vid-path="{{ asset('assets/vid/nf3.mp4') }}">
                                    <p> يعتبر مترجم لغة الإشارة الحلقة الأساسية والمهمة والضرورية للتواصل بين الصم والمحيط
                                        الخارجي، فهو الذي ينقل للصم ما يدور حولهم من معلومات وأفكار ومشاعر، وينقل مشاعر
                                        وأفكار
                                        الصم للأشخاص السامعين.</p>
                                    <h6> أثبت الدراسات والحقائق :</h6>
                                    <ul>
                                        <li>أن وجود مترجمين لغة الإشارة أمراً أساسيا وضرورياً لتمكين الصم من الاندماج في
                                            كافة
                                            الجوانب الحياتية،
                                            وحقاً من حقوق الصم
                                            وخدمة مساندة لهم .</li>
                                    </ul>

                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed vid"
                                    vid-path="{{ asset('assets/vid/nf3.mp4') }}" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                                    {{-- <span class="num">5.</span> --}}
                                    ما هي التشريعات الخاصة بذوي الإعاقة داخل السلطنة؟
                                </button>
                            </h3>
                            <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body vid" vid-path="{{ asset('assets/vid/nf3.mp4') }}">
                                    <p>

                                        قضت المادة الأولى من المرسوم السلطاني رقم (8/2021) الصادر بتاريخ 13 يناير 2021م
                                        بتعديل بعض القوانين والمراسيم السلطانية على أن:
                                        ” تستبدل بكلمة (المعوقين)، وبكلمة (المعاقين) وبعبارة (ذوي الاحتياجات الخاصة)،
                                        وبغيرها من المصطلحات التي يراد بها الأشخاص ذوي الإعاقة،
                                        أينما وردت في القوانين والمراسيم السلطانية، عبارة (الأشخاص ذوي الإعاقة) “،
                                        وعليه ينبغي مواءمة جميع التشريعات والقرارات واللوائح مع نص المرسوم السلطاني.

                                    </p>
                                    <p>
                                        إصدار المرسوم السلطاني رقم 121 / 2008 بشأن تصديق سلطنة عمان على الاتفاقية الدولية
                                        لحقوق
                                        الأشخاص ذوي الإعاقة.
                                    </p>

                                </div>
                            </div>
                        </div><!-- # Faq item-->


                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed  vid"
                                    vid-path="{{ asset('assets/vid/nf3.mp4') }}" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq-content-6">
                                    {{-- <span class="num">6.</span> --}}
                                    لماذا لا يمكننا استخدام الافاتار للترجمة الإشارية في الوقت الحالي؟

                                </button>
                            </h3>
                            <div id="faq-content-6" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body  vid" vid-path="{{ asset('assets/vid/nf3.mp4') }}">
                                    <p>
                                        لتحقيق فعالية عالية في استخدام الأفاتار للترجمة بلغة الإشارة يتطلب تبني استراتيجيات
                                        تقنية وتجريبية محسّنة. مثل:
                                    </p>
                                    <h6> تطوير الأفاتار بتقنية متقدمة:</h6>
                                    <ul>
                                        <li><i class="ri-check-double-line"></i>
                                            استخدام تقنيات الرسوم المتحركة متعددة الأبعاد لجعل حركات الأفاتار أكثر سلاسة
                                            ودقة.
                                        </li>
                                        <li><i class="ri-check-double-line"></i>
                                            تضمين التعابير الوجهية والتفاصيل الصغيرة في حركات الأفاتار لجعل الترجمة أكثر
                                            طبيعية وفعالية.
                                        </li>
                                    </ul>

                                    <h6> تحديث قاعدة بيانات لغة الإشارة:</h6>
                                    <ul>
                                        <li><i class="ri-check-double-line"></i>
                                            توسيع القاموس الإشاري: إضافة المزيد من الإشارات لتغطية مصطلحات جديدة وحديثة.
                                        </li>

                                        <li><i class="ri-check-double-line"></i>
                                            التكيف مع اللهجات المحلية: تضمين إشارات تلائم اللهجات المحلية المختلفة لضمان فهم
                                            المستخدمين من مختلف المناطق.
                                        </li>
                                    </ul>

                                    <h6> الذكاء الاصطناعي والتعلم الآلي:</h6>
                                    <ul>
                                        <li><i class="ri-check-double-line"></i>
                                            تحليل البيانات وتحسين الأداء: استخدام تقنيات الذكاء الاصطناعي لتحليل استخدام
                                            الأفاتار وتعلم كيفية تحسين الترجمة بناءً على ردود فعل المستخدمين.
                                        </li>
                                        <li><i class="ri-check-double-line"></i>
                                            التعلم التفاعلي: تمكين الأفاتار من التعلم وتحسين أدائه بمرور الوقت من خلال
                                            التفاعل المستمر مع المستخدمين.
                                        </li>
                                    </ul>

                                    <h6> التفاعل مع المستخدمين: </h6>
                                    <ul>
                                        <li> <i class="ri-check-double-line"></i>
                                            الاختبارات التجريبية: تنفيذ اختبارات تجريبية مع مجموعة متنوعة من المستخدمين
                                            لضمان أن الأفاتار يعمل بفعالية مع مختلف الفئات.
                                        </li>
                                    </ul>
                                    <p>
                                        بتبني هذه الخطوات، يمكن تحسين أداء الأفاتار للترجمة بلغة الإشارة، مما يسهم في تقديم
                                        خدمة أكثر دقة وفاعلية لذوي الإعاقة السمعية.
                                    </p>
                                </div>
                            </div>
                        </div><!-- # Faq item-->
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->
@endsection
