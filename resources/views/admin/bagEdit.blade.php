@extends('admin.admin_main')

@section('title')

تحديث الحقيبة

@endsection

@section('bagsNav')
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
                <h5 class="card-title m-2">تحديث حقيبة</h5>
            </div>
            <div class="card-body ">
                <form method="POST" action="{{ route('update.Bag',$bag_data['id']) }}">
                    @csrf
                    <label for="bagName" class="mb-1">اسم الحقيبة</label>
                    <input type="text" id="bagName" name="bagName" value="{{ old('bagName', $bag_data['name']) }}" class="form-control add">
                    @error('bagName')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                    <br>

                    <label for="bagImg" class="mb-1">صورة</label>
                    <input type="text" id="bagImg" name="bagImg" value="{{ old('bagImg', $bag_data['image']) }}" class="form-control add">
                    @error('bagImg')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror

                    <br>
                    <div class="col-3">
                        <label for="bagPrice" class="mb-1">السعر</label>
                        <input type="text" id="bagPrice" name="bagPrice" value="{{ old('bagPrice', $bag_data['price']) }}" class="form-control add">
                    </div>

                    @error('bagPrice')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                    <div class="text-center mt-2">
                        <button href="#" class="btn update px-3" type="submit"
                            >تحديث</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

@endsection
