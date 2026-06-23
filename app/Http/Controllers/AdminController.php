<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminController extends Controller
{
    /*
    |=========================
    | MITRA MANAGEMENT
    |=========================
    */

    // LIST MITRA + STATISTIK + SEARCH + (READY PAGINATION)
    public function mitra(Request $request)
    {
        // QUERY DASAR MITRA
        $query = User::where('role', 'mitra');

        // =========================
        // SEARCH FEATURE
        // =========================
        if ($request->search) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('email', 'like', '%' . $request->search . '%');
            });
        }

        // LIST MITRA
        $mitra = $query->latest()->get(); 
        // nanti kalau mau pagination: ganti jadi ->paginate(10)

        // =========================
        // STATISTIK
        // =========================
        $totalMitra = User::where('role', 'mitra')->count();

        $mitraAktif = User::where('role', 'mitra')
            ->where('is_active', 1)
            ->count();

        $mitraBaruBulanIni = User::where('role', 'mitra')
            ->whereMonth('created_at', Carbon::now()->month)
            ->whereYear('created_at', Carbon::now()->year)
            ->count();

        return view('admin.mitra.index', compact(
            'mitra',
            'totalMitra',
            'mitraAktif',
            'mitraBaruBulanIni'
        ));
    }

    // DETAIL MITRA
    public function showMitra($id)
    {
        $mitra = User::where('role', 'mitra')
            ->where('id', $id)
            ->firstOrFail();

        return view('admin.mitra.show', compact('mitra'));
    }

    // TOGGLE AKTIF / NONAKTIF
    public function toggleMitra($id)
    {
        $mitra = User::where('role', 'mitra')
            ->where('id', $id)
            ->firstOrFail();

        $mitra->is_active = $mitra->is_active ? 0 : 1;
        $mitra->save();

        return redirect()->back()->with('success', 'Status mitra berhasil diperbarui');
    }

    // DELETE MITRA
    public function deleteMitra($id)
    {
        $mitra = User::where('role', 'mitra')
            ->where('id', $id)
            ->firstOrFail();

        $mitra->delete();

        return redirect()->back()->with('success', 'Mitra berhasil dihapus');
    }

    /*
    |=========================
    | STOK
    |=========================
    */

    public function stok()
    {
        return view('admin.stok.index');
    }

    /*
    |=========================
    | TRANSAKSI
    |=========================
    */

    public function transaksi()
    {
        return view('admin.transaksi');
    }
}