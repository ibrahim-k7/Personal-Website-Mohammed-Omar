

<?php $__env->startSection('title'); ?>
    شركاء النجاح
<?php $__env->stopSection(); ?>

<?php $__env->startSection('success_partnersNav'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!--شركاء النجاح-->

    <div class="cont" style="background-color: #c4cfd4;">

        <div class="row w-100">
            <div class="col-12 mt-3 mb-3 text-center fs-3 ">
                <h4><img src="front/imgs/icons8-business-group-32.png" alt="" class="mx-2">شركاء النجاح </h4>
            </div>
        </div>



        <?php if(!@empty($success_partner_data)): ?>
            <?php $__currentLoopData = $success_partner_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="container">


                    <div class="row">
                        <div class="col">
                            <div class="card design mt-5 mb-5">
                                <div class="card-header">
                                    <div class="container owl-carousel all_success_partners owl-theme mt-3 mb-3">
                                        <div class="item m-3">

                                            <img src="/uploadsSuccess_partner/<?php echo e($info->image_01); ?>"
                                                class="rounded mx-auto d-block w-50 " alt="">
                                        </div>
                                        <div class="item m-3">

                                            <img src="/uploadsSuccess_partner/<?php echo e($info->image_02); ?>"
                                                class="rounded mx-auto d-block w-50 " alt="">
                                        </div>
                                        <div class="item m-3">

                                            <img src="/uploadsSuccess_partner/<?php echo e($info->image_03); ?>"
                                                class="rounded mx-auto d-block w-50 " alt="">
                                        </div>
                                        <div class="item m-3">

                                            <img src="/uploadsSuccess_partner/<?php echo e($info->image_04); ?>"
                                                class="rounded mx-auto d-block w-50 " alt="">
                                        </div>
                                        <div class="item m-3">

                                            <img src="/uploadsSuccess_partner/<?php echo e($info->image_05); ?>"
                                                class="rounded mx-auto d-block w-50 " alt="">
                                        </div>
                                        <div class="item m-3">

                                            <img src="/uploadsSuccess_partner/<?php echo e($info->image_06); ?>"
                                                class="rounded mx-auto d-block w-50 " alt="">
                                        </div>
                                    </div>
                                    <div class="slider_nav ">
                                        <img src="front/imgs/icons8-forward-48.png" class="am-next all_success_partners"
                                            alt="">
                                        <img src="frint/imgs/icons8-back-48.png" class="am-prev all_success_partners"
                                            alt="">
                                    </div>

                                </div>
                                <div class="card-body text-center">

                                    <div class="card"
                                        style="background-color: #D9D9D9;  border: 1px solid black ; border-radius: 5px;">
                                        <div class="card-header"><?php echo e($info->client); ?></div>
                                        <div class="card-body"> <?php echo e($info->details); ?>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
        <?php endif; ?>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mohammed-omar-la\resources\views/front/success_partners.blade.php ENDPATH**/ ?>