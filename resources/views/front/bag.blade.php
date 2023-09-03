@extends('layouts.main')

@section('title')
    الحقائب التدريبية
@endsection

@section('servicesNav')
    active
@endsection

@section('servicesBagsNav')
active
@endsection

@section('content')

    <div class="con" >

        <div class="row w-100">
            <div class="col-12 mt-5 mb-3 text-center fs-3">

                <h4><img src="front/imgs/icons8-portfolio-32.png" alt="" class="mx-2">الحقائب التدريبية </h4>
            </div>
        </div>

        <div class="container">
            <div class="row">

                @if (!@empty($bag_data))
                    @foreach ($bag_data as $info)
                        <div class="col-lg-6 col-sm-12 mt-3 mb-3">
                            <div class="item m-4">
                                <div class=" card design text-center ">
                                    <img src="/uploadsBag/{{ $info->image }}" class="m-2 rounded mx-auto d-block" style="width: 50%"
                                        alt="...">
                                    <div class="card-header">
                                        <h4>{{ $info->name }}</h4>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">محتويات الحقيبة :</h5>
                                        @foreach ($info->content as $content)
                                            <p class="card-text">{{ $content->content }}</p>
                                        @endforeach


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
