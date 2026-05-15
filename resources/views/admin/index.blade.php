@extends('admin.layout')

@section('content')

<h3>Data Program</h3>

<a href="/admin/program/create" class="btn btn-success mb-3">
    + Tambah Program
</a>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Gambar</th>
        <th>Aksi</th>
    </tr>

    @foreach($programs as $p)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $p->judul }}</td>
        <td>
            <img src="{{ asset('storage/'.$p->gambar) }}" width="60">
        </td>
        <td>
            <a href="/admin/program/{{ $p->id }}/edit" class="btn btn-warning btn-sm">Edit</a>

            <form action="/admin/program/{{ $p->id }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

@endsection