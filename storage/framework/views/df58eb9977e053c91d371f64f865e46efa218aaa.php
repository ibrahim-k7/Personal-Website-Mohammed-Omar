

<?php $__env->startSection('title'); ?>
    ادارة محاور الدورة
<?php $__env->stopSection(); ?>

<?php $__env->startSection('coursesNav'); ?>
active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php if(Session::has('success')): ?>
<div class="alert alert-left alert-success alert-dismissible fade show m-3" role="alert">
    <span><?php echo e(Session::get('success')); ?></span>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php else: ?>
<?php endif; ?>

<div class="row w-100">
    <div class="col-12 mt-5 mb-3 text-center fs-3">

        <h4><img src="front/imgs/icons8-group-task-32.png" alt="" class="mx-2">محاور الدورة </h4>
    </div>
</div>

<div class="container">
    <div class="row ">
        <?php if(!@empty($course_data)): ?>
            <?php $__currentLoopData = $course_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-6 col-sm-12 mt-3 mb-3">
                    <div class=" card index">
                        <div class="card-header text-center m-3" style="background-color: #C8C1CD;  border: 1px solid black ; border-radius: 10px;"><?php echo e($info->interlocutor); ?> </div>

                        <div class="card-body text-center">
                            <div class="row">
                                <div class="col-6"> <a href="<?php echo e(route('edit.Interlocutor',$info->id)); ?>" class="btn px-3"
                                        style="background-color: #6c4996c0;  border: 1px solid black ; border-radius: 10px;">تحديث</a>
                                </div>
                                <div class="col-6">
                                    <a href="<?php echo e(route('destroy.Interlocutor', $info->id)); ?>" class="btn px-3"
                                        style="background-color: #de5d66b4;  border: 1px solid black ; border-radius: 10px;">حذف</a>
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
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mohammed-omar-la\resources\views/admin/courseInterlocutor.blade.php ENDPATH**/ ?>