@extends('layout.main')

@section('isi')
  
<div class="mb-3">
    <H1 class="mt-3">Recommend</H1>
</div>

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><a href="/destinasi/{{ $wisata[]->slug }}">{{ $wisata[]->title }}</a></h5>
        <p class="card-text">{{ $wisata[1]->excerpt }}</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><a href="/destinasi/{{ $wisata[2]->slug }}">{{ $wisata[2]->title }}</a></h5>
        <p class="card-text">{{ $wisata[2]->excerpt }}</p>
      </div>
    </div>
  </div>
</div>
    
@endsection