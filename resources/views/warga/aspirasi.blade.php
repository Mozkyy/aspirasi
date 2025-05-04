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
       <a class="hover:underline" href="/warga/aspirasi">
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
                     <img alt="User profile icon silhouette" class="rounded" height="30" src="https://storage.googleapis.com/a1aa/image/595d2951-227e-4511-2701-9dee643af4c9.jpg" width="30"/>
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
  <main class="max-w-7xl mx-auto px-4 py-6">
   <h1 class="inline-block bg-[#c63c28] text-white font-bold text-lg sm:text-xl px-5 py-2 rounded select-none">
    DAFTAR ASPIRASI MU
   </h1>
   <div class="overflow-x-auto mt-4">
        <div>
            <div>
                <table border="1" cellpadding="10">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Telepon</th>
                                <th>RT</th>
                                <th>RW</th>
                                <th>Kategori</th>
                                <th>Isi</th>
                                <th>Lampiran</th>
                                <th>Status </th>
                                <th>keterangan</th>
                                <th>Tanggal Dikirim </th>
                                <th>Tanggal Direspon </th>
                                <th>AKSI </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($show as $s)
                            <tr>
                                <td>{{ $s->warga->nama }}</td>
                                <td>{{ $s->telpon }}</td>
                                <td>{{ $s->rt }}</td>
                                <td>{{ $s->rw }}</td>
                                <td>{{ $s->kategori }}</td>
                                <td>{{ $s->isi }}</td>
                                <td>
                                @if($s->gambar)
                                    <img src="{{ asset('storage/' . $s->gambar) }}" width="80" height="80" alt="Lampiran">
                                @else
                                    Tidak Ada Gambar
                                @endif
                                </td>
                                <td>
                                    @if($s->status_proses === 'diajukan')
                                   <button class="bg-orange-600 hover:bg-orange-700 text-white text-xs sm:text-sm font-semibold rounded-md px-3 py-1 flex items-center gap-1 mx-auto" type="button">
                                       <i class="fas fa-times-circle"></i>
                                       Belum Tertangani
                                   </button>
                                   @elseif($s->status_proses === 'diterima_admin' || $s->status_proses === 'diterima_kasi' || $s->status_proses === 'diterima_lurah')
                                        <button class="bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-semibold rounded-md px-3 py-1 flex items-center gap-1 mx-auto" type="button">
                                        <i class="fas fa-sync-alt"></i>
                                        Proses
                                </button>
                               @elseif($s->status_proses === 'selesai')
                                <button class="bg-green-700 hover:bg-green-800 text-white text-xs sm:text-sm font-semibold rounded-md px-3 py-1 flex items-center gap-1 mx-auto" type="button">
                                    <i class="fas fa-check-circle">
                                    </i>
                                    Selesai
                                </button>
                               @else
                                   <span>Status Tidak Dikenal</span>
                               @endif
                                </td>
                                <td>{{ $s->status_proses }}</td>
                                <td>{{ $s->created_at }}</td>
                                <td>{{ $s->tanggal_respon }}</td>
                                <td>
                                    <form action="{{ route('aspirasi.destroy', $s->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus aspirasi ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="background: none; border: none; padding: 0;">
                                            <img src="{{ asset('img/hapus.png') }}" alt="delete" height="59" width="50">
                                        </button>
                                    </form>
                                </td>      
                            </tr>
                        @endforeach
                            </tbody>
                </table>
             </div>
        </div>
    </div>
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

-->