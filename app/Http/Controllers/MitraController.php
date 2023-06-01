<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitra;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MitraController extends Controller
{
    public function create()
    {
        return view('layouts.partials.daftarmitra');
    }

    public function store(Request $request)
    {
        // Validasi data yang dikirimkan oleh pendaftar
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'alamat' => 'required|string',
            'no_wa' => 'required|string',
            'dokumentasi' => 'required|string',
        ]);

        // Buat pengguna baru dengan peran 'pendaftar'
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'alamat' => $validatedData['alamat'],
            'no_wa' => $validatedData['no_wa'],
            'dokumentasi' => $validatedData['dokumentasi'],
        ]);

        // Redirect atau memberikan pesan sukses kepada pendaftar

        return redirect()->back()->with('success', 'Pendaftaran berhasil, tunggu validasi dari admin.');
    }

    
}
