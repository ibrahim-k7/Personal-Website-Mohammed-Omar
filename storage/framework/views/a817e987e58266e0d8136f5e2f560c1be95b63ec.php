

<?php $__env->startSection('title'); ?>
    الحقائب التدريبية
<?php $__env->stopSection(); ?>

<?php $__env->startSection('servicesNav'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('servicesBagsNav'); ?>
active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="con" >

        <div class="row w-100">
            <div class="col-12 mt-5 mb-3 text-center fs-3">

                <h4><img src="front/imgs/icons8-portfolio-32.png" alt="" class="mx-2">الحقائب التدريبية </h4>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <?php if(!@empty($bag_data)): ?>
                    <?php $__currentLoopData = $bag_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-6 col-sm-12 mt-3 mb-3">
                            <div class="item m-4">
                                <div class=" card design text-center ">
                                    <img src="/uploadsBag/<?php echo e($info->image); ?>" class="m-2 rounded mx-auto d-block" style="width: 50%"
                                        alt="...">
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
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <?php endif; ?>


            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mohammed-omar-la\resources\views/front/bag.blade.php ENDPATH**/ ?>