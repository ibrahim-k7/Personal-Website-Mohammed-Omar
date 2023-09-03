 <!--تواصل معانا-->


 <div class="container w-100">

    <div class="row w-100">
        <div class="col-12 mt-3 mb-3 text-center fs-3">
            <h4><img src="assets/imgs/icons8-group-task-48.png" alt="">@yield('header')</h4>
        </div>
    </div>

    <div class="row ">
        <div class="col-xl-9 col-sm-12 ">

            <form>
                <div class="form-group p-2">

                    <div class="row">
                        <div class="col">
                            <label for="firstName" class="mb-1">الاسم الاول</label>
                            <input type="text" class="form-control" id="firstName" placeholder="الاسم الاول">
                        </div>
                        <div class="col">
                            <div class="col">
                                <label for="lastName" class="mb-1">الاسم الاخير</label>
                                <input type="text" class="form-control" id="firstName"
                                    placeholder="الاسم الاخير">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="form-group p-2">

                    <div class="row">
                        <div class="col">
                            <label for="PhoneNumber" class="mb-1">الهاتف</label>
                            <input type="tel" class="form-control" id="PhoneNumber"
                                placeholder="الهاتف">
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1" class="mb-1">الايميل</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>
                    </div>

                </div>

                <div class="form-group p-2">

                    <label for="firstName" class="mb-1">موضوع الرسالة </label>
                    <input type="text" class="form-control" id="firstName" placeholder="موضوع الرسالة ">

                </div>

                <div class="form-group p-2">

                    <label for="exampleFormControlTextarea1 " class="mb-1">الرسالة</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>

                </div>

                <div class="row m-2">
                    <div class="col text-center">
                        <button type="submit" class="btn mb-3"
                            style="background-color: #D9D9D9; border: 1px solid black; border-radius: 5px; ">ارسال
                            <img src="assets/imgs/icons8-sent-32.png" alt="" srcset=""></button>
                    </div>

                </div>

            </form>


        </div>
        <div class="col-xl-3 col-sm-12 align-self-center mt-sm-3 mt-xl-0 mb-5">
            <div class="card " style="background-color: #D9D9D9; border: 1px solid black; border-radius: 5px; ">
                <div class="card-header">

                    <p class="text-center fw-bold ">معلومات الاتصال</p>

                </div>

                <div class="card-body">

                    <div class="row text-center ">

                        <div class="col-12 ">

                            <p><span class="fs-5 fw-bold m-2">تلفون :</span> +967 777 676 006</p>

                        </div>
                        <div class="col-12">

                            <p><span class="fs-5 fw-bold m-2">فاكس :</span> +967 777 676 006</p>

                        </div>
                        <div class="col-12">

                            <p><span class="fs-5 fw-bold m-2">الايميل :</span> ibr.no@gmail.com</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>