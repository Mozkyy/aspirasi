<?php

namespace App\Http\Controllers;
use App\Models\Aspirasi;
use App\Models\Warga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AspirasiController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $show = collect(); // Default kosong
    
        if ($user->jabatan === 'admin') 
        {
            // Admin melihat semua aspirasi
            $show = Aspirasi::all();
        } 
        elseif (str_contains($user->jabatan, 'Kepala Seksi Perekonomian dan Kesejahteraan Sosial Kelurahan'))
        {
                $kategori = 'Perekonomian dan Kesejahteraan Sosial';
                //$kategori = 'Pembangunan';
                //$kategori = 'Ketenteraman dan Ketertiban Umum';
            if ($kategori) {
                $show = Aspirasi::where('kategori', $kategori)
                    ->where('status_proses', 'diterima_admin')
                    ->orWhere('status_proses', 'diterima_kasi')
                    ->get();
            }
        } 
        elseif (str_contains($user->jabatan, 'Kepala Seksi Pembangunan Kelurahan'))
        {
                $kategori = 'Pembangunan';
                //$kategori = 'Ketenteraman dan Ketertiban Umum';
            if ($kategori) {
                $show = Aspirasi::where('kategori', $kategori)
                    ->where('status_proses', 'diterima_admin')
                    ->orWhere('status_proses', 'diterima_kasi')
                    ->get();
            }
        } 
        elseif (str_contains($user->jabatan, 'Kepala Seksi Pemerintahan, Ketentraman dan Ketertiban Umum'))
        {
                $kategori = 'Ketenteraman dan Ketertiban Umum';
            if ($kategori) {
                $show = Aspirasi::where('kategori', $kategori)
                    ->where('status_proses', 'diterima_admin')
                    ->orWhere('status_proses', 'diterima_kasi')
                    ->get();
            }
        } 
        elseif ($user->jabatan === 'Lurah') 
        {
            // Lurah hanya melihat aspirasi yang status_proses diterima_kasi dan status_selesai false
            $show = Aspirasi::where(function ($query) {
                $query->where('status_proses', 'diterima_kasi')
                      ->orWhere('status_proses', 'diterima_lurah')
                      ->orWhere('status_proses', 'selesai');
            })
            ->get();
        }
    
        return view('aspirasi', compact('show'));
    }
    public function create()
    {
        $warga = Warga::find(session('warga_id'));


        return view('warga.formaspirasi', compact('warga'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'telpon' => 'required|string|max:15',
            'rt' => 'required|string|max:5',
            'rw' => 'required|string|max:5',
            'kategori' => 'required|in:Perekonomian dan Kesejahteraan Sosial,Pembangunan,Ketenteraman dan Ketertiban Umum',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if (!session()->has('warga_id')) {
            return redirect()->route('warga.login')->with('error', 'Silakan login terlebih dahulu.');
        }

        $data = $request->only(['isi', 'telpon', 'rt', 'rw', 'kategori']);
        $data['warga_id'] = session('warga_id');

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('aspirasi_gambar', 'public');
        }

        Aspirasi::create($data);

        return redirect()->route('warga.dashboard')->with('success', 'Aspirasi berhasil dikirim.');
    }

    public function indexWarga()
    {
        if (!session()->has('warga_id')) {
            return redirect()->route('warga.login')->with('error', 'Silakan login terlebih dahulu.');
        }

        $show = Aspirasi::where('warga_id', session('warga_id'))->latest()->get();
        $warga = Warga::find(session('warga_id'));

        return view('warga.aspirasi', compact('show', 'warga'));
    }

    

    public function destroy($id)
    {
        $aspirasi = Aspirasi::findOrFail($id);

        // Pastikan aspirasi milik warga yang sedang login
       // if ($aspirasi->warga_id != session('warga_id')) {
           // return redirect()->back()->with('error', 'Anda tidak memiliki izin untuk menghapus aspirasi ini.');
       // }

        // Hapus gambar jika ada
        if ($aspirasi->gambar) {
            Storage::disk('public')->delete($aspirasi->gambar);
        }

        $aspirasi->delete();

        return redirect()->back()->with('success', 'Aspirasi berhasil dihapus.');
    }

    public function terima($id)
    {
        $aspirasi = Aspirasi::findOrFail($id);
        $user = Auth::user();

        // Tentukan status berdasarkan jabatan
        switch ($user->jabatan) {
            case 'admin':
                $aspirasi->status_proses = 'diterima_admin';
                break;
            case 'Kepala Seksi Perekonomian dan Kesejahteraan Sosial Kelurahan':
                $aspirasi->status_proses = 'diterima_kasi';
                break;
            case 'Kepala Seksi Pembangunan Kelurahan':
                $aspirasi->status_proses = 'diterima_kasi';
                break;
            case 'Kepala Seksi Pemerintahan, Ketentraman dan Ketertiban Umum':
                $aspirasi->status_proses = 'diterima_kasi';
                break;               
            case 'Lurah':
                $aspirasi->status_proses = 'diterima_lurah';
                break;
            default:
                return redirect()->back()->with('error', 'Anda tidak memiliki izin untuk melakukan aksi ini.');
        }

        $aspirasi->tanggal_respon = Carbon::now();
        $aspirasi->save();

        return redirect()->back()->with('success', 'Aspirasi berhasil diterima oleh ' . $user->jabatan . '.');
    }

    public function selesai($id)
    {
        $aspirasi = Aspirasi::findOrFail($id);
        $aspirasi->status_proses = 'selesai';
        $aspirasi->tanggal_respon = Carbon::now();
        $aspirasi->save();

    return redirect()->back()->with('success', 'Aspirasi telah diterima oleh Admin.');
    }

}
