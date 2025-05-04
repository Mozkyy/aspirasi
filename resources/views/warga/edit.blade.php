<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   UPDATE PAGE
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: 'Inter', sans-serif;
    }
  </style>
 </head>
 <body class="bg-gradient-to-r from-[#FFFFFF] via-[#f9d4d0] to-[#FFFFFF] min-h-screen flex flex-col">
  <!-- Top bar -->
  <div class="bg-[#bf3b2a] text-white text-sm flex justify-center sm:justify-start gap-6 px-4 sm:px-10 py-2">
   <div class="flex items-center gap-2">
    <i class="fas fa-phone-alt text-[13px]">
    </i>
    <span>
     (024) 8312240
    </span>
   </div>
   <div class="flex items-center gap-2">
    <i class="fas fa-envelope text-[13px]">
    </i>
    <span>
     kelurahanpeterongan18@gmail.com
    </span>
   </div>
  </div>
  <!-- Main content -->
  <main class="flex-grow container mx-auto px-4 sm:px-10 py-10 flex flex-col lg:flex-row items-center justify-center gap-10 max-w-7xl">
   <!-- Left text block -->
   <section class="flex flex-col jsutify-left max-w-l flex-2">
    <h1 class="text-[#bf3b2a] font-extrabold text-4xl sm:text-5xl leading-tight mb-6">
     UPDATE AKUN
    </h1>
   </section>
   <!-- Center image -->
   <section class="flex justify-center flex-2 max-w-lg">
    <img alt="gambar ilustrasi orang naik roket" class="w-full h-auto" height="500" src="{{ asset('img/roket.png') }}" width="900"/>
   </section>
   <!-- Right form -->
   <section class="flex flex-col flex-2">
    <form action="{{ route('warga.update', $warga->id) }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-4">
        @csrf
    
        {{-- Tampilkan error validasi --}}
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                <strong class="font-bold">Ada kesalahan!</strong>
                <ul class="mt-2 list-disc pl-5 text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        {{-- Nama --}}
        <input name="nama" value="{{ old('nama', $warga->nama) }}" class="shadow-md rounded-md px-4 py-3 text-sm sm:text-base placeholder-[#999999] focus:outline-none" placeholder="Masukkan Nama Anda" type="text" required/>
    
        {{-- Email --}}
        <input name="email" value="{{ old('email', $warga->email) }}" class="shadow-md rounded-md px-4 py-3 text-sm sm:text-base placeholder-[#999999] focus:outline-none" placeholder="Masukkan Email Anda" type="email" required/>
    
        {{-- Password (kosongkan jika tidak ingin mengganti) --}}
        <input name="password" class="shadow-md rounded-md px-4 py-3 text-sm sm:text-base placeholder-[#999999] focus:outline-none" placeholder="Password Baru (biarkan kosong jika tidak diubah)" type="password"/>
    
        {{-- Konfirmasi Password --}}
        <input name="password_confirmation" class="shadow-md rounded-md px-4 py-3 text-sm sm:text-base placeholder-[#999999] focus:outline-none" placeholder="Konfirmasi Password Baru" type="password"/>
    
        {{-- Upload Gambar --}}
        <input name="gambar" type="file" class="mt-2 text-sm text-gray-600"/>
        @if ($warga->gambar)
            <div class="mt-2">
                <p class="text-sm text-gray-700">Gambar saat ini:</p>
                <img src="{{ asset('storage/' . $warga->gambar) }}" width="100" class="mt-1 rounded">
            </div>
        @endif
    
        {{-- Submit Button --}}
        <button class="bg-[#bf3b2a] text-white font-extrabold text-lg sm:text-xl px-8 py-3 rounded shadow-md hover:shadow-lg transition-shadow mt-6" type="submit">
            Simpan Perubahan
        </button>
    </form>
    
   </section>
  </main>
  <!-- Footer -->
  <footer class="bg-[#c43c2f] text-white">
   <div class="max-w-7xl mx-auto px-4 sm:px-10 py-6 flex flex-wrap justify-center sm:justify-between items-center gap-6">
    <img alt="Logo semarangkota.go.id " class="h-12 w-auto" height="50" src="{{ asset('img/semarangkota.png') }}" width="100"/>
    <img alt="Logo Semarang Smart City " class="h-12 w-auto" height="50" src="{{ asset('img/semarangsmartcity.png') }}" width="100"/>
    <img alt="Logo Satu Data Kota Semarang " class="h-12 w-auto" height="50" src="{{ asset('img/satudatakotasemarang.png') }}" width="100"/>
    <img alt="Logo PPID with text" class="h-12 w-auto" height="50" src="{{ asset('img/ppidkotasemarang.png') }}" width="100"/>
    </div>
   <div class="bg-black text-white text-xs sm:text-sm flex justify-between items-center px-4 sm:px-10 py-2">
    <span>
     © 2025 KELURAHAN PETERONGAN All rights reserved
    </span>
    <div class="flex items-center gap-4">
     <a class="flex items-center gap-1 hover:underline" href="#">
      <i class="fas fa-rss">
      </i>
      Legal notices
     </a>
     <a class="hover:underline" href="#">
      Sitemap
     </a>
     <a class="hover:underline" href="#">
      Sumber Daya Manusia
     </a>
    </div>
   </div>
  </footer>
 </body>
</html>


<!--

<form action="{{ route('warga.update', $warga->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
    
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" value="{{ old('nama', $warga->nama) }}" class="form-control">
                @error('nama') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
    
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email', $warga->email) }}" class="form-control">
                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
    
            <div class="form-group">
                <label>Password (biarkan kosong jika tidak ingin ganti)</label>
                <input type="password" name="password" class="form-control">
                @error('password') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
    
            <div class="form-group">
                <label>Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="form-control">
            </div>
    
            <div class="form-group">
                <label>Gambar Profil</label>
                <input type="file" name="gambar" class="form-control-file">
                @if($warga->gambar)
                    <p>Gambar saat ini:</p>
                    <img src="{{ asset('storage/' . $warga->gambar) }}" width="100">
                @endif
                @error('gambar') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
    
            <button type="submit" class="btn btn-primary">Update</button>
        </form>


-->