<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\AspirasiController;



// Route untuk halaman login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// Route untuk halaman welcome (jika masih diperlukan)
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/register', function () {
    return view('register');
});

Route::get('/daftarwarga', [WargaController::class, 'index'])->name('daftarwarga');
Route::get('/aspirasi', [AspirasiController::class, 'index'])->name('daftaraspirasi');

Route::get('/petugas', [PetugasController::class, 'index']);

// Route untuk halaman setelah login
Route::get('/home', function () {
    return view('home');
})->middleware('auth');


// warga
Route::get('/warga/login', [WargaController::class, 'showLoginForm'])->name('warga.login');
Route::post('/warga/login', [WargaController::class, 'login'])->name('warga.login.submit');
Route::get('/warga/dashboard', [WargaController::class, 'dashboard'])->name('warga.dashboard');
Route::get('/warga/profil', [WargaController::class, 'profil'])->name('warga.profil');
Route::post('/warga/logout', [WargaController::class, 'logout'])->name('warga.logout');

Route::post('/warga/register', [WargaController::class, 'store'])->name('warga.store');

Route::get('/warga/register', function () {
    return view('warga.register');
});

// Tampilkan form update
Route::get('/warga/edit', [WargaController::class, 'edit'])->name('warga.edit');
// Proses update
Route::post('/warga/update/{id}', [WargaController::class, 'update'])->name('warga.update');

Route::get('/warga/aspirasi', [AspirasiController::class, 'indexWarga'])->name('warga.aspirasi');

Route::delete('/warga/{id}', [WargaController::class, 'destroy'])->name('warga.destroy');


// aspirasi
    // Form input aspirasi
    Route::get('/warga/aspirasi/create', [AspirasiController::class, 'create'])->name('aspirasi.create');

    // Menyimpan data aspirasi
    Route::post('warga/aspirasi/store', [AspirasiController::class, 'store'])->name('aspirasi.store');

    Route::delete('/aspirasi/{id}', [AspirasiController::class, 'destroy'])->name('aspirasi.destroy');

    Route::post('/aspirasi/{id}/terima', [AspirasiController::class, 'terima'])->name('aspirasi.terima');
    Route::post('/aspirasi/{id}/selesai', [AspirasiController::class, 'selesai'])->name('aspirasi.selesai');


/*

<form class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <a href="/home" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a>
                                        <hr>
                                        <a href="/home" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="/home" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                    </form>


*/
