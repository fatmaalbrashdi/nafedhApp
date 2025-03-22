

<?php $__env->startSection('title', 'welcome'); ?>

<?php $__env->startSection('body'); ?>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2 style="color: white;" class="vid" vid-path="<?php echo e(asset('assets/vid/nf3.mp4')); ?>">تــــواصـــل مــعنا</h2>
                <p style="color: white;">
                    لا تتردد في التواصل معنا عبر أي من القنوات المتاحة أدناه، وسنكون سعداء بالرد على جميع استفساراتك في أقرب
                    وقت ممكن
                </p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">
                                <a href="https://maps.app.goo.gl/FVeRyF7bAFt2GSvx7" target="_blank">
                                    <i class="bx bx-map"></i>
                                </a>
                                <h3>مــوقعنا</h3>
                                <p> سلطنة عُمان- مسقط- هيئة تنمية المؤسسات الصغيرة والمتوسطة</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=signbook.om@gmail.com"
                                    target="_blank">
                                    <i class="bx bx-envelope"></i>
                                </a>
                                <h3>البريد الإلكتروني</h3>
                                <p>signbook.om@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <a href="#" onclick="window.location.href='tel:+96891444902'; return false;">
                                    <i class="bx bx-phone-call"></i>
                                </a>

                                <h3>الاتــصال</h3>
                                <p>96891444902+</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="الاسم"
                                    required>
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="البريد الإلكتروني" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="الموضوع"
                                required>
                        </div>
                        
                        <div class="form-group">
                            <input type="file" name="videosend" id="videosend" style="display:none;"
                                onChange="$('#file_label').text($(this).val())" />
                            <label for="videosend" class="form-control text-secondary">ارفق الفيديو<span
                                    id="file_label"></span></label>
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="الرسالة" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">تم ارسال رسالتك. شكرًا لك!</div>
                        </div>
                        <div class="text-center"><button type="submit">إرسال</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\fatma\Desktop\project1\nafedhApp\resources\views/home/contact.blade.php ENDPATH**/ ?>