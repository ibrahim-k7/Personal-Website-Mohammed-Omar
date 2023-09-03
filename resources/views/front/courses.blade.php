@extends('layouts.main')

@section('title')
    الدورات التدريبية
@endsection

@section('servicesNav')
    active
@endsection

@section('servicesCoursesNav')
    active
@endsection

@section('content')


    <div class="container">

        <div class="row">
            <div class="col-12 mt-5 mb-3 text-center fs-3">

                <h4><img src="front/imgs/icons8-ratings-pulsar-color-32.png" alt="" class="mx-2">الدورات
                    التدريبية

                </h4>
            </div>
        </div>

        <div class="container ">
            <div class="row ">
                @if (!@empty($course_data))
                    @foreach ($course_data as $info)
                        <div class="col-12">
                            <div class="item m-5">
                                <div class="card design  text-center ">

                                    <div class="card-header">
                                        <h4>{{ $info->name }}</h4>
                                    </div>

                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <h5 class="card-title">هدف الدورة</h5>
                                            <li class="list-group-item courses ">
                                                @foreach ($info->goal as $goal)
                                                    <p class="card-text">{{ $goal->goal }}</p>
                                                @endforeach
                                            </li>
                                            <h5 class="card-title">محاور الدورة :</h5>
                                            <li class="list-group-item courses">
                                                @foreach ($info->interlocutor as $interlocutor)
                                                    <p class="card-text">{{ $interlocutor->interlocutor }}</p>
                                                @endforeach

                                            </li>
                                        </ul>

                                        <div class="row">
                                            <div class="col-sm-12 col-lg-4">
                                                <p>مدة الدورة :</p>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item courses">{{ $info->duration }}</li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-12 col-lg-4">
                                                <p>محاضر الدورة :</p>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item courses">{{ $info->presenter }}</li>
                                                </ul>

                                            </div>
                                            <div class="col-sm-12 col-lg-4">

                                                <p>مكان الدورة :</p>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item courses">{{ $info->place }}</li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer">

                                        <div class="row text-center">
                                            <div class="col-6 text-center">
                                                <p>{{ $info->price }}$</p>
                                            </div>
                                            <div class="col-6">
                                                <a href="#" class="btn book_now">احجز
                                                    الان</a>
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

    </div>


@endsection
