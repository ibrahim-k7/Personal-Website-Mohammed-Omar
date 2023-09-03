

<?php $__env->startSection('title'); ?>

تحديث الحقيبة

<?php $__env->stopSection(); ?>

<?php $__env->startSection('bagsNav'); ?>
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
        <div class="card add  rounded mx-auto d-block ">
            <div class="card-header text-center">
                <h5 class="card-title m-2">تحديث حقيبة</h5>
            </div>
            <div class="card-body ">
                <form method="POST" action="<?php echo e(route('update.Bag',$bag_data['id'])); ?>">
                    <?php echo csrf_field(); ?>
                    <label for="bagName" class="mb-1">اسم الحقيبة</label>
                    <input type="text" id="bagName" name="bagName" value="<?php echo e(old('bagName', $bag_data['name'])); ?>" class="form-control add">
                    <?php $__errorArgs = ['bagName'];
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

                    <label for="bagImg" class="mb-1">صورة</label>
                    <input type="text" id="bagImg" name="bagImg" value="<?php echo e(old('bagImg', $bag_data['image'])); ?>" class="form-control add">
                    <?php $__errorArgs = ['bagImg'];
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
                    <div class="col-3">
                        <label for="bagPrice" class="mb-1">السعر</label>
                        <input type="text" id="bagPrice" name="bagPrice" value="<?php echo e(old('bagPrice', $bag_data['price'])); ?>" class="form-control add">
                    </div>

                    <?php $__errorArgs = ['bagPrice'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"> <?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <div class="text-center mt-2">
                        <button href="#" class="btn update px-3" type="submit"
                            >تحديث</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mohammed-omar-la\resources\views/admin/bagEdit.blade.php ENDPATH**/ ?>