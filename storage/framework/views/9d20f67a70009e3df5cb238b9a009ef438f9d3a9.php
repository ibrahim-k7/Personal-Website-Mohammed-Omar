

<?php $__env->startSection('title'); ?>
    الاستشارات
<?php $__env->stopSection(); ?>

<?php $__env->startSection('servicesNav'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('servicesConsultingNav'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="cont" >




        <div class="row w-100">
            <div class="col-12 mt-5 mb-3 text-center fs-3">

                <h4><img src="front/imgs/icons8-group-task-32.png" alt="" class="mx-2">الاستشارات </h4>
            </div>
        </div>

        <div class="container">
            <div class="row ">
                <?php if(!@empty($counseling_data)): ?>
                    <?php $__currentLoopData = $counseling_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-6 col-sm-12 mt-3 mb-3">
                            <div class=" card design ">
                                <div class="card-body text-center "><?php echo e($info->counseling); ?></div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <?php endif; ?>
            </div>
            <div class=" d-flex aligns-items-center justify-content-center">
                 <?php echo e($counseling_data->links()); ?>

           </div>
          
        </div>

        <div class=" bg-black mt-2 " style=" height: 1px;"></div>

        <div class="container">

            <div class="row mb-3 mt-4">
                <div class="col-12 mt-3 mb-3 text-center fs-3">
                    <h4><img src="assets/imgs/icons8-group-task-48.png" alt="">تواصل معي لطلب الاستشارة</h4>
                </div>
            </div>

            <div class="row ">
                <div class="col-xl-9 col-sm-12 ">

                    <form>
                        <div class="form-group p-2">

                            <div class="row">
                                <div class="col">
                                    <label for="firstName" class="mb-1">الاسم الاول</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="الاسم الاول">
                                </div>
                                <div class="col">
                                    <div class="col">
                                        <label for="lastName" class="mb-1">الاسم الاخير</label>
                                        <input type="text" class="form-control" id="firstName"
                                            placeholder="الاسم الاخير">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-group p-2">

                            <div class="row">
                                <div class="col">
                                    <label for="PhoneNumber" class="mb-1">الهاتف</label>
                                    <input type="tel" class="form-control" id="PhoneNumber" placeholder="الهاتف">
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1" class="mb-1">الايميل</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="name@example.com">
                                </div>
                            </div>

                        </div>

                        <div class="form-group p-2">

                            <label for="firstName" class="mb-1">موضوع الرسالة </label>
                            <input type="text" class="form-control" id="firstName" placeholder="موضوع الرسالة ">

                        </div>

                        <div class="form-group p-2">

                            <label for="exampleFormControlTextarea1 " class="mb-1">الرسالة</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>

                        </div>

                        <div class="row m-2">
                            <div class="col text-center">
                                <button type="submit" class="btn send mb-3">ارسال
                                    <img src="assets/imgs/icons8-sent-32.png" alt="" srcset=""></button>
                            </div>

                        </div>

                    </form>


                </div>
                <div class="col-xl-3 col-sm-12 align-self-center mt-sm-3 mt-xl-0 mb-5">
                    <div class="card design">
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mohammed-omar-la\resources\views/front/consulting.blade.php ENDPATH**/ ?>