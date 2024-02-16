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
            action="/dashboard/destinasi"
            method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama Destinasi</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="title">
              </div>
              <label for="exampleSelectControlInput1">Kategori</label>
              <select name="kategori" id="exampleSelectControlInput1">
                @foreach($kategori As $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
              </select>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Deskripsi</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="body"></textarea>
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput2">Latitude</label>
            <input type="text" class="form-control" id="exampleFormControlInput2" name="latitude">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput3">Longitude</label>
            <input type="text" class="form-control" id="exampleFormControlInput3" name="longitude">
          </div>

          
        <input type="file" name="image" class="hidden">
        <input type="submit" value="Save" class="btn btn-success">
    
    </form>
        </div>
      </div>
</article>


    
@endsection