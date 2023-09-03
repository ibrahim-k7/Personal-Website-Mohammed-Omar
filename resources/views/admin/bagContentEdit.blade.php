@extends('admin.admin_main')

@section('title')
    تحديث محتوى الحقيبة
@endsection

@section('bagsNav')
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
                <div class="card add rounded mx-auto d-block "
                  >
                    <div class="card-header text-center">
                        <h5 class="card-title m-2">تحديث محتوى</h5>
                    </div>
                    <div class="card-body ">
                        <form method="POST" action="{{ route('update.Content',$bag_content_data['id']) }}">
                            @csrf
                            <label for="filed_content" class="mb-1">المحتوى</label>
                            <input type="text" id="filed_content" name="filed_content" class="form-control add"
                                value="{{ old('filed_content', $bag_content_data['content']) }}"
                                
                                >
                                
                            @error('filed_content')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror

                            <input type="hidden" id="bagId" name="bagId" class="form-control"
                                value="{{$bag_content_data['bag_id'] }}"
                                
                                style="background-color: #C8C1CD">
                            <div class="card-body text-center">
                                <button class="btn update px-3" type="submit"
                                >تحديث</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>

    </div>
@endsection
