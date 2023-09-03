@extends('admin.admin_main')

@section('title')
    تحديث استشارة
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
        <div class="card add_cosulting  rounded mx-auto d-block "
            style="background-color: #D9D9D9; border: 1px solid black ; border-radius: 10px;">
            <div class="card-header text-center">
                <h5 class="card-title m-2">اضافة استشارة</h5>
            </div>
            <div class="card-body ">
                <form method="POST" action="{{ route('update.Consulting',$counseling_data['id']) }}">
                    @csrf
                    <label for="filed_consulting" class="mb-1">الاستشارة</label>
                    <input type="text" id="filed_consulting" name="filed_consulting" class="form-control" value="{{ old('filed_consulting', $counseling_data['counseling']) }}"
                        style="background-color: #C8C1CD">
                    @error('filed_consulting')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                    <div class="card-body text-center">
                        <button class="btn  px-3" type="submit"
                            style="background-color: #6c4996c0;  border: 1px solid black ; border-radius: 10px;">تحديث</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>

</div>


@endsection