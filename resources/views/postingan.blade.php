@extends('layout.main')

@section('isi')


<article class="mb-3">
<h2>{{ $blog->title }}</h2>
<p>By. <a href="/blog?author={{ $blog->author->username }}" class="text-decoration-none">{{ $blog->author->username }}</a></p>
{!! $blog->body !!} 
</article>


<a href="/destinasi">balik</a>
    
@endsection

