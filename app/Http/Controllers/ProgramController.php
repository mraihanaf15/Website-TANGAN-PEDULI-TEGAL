<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use Illuminate\Support\Facades\Storage; 

class ProgramController extends Controller
{
    // =====================================================================
    // BAGIAN 1: FUNGSI UNTUK HALAMAN ADMIN (DAPUR)
    // =====================================================================

    public function adminIndex()
    {
        $programs = Program::latest()->get();
        return view('admin.index', compact('programs'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            // Diubah menjadi 5120 (5MB) agar seragam dengan fungsi update
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:5120',
            'status' => 'required|in:akan_datang,selesai',
            'tanggal_pelaksanaan' => 'required|date',
        ]);

        $gambar = $request->file('gambar')->store('programs', 'public');

        Program::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar,
            'status' => $request->status,
            'tanggal_pelaksanaan' => $request->tanggal_pelaksanaan,
        ]);

        return redirect('/admin/program')->with('success', 'Berhasil menambah program baru!');
    }

    public function edit($id)
    {
        $program = Program::findOrFail($id);
        return view('admin.edit', compact('program'));
    }

    public function update(Request $request, $id)
    {
        $program = Program::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
            'status' => 'required|in:akan_datang,selesai',
            'tanggal_pelaksanaan' => 'required|date',
            'foto_kegiatan.*' => 'nullable|image|mimes:jpeg,png,jpg|max:5120' 
        ]);

        // 1. Handle Update Gambar Utama
        if ($request->hasFile('gambar')) {
            if ($program->gambar) {
                Storage::disk('public')->delete($program->gambar);
            }
            $gambar = $request->file('gambar')->store('programs', 'public');
        } else {
            $gambar = $program->gambar;
        }

        // 2. Handle Upload Foto Dokumentasi Kegiatan (Multiple)
        $fotoKegiatanPaths = $program->foto_kegiatan ?? [];
        
        if ($request->status == 'selesai' && $request->hasFile('foto_kegiatan')) {
            foreach ($request->file('foto_kegiatan') as $file) {
                $fotoKegiatanPaths[] = $file->store('dokumentasi', 'public');
            }
        }

        // 3. Simpan Perubahan ke Database
        $program->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar,
            'status' => $request->status,
            'tanggal_pelaksanaan' => $request->tanggal_pelaksanaan,
            'foto_kegiatan' => $request->status == 'selesai' ? $fotoKegiatanPaths : null, 
        ]);

        return redirect('/admin/program')->with('success', 'Berhasil memperbarui program!');
    }

    public function destroy($id)
    {
        $program = Program::findOrFail($id);
        
        if ($program->gambar) {
            Storage::disk('public')->delete($program->gambar);
        }

        if ($program->foto_kegiatan) {
            foreach ($program->foto_kegiatan as $foto) {
                Storage::disk('public')->delete($foto);
            }
        }
        
        $program->delete();

        return back()->with('success', 'Berhasil menghapus program!');
    }

    // =====================================================================
    // BAGIAN 2: FUNGSI UNTUK HALAMAN PENGUNJUNG WEB (FRONTEND)
    // =====================================================================

    // Menampilkan halaman detail program tunggal (Baca Selengkapnya)
    public function show($id)
    {
        $program = Program::findOrFail($id);
        
        // DISESUAIKAN: Menggunakan 'programm.show' karena nama folder adalah 'programm'
        return view('programm.show', compact('program'));
    }

    // Tampilkan di Beranda (Hanya yang berstatus "Akan Datang")
    public function index()
    {
        $programs = Program::where('status', 'akan_datang')
                           ->orderBy('tanggal_pelaksanaan', 'asc') 
                           ->get();
                           
        return view('beranda', compact('programs'));
    }

    // Tampilkan di halaman Program / Rekam Jejak (Hanya yang berstatus "Selesai")
    public function programSelesai()
    {
        $programs = Program::where('status', 'selesai')
                           ->orderBy('tanggal_pelaksanaan', 'desc') 
                           ->get();
                           
        return view('program', compact('programs'));
    }
}