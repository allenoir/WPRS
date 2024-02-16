@extends('admin.maid')

@section('admin')
<h2>Kategori</h2>
<a href="/dashboard/kategori/create">Tambah Kategori</a>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Kategori</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($kategori as $kategoris)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $kategoris->name }}</td>
            <td class="d-flex">
              <a href="/dashboard/kategori/{{ $kategoris->slug }}/edit" class="badge rounded-pill bg-warning"><span data-feather="edit"></span></a>
              <form action="/dashboard/kategori/{{ $kategoris->slug }}"method="POST">
                @csrf
                @method('delete')<button class="badge rounded-pill bg-danger text-white hover-info"type="submit"><span data-feather="trash"></button></form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
@endsection