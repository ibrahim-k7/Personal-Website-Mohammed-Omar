

<?php $__env->startSection('title'); ?>
    home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('homeNav'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(Session::has('success')): ?>
        <div class="alert alert-success m-0" role="alert"><?php echo e(Session::get('success')); ?></div>
    <?php else: ?>
    <?php endif; ?>
    <div class="con" style="background-color: #c4cfd4">
        <div class="">
            <div class=" bg-black  " style=" height: 1px;">
            </div>
        </div>

        <div class="image-container">
            <img src="front/imgs/backgrund.jpg" alt="Your Image" />
            <div class="card" id="image_card" >
                <div class="row__card">
                    <div class="info__img ">
                        <img src="front/imgs/mohammed Omar-modified.png" class="img-circle " style="width: 50%" />
                    </div>
                    <div class="info__text text-center align-self-center ">

                        <h2 class="fs-3 text-white"><img src="front/imgs/icons8-pointing-at-self-32.png"
                                style="width: 40px;" alt="">
                            تعريف

                        </h2>
                        <p class="fs-4 text-light">
                            اهلاً ، أنا محمد ، كاتب محتوى إبداعي ومدقق لغوي ومحرر. أنا فخور بتقديم أعمال عالية الجودة
                            باستمرار
                            لكل من الشركات B2B و B2C.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <div class=" bg-black  " style=" height: 1px;">
            </div>
        </div>


        <div class="">
            <!--رسالتي-->
            <div class=" row ">
                <div class="col-12 mt-3 mb-3 text-center fs-3">
                    <h4><img src="front/imgs/icons8-message-32.png" alt="" class="mx-2">رسالتي في الحياة</h4>
                </div>



            </div>

            <div class="container">
                <div class="row">
                    <div class="col ">
                        <div class=" bg-white mx-5  " style=" height: 1px;"> </div>
                    </div>
                </div>
            </div>

            <div class="container owl-carousel my-message owl-theme mb-3  ">
                <div class="item m-5  ">
                    <div class=" card " style="background-color: #D9D9D9;  border: 1px solid black ; border-radius: 5px;">
                        <div class="card-body p-0 text-center">
                            <p class="p-3 mb-0">المصاريف مثل تربية المواد أصر على البناء في. المستمر حتى عدم الثقة النطق
                                بعدم
                                الرغبة في
                                الاستماع. الشيء لا طعم لنا مانور.</p>
                        </div>
                    </div>
                </div>
                <div class="item m-5  ">
                    <div class=" card " style="background-color: #D9D9D9;  border: 1px solid black ; border-radius: 5px;">

                        <div class="card-body p-0 text-center">
                            <p class="p-3 mb-0">
                                المصاريفالمصاريفالمصاريفالمصاريفالمصاريفالمصاريفالمصاريفالمصاريفالمصاريفالمصاريفالمصاريفالمصاريفالمصاريفالمصاريف
                                مثل</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="slider_nav  ">
                <img src="assets/imgs/icons8-forward-48.png" class="am-next my-message" alt="">
                <img src="assets/imgs/icons8-back-48.png" class="am-prev my-message" alt="">
            </div>


            <!--مؤهلاتي-->
            <div class="container-fluid">
                <div class=" row ">
                    <div class="col-12 mt-3 mb-3 text-center fs-3">
                        <h4><img src="front/imgs/icons8-education-32.png" alt="" class="mx-2">مؤهلاتي</h4>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col ">
                        <div class=" bg-white mx-5  " style=" height: 1px;"> </div>
                    </div>
                </div>
            </div>



            <div class="container owl-carousel moahlat owl-theme mb-3  ">
                <div class="item m-5  ">
                    <div class=" card " style="background-color: #D9D9D9;  border: 1px solid black ; border-radius: 5px;">
                        <div class="card-header">المدير الفني - تسلا.</div>
                        <div class="card-title mt-1 mb-1 ">
                            <p class="px-3 mb-0">2012 - 2016</p>
                        </div>
                        <div class="card-body p-0 ">
                            <p class="px-3">المصاريف مثل تربية المواد أصر على البناء في. المستمر حتى عدم الثقة النطق
                                بعدم
                                الرغبة في
                                الاستماع. الشيء لا طعم لنا مانور.</p>
                        </div>
                    </div>
                </div>
                <div class="item m-5  ">
                    <div class=" card " style="background-color: #D9D9D9;  border: 1px solid black ; border-radius: 5px;">
                        <div class="card-header">المدير الفني - تسلا.</div>
                        <div class="card-title mt-1 mb-1 ">
                            <p class="px-3 mb-0">2012 - 2016</p>
                        </div>
                        <div class="card-body p-0 ">
                            <p class="px-3">المصاريف مثل تربية المواد أصر على البناء في. المستمر حتى
                                عدالاستماعالاستماعالاستماعالاستماعالاستماعالاستماعالاستماعالاستماعالاستماعم الثقة النطق
                                بعدم
                                الرغبة في
                                الاستماع. الشيء لا طعم لنا مانور.</p>
                        </div>
                    </div>
                </div>
                <div class="item m-5  ">
                    <div class=" card " style="background-color: #D9D9D9;  border: 1px solid black ; border-radius: 5px;">
                        <div class="card-header">المدير الفني - تسلا.</div>
                        <div class="card-title mt-1 mb-1 ">
                            <p class="px-3 mb-0">2012 - 2016</p>
                        </div>
                        <div class="card-body p-0 ">
                            <p class="px-3">المصاريف مثل تربية المواد أصر على البناء في. المستمر حتى عدم الثقة النطق
                                بعدم
                                الرغبة في
                                الاستماع. الشيء لا طعم لنا مانور.</p>
                        </div>
                    </div>
                </div>
                <div class="item m-5  ">
                    <div class=" card " style="background-color: #D9D9D9;  border: 1px solid black ; border-radius: 5px;">
                        <div class="card-header">المدير الفني - تسلا.</div>
                        <div class="card-title mt-1 mb-1 ">
                            <p class="px-3 mb-0">2012 - 2016</p>
                        </div>
                        <div class="card-body p-0 ">
                            <p class="px-3">المصاريف مثل تربية المواد أصر على البناء في. المستمر حتى عدم الثقة النطق
                                بعدم
                                الرغبة في
                                الاستماع. الشيء لا طعم لنا مانور.</p>
                        </div>
                    </div>
                </div>
                <div class="item m-5  ">
                    <div class=" card " style="background-color: #D9D9D9;  border: 1px solid black ; border-radius: 5px;">
                        <div class="card-header">المدير الفني - تسلا.</div>
                        <div class="card-title mt-1 mb-1 ">
                            <p class="px-3 mb-0">2012 - 2016</p>
                        </div>
                        <div class="card-body p-0 ">
                            <p class="px-3">المصاريف مثل تربية المواد أصر على البناء في. المستمر حتى عدم الثقة النطق
                                بعدم
                                الرغبة في
                                الاستماع. الشيء لا طعم لنا مانور.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider_nav  ">
                <img src="assets/imgs/icons8-forward-48.png" class="am-next moahlat" alt="">
                <img src="assets/imgs/icons8-back-48.png" class="am-prev moahlat" alt="">
            </div>

            <!--خبراتي-->
            <div class="container-fluid">
                <div class=" row ">
                    <div class="col-12 mt-3 mb-3 text-center fs-3">
                        <h4><img src="front/imgs/icons8-bag-32.png" alt="" class="mx-2">خبراتي</h4>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col ">
                        <div class=" bg-white mx-5  " style=" height: 1px;"> </div>
                    </div>
                </div>
            </div>


            <div class="container owl-carousel experr owl-theme mb-3  ">
                <div class="item m-5  ">
                    <div class=" card " style="background-color: #D9D9D9;  border: 1px solid black ; border-radius: 5px;">
                        <div class="card-header">المدير الفني - تسلا.</div>
                        <div class="card-title mt-1 mb-1 ">
                            <p class="px-3 mb-0">2012 - 2016</p>
                        </div>
                        <div class="card-body p-0 ">
                            <p class="px-3">المصاريف مثل تربية المواد أصر على البناء في. المستمر حتى عدم الثقة النطق
                                بعدم
                                الرغبة في
                                الاستماع. الشيء لا طعم لنا مانور.</p>
                        </div>
                    </div>
                </div>
                <div class="item m-5  ">
                    <div class=" card " style="background-color: #D9D9D9;  border: 1px solid black ; border-radius: 5px;">
                        <div class="card-header">المدير الفني - تسلا.</div>
                        <div class="card-title mt-1 mb-1 ">
                            <p class="px-3 mb-0">2012 - 2016</p>
                        </div>
                        <div class="card-body p-0 ">
                            <p class="px-3">المصاريف مثل تربية المواد أصر على البناء في. المستمر حتى عدم الثقة النطق
                                بعدم
                                الرغبة في
                                الاستماع. الشيء لا طعم لنا مانور.</p>
                        </div>
                    </div>
                </div>
                <div class="item m-5  ">
                    <div class=" card " style="background-color: #D9D9D9;  border: 1px solid black ; border-radius: 5px;">
                        <div class="card-header">المدير الفني - تسلا.</div>
                        <div class="card-title mt-1 mb-1 ">
                            <p class="px-3 mb-0">2012 - 2016</p>
                        </div>
                        <div class="card-body p-0 ">
                            <p class="px-3">المصاريف مثل تربية المواد أصر على البناء في. المستمر حتى عدم الثقة النطق
                                بعدم
                                الرغبة في
                                الاستماع. الشيء لا طعم لنا مانور.</p>
                        </div>
                    </div>
                </div>
                <div class="item m-5  ">
                    <div class=" card " style="background-color: #D9D9D9;  border: 1px solid black ; border-radius: 5px;">
                        <div class="card-header">المدير الفني - تسلا.</div>
                        <div class="card-title mt-1 mb-1 ">
                            <p class="px-3 mb-0">2012 - 2016</p>
                        </div>
                        <div class="card-body p-0 ">
                            <p class="px-3">المصاريف مثل تربية المواد أصر على البناء في. المستمر حتى عدم الثقة النطق
                                بعدم
                                الرغبة في
                                الاستماع. الشيء لا طعم لنا مانور.</p>
                        </div>
                    </div>
                </div>
                <div class="item m-5  ">
                    <div class=" card " style="background-color: #D9D9D9;  border: 1px solid black ; border-radius: 5px;">
                        <div class="card-header">المدير الفني - تسلا.</div>
                        <div class="card-title mt-1 mb-1 ">
                            <p class="px-3 mb-0">2012 - 2016</p>
                        </div>
                        <div class="card-body p-0 ">
                            <p class="px-3">المصاريف مثل تربية المواد أصر على البناء في. المستمر حتى عدم الثقة النطق
                                بعدم
                                الرغبة في
                                الاستماع. الشيء لا طعم لنا مانور.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider_nav  ">
                <img src="assets/imgs/icons8-forward-48.png" class="am-next experr" alt="">
                <img src="assets/imgs/icons8-back-48.png" class="am-prev experr" alt="">
            </div>



        </div>

        <!--خدماتي-->

        <div class=" bg-black  " style=" height: 1px;"></div>

        <div class="w-100">



            <div class="row w-100">
                <div class="col-12 mt-3 mb-3 text-center fs-3">

                    <h4><img src="front/imgs/icons8-group-task-32.png" alt="" class="mx-2">الاستشارات <a
                            class="link-opacity-75 fs-6 mx-1" href="<?php echo e(route('consulting')); ?>">عرض الكل</a></h4>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col ">
                        <div class=" bg-white mx-5  " style=" height: 1px;"> </div>
                    </div>
                </div>
            </div>

            <div class="container owl-carousel consulting owl-theme mb-3  ">
                <?php if(!@empty($counseling_data)): ?>
                    <?php $__currentLoopData = $counseling_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item m-5  ">
                            <div class=" card design ">
                                <div class="card-body text-center "><?php echo e($info->counseling); ?></div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <?php endif; ?>

                <!-- <div class="item m-5 ">
                                                        <div class="card consulting ">
                                                            <div class="card-body text-center ">استشارة التطوير المهني للمعلمين</div>
                                                        </div>
                                                    </div>
                                                    <div class="item m-5 ">
                                                        <div class="card consulting">
                                                            <div class="card-body text-center">استشارات الأبحاث العلمية و التحليل الاحصائي.علمية و التحليل
                                                                الاعلمية و التحليل الا</div>
                                                        </div>
                                                    </div>
                                                    <div class="item m-5">
                                                        <div class="card consulting">
                                                            <div class="card-body text-center">استشارات تكنولوجيا التعليم و التعليم و التدريب الالكتروني .
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item m-5">
                                                        <div class="card consulting">
                                                            <div class="card-body text-center">استشارات تكنولوجيا التعليم و التعليم و التدريب الالكتروني .
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item m-5">
                                                        <div class="card consulting">
                                                            <div class="card-body text-center">استشارات تكنولوجيا التعليم و التعليم و التدريب الالكتروني .
                                                            </div>
                                                        </div>
                                                    </div>-->
            </div>
            <div class="slider_nav  ">
                <img src="front/imgs/icons8-forward-48.png" class="am-next consulting " alt="">
                <img src="front/imgs/icons8-back-48.png" class="am-prev consulting " alt="">
            </div>

            <!--الحقائب التدربية-->

            <div class="row w-100">
                <div class="col-12 mt-3 mb-3 text-center fs-3">

                    <h4><img src="front/imgs/icons8-portfolio-32.png" alt="" class="mx-2">الحقائب التدريبية <a
                            class="link-opacity-75 fs-6 mx-1" href="<?php echo e(route('training_bags')); ?>">عرض الكل</a></h4>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col ">
                        <div class=" bg-white mx-5  " style=" height: 1px;"> </div>
                    </div>
                </div>
            </div>

            <div class="container owl-carousel bags owl-theme mt-3 mb-3 ">
                <?php if(!@empty($bag_data)): ?>
                    <?php $__currentLoopData = $bag_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item m-4">
                            <div class="card design text-center ">
                                <img src="/uploadsBag/<?php echo e($info->image); ?>" class="m-2 rounded mx-auto d-block"
                                    style="width: 50%" alt="...">
                                <div class="card-header">
                                    <h4><?php echo e($info->name); ?></h4>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">محتويات الحقيبة :</h5>
                                    <?php $__currentLoopData = $info->content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <p class="card-text"><?php echo e($content->content); ?></p>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                </div>
                                <div class="card-footer">

                                    <div class="row text-center">
                                        <div class="col-6 text-center">
                                            <p><?php echo e($info->price); ?>$</p>
                                        </div>
                                        <div class="col-6">
                                            <a href="#" class="btn book_now">احجز
                                                الان</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <?php endif; ?>


            </div>
            <div class="slider_nav ">
                <img src="front/imgs/icons8-forward-48.png" class="am-next bags" alt="">
                <img src="front/imgs/icons8-back-48.png" class="am-prev bags" alt="">
            </div>

            <!--الدورات-->
            <div class="row w-100">
                <div class="col-12 mt-3 mb-3 text-center fs-3">

                    <h4><img src="front/imgs/icons8-ratings-pulsar-color-32.png" alt="" class="mx-2">الدورات
                        التدريبية
                        <a class="link-opacity-75 fs-6 mx-2" href="<?php echo e(route('courses')); ?>">عرض الكل</a>
                    </h4>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col ">
                        <div class=" bg-white mx-5  " style=" height: 1px;"> </div>
                    </div>
                </div>
            </div>


            <div class="container owl-carousel courses owl-theme mt-3 mb-3 ">

                <?php if(!@empty($course_data)): ?>
                    <?php $__currentLoopData = $course_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item m-5">
                            <div class="card design  text-center ">

                                <div class="card-header">
                                    <h4><?php echo e($info->name); ?></h4>
                                </div>

                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <h5 class="card-title">هدف الدورة</h5>
                                        <li class="list-group-item courses ">
                                            <?php $__currentLoopData = $info->goal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $goal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <p class="card-text"><?php echo e($goal->goal); ?></p>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </li>
                                        <h5 class="card-title">محاور الدورة :</h5>
                                        <li class="list-group-item courses">
                                            <?php $__currentLoopData = $info->interlocutor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $interlocutor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <p class="card-text"><?php echo e($interlocutor->interlocutor); ?></p>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </li>
                                    </ul>

                                    <div class="row">
                                        <div class="col-sm-12 col-lg-4">
                                            <p>مدة الدورة :</p>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item courses"><?php echo e($info->duration); ?></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-12 col-lg-4">
                                            <p>محاضر الدورة :</p>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item courses"><?php echo e($info->presenter); ?></li>
                                            </ul>

                                        </div>
                                        <div class="col-sm-12 col-lg-4">

                                            <p>مكان الدورة :</p>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item courses"><?php echo e($info->place); ?></li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">

                                    <div class="row text-center">
                                        <div class="col-6 text-center">
                                            <p><?php echo e($info->price); ?>$</p>
                                        </div>
                                        <div class="col-6">
                                            <a href="#" class="btn book_now">احجز
                                                الان</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <?php endif; ?>

            </div>
            <div class="slider_nav ">
                <img src="front/imgs/icons8-forward-48.png" class="am-next courses" alt="">
                <img src="front/imgs/icons8-back-48.png" class="am-prev courses" alt="">
            </div>












        </div>

        <div class=" bg-black  " style=" height: 2px;"></div>

        <!--شركاء النجاح-->

        <div class="w-100">

            <div class="row w-100">
                <div class="col-12 mt-3 mb-3 text-center fs-3 ">
                    <h4><img src="front/imgs/icons8-business-group-32.png" alt="" class="mx-2">شركاء النجاح <a
                            class="link-opacity-75 fs-6 mx-2" href="<?php echo e(route('success_partner')); ?>">عرض الكل</a></h4>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class=" bg-white mx-5  " style=" height: 1px;"> </div>
                    </div>
                </div>
            </div>

            <div class="container owl-carousel success_partners owl-theme mt-3 mb-3">
                <?php if(!@empty($success_partner_data)): ?>
                    <?php $__currentLoopData = $success_partner_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item m-3">
                            <div class="card success_partners">
                                <img src="/uploadsSuccess_partner/<?php echo e($info->image_01); ?>"
                                    class="rounded mx-auto d-block w-50 " alt="">
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item success_partners text-center"
                                            style="border: 1px solid black; border-radius: 5px;"><?php echo e($info->client); ?>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <?php endif; ?>

            </div>
            <div class="slider_nav ">
                <img src="front/imgs/icons8-forward-48.png" class="am-next success_partners" alt="">
                <img src="front/imgs/icons8-back-48.png" class="am-prev success_partners" alt="">
            </div>



        </div>


        <div class=" bg-black  " style=" height: 2px;"></div>

        <!--تواصل معانا-->


        <div class="container w-100">

            <div class="row w-100">
                <div class="col-12 mt-3 mb-3 text-center fs-3">
                    <h4><img src="assets/imgs/icons8-group-task-48.png" alt="">تواصل معي</h4>

                </div>

            </div>

            <div class="row ">
                <div class="col-xl-9 col-sm-12 ">

                    <form method="POST" action="<?php echo e(route('store.Message')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group p-2">

                            <div class="row">
                                <div class="col">
                                    <label for="firstName" class="mb-1">الاسم الاول</label>
                                    <input type="text" class="form-control" id="firstName" name="firstName"
                                        placeholder="الاسم الاول">
                                    <?php $__errorArgs = ['firstName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"> <?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col">
                                    <div class="col">
                                        <label for="lastName" class="mb-1">الاسم الاخير</label>
                                        <input type="text" class="form-control" id="lastName" name="lastName"
                                            placeholder="الاسم الاخير">
                                        <?php $__errorArgs = ['lastName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"> <?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-group p-2">

                            <div class="row">
                                <div class="col">
                                    <label for="phoneNumber" class="mb-1">الهاتف</label>
                                    <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber"
                                        placeholder="الهاتف">
                                    <?php $__errorArgs = ['phoneNumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"> <?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col">
                                    <label for="email" class="mb-1">الايميل</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="name@example.com">
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"> <?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                        </div>

                        <div class="form-group p-2">

                            <label for="messageTitle" class="mb-1">موضوع الرسالة </label>
                            <input type="text" class="form-control" id="messageTitle" name="messageTitle"
                                placeholder="موضوع الرسالة ">
                            <?php $__errorArgs = ['messageTitle'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"> <?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </div>

                        <div class="form-group p-2">

                            <label for="message" class="mb-1">الرسالة</label>
                            <textarea class="form-control" id="message" name="message" rows="5"></textarea>
                            <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"> <?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </div>

                        <div class="row m-2">
                            <div class="col text-center">
                                <button type="submit" class="btn send mb-3"
                                    >ارسال
                                    <img src="assets/imgs/icons8-sent-32.png" alt="" srcset=""></button>
                            </div>

                        </div>

                    </form>


                </div>
                <div class="col-xl-3 col-sm-12 align-self-center mt-sm-3 mt-xl-0 mb-5">
                    <div class="card design ">
                        <div class="card-header">

                            <p class="text-center fw-bold ">معلومات الاتصال</p>

                        </div>

                        <div class="card-body">

                            <div class="row text-center ">

                                <div class="col-12 ">

                                    <p><span class="fs-5 fw-bold m-2">تلفون :</span> +967 777 676 006</p>

                                </div>
                                <div class="col-12">

                                    <p><span class="fs-5 fw-bold m-2">فاكس :</span> +967 777 676 006</p>

                                </div>
                                <div class="col-12">

                                    <p><span class="fs-5 fw-bold m-2">الايميل :</span> ibr.no@gmail.com</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mohammed-omar-la\resources\views/front/home.blade.php ENDPATH**/ ?>