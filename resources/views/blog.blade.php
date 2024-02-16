
@extends('layout.main')


@section('isi')
<h1 class="mb-5 text-center" >{{ $title }}</h1>

<div class="row mb-3 justify-content-center">
  <div class="col-md-6">
    <form action="/blog">
      @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}">
      @endif

      <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="cari blog" name="search" value="{{ request('search') }}">
      <button class="btn btn-warning" type="submit">Search</button>
      </div>
      </form>
  </div>
</div>
    
@foreach ($blog as $ds)
<article class="mb-3 border-bottom pb-3">
          <h5 ><a href="/blog/{{ $ds["slug"] }}">{{ $ds["title"] }}</a></h5>
          <p class="card-text">{{ $ds->excerpt }}</p>
      <p class="card-text">{{ $ds->created_at->diffForHumans() }}</p>
</article>
<div class="float-right">
  @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
  <span class="float-right">
      <a 
          href="/blog/{{ $post->slug }}/edit"
          class="btn btn-warning">
          Edit
      </a>
  </span>

  <span class="float-right">
       <form 
          action="/blog/{{ $post->slug }}"
          method="POST">
          @csrf
          @method('delete')

          <button
          class="btn btn-danger"
              type="submit">
              Delete
          </button>

      </form>
  </span>
@endif

</div>
@endforeach

    
@endsection