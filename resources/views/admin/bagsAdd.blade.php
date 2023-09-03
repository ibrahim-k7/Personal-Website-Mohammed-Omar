@extends('admin.admin_main')

@section('title')
    الحقائب
@endsection

@section('bagsNav')
    active
@endsection


@section('content')


    @if (Session::has('success'))
        <div class="alert alert-left alert-success alert-dismissible fade show m-3 " role="alert">
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
                        <h5 class="card-title m-2">اضافة حقيبة</h5>
                    </div>
                    <div class="card-body ">
                        <form method="POST" enctype="multipart/form-data" action="{{ route('store.Bag') }}">
                            @csrf
                            <label for="bagName" class="mb-1">اسم الحقيبة</label>
                            <input type="text" id="bagName" name="bagName" class="form-control add">
                            @error('bagName')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                            <br>

                            <label for="bagImg" class="mb-1">صورة</label>
                            <input type="file" id="bagImg" name="bagImg" class="form-control add">
                            @error('bagImg')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror

                            <br>
                            <div class="col-3">
                                <label for="bagPrice" class="mb-1">السعر</label>
                                <input type="number" id="bagPrice" name="bagPrice" class="form-control add">
                            </div>

                            @error('bagPrice')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
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
                <div class="card add  rounded mx-auto d-block ">
                    <div class="card-header text-center">
                        <h5 class="card-title m-2">اضافة محتوى للحقيبة</h5>
                    </div>
                    <div class="card-body ">
                        <form method="post" action="{{ route('store.Content') }}">
                            @csrf
                            <label for="bagIdForCont" class="mb-1">اسم الحقيبة</label>
                            <select name="bagIdForCont" id="bagIdForCont" class="form-control add">
                                @foreach ($bag_data as $bags)
                                    <option value="{{ $bags->id }}">{{ $bags->name }}</option>
                                @endforeach

                            </select>
                            @error('bagIdForCont')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                            <br>
                            <label for="content" class="mb-1">محتوى</label>
                            <input type="text" id="content" name="content" class="form-control add">

                            @error('content')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror

                            <div class=" text-center  mt-2">
                                <button href="#" class="btn add px-3 " type="submit">اضافة</button>
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
                <h4>الحقائب المضافة</h4>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row contentCenter">

            @if (!@empty($bag_data))
                @foreach ($bag_data as $info)
                    <div class="col-lg-6 col-sm-12 mt-3 mb-3">
                        <div class="item m-4">
                            <div class="card index container text-center ">
                                <img src="../../uploadsBag/{{ $info->image }}" class="rounded mx-auto d-block"
                                    style="width: 50%" alt="...">
                                <div class="card-header">
                                    <h4>{{ $info->name }}[ID={{ $info->id }}]</h4>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">محتويات الحقيبة :</h5>
                                    @foreach ($info->content as $content)
                                        <p class="card-text m-3"
                                            style="background-color: #C8C1CD;  border: 1px solid black ; border-radius: 10px;">
                                            {{ $content->content }}</p>
                                    @endforeach

                                    <div class="col-6"> <a href="{{ route('index.Content', $info->id) }}" class="btn px-3"
                                            style="background-color: #6c4996c0;  border: 1px solid black ; border-radius: 10px;">المحتويات</a>
                                    </div>


                                </div>
                                <div class="card-footer">

                                    <div class="row text-center">
                                        <div class="col text-center">
                                            <p>{{ $info->price }}$</p>
                                        </div>

                                    </div>

                                    <div class=" text-center">
                                        <div class="row">
                                            <div class="col-6"> <a href="{{ route('edit.Bag', $info->id) }}"
                                                    class="btn update px-3">تحديث</a>
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
                                                                    حقيبة </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                هل انت متأكد من حذف الحقيبة
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">اغلاق</button>
                                                                <a href="{{ route('destroy.Bag', $info->id) }}"
                                                                    type="button" class="btn btn-primary">حذف</a>
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
