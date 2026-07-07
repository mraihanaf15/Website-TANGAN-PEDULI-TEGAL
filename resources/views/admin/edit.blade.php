<x-admin-layout title="Edit Program">
    
    <div class="mb-4 d-flex align-items-center gap-3">
        <a href="{{ route('admin.program.index') }}" class="btn btn-light rounded-circle"><i class="bi bi-arrow-left"></i></a>
        <h3 class="fw-bold text-dark mb-0">Edit Data Program</h3>
    </div>

    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body p-4 p-md-5">
            
            <form action="{{ route('admin.program.update', $program->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') 

                <div class="row g-4">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Judul Program <span class="text-danger">*</span></label>
                            <input type="text" name="judul" class="form-control form-control-lg" value="{{ $program->judul }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label fw-bold">Deskripsi Lengkap <span class="text-danger">*</span></label>
                            <textarea name="deskripsi" class="form-control" rows="8" required>{{ $program->deskripsi }}</textarea>
                        </div>
                    </div>

                    <div class="col-md-4">
                        
                        <div class="mb-4 bg-light p-3 rounded-3 border">
                            <label class="form-label fw-bold">Foto Utama / Poster</label>
                            <div class="mb-3 text-center">
                                <img src="{{ asset('storage/' . $program->gambar) }}" class="img-fluid rounded-3 border shadow-sm object-fit-cover" style="max-height: 150px; width: 100%;" alt="Foto Utama">
                            </div>
                            <input type="file" name="gambar" class="form-control" accept="image/*">
                            <small class="text-muted mt-1 d-block">Kosongkan jika tidak ingin mengganti foto utama.</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Tanggal Pelaksanaan <span class="text-danger">*</span></label>
                            <input type="date" name="tanggal_pelaksanaan" class="form-control" value="{{ \Carbon\Carbon::parse($program->tanggal_pelaksanaan)->format('Y-m-d') }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Status Tayang <span class="text-danger">*</span></label>
                            <select name="status" id="statusSelect" class="form-select fw-semibold" required>
                                <option value="akan_datang" {{ $program->status == 'akan_datang' ? 'selected' : '' }}>Akan Datang (Tampil di Beranda)</option>
                                <option value="selesai" {{ $program->status == 'selesai' ? 'selected' : '' }}>Sudah Selesai (Masuk Rekam Jejak)</option>
                            </select>
                        </div>

                        <div id="fotoKegiatanSection" class="mb-4 bg-light p-3 rounded-3 border border-warning" style="display: {{ $program->status == 'selesai' ? 'block' : 'none' }};">
                            <label class="form-label fw-bold text-dark"><i class="bi bi-images me-1 text-warning"></i> Dokumentasi Foto Kegiatan</label>
                            <input type="file" name="foto_kegiatan[]" class="form-control" accept="image/*" multiple>
                            <small class="text-muted d-block mt-1">Kamu bisa memilih langsung banyak foto sekaligus.</small>
                            
                            @if(!empty($program->foto_kegiatan))
                                <div class="mt-3">
                                    <label class="small text-muted fw-bold d-block mb-2">Foto Terupload:</label>
                                    <div class="row g-2">
                                        @foreach($program->foto_kegiatan as $foto)
                                            <div class="col-4">
                                                <img src="{{ asset('storage/' . $foto) }}" class="img-fluid rounded border shadow-sm object-fit-cover" style="height: 60px; width: 100%;">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>

                        <div class="d-grid pt-2">
                            <button type="submit" class="btn btn-lg text-white fw-bold" style="background-color: #1a4331;">
                                <i class="bi bi-cloud-arrow-up me-2"></i> Simpan Perubahan
                            </button>
                        </div>

                    </div>
                </div>

            </form>
        </div>
    </div>

    <script>
        document.getElementById('statusSelect').addEventListener('change', function() {
            const section = document.getElementById('fotoKegiatanSection');
            
            if (this.value === 'selesai') {
                section.style.display = 'block';
                // Memberikan efek visual sedikit agar admin sadar inputan muncul
                section.style.animation = 'fadeIn 0.5s';
            } else {
                section.style.display = 'none';
            }
        });
    </script>

    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>

</x-admin-layout>