@extends('admin.layout')

@section('content')

<h3>Tambah Program</h3>

<form action="/admin/program" method="POST" enctype="multipart/form-data">
@csrf

<input type="text" name="judul" class="form-control mb-2" placeholder="Judul">

<textarea name="deskripsi" class="form-control mb-2" placeholder="Deskripsi"></textarea>

<input type="file" name="gambar" class="form-control mb-2">

<button class="btn btn-success">Simpan</button>

</form>

@endsection