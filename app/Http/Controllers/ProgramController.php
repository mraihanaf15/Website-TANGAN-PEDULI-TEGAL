<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
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
    $gambar = $request->file('gambar')->store('programs', 'public');

    Program::create([
        'judul' => $request->judul,
        'deskripsi' => $request->deskripsi,
        'gambar' => $gambar,
    ]);

    return redirect('/admin/program')->with('success', 'Berhasil tambah');
}

public function edit($id)
{
    $program = Program::findOrFail($id);
    return view('admin.edit', compact('program'));
}

public function update(Request $request, $id)
{
    $program = Program::findOrFail($id);

    if ($request->file('gambar')) {
        $gambar = $request->file('gambar')->store('programs', 'public');
    } else {
        $gambar = $program->gambar;
    }

    $program->update([
        'judul' => $request->judul,
        'deskripsi' => $request->deskripsi,
        'gambar' => $gambar,
    ]);

    return redirect('/admin/program')->with('success', 'Berhasil update');
}

public function destroy($id)
{
    Program::destroy($id);
    return back()->with('success', 'Berhasil hapus');
}
    // tampilkan data ke user
    public function index()
    {
        $programs = Program::latest()->get();
        return view('beranda', compact('programs'));
    }

    // simpan data dari admin
   
}