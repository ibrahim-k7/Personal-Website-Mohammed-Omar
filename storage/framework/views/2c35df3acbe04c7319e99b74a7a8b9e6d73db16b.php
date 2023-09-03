

<?php $__env->startSection('title'); ?>
    الاستشارات
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
                <div class="card add  rounded mx-auto d-block ">
                    <div class="card-header text-center">
                        <h5 class="card-title m-2">اضافة استشارة</h5>
                    </div>
                    <div class="card-body ">
                        <form method="post" action="<?php echo e(route('store.Consulting')); ?>">
                            <?php echo csrf_field(); ?>
                            <label for="filed_consulting" class="mb-1">الاستشارة</label>
                            <input type="text" id="filed_consulting" name="filed_consulting" class="form-control add">

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
                                <button class="btn  add  px-3" type="submit">اضافة</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <div class="">
        <div class=" bg-black  " style=" height: 1px;">
        </div>
    </div>


    <div class="container-fluid">
        <div class=" row ">
            <div class="col-12 mt-5 mb-5 text-center fs-3">
                <h4>الاستشارات المضافة</h4>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row contentCenter">

            <?php if(!@empty($counseling_data)): ?>
                <?php $__currentLoopData = $counseling_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-sm-6 mb-3">

                        <div class="card"
                            style="background-color: #D9D9D9; border: 1px solid black ; border-radius: 10px ;">
                            <div class="card-body">
                                <div class=" p-2"
                                    style="background-color: #C8C1CD;  border: 1px solid black ; border-radius: 10px;">
                                    <?php echo e($info->counseling); ?>

                                </div>
                                Created at <?php echo e($info->created_at); ?>

                                <br>
                                Updated at <?php echo e($info->updated_at); ?>


                            </div>

                            <div class="card-body text-center">
                                <div class="row">
                                    <div class="col-6"> <a href="<?php echo e(route('edit.Consulting', $info->id)); ?>"
                                            class="btn px-3"
                                            style="background-color: #6c4996c0;  border: 1px solid black ; border-radius: 10px;">تحديث</a>
                                    </div>
                                    <div class="col-6">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn delete px-3" data-bs-toggle="modal"
                                            data-bs-target="#confirmationDelete<?php echo e($info->id); ?>">
                                            حذف
                                        </button>



                                        <!-- Modal -->
                                        <div class="modal fade" id="confirmationDelete<?php echo e($info->id); ?>"
                                            data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                            aria-labelledby="confirmationDeletLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="confirmationDeletLabel">تأكيد عملية حذف
                                                            الاستشارة </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        هل انت متأكد من حذف الاستشارة
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">اغلاق</button>
                                                        <a href="<?php echo e(route('destroy.Consulting', $info->id)); ?>"
                                                            type="button" class="btn btn-primary">حذف
                                                        </a>
                                                    </div>
                                                </div>
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
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mohammed-omar-la\resources\views/admin/consultingAdd.blade.php ENDPATH**/ ?>