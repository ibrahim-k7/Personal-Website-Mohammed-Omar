

<?php $__env->startSection('title'); ?>
    تحديث الدورة
<?php $__env->stopSection(); ?>

<?php $__env->startSection('coursesNav'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(Session::has('success')): ?>
        <div class="alert alert-success" role="alert"><?php echo e(Session::get('success')); ?></div>
    <?php else: ?>
    <?php endif; ?>


    <div class="container  mt-5 mb-5">


        <div class="row ">
            <div class="col ">
                <div class="card add rounded mx-auto d-block ">
                    <div class="card-header text-center">
                        <h5 class="card-title m-2">تحديث دورة</h5>
                    </div>
                    <div class="card-body ">
                        <form method="POST" action="<?php echo e(route('update.Courses', $course_data['id'])); ?>">
                            <?php echo csrf_field(); ?>
                            <label for="courseName" class="mb-1">اسم الدورة</label>
                            <input type="text" id="courseName" name="courseName"
                                value="<?php echo e(old('courseName', $course_data['name'])); ?>" class="form-control add">
                            <?php $__errorArgs = ['courseName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"> <?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <br>

                            <div class="row">



                                <div class="col-lg-4 col-sm-6">
                                    <label for="courseTime" class="mb-1">المدة</label>
                                    <input type="text" id="courseTime" name="courseTime"
                                        value="<?php echo e(old('courseTime', $course_data['duration'])); ?>" class="form-control add">
                                    <?php $__errorArgs = ['courseTime'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"> <?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    <br>
                                </div>



                                <div class="col-lg-4 col-sm-6">
                                    <label for="coursePres" class="mb-1">المحاضر</label>
                                    <input type="text" id="coursePres" name="coursePres"
                                        value="<?php echo e(old('coursePres', $course_data['presenter'])); ?>" class="form-control add">
                                    <?php $__errorArgs = ['coursePres'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"> <?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    <br>
                                </div>


                                <div class="col-lg-4 col-sm-6">
                                    <label for="coursePlace" class="mb-1">المكان</label>
                                    <input type="text" id="coursePlace" name="coursePlace"
                                        value="<?php echo e(old('coursePlace', $course_data['place'])); ?>" class="form-control add">


                                    <?php $__errorArgs = ['coursePlace'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"> <?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    <br>
                                </div>

                            </div>
                            <div class="row ">
                                <div class="col-lg-4 col-sm-6">
                                    <label for="coursePrice" class="mb-1">السعر</label>
                                    <input type="text" id="coursePrice" name="coursePrice"
                                        value="<?php echo e(old('coursePrice', $course_data['price'])); ?>" class="form-control add">


                                    <?php $__errorArgs = ['coursePrice'];
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
                            <div class="text-center mt-2">
                                <button href="#" class="btn add px-3" type="submit">تحديث</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>






    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mohammed-omar-la\resources\views/admin/courseEdit.blade.php ENDPATH**/ ?>