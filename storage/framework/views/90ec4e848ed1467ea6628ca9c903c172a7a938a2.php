

<?php $__env->startSection('title'); ?>
    تحديث محور الدورة
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
    <div class="container  mt-5 mb-5">

        <div class="row ">
            <div class="col ">
                <div class="card add rounded mx-auto d-block ">
                    <div class="card-header text-center">
                        <h5 class="card-title m-2">تحديث محور</h5>
                    </div>
                    <div class="card-body ">
                        <form method="POST" action="<?php echo e(route('update.Interlocutor', $course_interlocutor_data['id'])); ?>">
                            <?php echo csrf_field(); ?>
                            <label for="interlocutor" class="mb-1">المحتوى</label>
                            <input type="text" id="interlocutor" name="interlocutor" class="form-control add"
                                value="<?php echo e(old('interlocutor', $course_interlocutor_data['interlocutor'])); ?>">

                            <?php $__errorArgs = ['interlocutor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"> <?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            <input type="hidden" id="courseId" name="courseId" class="form-control"
                                value="<?php echo e($course_interlocutor_data['course_id']); ?>" style="background-color: #C8C1CD">
                            <div class="card-body text-center">
                                <button class="btn update px-3" type="submit">تحديث</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mohammed-omar-la\resources\views/admin/courseInterlocutorEdit.blade.php ENDPATH**/ ?>