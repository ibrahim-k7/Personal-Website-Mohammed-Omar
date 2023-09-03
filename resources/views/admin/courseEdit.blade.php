@extends('admin.admin_main')

@section('title')
    تحديث الدورة
@endsection

@section('coursesNav')
    active
@endsection

@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">{{ Session::get('success') }}</div>
    @else
    @endif


    <div class="container  mt-5 mb-5">


        <div class="row ">
            <div class="col ">
                <div class="card add rounded mx-auto d-block ">
                    <div class="card-header text-center">
                        <h5 class="card-title m-2">تحديث دورة</h5>
                    </div>
                    <div class="card-body ">
                        <form method="POST" action="{{ route('update.Courses', $course_data['id']) }}">
                            @csrf
                            <label for="courseName" class="mb-1">اسم الدورة</label>
                            <input type="text" id="courseName" name="courseName"
                                value="{{ old('courseName', $course_data['name']) }}" class="form-control add">
                            @error('courseName')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                            <br>

                            <div class="row">



                                <div class="col-lg-4 col-sm-6">
                                    <label for="courseTime" class="mb-1">المدة</label>
                                    <input type="text" id="courseTime" name="courseTime"
                                        value="{{ old('courseTime', $course_data['duration']) }}" class="form-control add">
                                    @error('courseTime')
                                        <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                    <br>
                                </div>



                                <div class="col-lg-4 col-sm-6">
                                    <label for="coursePres" class="mb-1">المحاضر</label>
                                    <input type="text" id="coursePres" name="coursePres"
                                        value="{{ old('coursePres', $course_data['presenter']) }}" class="form-control add">
                                    @error('coursePres')
                                        <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                    <br>
                                </div>


                                <div class="col-lg-4 col-sm-6">
                                    <label for="coursePlace" class="mb-1">المكان</label>
                                    <input type="text" id="coursePlace" name="coursePlace"
                                        value="{{ old('coursePlace', $course_data['place']) }}" class="form-control add">


                                    @error('coursePlace')
                                        <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                    <br>
                                </div>

                            </div>
                            <div class="row ">
                                <div class="col-lg-4 col-sm-6">
                                    <label for="coursePrice" class="mb-1">السعر</label>
                                    <input type="text" id="coursePrice" name="coursePrice"
                                        value="{{ old('coursePrice', $course_data['price']) }}" class="form-control add">


                                    @error('coursePrice')
                                        <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-center mt-2">
                                <button href="#" class="btn add px-3" type="submit">تحديث</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>






    </div>
@endsection
