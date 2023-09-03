@extends('layouts.main')

@section('title')
    شركاء النجاح
@endsection

@section('success_partnersNav')
    active
@endsection

@section('content')
    <!--شركاء النجاح-->

    <div class="cont" style="background-color: #c4cfd4;">

        <div class="row w-100">
            <div class="col-12 mt-3 mb-3 text-center fs-3 ">
                <h4><img src="front/imgs/icons8-business-group-32.png" alt="" class="mx-2">شركاء النجاح </h4>
            </div>
        </div>



        @if (!@empty($success_partner_data))
            @foreach ($success_partner_data as $info)
                <div class="container">


                    <div class="row">
                        <div class="col">
                            <div class="card design mt-5 mb-5">
                                <div class="card-header">
                                    <div class="container owl-carousel all_success_partners owl-theme mt-3 mb-3">
                                        <div class="item m-3">

                                            <img src="/uploadsSuccess_partner/{{ $info->image_01 }}"
                                                class="rounded mx-auto d-block w-50 " alt="">
                                        </div>
                                        <div class="item m-3">

                                            <img src="/uploadsSuccess_partner/{{ $info->image_02 }}"
                                                class="rounded mx-auto d-block w-50 " alt="">
                                        </div>
                                        <div class="item m-3">

                                            <img src="/uploadsSuccess_partner/{{ $info->image_03 }}"
                                                class="rounded mx-auto d-block w-50 " alt="">
                                        </div>
                                        <div class="item m-3">

                                            <img src="/uploadsSuccess_partner/{{ $info->image_04 }}"
                                                class="rounded mx-auto d-block w-50 " alt="">
                                        </div>
                                        <div class="item m-3">

                                            <img src="/uploadsSuccess_partner/{{ $info->image_05 }}"
                                                class="rounded mx-auto d-block w-50 " alt="">
                                        </div>
                                        <div class="item m-3">

                                            <img src="/uploadsSuccess_partner/{{ $info->image_06 }}"
                                                class="rounded mx-auto d-block w-50 " alt="">
                                        </div>
                                    </div>
                                    <div class="slider_nav ">
                                        <img src="front/imgs/icons8-forward-48.png" class="am-next all_success_partners"
                                            alt="">
                                        <img src="frint/imgs/icons8-back-48.png" class="am-prev all_success_partners"
                                            alt="">
                                    </div>

                                </div>
                                <div class="card-body text-center">

                                    <div class="card"
                                        style="background-color: #D9D9D9;  border: 1px solid black ; border-radius: 5px;">
                                        <div class="card-header">{{ $info->client }}</div>
                                        <div class="card-body"> {{ $info->details }}
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

@endsection
