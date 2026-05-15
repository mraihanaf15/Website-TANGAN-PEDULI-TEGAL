@extends('admin.layout')

@section('content')

<h3>Edit Program</h3>

<form action="/admin/program/{{ $program->id }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')

<input type="text" name="judul" value="{{ $program->judul }}" class="form-control mb-2">

<textarea name="deskripsi" class="form-control mb-2">{{ $program->deskripsi }}</textarea>

<input type="file" name="gambar" class="form-control mb-2">

<button class="btn btn-primary">Update</button>

</form>

@endsection