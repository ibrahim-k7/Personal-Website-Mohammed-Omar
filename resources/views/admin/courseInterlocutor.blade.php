@extends('admin.admin_main')

@section('title')
    ادارة محاور الدورة
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

<div class="row w-100">
    <div class="col-12 mt-5 mb-3 text-center fs-3">

        <h4><img src="front/imgs/icons8-group-task-32.png" alt="" class="mx-2">محاور الدورة </h4>
    </div>
</div>

<div class="container">
    <div class="row ">
        @if (!@empty($course_data))
            @foreach ($course_data as $info)
                <div class="col-lg-6 col-sm-12 mt-3 mb-3">
                    <div class=" card index">
                        <div class="card-header text-center m-3" style="background-color: #C8C1CD;  border: 1px solid black ; border-radius: 10px;">{{ $info->interlocutor}} </div>

                        <div class="card-body text-center">
                            <div class="row">
                                <div class="col-6"> <a href="{{ route('edit.Interlocutor',$info->id) }}" class="btn px-3"
                                        style="background-color: #6c4996c0;  border: 1px solid black ; border-radius: 10px;">تحديث</a>
                                </div>
                                <div class="col-6">
                                    <a href="{{ route('destroy.Interlocutor', $info->id) }}" class="btn px-3"
                                        style="background-color: #de5d66b4;  border: 1px solid black ; border-radius: 10px;">حذف</a>
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