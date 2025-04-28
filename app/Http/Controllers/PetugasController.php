<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class PetugasController extends Controller
{
    public function index()
    {
        // Menampilkan daftar petugas

         // Ambil hanya kolom 'name', 'jabatan', dan 'email'
        $petugas = User::select('name', 'jabatan', 'email')->get();

        // Kembalikan ke view 'petugas.index' dan kirim data $petugas
        return view('petugas', compact('petugas'));
    }

    public function create()
    {
        // Form untuk membuat petugas baru
    }

    public function store(Request $request)
    {
        // Simpan petugas baru ke database
    }

    public function show($id)
    {
        // Tampilkan detail petugas
    }

    public function edit($id)
    {
        // Form edit petugas
    }

    public function update(Request $request, $id)
    {
        // Update data petugas
    }

    public function destroy($id)
    {
        // Hapus petugas
    }
}
