@extends('admin.maid')

@section('admin')
<article class="mb-3">
    <h2>{{ $destinasis->title }}</h2>
    <img src="{{ asset('images/destinasi/'.$destinasis->image_path) }}" alt="no img">
    <p>By. <a href="/destinasi?author={{ $destinasis->author->username }}" class="text-decoration-none">{{ $destinasis->author->username }}</a> In <a href="/destinasi?kategori={{ $destinasis->kategori->slug }}">{{ $destinasis->kategori->name }}</a> </p>
    {!! $destinasis->body !!} 
    </article>
    <a target="_blank" href="https://www.google.com/maps?q={{$destinasis->latitude}},{{$destinasis->longitude}}">Buka di Google Maps</a>
    <a href="/destinasi">balik</a>
    
@endsection