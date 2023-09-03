@extends('admin.admin_main')

@section('title')
    الاستشارات
@endsection

@section('consuNav')
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
                        <h5 class="card-title m-2">اضافة استشارة</h5>
                    </div>
                    <div class="card-body ">
                        <form method="post" action="{{ route('store.Consulting') }}">
                            @csrf
                            <label for="filed_consulting" class="mb-1">الاستشارة</label>
                            <input type="text" id="filed_consulting" name="filed_consulting" class="form-control add">

                            @error('filed_consulting')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
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

        <div class="row contentCenter">

            @if (!@empty($counseling_data))
                @foreach ($counseling_data as $info)
                    <div class="col-lg-4 col-sm-6 mb-3">

                        <div class="card"
                            style="background-color: #D9D9D9; border: 1px solid black ; border-radius: 10px ;">
                            <div class="card-body">
                                <div class=" p-2"
                                    style="background-color: #C8C1CD;  border: 1px solid black ; border-radius: 10px;">
                                    {{ $info->counseling }}
                                </div>
                                Created at {{ $info->created_at }}
                                <br>
                                Updated at {{ $info->updated_at }}

                            </div>

                            <div class="card-body text-center">
                                <div class="row">
                                    <div class="col-6"> <a href="{{ route('edit.Consulting', $info->id) }}"
                                            class="btn px-3"
                                            style="background-color: #6c4996c0;  border: 1px solid black ; border-radius: 10px;">تحديث</a>
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
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="confirmationDeletLabel">تأكيد عملية حذف
                                                            الاستشارة </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        هل انت متأكد من حذف الاستشارة
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">اغلاق</button>
                                                        <a href="{{ route('destroy.Consulting', $info->id) }}"
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
