<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StokBarang;

class StokBarangController extends Controller
{
    /**
     * Tampilkan semua data barang + search + filter kategori
     */
    public function index(Request $request)
    {
        $query = StokBarang::query();

        // 🔎 SEARCH NAMA BARANG
        if ($request->filled('search')) {
            $query->where('nama_barang', 'like', '%' . $request->search . '%');
        }

        // 📂 FILTER KATEGORI
        if ($request->filled('kategori')) {
            $query->where('kategori', $request->kategori);
        }

        $barang = $query->latest()->get();

        return view('admin.stok.index', compact('barang'));
    }

    /**
     * Form tambah barang
     */
    public function create()
    {
        return view('admin.stok.create');
    }

    /**
     * Simpan barang baru
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_barang'   => 'required|string|max:255',
            'kategori'      => 'required|string|max:255',
            'satuan'        => 'required|string|max:50',
            'stok'          => 'required|numeric|min:0',
            'stok_minimum'  => 'required|numeric|min:0',
        ]);

        StokBarang::create($validated);

        return redirect()
            ->route('stok.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Detail barang
     */
    public function show($id)
    {
        $barang = StokBarang::findOrFail($id);

        return view('admin.stok.show', compact('barang'));
    }

    /**
     * Form edit barang
     */
    public function edit($id)
    {
        $barang = StokBarang::findOrFail($id);

        return view('admin.stok.edit', compact('barang'));
    }

    /**
     * Update barang
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_barang'   => 'required|string|max:255',
            'kategori'      => 'required|string|max:255',
            'satuan'        => 'required|string|max:50',
            'stok'          => 'required|numeric|min:0',
            'stok_minimum'  => 'required|numeric|min:0',
        ]);

        $barang = StokBarang::findOrFail($id);
        $barang->update($validated);

        return redirect()
            ->route('stok.index')
            ->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Hapus barang
     */
    public function destroy($id)
    {
        $barang = StokBarang::findOrFail($id);
        $barang->delete();

        return redirect()
            ->route('stok.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
