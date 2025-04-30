<?php

namespace App\Http\Controllers;
use App\Models\Warga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Tambahkan ini
class WargaController extends Controller
{
    public function index()
    {
        $show = Warga::all();
        return view('daftarwarga', compact('show'));
    }

    public function create()
    {
        // Form untuk membuat warga baru
    }

    public function store(Request $request)
    {
        // Simpan warga baru ke database
         // Validasi input
         $request->validate([
            'nik' => 'required|unique:warga,nik|max:16',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:warga,email',
            'password' => 'required|min:6|confirmed', // password + password_confirmation
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Upload gambar jika ada
        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('warga_gambar', 'public');
        }

        // Simpan ke database
        Warga::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password, 
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('warga.login')->with('success', 'Warga berhasil didaftarkan.');
    }

    public function show($id)
    {
        // Tampilkan detail warga
    }

    public function edit()
    {
        $warga = Warga::findOrFail(session('warga_id'));
    return view('warga.edit', compact('warga'));
    }

    public function update(Request $request, $id)
    {
        $warga = Warga::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:warga,email,' . $id,
            'password' => 'nullable|min:6|confirmed',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($warga->gambar) {
                Storage::disk('public')->delete($warga->gambar);
            }
            // Upload gambar baru
            $gambarPath = $request->file('gambar')->store('warga_gambar', 'public');
            $warga->gambar = $gambarPath;
        }

        $warga->nama = $request->nama;
        $warga->email = $request->email;

        if ($request->filled('password'))
        {
            $warga->password = $request->password;   
        }

        $warga->save();

        return redirect()->route('warga.dashboard')->with('success', 'Data warga berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Hapus warga
    }

    public function showLoginForm()
    {
        return view('warga.login');
    }

    public function login(Request $request)
    {
        $warga = Warga::where('nik', $request->nik)->first();

        if ($warga && $request->password === $warga->password) {
            // Login berhasil: simpan session
            session(['warga_id' => $warga->id]);
            return redirect()->route('warga.dashboard');
        } else {
            return redirect()->route('warga.login')->with('error', 'Email atau password salah.');
        }
    }

    public function dashboard()
    {
        // Cek apakah sudah login
        if (!session()->has('warga_id')) {
            return redirect()->route('warga.login')->with('error', 'Silakan login dulu.');
        }

        $warga = Warga::find(session('warga_id'));

        return view('warga.dashboard', compact('warga'));
    }

    public function profil()
    {
        // Cek apakah sudah login
        if (!session()->has('warga_id')) {
            return redirect()->route('warga.login')->with('error', 'Silakan login dulu.');
        }

        $warga = Warga::find(session('warga_id'));


        return view('warga.profil', compact('warga'));
    }
}
