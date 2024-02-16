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
          action="/dashboard/destinasi/{{ $destinasis->slug }}"
            method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama Destinasi</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="{{$destinasis->title}}">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput4">Kategori ID</label>
                <input type="text" class="form-control" id="exampleFormControlInput4" name="kategori" value="{{$destinasis->kategori_id}}">
              </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Deskripsi</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="body">{{$destinasis->body}}</textarea>
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput2">Latitude</label>
            <input type="text" class="form-control" id="exampleFormControlInput2" name="latitude" value="{{$destinasis->latitude}}">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput3">Longitude</label>
            <input type="text" class="form-control" id="exampleFormControlInput3" name="longitude" value="{{$destinasis->longitude}}">
          </div>
        <input type="submit" value="Save" class="btn btn-success">
    
    </form>
        </div>
      </div>
</article>


    
@endsection