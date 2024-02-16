@extends('layout.main')


@section('isi')
<h1 class="mb-5" >Kategori</h1>

@foreach ($category as $c)
<ul>
    <li>
        <h2><a href="destinasi?kategori={{  $c->slug  }}">{{ $c->name }}</a></h2>
    </li>
</ul>


@endforeach
    




@endsection
