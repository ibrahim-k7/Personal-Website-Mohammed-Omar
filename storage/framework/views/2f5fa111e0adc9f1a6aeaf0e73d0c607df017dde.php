

<?php $__env->startSection('title'); ?>
    الحقائب
<?php $__env->stopSection(); ?>

<?php $__env->startSection('bagsNav'); ?>
    active
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>


    <?php if(Session::has('success')): ?>
        <div class="alert alert-left alert-success alert-dismissible fade show m-3 " role="alert">
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
                        <h5 class="card-title m-2">اضافة حقيبة</h5>
                    </div>
                    <div class="card-body ">
                        <form method="POST" enctype="multipart/form-data" action="<?php echo e(route('store.Bag')); ?>">
                            <?php echo csrf_field(); ?>
                            <label for="bagName" class="mb-1">اسم الحقيبة</label>
                            <input type="text" id="bagName" name="bagName" class="form-control add">
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
                            <input type="file" id="bagImg" name="bagImg" class="form-control add">
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
                                <input type="number" id="bagPrice" name="bagPrice" class="form-control add">
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
                                <button href="#" class="btn add px-3" type="submit">اضافة</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>





    </div>

    <div class="container  mt-5 mb-5">

        <div class="row ">
            <div class="col ">
                <div class="card add  rounded mx-auto d-block ">
                    <div class="card-header text-center">
                        <h5 class="card-title m-2">اضافة محتوى للحقيبة</h5>
                    </div>
                    <div class="card-body ">
                        <form method="post" action="<?php echo e(route('store.Content')); ?>">
                            <?php echo csrf_field(); ?>
                            <label for="bagIdForCont" class="mb-1">اسم الحقيبة</label>
                            <select name="bagIdForCont" id="bagIdForCont" class="form-control add">
                                <?php $__currentLoopData = $bag_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bags): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($bags->id); ?>"><?php echo e($bags->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>
                            <?php $__errorArgs = ['bagIdForCont'];
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
                            <label for="content" class="mb-1">محتوى</label>
                            <input type="text" id="content" name="content" class="form-control add">

                            <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"> <?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            <div class=" text-center  mt-2">
                                <button href="#" class="btn add px-3 " type="submit">اضافة</button>
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
                <h4>الحقائب المضافة</h4>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row contentCenter">

            <?php if(!@empty($bag_data)): ?>
                <?php $__currentLoopData = $bag_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-6 col-sm-12 mt-3 mb-3">
                        <div class="item m-4">
                            <div class="card index container text-center ">
                                <img src="../../uploadsBag/<?php echo e($info->image); ?>" class="rounded mx-auto d-block"
                                    style="width: 50%" alt="...">
                                <div class="card-header">
                                    <h4><?php echo e($info->name); ?>[ID=<?php echo e($info->id); ?>]</h4>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">محتويات الحقيبة :</h5>
                                    <?php $__currentLoopData = $info->content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <p class="card-text m-3"
                                            style="background-color: #C8C1CD;  border: 1px solid black ; border-radius: 10px;">
                                            <?php echo e($content->content); ?></p>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <div class="col-6"> <a href="<?php echo e(route('index.Content', $info->id)); ?>" class="btn px-3"
                                            style="background-color: #6c4996c0;  border: 1px solid black ; border-radius: 10px;">المحتويات</a>
                                    </div>


                                </div>
                                <div class="card-footer">

                                    <div class="row text-center">
                                        <div class="col text-center">
                                            <p><?php echo e($info->price); ?>$</p>
                                        </div>

                                    </div>

                                    <div class=" text-center">
                                        <div class="row">
                                            <div class="col-6"> <a href="<?php echo e(route('edit.Bag', $info->id)); ?>"
                                                    class="btn update px-3">تحديث</a>
                                            </div>
                                            <div class="col-6">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn delete px-3" data-bs-toggle="modal"
                                                    data-bs-target="#confirmationDelete<?php echo e($info->id); ?>">
                                                    حذف
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="confirmationDelete<?php echo e($info->id); ?>" data-bs-backdrop="static"
                                                    data-bs-keyboard="false" tabindex="-1"
                                                    aria-labelledby="confirmationDeletLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="confirmationDeletLabel">تأكيد
                                                                    عملية حذف
                                                                    حقيبة </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                هل انت متأكد من حذف الحقيبة
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">اغلاق</button>
                                                                <a href="<?php echo e(route('destroy.Bag', $info->id)); ?>"
                                                                    type="button" class="btn btn-primary">حذف</a>
                                                            </div>
                                                        </div>
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

<?php echo $__env->make('admin.admin_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mohammed-omar-la\resources\views/admin/bagsAdd.blade.php ENDPATH**/ ?>