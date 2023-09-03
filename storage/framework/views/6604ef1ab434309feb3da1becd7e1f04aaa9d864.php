

<?php $__env->startSection('title'); ?>
    Dashbord
<?php $__env->stopSection(); ?>

<?php $__env->startSection('dashbordNav'); ?>
    active
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class=" row ">
            <div class="col-12 mt-5 mb-5 text-center fs-3">
                <h4><img src="assets/imgs/icons8-bag-32.png" alt="" class="mx-2">لوحة القيادة</h4>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-lg-3 col-sm-6 mb-3">
                <div class="card index text-center" style=" border: 1px solid black ; border-radius: 5px ;">
                    <h5 class="card-title m-2">مرحباً!</h5>
                    <div class="card-body">
                        <div class="showw p-2 ">
                            <?php echo e(Auth::guard('admin')->user()->name); ?> 
                        </div>
                    </div>
                    <div class="card-body">
                        <button href="#" class="btn update">تحديث
                            الملف</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 mb-3">
                <div class="card index text-center" style=" border: 1px solid black ; border-radius: 5px ;">
                    <h5 class="card-title m-2">3</h5>
                    <div class="card-body">
                        <div class="showw  p-2">
                            الاستشارات المضافة
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="#" class="btn update"
                         >رؤية
                            الاستشارات</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 mb-3">
                <div class="card index text-center" style=" border: 1px solid black ; border-radius: 5px ;">
                    <h5 class="card-title m-2">2</h5>
                    <div class="card-body">
                        <div class="showw  p-2">
                            الحقائب المضافة
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="#" class="btn update ">رؤية
                            الحقائب</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 mb-3">
                <div class="card index text-center" style=" border: 1px solid black ; border-radius: 5px ;">
                    <h5 class="card-title m-2">2</h5>
                    <div class="card-body">
                        <div class="showw  p-2">
                            الدورات المضافة
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="#" class="btn update">رؤية
                            الدورات</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 mb-3">
                <div class="card index text-center" style=" border: 1px solid black ; border-radius: 5px ;">
                    <h5 class="card-title m-2">3</h5>
                    <div class="card-body">
                        <div class="showw  p-2">
                            شركاء النجاح
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="#" class="btn update">رؤية شركاء
                            النجاح</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 mb-3">
                <div class="card index text-center" style=" border: 1px solid black ; border-radius: 5px ;">
                    <h5 class="card-title m-2">6</h5>
                    <div class="card-body">
                        <div class="showw  p-2">
                            عدد الرسائل
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="#" class="btn update">رؤية
                            الرسائل</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 mb-3">
                <div class="card index text-center" style=" border: 1px solid black ; border-radius: 5px ;">
                    <h5 class="card-title m-2">1</h5>
                    <div class="card-body">
                        <div class="showw  p-2">
                            المستخدمين المدراء
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="#" class="btn update">رؤية
                            المدراء</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mohammed-omar-la\resources\views/admin/dashbord.blade.php ENDPATH**/ ?>