@extends('admin.admin_main')

@section('title')
    تحديث هدف الدورة
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
                        <h5 class="card-title m-2">تحديث هدف</h5>
                    </div>
                    <div class="card-body ">
                        <form method="POST" action="{{ route('update.Goal', $course_goals_data['id']) }}">
                            @csrf
                            <label for="goal" class="mb-1">المحتوى</label>
                            <input type="text" id="goal" name="goal" class="form-control add"
                                value="{{ old('goal', $course_goals_data['goal']) }}">

                            @error('goal')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror

                            <input type="hidden" id="courseId" name="courseId" class="form-control"
                                value="{{ $course_goals_data['course_id'] }}" style="background-color: #C8C1CD">
                            <div class="card-body text-center">
                                <button class="btn update px-3" type="submit">تحديث</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>

    </div>
@endsection
