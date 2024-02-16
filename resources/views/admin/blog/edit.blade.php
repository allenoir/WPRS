@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="w-4/5 m-auto pt-20">


<?$errors?>


@extends('admin.maid')

@section('admin')
<article class="mb-3">
    <div class="card w-75">
        <div class="card-body">
            <form 
          action="/dashboard/blog/{{ $blogs->slug }}"
            method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleFormControlInput1">Judul Artikel</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="{{$blogs->title}}">
              </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Isi Artikel</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="body">{{$blogs->body}}</textarea>
          </div>
        <input type="submit" value="Save" class="btn btn-success">
    
    </form>
        </div>
      </div>
</article>


    
@endsection