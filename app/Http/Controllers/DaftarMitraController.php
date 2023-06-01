<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class DaftarMitraController extends Controller
{
    public function index()
    {
        // Mengambil data pendaftar yang belum divalidasi
        $pendaftar = User::where('role', '0')->get();

        return view('admin.pendaftaran.mitra.index', compact('pendaftar'));
    }

    public function validasi(Request $request, User $user)
    {
        // Validasi data yang dikirimkan oleh admin
        $validatedData = $request->validate([
            'validasi' => 'required|boolean',
        ]);

        // Update peran (role) pengguna jika validasi diterima
        if ($validatedData['validasi']) {
            $user->update(['role' => 'mitra']);
        }

        // Redirect atau memberikan pesan sukses kepada admin

        return redirect()->back()->with('success', 'Validasi berhasil.');
    }
}
