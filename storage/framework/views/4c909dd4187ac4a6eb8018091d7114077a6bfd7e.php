

<?php $__env->startSection('title'); ?>
    الدورات
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
                        <h5 class="card-title m-2">اضافة دورة</h5>
                    </div>
                    <div class="card-body ">
                        <form method="POST" action="<?php echo e(route('store.Courses')); ?>">
                            <?php echo csrf_field(); ?>
                            <label for="courseName" class="mb-1">اسم الدورة</label>
                            <input type="text" id="courseName" name="courseName" class="form-control add">
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
                                    <input type="text" id="courseTime" name="courseTime" class="form-control add">
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
                                    <input type="text" id="coursePres" name="coursePres" class="form-control add">
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
                                    <input type="text" id="coursePlace" name="coursePlace" class="form-control add">


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
                                    <input type="number" id="coursePrice" name="coursePrice" class="form-control add">


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
                <div class="card add rounded mx-auto d-block ">
                    <div class="card-header text-center">
                        <h5 class="card-title m-2">اضافة اهداف للدورة</h5>
                    </div>
                    <div class="card-body ">
                        <form method="post" action="<?php echo e(route('store.Goal')); ?>">
                            <?php echo csrf_field(); ?>
                            <label for="courseIdForGoal" class="mb-1">اسم الدورة</label>
                            <select name="courseIdForGoal" id="courseIdForGoal" class="form-control add">

                                <?php $__currentLoopData = $course_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $courses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($courses->id); ?>"><?php echo e($courses->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </select>
                            <?php $__errorArgs = ['courseIdForGoal'];
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
                            <label for="goal" class="mb-1">الهدف</label>
                            <input type="text" id="goal" name="goal" class="form-control add">

                            <?php $__errorArgs = ['goal'];
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
                <div class="card add rounded mx-auto d-block ">
                    <div class="card-header text-center">
                        <h5 class="card-title m-2">اضافة محاور للدورة</h5>
                    </div>
                    <div class="card-body ">
                        <form method="post" action="<?php echo e(route('store.Interlocutor')); ?>">
                            <?php echo csrf_field(); ?>
                            <label for="courseIdForInterlocutor" class="mb-1">اسم الدورة</label>
                            <select name="courseIdForInterlocutor" id="courseIdForInterlocutor" class="form-control add">

                                <?php $__currentLoopData = $course_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $courses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($courses->id); ?>"><?php echo e($courses->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </select>
                            <?php $__errorArgs = ['courseIdForInterlocutor'];
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
                            <label for="interlocutor" class="mb-1">المحور</label>
                            <input type="text" id="interlocutor" name="interlocutor" class="form-control add">

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

                            <div class=" text-center  mt-2">
                                <button href="#" class="btn add px-3" type="submit">اضافة</button>
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
                <h4>الدورات المضافة</h4>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row contentCenter">

            <?php if(!@empty($course_data)): ?>
                <?php $__currentLoopData = $course_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-6 col-sm-12 mt-3 mb-3">
                        <div class="item m-4">
                            <div class="card index container text-center ">
                                <div class="card-header">
                                    <h4><?php echo e($info->name); ?>(<?php echo e($info->id); ?>)</h4>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title ">اهداف الدورة :</h5>
                                    <?php $__currentLoopData = $info->goal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $goal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <p class="card-text m-3 p-2"
                                            style="background-color: #C8C1CD;  border: 1px solid black ; border-radius: 10px;">
                                            <?php echo e($goal->goal); ?></p>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                    <div class="col-6"> <a href="<?php echo e(route('index.Goal', $info->id)); ?>" class="btn px-3"
                                            style="background-color: #6c4996c0;  border: 1px solid black ; border-radius: 10px;">الاهداف</a>
                                    </div>


                                </div>
                                <div class="">
                                    <div class=" bg-black  " style=" height: 1px;">
                                    </div>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">محاور الدورة :</h5>
                                    <?php $__currentLoopData = $info->interlocutor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $interlocutor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <p class="card-text m-3 p-2"
                                            style="background-color: #C8C1CD;  border: 1px solid black ; border-radius: 10px;">
                                            <?php echo e($interlocutor->interlocutor); ?></p>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                                    <div class="col-6"> <a href="<?php echo e(route('index.Interlocutor', $info->id)); ?>"
                                            class="btn px-3"
                                            style="background-color: #6c4996c0;  border: 1px solid black ; border-radius: 10px;">المحاور</a>
                                    </div>


                                </div>
                                <div class="">
                                    <div class=" bg-black  " style=" height: 1px;">
                                    </div>
                                </div>
                                <div class="card-body">


                                    <div class="row">
                                        <div class="col-sm-12 col-lg-4">
                                            <p>مدة الدورة :</p>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item courses"
                                                    style="background-color: #C8C1CD;  border: 1px solid black ; border-radius: 10px;">
                                                    <?php echo e($info->duration); ?></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-12 col-lg-4">
                                            <p>محاضر الدورة :</p>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item courses"
                                                    style="background-color: #C8C1CD;  border: 1px solid black ; border-radius: 10px;">
                                                    <?php echo e($info->presenter); ?></li>
                                            </ul>

                                        </div>
                                        <div class="col-sm-12 col-lg-4">

                                            <p>مكان الدورة :</p>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item courses"
                                                    style="background-color: #C8C1CD;  border: 1px solid black ; border-radius: 10px;">
                                                    <?php echo e($info->place); ?></li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">

                                    <div class="row ">
                                        <div class="col text-center">
                                            <p><?php echo e($info->price); ?>$</p>
                                        </div>

                                    </div>

                                    <div class=" text-center">
                                        <div class="row">
                                            <div class="col-6"> <a href="<?php echo e(route('edit.Courses', $info->id)); ?>"
                                                    class="btn update px-3">تحديث </a>
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
                                                                    الدورة </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                هل انت متأكد من حذف الدورة ؟
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">اغلاق</button>
                                                                <a href="<?php echo e(route('destroy.Courses', $info->id)); ?>"
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
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            <?php endif; ?>


        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mohammed-omar-la\resources\views/admin/coursesAdd.blade.php ENDPATH**/ ?>