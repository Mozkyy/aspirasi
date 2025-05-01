<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Kelurahan Peterongan
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: 'Roboto', sans-serif;
    }
  </style>
 </head>
 <body class="bg-white text-black">
  <!-- Top red bar with contact info -->
  <div class="bg-[#c63c28] text-white text-sm flex flex-col sm:flex-row justify-center sm:justify-start gap-2 sm:gap-6 px-4 py-1">
   <div class="flex items-center gap-1">
    <i class="fas fa-phone-alt">
    </i>
    <span>
     (024) 8312240
    </span>
   </div>
   <div class="flex items-center gap-1">
    <i class="fas fa-envelope">
    </i>
    <span>
     kelurahanpeterongan18@gmail.com
    </span>
   </div>
  </div>
  <!-- Header with logo and nav -->
  <header class="border-b border-[#c63c28]">
   <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between px-4 py-2">
    <div class="flex items-center gap-2">
     <img alt="Logo Kelurahan Peterongan with shield and text" class="h-12 w-auto" height="60" src="{{ asset('img/KelurahanPeterogan.png') }}" width="80"/>
    </div>
    <nav class="mt-2 sm:mt-0 text-xs sm:text-sm">
     <ul class="flex gap-6 text-black font-normal">
      <li>
       <a class="hover:underline" href="/warga/dashboard">
        Beranda
       </a>
      </li>
      <li>
       <a class="hover:underline" href="#">
        Daftar Aspirasi
       </a>
      </li>
      <li>
       <a class="hover:underline" href="/warga/profil">
        profil
       </a>
      </li>
     </ul>
    </nav>
    <div class="relative group mt-2 sm:mt-0">
        <button aria-expanded="false" aria-haspopup="true" class="bg-[#c63c28] text-white text-xs sm:text-sm px-3 py-2 rounded flex items-center gap-2 group-hover:bg-[#b03522] transition-colors">
            @if($warga->gambar)
            <img src="{{ asset('storage/' . $warga->gambar) }}" width="50" height="50" alt="Gambar Warga">
            @else
                    Tidak Ada Gambar
            @endif            
            <div class="text-left leading-tight">
                <div class="text-[10px] sm:text-xs">
                    Selamat Datang,
                </div>
                @if(session()->has('warga_id'))
                    <span class="mr-2 d-none d-lg-inline text-white-600 small">
                        {{ $warga->nama }}
                    </span>
                @else
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Guest</span>
                @endif
            </div>
            <i class="fas fa-caret-down text-xs"></i>
        </button>
        <div class="absolute right-0 mt-1 w-28 bg-white shadow-lg rounded-b select-none opacity-0  group-hover:opacity-100 group-hover:visible transition-opacity z-10">
            <form id="logout-form" action="{{ route('warga.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a class="block px-3 py-2 text-xs text-[#c63c28] hover:bg-[#f7d9d6] rounded-b" S>
                    <button class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </button>
                </a>
        </div>
    </div>
    
  </header>
  <!-- Red underline bar below header -->
  <div class="bg-[#c63c28] h-1">
  </div>
  <!-- Main content -->
  <main class="max-w-7xl mx-auto px-4 sm:px-10 py-6 grid grid-cols-1 lg:grid-cols-12 gap-8">
    <!-- Left form -->
    <form action="{{ route('aspirasi.store') }}" method="POST" enctype="multipart/form-data" class="lg:col-span-7 space-y-4 text-xs sm:text-sm">
        @csrf
    
        <div class="flex items-center gap-3">
            <label class="w-20 font-extrabold text-xs" for="telpon">Telepon</label>
            <input class="border border-[#c43c2f] rounded px-2 py-1 w-full placeholder:text-[#999999] focus:outline-none focus:ring-1 focus:ring-[#c43c2f]" id="telpon" name="telpon" placeholder="Isi dengan nomor telepon" value="{{ old('telpon') }}" required>
        </div>
    
        <div class="flex items-center gap-1">
            <label class="w-20 font-extrabold text-xs">RT/RW</label>
            <input class="border border-[#c43c2f] rounded px-3 py-1 w-14 placeholder:text-[#999999] focus:outline-none focus:ring-1 focus:ring-[#c43c2f]" name="rt" placeholder="RT" value="{{ old('rt') }}" required>
            <input class="border border-[#c43c2f] rounded px-3 py-1 w-14 placeholder:text-[#999999] focus:outline-none focus:ring-1 focus:ring-[#c43c2f]" name="rw" placeholder="RW" value="{{ old('rw') }}" required>
        </div>
    
        <div class="flex items-center gap-3">
            <label class="w-20 font-extrabold text-xs" for="kategori">Kategori</label>
            <select name="kategori" required class="border border-[#c43c2f] rounded px-2 py-1 w-full focus:outline-none focus:ring-1 focus:ring-[#c43c2f]">
                <option value="">-- Pilih Kategori --</option>
                <option value="Perekonomian dan Kesejahteraan Sosial" {{ old('kategori') == 'Perekonomian dan Kesejahteraan Sosial' ? 'selected' : '' }}>Perekonomian dan Kesejahteraan Sosial</option>
                <option value="Pembangunan" {{ old('kategori') == 'Pembangunan' ? 'selected' : '' }}>Pembangunan</option>
                <option value="Ketenteraman dan Ketertiban Umum" {{ old('kategori') == 'Ketenteraman dan Ketertiban Umum' ? 'selected' : '' }}>Ketenteraman dan Ketertiban Umum</option>
            </select>
        </div>
    
        <div class="flex items-start gap-3">
            <label class="w-20 font-extrabold text-xs pt-1" for="isi">Isi</label>
            <textarea class="border border-[#c43c2f] rounded px-2 py-1 w-full placeholder:text-[#999999] focus:outline-none focus:ring-1 focus:ring-[#c43c2f]" id="isi" name="isi" rows="6" required>{{ old('isi') }}</textarea>
        </div>
    
        <div class="flex items-center gap-3">
            <label class="w-20 font-extrabold text-xs" for="gambar">Lampiran</label>
            <input accept=".jpg,.jpeg,.png" class="border border-[#c43c2f] rounded px-2 py-1 text-xs w-full sm:w-96" id="gambar" name="gambar" type="file">
        </div>
    
        <p class="text-xs text-gray-600">*) Format .jpg, .jpeg, .png | Ukuran Maksimal 2MB</p>
    
        <button class="bg-yellow-400 text-[#c43c2f] font-extrabold text-sm px-4 py-2 rounded" type="submit">Kirim Aspirasi</button>
    </form>    
    <!-- Right side content -->
    <aside class="lg:col-span-5 flex flex-col items-center gap-4">
     <h2 class="bg-[#c43c2f] text-white font-extrabold text-xl sm:text-2xl px-6 py-2 rounded select-none" style="font-family: open sans">
      ASPIRASI ANDA
     </h2>
     <img alt="Gambar Tambahan" class="rounded-sm" height="250" src="{{ asset('img/admin.png') }}" width="300"/>
    </aside>
   </main>
  <!-- Footer with logos -->
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
@if(session()->has('warga_id'))
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                {{ $warga->nama }}
                            </span>
                            <img class="img-profile rounded-circle" src="{{ asset('img/user.jpg') }}">
                        @else
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Guest</span>
                            <img class="img-profile rounded-circle" src="{{ asset('img/user.jpg') }}">
                        @endif

<form id="logout-form" action="{{ route('warga.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <button class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </button>

-->


<!-- 
<form action="{{ route('aspirasi.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-4">
        @csrf
      
        <input name="telpon" value="{{ old('telpon') }}" placeholder="Nomor Telepon" required class="rounded-md px-4 py-2 border">
        <input name="rt" value="{{ old('rt') }}" placeholder="RT" required class="rounded-md px-4 py-2 border">
        <input name="rw" value="{{ old('rw') }}" placeholder="RW" required class="rounded-md px-4 py-2 border">
    
        <select name="kategori" required class="rounded-md px-4 py-2 border">
            <option value="">-- Pilih Kategori --</option>
            <option value="Perekonomian dan Kesejahteraan Sosial">Perekonomian dan Kesejahteraan Sosial</option>
            <option value="Pembangunan">Pembangunan</option>
            <option value="Ketenteraman dan Ketertiban Umum">Ketenteraman dan Ketertiban Umum</option>
        </select>
    
        <textarea name="isi" placeholder="Isi Aspirasi" required class="rounded-md px-4 py-2 border">{{ old('isi') }}</textarea>
        <input name="gambar" type="file" class="mt-2">
    
        <button type="submit" class="bg-blue-500 text-white rounded px-4 py-2">Kirim Aspirasi</button>
    </form>
-->