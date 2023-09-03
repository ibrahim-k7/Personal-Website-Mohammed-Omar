

<?php $__env->startSection('title'); ?>
    تحديث محتوى الحقيبة
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
                <div class="card add rounded mx-auto d-block "
                  >
                    <div class="card-header text-center">
                        <h5 class="card-title m-2">تحديث محتوى</h5>
                    </div>
                    <div class="card-body ">
                        <form method="POST" action="<?php echo e(route('update.Content',$bag_content_data['id'])); ?>">
                            <?php echo csrf_field(); ?>
                            <label for="filed_content" class="mb-1">المحتوى</label>
                            <input type="text" id="filed_content" name="filed_content" class="form-control add"
                                value="<?php echo e(old('filed_content', $bag_content_data['content'])); ?>"
                                
                                >
                                
                            <?php $__errorArgs = ['filed_content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"> <?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            <input type="hidden" id="bagId" name="bagId" class="form-control"
                                value="<?php echo e($bag_content_data['bag_id']); ?>"
                                
                                style="background-color: #C8C1CD">
                            <div class="card-body text-center">
                                <button class="btn update px-3" type="submit"
                                >تحديث</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mohammed-omar-la\resources\views/admin/bagContentEdit.blade.php ENDPATH**/ ?>