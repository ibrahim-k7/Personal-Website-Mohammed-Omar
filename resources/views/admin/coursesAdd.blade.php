@extends('admin.admin_main')

@section('title')
    الدورات
@endsection

@section('coursesNav')
    active
@endsection

@section('content')
    @if (Session::has('success'))
        <div class="alert alert-left alert-success alert-dismissible fade show m-3" role="alert">
            <span>{{ Session::get('success') }}</span>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @else
    @endif

    <div class="container  mt-5 mb-5">


        <div class="row ">
            <div class="col ">
                <div class="card add rounded mx-auto d-block ">
                    <div class="card-header text-center">
                        <h5 class="card-title m-2">اضافة دورة</h5>
                    </div>
                    <div class="card-body ">
                        <form method="POST" action="{{ route('store.Courses') }}">
                            @csrf
                            <label for="courseName" class="mb-1">اسم الدورة</label>
                            <input type="text" id="courseName" name="courseName" class="form-control add">
                            @error('courseName')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                            <br>

                            <div class="row">



                                <div class="col-lg-4 col-sm-6">
                                    <label for="courseTime" class="mb-1">المدة</label>
                                    <input type="text" id="courseTime" name="courseTime" class="form-control add">
                                    @error('courseTime')
                                        <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                    <br>
                                </div>



                                <div class="col-lg-4 col-sm-6">
                                    <label for="coursePres" class="mb-1">المحاضر</label>
                                    <input type="text" id="coursePres" name="coursePres" class="form-control add">
                                    @error('coursePres')
                                        <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                    <br>
                                </div>


                                <div class="col-lg-4 col-sm-6">
                                    <label for="coursePlace" class="mb-1">المكان</label>
                                    <input type="text" id="coursePlace" name="coursePlace" class="form-control add">


                                    @error('coursePlace')
                                        <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                    <br>
                                </div>

                            </div>
                            <div class="row ">
                                <div class="col-lg-4 col-sm-6">
                                    <label for="coursePrice" class="mb-1">السعر</label>
                                    <input type="number" id="coursePrice" name="coursePrice" class="form-control add">


                                    @error('coursePrice')
                                        <span class="text-danger"> {{ $message }}</span>
                                    @enderror
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
                        <form method="post" action="{{ route('store.Goal') }}">
                            @csrf
                            <label for="courseIdForGoal" class="mb-1">اسم الدورة</label>
                            <select name="courseIdForGoal" id="courseIdForGoal" class="form-control add">

                                @foreach ($course_data as $courses)
                                    <option value="{{ $courses->id }}">{{ $courses->name }}</option>
                                @endforeach


                            </select>
                            @error('courseIdForGoal')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                            <br>
                            <label for="goal" class="mb-1">الهدف</label>
                            <input type="text" id="goal" name="goal" class="form-control add">

                            @error('goal')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror

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
                        <form method="post" action="{{ route('store.Interlocutor') }}">
                            @csrf
                            <label for="courseIdForInterlocutor" class="mb-1">اسم الدورة</label>
                            <select name="courseIdForInterlocutor" id="courseIdForInterlocutor" class="form-control add">

                                @foreach ($course_data as $courses)
                                    <option value="{{ $courses->id }}">{{ $courses->name }}</option>
                                @endforeach


                            </select>
                            @error('courseIdForInterlocutor')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                            <br>
                            <label for="interlocutor" class="mb-1">المحور</label>
                            <input type="text" id="interlocutor" name="interlocutor" class="form-control add">

                            @error('interlocutor')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror

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

            @if (!@empty($course_data))
                @foreach ($course_data as $info)
                    <div class="col-lg-6 col-sm-12 mt-3 mb-3">
                        <div class="item m-4">
                            <div class="card index container text-center ">
                                <div class="card-header">
                                    <h4>{{ $info->name }}({{ $info->id }})</h4>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title ">اهداف الدورة :</h5>
                                    @foreach ($info->goal as $goal)
                                        <p class="card-text m-3 p-2"
                                            style="background-color: #C8C1CD;  border: 1px solid black ; border-radius: 10px;">
                                            {{ $goal->goal }}</p>
                                    @endforeach


                                    <div class="col-6"> <a href="{{ route('index.Goal', $info->id) }}" class="btn px-3"
                                            style="background-color: #6c4996c0;  border: 1px solid black ; border-radius: 10px;">الاهداف</a>
                                    </div>


                                </div>
                                <div class="">
                                    <div class=" bg-black  " style=" height: 1px;">
                                    </div>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">محاور الدورة :</h5>
                                    @foreach ($info->interlocutor as $interlocutor)
                                        <p class="card-text m-3 p-2"
                                            style="background-color: #C8C1CD;  border: 1px solid black ; border-radius: 10px;">
                                            {{ $interlocutor->interlocutor }}</p>
                                    @endforeach



                                    <div class="col-6"> <a href="{{ route('index.Interlocutor', $info->id) }}"
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
                                                    {{ $info->duration }}</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-12 col-lg-4">
                                            <p>محاضر الدورة :</p>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item courses"
                                                    style="background-color: #C8C1CD;  border: 1px solid black ; border-radius: 10px;">
                                                    {{ $info->presenter }}</li>
                                            </ul>

                                        </div>
                                        <div class="col-sm-12 col-lg-4">

                                            <p>مكان الدورة :</p>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item courses"
                                                    style="background-color: #C8C1CD;  border: 1px solid black ; border-radius: 10px;">
                                                    {{ $info->place }}</li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">

                                    <div class="row ">
                                        <div class="col text-center">
                                            <p>{{ $info->price }}$</p>
                                        </div>

                                    </div>

                                    <div class=" text-center">
                                        <div class="row">
                                            <div class="col-6"> <a href="{{ route('edit.Courses', $info->id) }}"
                                                    class="btn update px-3">تحديث </a>
                                            </div>
                                            <div class="col-6">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn delete px-3" data-bs-toggle="modal"
                                                    data-bs-target="#confirmationDelete{{ $info->id }}">
                                                    حذف 
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="confirmationDelete{{ $info->id }}" data-bs-backdrop="static"
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
                                                                <a href="{{ route('destroy.Courses', $info->id) }}"
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
                @endforeach
            @else
            @endif


        </div>
    </div>
@endsection
