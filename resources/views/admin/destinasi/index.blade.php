@extends('admin.maid')

@section('admin')
    <h2>Destinasimu</h2>
    <a href="/dashboard/destinasi/create">Tambah Destinasi</a>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Destinasi</th>
            <th scope="col">Kategori</th>
            <th scope="col">Location</th>
            <th scope="col">Functiont</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($destinasis as $destinasi)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $destinasi->title }}</td>
            <td>{{ $destinasi->kategori->name }}</td>
            <td>{{ $destinasi->latitude }},{{ $destinasi->longitude }}</td>
            <td class="d-flex">
              <a href="/dashboard/destinasi/{{ $destinasi->slug }}" class="badge rounded-pill bg-info"><span data-feather="eye"></span></a>
              <a href="/dashboard/destinasi/{{ $destinasi->slug }}/edit" class="badge rounded-pill bg-warning"><span data-feather="edit"></span></a>
              <form action="/dashboard/destinasi/{{ $destinasi->slug }}"method="POST">
                @csrf
                @method('delete')<button class="badge rounded-pill bg-danger text-white hover-info"type="submit"><span data-feather="trash"></button></form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
@endsection