@extends('admin.admin_main')

@section('title')
    تحديث  شريك نجاح
@endsection

@section('consuNav')
    active
@endsection

@section('content')
    
@if (Session::has('success'))
<div class="alert alert-success" role="alert">{{ Session::get('success') }}</div>
@else
@endif
<div class="container  mt-5 mb-5">

    <div class="row ">
        <div class="col ">
            <div class="card add  rounded mx-auto d-block ">
                <div class="card-header text-center">
                    <h5 class="card-title m-2">تحديث شريك نجاح</h5>
                </div>
                <div class="card-body ">
                    <form method="post" enctype="multipart/form-data" action="{{ route('update.Success_partners', $success_partner_data['id']) }}">
                        @csrf
                        <label for="client" class="mb-1">الجهه</label>
                        <input type="text" id="client" name="client" class="form-control add" value="{{ old('client', $success_partner_data['client']) }}">

                        @error('client')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror

                        <br>


                        <label for="details" class="mb-1">التفاصيل</label>
                        <textarea class="form-control add"  id="exampleFormControlTextarea1" name="details" rows="5" value="{{ old('details', $success_partner_data['details']) }}">{{ $success_partner_data['details'] }}</textarea>

                        @error('details')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror

                        <br>

                        <label for="image_01" class="mb-1">صورة 1</label>
                        <input type="file" id="image_01" name="image_01"  value="{{ old('image_01', $success_partner_data['image_01']) }}" class="form-control add">

                        @error('image_01')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror

                        <br>

                        <label for="image_02" class="mb-1">صورة 2</label>
                        <input type="file" id="image_02" name="image_02" value="{{ old('image_02', $success_partner_data['image_02']) }}" class="form-control add">

                        @error('image_02')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror

                        <br>

                        <label for="image_03" class="mb-1">صورة 3</label>
                        <input type="file" id="image_03" name="image_03" value="{{ old('image_03', $success_partner_data['image_03']) }}" class="form-control add">

                        @error('image_03')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror

                        <br>

                        <label for="image_04" class="mb-1">صورة 4</label>
                        <input type="file" id="image_04" name="image_04" value="{{ old('image_04', $success_partner_data['image_04']) }}" class="form-control add">

                        @error('image_04')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror

                        <br>

                        <label for="image_05" class="mb-1">صورة 5</label>
                        <input type="file" id="image_05" name="image_05" value="{{ old('image_05', $success_partner_data['image_05']) }}" class="form-control add">

                        @error('image_05')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror

                        <br>

                        <label for="image_06" class="mb-1">صورة 6</label>
                        <input type="file" id="image_06" name="image_06" value="{{ old('image_06', $success_partner_data['image_06']) }}" class="form-control add">

                        @error('image_06')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror

                        <br>

                        <div class="card-body text-center">
                            <button class="btn  add  px-3" type="submit">تحديث</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>

</div>>


@endsection