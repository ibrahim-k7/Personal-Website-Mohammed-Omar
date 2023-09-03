

<?php $__env->startSection('title'); ?>
    تحديث  شريك نجاح
<?php $__env->stopSection(); ?>

<?php $__env->startSection('consuNav'); ?>
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
                    <h5 class="card-title m-2">تحديث شريك نجاح</h5>
                </div>
                <div class="card-body ">
                    <form method="post" enctype="multipart/form-data" action="<?php echo e(route('update.Success_partners', $success_partner_data['id'])); ?>">
                        <?php echo csrf_field(); ?>
                        <label for="client" class="mb-1">الجهه</label>
                        <input type="text" id="client" name="client" class="form-control add" value="<?php echo e(old('client', $success_partner_data['client'])); ?>">

                        <?php $__errorArgs = ['client'];
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


                        <label for="details" class="mb-1">التفاصيل</label>
                        <textarea class="form-control add"  id="exampleFormControlTextarea1" name="details" rows="5" value="<?php echo e(old('details', $success_partner_data['details'])); ?>"><?php echo e($success_partner_data['details']); ?></textarea>

                        <?php $__errorArgs = ['details'];
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

                        <label for="image_01" class="mb-1">صورة 1</label>
                        <input type="file" id="image_01" name="image_01"  value="<?php echo e(old('image_01', $success_partner_data['image_01'])); ?>" class="form-control add">

                        <?php $__errorArgs = ['image_01'];
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

                        <label for="image_02" class="mb-1">صورة 2</label>
                        <input type="file" id="image_02" name="image_02" value="<?php echo e(old('image_02', $success_partner_data['image_02'])); ?>" class="form-control add">

                        <?php $__errorArgs = ['image_02'];
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

                        <label for="image_03" class="mb-1">صورة 3</label>
                        <input type="file" id="image_03" name="image_03" value="<?php echo e(old('image_03', $success_partner_data['image_03'])); ?>" class="form-control add">

                        <?php $__errorArgs = ['image_03'];
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

                        <label for="image_04" class="mb-1">صورة 4</label>
                        <input type="file" id="image_04" name="image_04" value="<?php echo e(old('image_04', $success_partner_data['image_04'])); ?>" class="form-control add">

                        <?php $__errorArgs = ['image_04'];
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

                        <label for="image_05" class="mb-1">صورة 5</label>
                        <input type="file" id="image_05" name="image_05" value="<?php echo e(old('image_05', $success_partner_data['image_05'])); ?>" class="form-control add">

                        <?php $__errorArgs = ['image_05'];
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

                        <label for="image_06" class="mb-1">صورة 6</label>
                        <input type="file" id="image_06" name="image_06" value="<?php echo e(old('image_06', $success_partner_data['image_06'])); ?>" class="form-control add">

                        <?php $__errorArgs = ['image_06'];
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

                        <div class="card-body text-center">
                            <button class="btn  add  px-3" type="submit">تحديث</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>

</div>>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mohammed-omar-la\resources\views/admin/success_partnersEdit.blade.php ENDPATH**/ ?>