<x-admin-layout title="Kelola Program">
    
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold text-dark mb-0">Daftar Program</h3>
        <a href="{{ route('admin.program.create') }}" class="btn fw-bold text-dark" style="background-color: #f9d030;">
            <i class="bi bi-plus-lg me-1"></i> Tambah Program Baru
        </a>
    </div>

    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-4">Gambar</th>
                            <th>Judul Program</th>
                            <th>Tgl Pelaksanaan</th>
                            <th>Status</th>
                            <th class="text-end pe-4">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($programs as $program)
                        <tr>
                            <td class="ps-4 py-3">
                                <img src="{{ asset('storage/' . $program->gambar) }}" alt="Img" class="rounded-3 object-fit-cover" width="60" height="60">
                            </td>
                            <td class="fw-bold text-dark">{{ $program->judul }}</td>
                            <td>{{ \Carbon\Carbon::parse($program->tanggal_pelaksanaan)->translatedFormat('d M Y') }}</td>
                            <td>
                                @if($program->status == 'akan_datang')
                                    <span class="badge bg-primary rounded-pill px-3">Akan Datang</span>
                                @else
                                    <span class="badge bg-success rounded-pill px-3">Selesai</span>
                                @endif
                            </td>
                            <td class="text-end pe-4">
                                <a href="{{ route('admin.program.edit', $program->id) }}" class="btn btn-sm btn-outline-primary rounded-3">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                
                                <form action="{{ route('admin.program.destroy', $program->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus program ini secara permanen?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger rounded-3">
                                        <i class="bi bi-trash3"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center py-5 text-muted">
                                <i class="bi bi-inbox fs-1 d-block mb-2"></i>
                                Belum ada data program. Silakan tambah baru.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-admin-layout>