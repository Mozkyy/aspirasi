<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Register Page
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
     Silahkan Buat Akun
     <br/>
     Terlebih Dahulu
    </h1>
    <p class="text-[#3a3a3a] text-base sm:text-lg max-w-md mb-16">
     Sebelum menyampaikan Aspirasi, Anda diharuskan untuk membuat akun dahulu
    </p>
    <p class="text-[#3a3a3a] text-base mb-4">
     Sudah punya Akun?
    </p>
    <a href="/warga/login">
        <button class="bg-[#bf3b2a] text-white font-extrabold text-lg sm:text-xl px-8 py-3 rounded shadow-md hover:shadow-lg transition-shadow w-36" type="button">
            LOGIN
        </button>
    </a>
   </section>
   <!-- Center image -->
   <section class="flex justify-center flex-2 max-w-lg">
    <img alt="gambar ilustrasi orang naik roket" class="w-full h-auto" height="500" src="{{ asset('img/roket.png') }}" width="900"/>
   </section>
   <!-- Right form -->
   <section class="flex flex-col flex-2">
    <form action="{{ route('warga.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-4">
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
    
        {{-- NIK --}}
        <input name="nik" value="{{ old('nik') }}" class="shadow-md rounded-md px-4 py-3 text-sm sm:text-base placeholder-[#999999] focus:outline-none" placeholder="Masukkan NIK Anda" type="text" maxlength="16" required/>
    
        {{-- Nama --}}
        <input name="nama" value="{{ old('nama') }}" class="shadow-md rounded-md px-4 py-3 text-sm sm:text-base placeholder-[#999999] focus:outline-none" placeholder="Masukkan Nama Anda" type="text" required/>
    
        {{-- Email --}}
        <input name="email" value="{{ old('email') }}" class="shadow-md rounded-md px-4 py-3 text-sm sm:text-base placeholder-[#999999] focus:outline-none" placeholder="Masukkan Email Anda" type="email" required/>
    
        {{-- Password --}}
        <input name="password" class="shadow-md rounded-md px-4 py-3 text-sm sm:text-base placeholder-[#999999] focus:outline-none" placeholder="Password" type="password" required minlength="6"/>
    
        {{-- Konfirmasi Password --}}
        <input name="password_confirmation" class="shadow-md rounded-md px-4 py-3 text-sm sm:text-base placeholder-[#999999] focus:outline-none" placeholder="Konfirmasi Password" type="password" required minlength="6"/>
    
        {{-- Upload Gambar --}}
        <input name="gambar" type="file" class="mt-2 text-sm text-gray-600"/>
    
        {{-- Ingatkan Saya (opsional checkbox) --}}
        <label class="flex items-center gap-2 mt-2 select-none">
            <input class="w-5 h-5" type="checkbox"/>
            <span class="font-extrabold text-sm text-[#3a3a3a]">Ingatkan Saya</span>
        </label>
    
        {{-- Submit Button --}}
        <button class="bg-[#bf3b2a] text-white font-extrabold text-lg sm:text-xl px-8 py-3 rounded shadow-md hover:shadow-lg transition-shadow mt-6" type="submit">
            Register
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
