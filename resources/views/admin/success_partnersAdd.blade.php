@extends('admin.admin_main')

@section('title')
    شركاء النجاح
@endsection

@section('success_partNav')
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
                <div class="card add  rounded mx-auto d-block ">
                    <div class="card-header text-center">
                        <h5 class="card-title m-2">اضافة شريك نجاح</h5>
                    </div>
                    <div class="card-body ">
                        <form method="post" enctype="multipart/form-data" action="{{ route('store.Success_partners') }}">
                            @csrf
                            <label for="client" class="mb-1">الجهه</label>
                            <input type="text" id="client" name="client" class="form-control add">

                            @error('client')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror

                            <br>


                            <label for="details" class="mb-1">التفاصيل</label>
                            <textarea class="form-control add" id="details" name="details" rows="5"></textarea>

                            @error('details')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror

                            <br>

                            <label for="image_01" class="mb-1">صورة 1</label>
                            <input type="file" id="image_01" name="image_01" class="form-control add">

                            @error('image_01')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror

                            <br>

                            <label for="image_02" class="mb-1">صورة 2</label>
                            <input type="file" id="image_02" name="image_02" class="form-control add">

                            @error('image_02')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror

                            <br>

                            <label for="image_03" class="mb-1">صورة 3</label>
                            <input type="file" id="image_03" name="image_03" class="form-control add">

                            @error('image_03')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror

                            <br>

                            <label for="image_04" class="mb-1">صورة 4</label>
                            <input type="file" id="image_04" name="image_04" class="form-control add">

                            @error('image_04')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror

                            <br>

                            <label for="image_05" class="mb-1">صورة 5</label>
                            <input type="file" id="image_05" name="image_05" class="form-control add">

                            @error('image_05')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror

                            <br>

                            <label for="image_06" class="mb-1">صورة 6</label>
                            <input type="file" id="image_06" name="image_06" class="form-control add">

                            @error('image_06')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror

                            <br>

                            <div class="card-body text-center">
                                <button class="btn  add  px-3" type="submit">اضافة</button>
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
                <h4>الاستشارات المضافة</h4>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row">

            @if (!@empty($success_partner_data))
                @foreach ($success_partner_data as $info)
                    <div class="col-12 mb-3">


                        <div class="container">

                            <div class="card  mt-5 mb-5"
                                style="background-color: #D9D9D9;  border: 1px solid black ; border-radius: 5px;">
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
                                        <div class="card-body">{{ $info->details }}
                                        </div>
                                    </div>

                                </div>

                                <div class="card-footer text-center">

                                    <div class="row">
                                        <div class="col-6"> <a href="{{ route('edit.Success_partners', $info->id) }}"
                                                class="btn update px-3">تحديث</a>
                                        </div>
                                        <div class="col-6">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn delete px-3" data-bs-toggle="modal"
                                                data-bs-target="#confirmationDelete{{ $info->id }}">
                                                حذف
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="confirmationDelete{{ $info->id }}"
                                                data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="confirmationDeletLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="confirmationDeletLabel">تأكيد
                                                                عملية حذف
                                                                شريك النجاح </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            هل انت متأكد من شريك النجاح ؟
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">اغلاق</button>
                                                            <a href="{{ route('destroy.Success_partners', $info->id) }}"
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
                @endforeach
            @else
            @endif






        </div>
    </div>
@endsection
