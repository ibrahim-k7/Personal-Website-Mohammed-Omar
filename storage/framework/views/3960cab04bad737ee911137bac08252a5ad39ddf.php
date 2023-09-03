

<?php $__env->startSection('title'); ?>
    الرسائل
<?php $__env->stopSection(); ?>

<?php $__env->startSection('messageNav'); ?>
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
    <div class="container-fluid">
        <div class=" row ">
            <div class="col-12 mt-5 mb-5 text-center fs-3">
                <h4>الرسائل</h4>
            </div>
        </div>
    </div>

    <div class="container">





        <div class="row ">
            <?php if(!@empty($message_data)): ?>
                <?php $__currentLoopData = $message_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-6  mb-3 ">

                        <form method="get" class="card index">
                            <?php echo csrf_field(); ?>
                            <div class="form-group p-2">

                                <div class="row">
                                    <div class="col">

                                        <label for="firstName" class="mb-1">الاسم الاول</label>
                                        <input type="text" class="form-control add" id="firstName" readonly
                                            name="firstName" value="<?php echo e($info->first_name); ?>">

                                    </div>

                                    <div class="col">
                                        <div class="col">
                                            <label for="lastName" class="mb-1">الاسم الاخير</label>
                                            <input type="text" class="form-control add" id="lastName" name="lastName"
                                                readonly value="<?php echo e($info->last_name); ?>">

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group p-2">

                                <div class="row">
                                    <div class="col">
                                        <label for="phoneNumber" class="mb-1">الهاتف</label>
                                        <input type="tel" class="form-control add" id="phoneNumber" name="phoneNumber"
                                            readonly value="<?php echo e($info->number); ?>">

                                    </div>
                                    <div class="col">
                                        <label for="email" class="mb-1">الايميل</label>
                                        <input type="email" class="form-control add" id="email" name="email"
                                            readonly value="<?php echo e($info->email); ?>">

                                    </div>
                                </div>

                            </div>

                            <div class="form-group p-2">

                                <label for="messageTitle" class="mb-1">موضوع الرسالة </label>
                                <input type="text" class="form-control add" id="messageTitle" name="messageTitle"
                                    readonly value="<?php echo e($info->message_title); ?>">


                            </div>

                            <div class="form-group p-2">

                                <label for="message" class="mb-1 ">الرسالة</label>
                                <textarea class="form-control add " id="message" name="message" rows="5" readonly><?php echo e($info->message); ?></textarea>


                            </div>

                            <div class="row m-2">
                                <div class="col text-center">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn delete px-3" data-bs-toggle="modal"
                                        data-bs-target="#confirmationDelete<?php echo e($info->id); ?>">
                                        حذف
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="confirmationDelete<?php echo e($info->id); ?>"
                                        data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                        aria-labelledby="confirmationDeletLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="confirmationDeletLabel">تأكيد
                                                        عملية حذف
                                                        الرسالة </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    هل انت متأكد من الرسالة ؟
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">اغلاق</button>
                                                    <a href="<?php echo e(route('destroy.Message', $info->id)); ?>" type="button"
                                                        class="btn btn-primary">حذف
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </form>


                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            <?php endif; ?>

        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mohammed-omar-la\resources\views/admin/message.blade.php ENDPATH**/ ?>