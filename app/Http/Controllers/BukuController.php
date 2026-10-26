<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();
        return view('bukus.index', compact('bukus'));
    }

    public function create()
    {
        return view('bukus.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_buku' => 'required|string|max:20|unique:bukus,kode_buku',
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'penulis' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'jumlah' => 'required|integer|min:0',
            'keterangan' => 'nullable|string',
        ]);

        Buku::create($validated);

        return redirect()->route('bukus.index')
            ->with('success', 'Buku berhasil ditambahkan.');
    }

    public function show(Buku $buku)
    {
        return redirect()->route('bukus.edit', $buku->id);
    }

    public function edit(Buku $buku)
    {
        return view('bukus.edit', compact('buku'));
    }

    public function update(Request $request, Buku $buku)
    {
        $validated = $request->validate([
            'kode_buku' => 'required|string|max:20|unique:bukus,kode_buku,' . $buku->id,
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'penulis' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'jumlah' => 'required|integer|min:0',
            'keterangan' => 'nullable|string',
        ]);

        $buku->update($validated);

        return redirect()->route('bukus.index')
            ->with('success', 'Buku berhasil diperbarui.');
    }

    public function destroy(Buku $buku)
    {
        $buku->delete();

        return redirect()->route('bukus.index')
            ->with('success', 'Buku berhasil di hapus.');
    }
}
