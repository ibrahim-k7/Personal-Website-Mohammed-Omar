<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!--  Bootsrtap css  -->
    <link rel="stylesheet"
        href=<?php echo e(asset('front/css/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_css_bootstrap.min.css')); ?> />

    <link rel="stylesheet" href=<?php echo e(asset('front/css/owl.carousel.min.css')); ?> />

    <link rel="stylesheet" href=<?php echo e(asset('front/css/owl.theme.default.min.css')); ?> />

    <link rel="stylesheet" href=<?php echo e(asset('front/css/style.css')); ?> />
</head>

<body class="mainColor">



    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-5 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php echo $__env->yieldContent('homeNav'); ?> " aria-current="page"
                            href="<?php echo e(route('home')); ?>">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $__env->yieldContent('mohNav'); ?>" aria-current="page" href="#">محمد عمر</a>
                    </li>
                    <li class="nav-item dropdown  ">
                        <a class="nav-link <?php echo $__env->yieldContent('servicesNav'); ?> dropdown-toggle" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            خدماتي
                        </a>
                        <ul class="dropdown-menu mainColor"  aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item mainColor <?php echo $__env->yieldContent('servicesConsultingNav'); ?> "
                                    href="<?php echo e(route('consulting')); ?>">الاستشارات</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item mainColor <?php echo $__env->yieldContent('servicesBagsNav'); ?>"
                                    href="<?php echo e(route('training_bags')); ?>">الحقائب</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item mainColor <?php echo $__env->yieldContent('servicesCoursesNav'); ?>" 
                                    href="<?php echo e(route('courses')); ?>">الدورات</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $__env->yieldContent('success_partnersNav'); ?> " aria-current="page"
                            href="<?php echo e(route('success_partner')); ?>">شركاء النجاح</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $__env->yieldContent('connectNav'); ?>" aria-current="page" href="#">تواصل معي</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="">
        <div class=" bg-black  " style=" height: 1px;">
        </div>
    </div>



    <?php echo $__env->yieldContent('content'); ?>

    <!--footer-->
    <footer >
        <div class=" bg-black  " style=" height: 2px;"></div>


        <div class="container">

            <div class="row text-center mt-4 ">

                <div class="col-6 mb-3 ">

                    <a href="http://"><img src="front/imgs/icons8-facebook-32.png" class="mx-2" alt="Facebook"></a>

                    <a href="http://"><img src="front/imgs/icons8-twitter-32.png" class="mx-2" alt="twitter"
                            srcset=""></a>

                    <a href="http://"><img src="front/imgs/icons8-youtube-32.png" class="mx-2" alt="youtube"
                            srcset=""></a>

                    <a href="http://"><img src="front/imgs/whatsapp.png" class="mx-2" alt="whatsapp"
                            srcset=""></a>

                    <a href="http://"><img src="front/imgs/mail.png" class="mx-2" alt="mail" srcset=""></a>

                </div>

                <div class="col-6">

                    <p class="fw-bold">Copyright © <span class="copyright-year-span">2023</span> All Right Reserved</p>

                </div>

            </div>

        </div>
    </footer>

    <!--  Bootsrtap js  -->
    <script src=<?php echo e(asset('front/js/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_js_bootstrap.bundle.min.js')); ?>></script>

    <script src=<?php echo e(asset('front/js/code.jquery.com_jquery-3.7.0.js')); ?>></script>

    <script src=<?php echo e(asset('front/js/owl.carousel.min.js')); ?>></script>

    <!--  js  -->
    <script src=<?php echo e(asset('front/js/main.js')); ?>></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\mohammed-omar-la\resources\views/layouts/main.blade.php ENDPATH**/ ?>