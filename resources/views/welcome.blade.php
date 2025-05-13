<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Daftar Aspirasi
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: "Open Sans", sans-serif;
    }
  </style>
 </head>
 <body class="bg-white text-black">
  <!-- Top red bar with contact info -->
  <div class="bg-[#c0392b] text-white text-xs sm:text-sm flex justify-center sm:justify-start gap-4 sm:gap-8 px-2 sm:px-6 py-1 items-center">
   <div class="flex items-center gap-1">
    <i class="fas fa-phone-alt text-[10px] sm:text-xs">
    </i>
    <span>
     (024) 8312240
    </span>
   </div>
   <div class="flex items-center gap-1">
    <i class="fas fa-envelope text-[10px] sm:text-xs">
    </i>
    <span>
     kelurahanpeterongan18@gmail.com
    </span>
   </div>
  </div>
  <!-- Navigation bar -->
  <nav class="bg-white flex flex-wrap items-center justify-between px-2 sm:px-6 py-2 shadow-sm">
   <div class="flex items-center gap-2">
     <img alt="Logo Kelurahan Peterongan with shield and text" class="h-12 w-auto" height="60" src="{{ asset('img/KelurahanPeterogan.png') }}" width="80"/>
    </div>
   </div>
   <ul class="hidden sm:flex gap-6 text-xs sm:text-sm text-gray-700 font-normal select-none">
    <li>
     <a class="hover:text-[#c0392b]" href="#">
      Beranda
     </a>
    </li>
    <li>
     <a class="hover:text-[#c0392b]" href="#">
      Profil Kelurahan
     </a>
    </li>
    <li>
     <a class="hover:text-[#c0392b]" href="#">
      Berita
     </a>
    </li>
    <li>
     <a class="hover:text-[#c0392b]" href="#">
      Layanan
     </a>
    </li>
    <li>
     <a class="hover:text-[#c0392b]" href="#">
      Aspirasi
     </a>
    </li>
    <li>
     <a class="hover:text-[#c0392b]" href="#">
      Kelembagaan
     </a>
    </li>
    <li>
     <a class="hover:text-[#c0392b]" href="#">
      Pemberdayaan
     </a>
    </li>
    <li>
     <a class="hover:text-[#c0392b]" href="#">
      Kampung Tematik
     </a>
    </li>
   </ul>
   <button class="hidden sm:block bg-[#c0392b] text-white font-bold rounded-lg px-6 py-2 hover:bg-[#a83227] transition" type="button">
    LOGIN
   </button>
   <div class="sm:hidden">
    <button aria-label="Open menu" class="text-gray-600 hover:text-[#c0392b]">
     <i class="fas fa-bars fa-lg">
     </i>
    </button>
   </div>
  </nav>
  <!-- Yellow bar with title and breadcrumb -->
  <div class="bg-[#f1c40f] shadow-md flex flex-col sm:flex-row justify-between items-center px-4 sm:px-10 py-3">
   <h1 class="text-white text-xl sm:text-2xl font-light mb-1 select-none w-full sm:w-auto mb-2 sm:mb-0">
    Daftar Aspirasi
   </h1>
   <div class="text-white text-xs sm:text-sm font-light select-none w-full sm:w-auto text-right">
    Beranda &gt; Aspirasi &gt; Daftar Aspirasi
   </div>
  </div>
  <!-- Table container -->
  <div class="overflow-x-auto mt-4 px-2 sm:px-10 py-6">
   <table class="min-w-full border-collapse border border-gray-300 text-[10px] sm:text-xs">
    <thead>
     <tr class="bg-[#c0392b] text-white text-center font-semibold select-none">
      <th class="border border-[#a83227] px-2 py-1">
       NIK
      </th>
      <th class="border border-[#a83227] px-2 py-1">
       Nama
      </th>
      <th class="border border-[#a83227] px-2 py-1">
       Email
      </th>
      <th class="border border-[#a83227] px-2 py-1">
       Telepon
      </th>
      <th class="border border-[#a83227] px-2 py-1">
       RT
      </th>
      <th class="border border-[#a83227] px-2 py-1">
       RW
      </th>
      <th class="border border-[#a83227] px-2 py-1">
       Judul
      </th>
      <th class="border border-[#a83227] px-2 py-1">
       Isi
      </th>
      <th class="border border-[#a83227] px-2 py-1">
       Lampiran
      </th>
      <th class="border border-[#a83227] px-2 py-1">
       Status
      </th>
     </tr>
    </thead>
    <tbody class="text-left text-gray-900">
     <tr class="border border-gray-300">
      <td class="border border-gray-300 px-2 py-1 text-center font-mono">
       111111111111
      </td>
      <td class="border border-gray-300 px-2 py-1">
       Lindsey Stroud
      </td>
      <td class="border border-gray-300 px-2 py-1">
       lindsey.stroud@gmail.com
      </td>
      <td class="border border-gray-300 px-2 py-1">
       082391138746
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center">
       04
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center">
       04
      </td>
      <td class="border border-gray-300 px-2 py-1">
       Technology Department
      </td>
      <td class="border border-gray-300 px-2 py-1">
       Head of Technology
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center font-semibold">
       FOTO
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center">
       <button class="bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-semibold rounded-md px-3 py-1 flex items-center gap-1 mx-auto" type="button">
        <i class="fas fa-sync-alt">
        </i>
        Proses
       </button>
      </td>
     </tr>
     <tr class="border border-gray-300">
      <td class="border border-gray-300 px-2 py-1 text-center font-mono">
       111111111111
      </td>
      <td class="border border-gray-300 px-2 py-1">
       Sarah brown
      </td>
      <td class="border border-gray-300 px-2 py-1">
       sarah.brown@gmail.com
      </td>
      <td class="border border-gray-300 px-2 py-1">
       082146528756
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center">
       01
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center">
       01
      </td>
      <td class="border border-gray-300 px-2 py-1">
       Technology Department
      </td>
      <td class="border border-gray-300 px-2 py-1">
       Head of Technology
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center font-semibold">
       FOTO
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center">
       <button class="bg-green-700 hover:bg-green-800 text-white text-xs sm:text-sm font-semibold rounded-md px-3 py-1 flex items-center gap-1 mx-auto" type="button">
        <i class="fas fa-check-circle">
        </i>
        Selesai
       </button>
      </td>
     </tr>
     <tr class="border border-gray-300">
      <td class="border border-gray-300 px-2 py-1 text-center font-mono">
       111111111111
      </td>
      <td class="border border-gray-300 px-2 py-1">
       Micheal Owen
      </td>
      <td class="border border-gray-300 px-2 py-1">
       michael.owen@gmail.com
      </td>
      <td class="border border-gray-300 px-2 py-1">
       089174659832
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center">
       02
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center">
       02
      </td>
      <td class="border border-gray-300 px-2 py-1">
       Technology Department
      </td>
      <td class="border border-gray-300 px-2 py-1">
       Head of Technology
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center font-semibold">
       FOTO
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center">
       <button class="bg-orange-600 hover:bg-orange-700 text-white text-xs sm:text-sm font-semibold rounded-md px-3 py-1 flex items-center gap-1 mx-auto" type="button">
        <i class="fas fa-times-circle">
        </i>
        Belum Tertangani
       </button>
      </td>
     </tr>
     <tr class="border border-gray-300">
      <td class="border border-gray-300 px-2 py-1 text-center font-mono">
       111111111111
      </td>
      <td class="border border-gray-300 px-2 py-1">
       Mary Jane
      </td>
      <td class="border border-gray-300 px-2 py-1">
       mary.jane@gmail.com
      </td>
      <td class="border border-gray-300 px-2 py-1">
       085128932900
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center">
       03
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center">
       03
      </td>
      <td class="border border-gray-300 px-2 py-1">
       Technology Department
      </td>
      <td class="border border-gray-300 px-2 py-1">
       Head of Technology
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center font-semibold">
       FOTO
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center">
       <button class="bg-green-700 hover:bg-green-800 text-white text-xs sm:text-sm font-semibold rounded-md px-3 py-1 flex items-center gap-1 mx-auto" type="button">
        <i class="fas fa-check-circle">
        </i>
        Selesai
       </button>
      </td>
     </tr>
     <tr class="border border-gray-300">
      <td class="border border-gray-300 px-2 py-1 text-center font-mono">
       111111111111
      </td>
      <td class="border border-gray-300 px-2 py-1">
       Peter doodle
      </td>
      <td class="border border-gray-300 px-2 py-1">
       peter.doodle@gmail.com
      </td>
      <td class="border border-gray-300 px-2 py-1">
       082174563328
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center">
       05
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center">
       05
      </td>
      <td class="border border-gray-300 px-2 py-1">
       Technology Department
      </td>
      <td class="border border-gray-300 px-2 py-1">
       Head of Technology
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center font-semibold">
       FOTO
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center">
       <button class="bg-green-700 hover:bg-green-800 text-white text-xs sm:text-sm font-semibold rounded-md px-3 py-1 flex items-center gap-1 mx-auto" type="button">
        <i class="fas fa-check-circle">
        </i>
        Selesai
       </button>
      </td>
     </tr>
     <tr class="border border-gray-300">
      <td class="border border-gray-300 px-2 py-1 text-center font-mono">
       111111111111
      </td>
      <td class="border border-gray-300 px-2 py-1">
       Joe Taslim
      </td>
      <td class="border border-gray-300 px-2 py-1">
       joe.taslim@gmail.com
      </td>
      <td class="border border-gray-300 px-2 py-1">
       082174563364
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center">
       03
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center">
       01
      </td>
      <td class="border border-gray-300 px-2 py-1">
       Technology Department
      </td>
      <td class="border border-gray-300 px-2 py-1">
       Head of Technology
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center font-semibold">
       FOTO
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center">
       <button class="bg-green-700 hover:bg-green-800 text-white text-xs sm:text-sm font-semibold rounded-md px-3 py-1 flex items-center gap-1 mx-auto" type="button">
        <i class="fas fa-check-circle">
        </i>
        Selesai
       </button>
      </td>
     </tr>
     <tr class="border border-gray-300">
      <td class="border border-gray-300 px-2 py-1 text-center font-mono">
       111111111111
      </td>
      <td class="border border-gray-300 px-2 py-1">
       Bayu Skak
      </td>
      <td class="border border-gray-300 px-2 py-1">
       bayu.skak@gmail.com
      </td>
      <td class="border border-gray-300 px-2 py-1">
       082179383328
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center">
       06
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center">
       01
      </td>
      <td class="border border-gray-300 px-2 py-1">
       Technology Department
      </td>
      <td class="border border-gray-300 px-2 py-1">
       Head of Technology
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center font-semibold">
       FOTO
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center">
       <button class="bg-orange-600 hover:bg-orange-700 text-white text-xs sm:text-sm font-semibold rounded-md px-3 py-1 flex items-center gap-1 mx-auto" type="button">
        <i class="fas fa-times-circle">
        </i>
        Belum Tertangani
       </button>
      </td>
     </tr>
     <tr class="border border-gray-300">
      <td class="border border-gray-300 px-2 py-1 text-center font-mono">
       111111111111
      </td>
      <td class="border border-gray-300 px-2 py-1">
       Rudy Salim
      </td>
      <td class="border border-gray-300 px-2 py-1">
       rudy.salim@gmail.com
      </td>
      <td class="border border-gray-300 px-2 py-1">
       082175463328
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center">
       03
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center">
       04
      </td>
      <td class="border border-gray-300 px-2 py-1">
       Technology Department
      </td>
      <td class="border border-gray-300 px-2 py-1">
       Head of Technology
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center font-semibold">
       FOTO
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center">
       <button class="bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-semibold rounded-md px-3 py-1 flex items-center gap-1 mx-auto" type="button">
        <i class="fas fa-sync-alt">
        </i>
        Proses
       </button>
      </td>
     </tr>
     <tr class="border border-gray-300">
      <td class="border border-gray-300 px-2 py-1 text-center font-mono">
       111111111111
      </td>
      <td class="border border-gray-300 px-2 py-1">
       Azizi Asedel
      </td>
      <td class="border border-gray-300 px-2 py-1">
       azizi.asadel@gmail.com
      </td>
      <td class="border border-gray-300 px-2 py-1">
       08954563328
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center">
       02
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center">
       03
      </td>
      <td class="border border-gray-300 px-2 py-1">
       Technology Department
      </td>
      <td class="border border-gray-300 px-2 py-1">
       Head of Technology
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center font-semibold">
       FOTO
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center">
       <button class="bg-orange-600 hover:bg-orange-700 text-white text-xs sm:text-sm font-semibold rounded-md px-3 py-1 flex items-center gap-1 mx-auto" type="button">
        <i class="fas fa-times-circle">
        </i>
        Belum Tertangani
       </button>
      </td>
     </tr>
     <tr class="border border-gray-300">
      <td class="border border-gray-300 px-2 py-1 text-center font-mono">
       111111111111
      </td>
      <td class="border border-gray-300 px-2 py-1">
       Tomy Purba
      </td>
      <td class="border border-gray-300 px-2 py-1">
       tomy.purba@gmail.com
      </td>
      <td class="border border-gray-300 px-2 py-1">
       082174563729
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center">
       01
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center">
       01
      </td>
      <td class="border border-gray-300 px-2 py-1">
       Technology Department
      </td>
      <td class="border border-gray-300 px-2 py-1">
       Head of Technology
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center font-semibold">
       FOTO
      </td>
      <td class="border border-gray-300 px-2 py-1 text-center">
       <button class="bg-green-700 hover:bg-green-800 text-white text-xs sm:text-sm font-semibold rounded-md px-3 py-1 flex items-center gap-1 mx-auto" type="button">
        <i class="fas fa-check-circle">
        </i>
        Selesai
       </button>
      </td>
     </tr>
    </tbody>
   </table>
  </div>
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


<button class="bg-green-700 hover:bg-green-800 text-white text-xs sm:text-sm font-semibold rounded-md px-3 py-1 flex items-center gap-1 mx-auto" type="button">
  <i class="fas fa-check-circle">
  </i>
  Selesai
 </button>
 
 <button class="bg-orange-600 hover:bg-orange-700 text-white text-xs sm:text-sm font-semibold rounded-md px-3 py-1 flex items-center gap-1 mx-auto" type="button">
  <i class="fas fa-times-circle">
  </i>
  Belum Tertangani
 </button>

 <button class="bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-semibold rounded-md px-3 py-1 flex items-center gap-1 mx-auto" type="button">
  <i class="fas fa-sync-alt">
  </i>
  Proses
 </button>