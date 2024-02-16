@extends('admin.maid')

@section('admin')
    <h2>WELCOME BACK ADMIN {{ Auth::user()->name }}</h2>
    
@endsection