<x-admin-layout title="Tambah Program Baru">
    
    <div class="mb-4 d-flex align-items-center gap-3">
        <a href="{{ route('admin.program.index') }}" class="btn btn-light rounded-circle"><i class="bi bi-arrow-left"></i></a>
        <h3 class="fw-bold text-dark mb-0">Tambah Program Baru</h3>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger rounded-3 shadow-sm mb-4">
            <ul class="mb-0 ps-3">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body p-4 p-md-5">
            
            <form action="{{ route('admin.program.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row g-4">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Judul Program <span class="text-danger">*</span></label>
                            <input type="text" name="judul" class="form-control form-control-lg" placeholder="Contoh: Berbagi Takjil Ramadhan" value="{{ old('judul') }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label fw-bold">Deskripsi Lengkap <span class="text-danger">*</span></label>
                            <textarea name="deskripsi" class="form-control" rows="8" placeholder="Ceritakan detail program di sini..." required>{{ old('deskripsi') }}</textarea>
                        </div>
                    </div>

                    <div class="col-md-4">
                        
                        <div class="mb-4 bg-light p-3 rounded-3 border">
                            <label class="form-label fw-bold">Foto Utama / Poster <span class="text-danger">*</span></label>
                            <input type="file" name="gambar" class="form-control" accept="image/*" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Tanggal Pelaksanaan <span class="text-danger">*</span></label>
                            <input type="date" name="tanggal_pelaksanaan" class="form-control" value="{{ old('tanggal_pelaksanaan') }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Status Tayang <span class="text-danger">*</span></label>
                            <select name="status" id="statusSelect" class="form-select fw-semibold" required>
                                <option value="akan_datang" selected>Akan Datang (Tampil di Beranda)</option>
                                <option value="selesai">Sudah Selesai (Masuk Rekam Jejak)</option>
                            </select>
                        </div>

                        <div class="d-grid pt-3 border-top mt-4">
                            <button type="submit" class="btn btn-lg text-white fw-bold shadow-sm" style="background-color: #1a4331; transition: all 0.3s;" onmouseover="this.style.backgroundColor='#112d21'" onmouseout="this.style.backgroundColor='#1a4331'">
                                <i class="bi bi-plus-circle me-2"></i> Simpan Program Baru
                            </button>
                        </div>

                    </div>
                </div>

            </form>
        </div>
    </div>

</x-admin-layout>