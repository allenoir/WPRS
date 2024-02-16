@extends('layout.main')


@section('isi')
<h1 class="mb-5 text-center" >{{ $title }}</h1>

<div class="row mb-3 justify-content-center d-flex">
  <div class="col-md-6">
    <form action="/destinasi">
      @if (request('kategori'))
          <input type="hidden" name="kategori" value="{{ request('kategori') }}">
      @endif
      @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}">
      @endif

      <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="cari destinasi" name="search" value="{{ request('search') }}">
      <button class="btn btn-warning" type="submit">Search</button>
      </div>
      </form>
  </div>
</div>

<div class="row">
@foreach ($wisata as $wst)
<div class="col-md">
<div class="card mb-4" style="width: 18rem;">
  <img src="{{ asset('images/destinasi/'.$wst->image_path) }}" class="card-img-top" alt="no img">
    <div class="card-body d-flexbox">
      <h5 class="card-title"><a href="/destinasi/{{ $wst->slug }}" class="text-decoration-none">{{ $wst->title }}</a></h5>
      <small>
      <p class="card-text">{{ $wst->excerpt }}</p>
      <p class="card-text">{{ $wst->created_at->diffForHumans() }}</p>
      </small>
    </div>
    
<div class="btn btn-link">
  @if (isset(Auth::user()->id) && Auth::user()->id == $wst->user_id)
      
       <form action="/destinasi/{{ $wst->slug }}"method="POST">
          @csrf
          @method('delete')

          <button class="btn btn-link"type="submit">Delete</button>

      </form>
@endif

</div>
</div>

</div>
@endforeach
</div>

<div class="d-flex justify-content-center">
  {{ $wisata->links() }}
</div>


@endsection
