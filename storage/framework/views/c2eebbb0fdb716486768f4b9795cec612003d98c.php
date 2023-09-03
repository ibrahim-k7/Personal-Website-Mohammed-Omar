

<?php $__env->startSection('title'); ?>
    الدورات التدريبية
<?php $__env->stopSection(); ?>

<?php $__env->startSection('servicesNav'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <div class="contt" style="background-color: #c4cfd4;">

        <div class="row w-100">
            <div class="col-12 mt-5 mb-3 text-center fs-3">

                <h4><img src="front/imgs/icons8-ratings-pulsar-color-32.png" alt="" class="mx-2">الدورات
                    التدريبية
                    
                </h4>
            </div>
        </div>

        <div class="container ">
            <div class="row ">
                <?php if(!@empty($course_data)): ?>
                    <?php $__currentLoopData = $course_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-12">
                            <div class="item m-5">
                                <div class="container card courses  text-center ">

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
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <?php endif; ?>
            </div>
        </div>

    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mohammed-omar-la\resources\views/layouts/courses.blade.php ENDPATH**/ ?>