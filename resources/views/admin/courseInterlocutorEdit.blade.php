@extends('admin.admin_main')

@section('title')
    تحديث محور الدورة
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
                        <h5 class="card-title m-2">تحديث محور</h5>
                    </div>
                    <div class="card-body ">
                        <form method="POST" action="{{ route('update.Interlocutor', $course_interlocutor_data['id']) }}">
                            @csrf
                            <label for="interlocutor" class="mb-1">المحتوى</label>
                            <input type="text" id="interlocutor" name="interlocutor" class="form-control add"
                                value="{{ old('interlocutor', $course_interlocutor_data['interlocutor']) }}">

                            @error('interlocutor')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror

                            <input type="hidden" id="courseId" name="courseId" class="form-control"
                                value="{{ $course_interlocutor_data['course_id'] }}" style="background-color: #C8C1CD">
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
