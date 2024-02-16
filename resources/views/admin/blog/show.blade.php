@extends('admin.maid')

@section('admin')
<article class="mb-3">
    <h2>{{ $blogs->title }}</h2>
    <img src="{{ asset('images/blog/'.$blogs->image_path) }}" alt="no img">
    {!! $blogs->body !!} 
    </article>
    {{$blogs->image_path}}
    <a href="/dashboard/blog/">balik</a>
    
@endsection