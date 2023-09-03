@extends('admin.layouts.app')

@section('content')
 welcome {{ Auth::guard('admin')->user()->name }}   
 
@endsection