<html lang="id">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Login Aspirasi
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   /* Custom scrollbar removal for checkbox */
    body {
      font-family: 'Open Sans', sans-serif;
    }
    input[type="checkbox"] {
      accent-color: #c43c2f;
    }
  </style>
 </head>
 <body class="bg-gradient-to-r from-[#FFFFFF] via-[#f9d4d0] to-[#FFFFFF] flex flex-col min-h-screen">
  <!-- Top bar -->
  <div class="bg-[#c43c2f] text-white text-xs sm:text-sm flex items-center gap-4 px-4 sm:px-6 py-2">
   <div class="flex items-center gap-2">
    <i class="fas fa-phone-alt text-[10px] sm:text-xs">
    </i>
    <span>
     (024) 8312240
    </span>
   </div>
   <div class="flex items-center gap-2">
    <i class="fas fa-envelope text-[10px] sm:text-xs">
    </i>
    <span>
     kelurahanpeterongan18@gmail.com
    </span>
   </div>
  </div>
  <!-- Main content -->
  <main class="flex-grow flex flex-col sm:flex-row items-center justify-center px-6 sm:px-12 py-12 sm:py-20 gap-10 sm:gap-20 bg-gradient-to-r from-[#f7e6e3] via-[#f7e0dc] to-white">
   <!-- Left text block -->
   <section class="flex flex-col justify-center max-w-md sm:max-w-sm lg:max-w-md">
    <h1 class="text-[#c43c2f] font-extrabold text-4xl sm:text-5xl leading-tight mb-4">
     Selamat Datang di
     <br/>
     Aspirasi
    </h1>
    <p class="text-black text-base sm:text-lg mb-16 max-w-xs">
     Silahkan login untuk menyampaikan
     <br/>
     Aspirasi Anda
    </p>
    <p class="text-black text-base mb-3 max-w-xs">
     Belum punya Akun?
    </p>
    <button class="bg-[#c43c2f] text-white font-extrabold text-sm sm:text-base px-6 py-2 rounded shadow-md hover:shadow-lg w-max" type="button">
     <a href="/warga/register"> REGISTER</a>
    </button>
   </section>
   <!-- Center image -->
   <section class="flex justify-center items-center max-w-xs sm:max-w-sm lg:max-w-md">
    <img alt="gambar ilustrasi orang naik roket" class="w-full h-auto" height="500" src="{{ asset('img/roket.png') }}" width="300"/>
   </section>
<!-- Right login form -->
<section class="flex flex-col max-w-xs sm:max-w-sm w-full sm:w-auto gap-4">
  <form method="POST" action="{{ route('warga.login.submit') }}" class="flex flex-col gap-4">
    @csrf
    <input name="nik" value="{{ old('nik') }}" class="px-4 py-3 rounded-lg shadow-md border border-transparent focus:outline-none focus:ring-2 focus:ring-[#c43c2f] text-xs sm:text-sm" placeholder="Masukkan NIK Anda"
      type="text"
    />
    @error('nik')
      <small class="text-red-500 text-xs">{{ $message }}</small>
    @enderror

    <input
      name="password" class="px-4 py-3 rounded-lg shadow-md border border-transparent focus:outline-none focus:ring-2 focus:ring-[#c43c2f] text-xs sm:text-sm" placeholder="Password"
      type="password"
    />
    @error('password')
      <small class="text-red-500 text-xs">{{ $message }}</small>
    @enderror

    <div class="flex justify-between items-center text-xs sm:text-sm font-semibold text-black">
      <label class="flex items-center gap-2 cursor-pointer select-none">
        <input class="w-4 h-4" type="checkbox" />
        Ingatkan Saya
      </label>
      <a href="#" class="text-xs sm:text-sm font-semibold text-[#000000] hover:underline">
        Lupa Password?
      </a>
    </div>

    <button
      type="submit"
      class="bg-[#c43c2f] text-white font-extrabold text-lg sm:text-xl rounded-lg py-3 shadow-md hover:shadow-lg w-full"
    >
      LOGIN
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
