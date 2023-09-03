

<?php $__env->startSection('title'); ?>
    تحديث استشارة
<?php $__env->stopSection(); ?>

<?php $__env->startSection('consuNav'); ?>
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
        <div class="card add_cosulting  rounded mx-auto d-block "
            style="background-color: #D9D9D9; border: 1px solid black ; border-radius: 10px;">
            <div class="card-header text-center">
                <h5 class="card-title m-2">اضافة استشارة</h5>
            </div>
            <div class="card-body ">
                <form method="POST" action="<?php echo e(route('update.Consulting',$counseling_data['id'])); ?>">
                    <?php echo csrf_field(); ?>
                    <label for="filed_consulting" class="mb-1">الاستشارة</label>
                    <input type="text" id="filed_consulting" name="filed_consulting" class="form-control" value="<?php echo e(old('filed_consulting', $counseling_data['counseling'])); ?>"
                        style="background-color: #C8C1CD">
                    <?php $__errorArgs = ['filed_consulting'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"> <?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <div class="card-body text-center">
                        <button class="btn  px-3" type="submit"
                            style="background-color: #6c4996c0;  border: 1px solid black ; border-radius: 10px;">تحديث</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mohammed-omar-la\resources\views/admin/consultingEdit.blade.php ENDPATH**/ ?>