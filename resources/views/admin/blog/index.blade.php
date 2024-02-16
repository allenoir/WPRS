@extends('admin.maid')

@section('admin')
<h2>Blogmu</h2>
<a href="/dashboard/blog/create">Tambah Artikel</a>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Judul Blog</th>
            <th scope="col">Waktu Dibuat</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($blog as $blogs)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $blogs->title }}</td>
            <td>{{ $blogs->created_at }}</td>
            <td class="d-flex">
              <a href="/dashboard/blog/{{ $blogs->slug }}" class="badge rounded-pill bg-info"><span data-feather="eye"></span></a>
              <a href="/dashboard/blog/{{ $blogs->slug }}/edit" class="badge rounded-pill bg-warning"><span data-feather="edit"></span></a>
              <form action="/dashboard/blog/{{ $blogs->slug }}"method="POST">
                @csrf
                @method('delete')<button class="badge rounded-pill bg-danger text-white hover-info"type="submit"><span data-feather="trash"></button></form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
@endsection