<html lang="en">
   <head>
      <meta charset="utf-8"/>
      <meta content="width=device-width, initial-scale=1" name="viewport"/>
      <title>
         Kelurahan Peterongan
      </title>
      <script src="https://cdn.tailwindcss.com"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&amp;display=swap" rel="stylesheet"/>
      <style>
         body {
         font-family: 'Open Sans', sans-serif;
         }
      </style>
   </head>
   <body class="bg-white text-gray-700 text-sm leading-relaxed">
      <!-- Top Bar -->
      <div class="bg-[#b72a1a] text-white text-xs flex justify-between items-center px-4 py-1">
         <div class="flex items-center space-x-2">
            <i class="fas fa-phone-alt">
            </i>
            <span>
            024-671-2877
            </span>
            <span>
            </span>
            <i class="fas fa-envelope">
            </i>
            <span>
            kelpeterongan@gmail.com
            </span>
         </div>
         <form action="#" class="flex items-center" method="GET" role="search">
            <input aria-label="Search" class="text-xs rounded-sm px-2 py-0.5 text-black" name="q" placeholder="Search..." type="search"/>
            <button class="ml-1 text-white hover:text-gray-300" type="submit">
            <i class="fas fa-search">
            </i>
            </button>
         </form>
      </div>
      <!-- Header with logo and nav -->
      <header class="border-b border-gray-200">
         <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center md:items-start justify-between px-4 py-2">
            <div class="flex items-center space-x-3">
               <img alt="Logo Kelurahan Peterongan with shield and text" class="h-12 w-auto" height="60" src="{{ asset('img/KelurahanPeterogan.png') }}" width="80"/>
            </div>
            <nav class="mt-2 md:mt-0 text-xs text-gray-600 flex flex-wrap justify-center space-x-4 md:space-x-6 font-semibold">
               <a class="hover:text-[#b72a1a]" href="#">
               Beranda
               </a>
               <a class="hover:text-[#b72a1a]" href="#">
               Profil Kelurahan
               </a>
               <a class="hover:text-[#b72a1a]" href="#">
               Berita
               </a>
               <a class="hover:text-[#b72a1a]" href="#">
               Layanan
               </a>
               <a class="hover:text-[#b72a1a]" href="#">
               Kelembagaan
               </a>
               <a class="hover:text-[#b72a1a]" href="#">
               Pemerintahan
               </a>
               <a class="hover:text-[#b72a1a]" href="#">
               Laporan Online
               </a>
               <a class="hover:text-[#b72a1a]" href="#">
               Tanggap Darurat
               </a>
            </nav>
         </div>
      </header>
      <!-- Banner -->
      <section class="max-w-7xl mx-auto px-4 mt-2">
         <img alt="Banner with emergency call 112, 24 hours service, and cartoon character of a woman in hijab with text Hai, Aku Savira Semarang Virtual Assistance" class="w-full h-auto object-contain" height="200" src="{{ asset('img/gambar walikota dan wakil.svg') }}" width="1200"/>
      </section>
      <!-- Welcome Text -->
      <section class="max-w-3xl mx-auto px-4 mt-4 text-center">
         <div class=" text-[25px] text-center mb20">
            <h1 itemprop="name">SELAMAT DATANG DI WEBSITE KELURAHAN PETERONGAN  </h1>
         </div>
         <h2>
            <marquee behavior="alternate" class="text-[20px];" style="color:#b72a1a;">Selamat Datang di Website Portal Kelurahan Peterongan<span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span></marquee>
         </h2>
      </section>
      <!-- Layanan Kelurahan Section -->
      <section class="max-w-4xl mx-auto px-4 mt-4">
         <div class="header" style="background-color: #c70909; color: #ffffff; padding: 10px; font-size: 1.5em; font-weight: bold; border-radius: 20px; margin: 10px auto; text-align: center; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.25);">Layanan Kelurahan</div>
         <div class="border border-[#b72a1a] rounded-md p-3 bg-white">
            <h3 class="text-center font-semibold text-xl mb-3">
               Layanan Kelurahan Peterongan Kota Semarang
            </h3>
            <div class="grid grid-cols-5 sm:grid-cols-9 gap-4 justify-center">
               <!-- Each item -->
               <div class="flex flex-col items-center text-[8px] text-center">
                  <img alt="Icon representing KTP service" class="mb-1" height="auto" src="{{ asset('img/bt-ktp.png') }}" width="auto"/>
                  <span>
                  KTP
                  </span>
               </div>
               <div class="flex flex-col items-center text-[8px] text-center">
                  <img alt="Icon representing KK service" class="mb-1" height="auto" src="{{ asset('img/bt-kk.png') }}" width="auto"/>
                  <span>
                  KK
                  </span>
               </div>
               <div class="flex flex-col items-center text-[8px] text-center">
                  <img alt="Icon representing Akta Lahir service" class="mb-1" height="auto" src="{{ asset('img/bt-akta-lahir.png') }}" width="auto"/>
                  <span>
                  Akta Lahir
                  </span>
               </div>
               <div class="flex flex-col items-center text-[8px] text-center">
                  <img alt="Icon representing Akta Kematian service" class="mb-1" src="{{ asset('img/bt-akta-kem.png') }}" style="height: auto; width: auto;">
                  <span>
                  Akta Kematian
                  </span>
               </div>
               <div class="flex flex-col items-center text-[8px] text-center">
                  <img alt="Icon representing Nikah service" class="mb-1" height="auto" src="{{ asset('img/bt-nikah.png') }}" width="auto"/>
                  <span>
                  Nikah
                  </span>
               </div>
               <div class="flex flex-col items-center text-[8px] text-center">
                  <img alt="Icon representing SKCK service" class="mb-1" height="auto" src="{{ asset('img/bt-skck.png') }}" width="auto"/>
                  <span>
                  SKCK
                  </span>
               </div>
               <div class="flex flex-col items-center text-[8px] text-center">
                  <img alt="Icon representing Penduduk service" class="mb-1" height="auto" src="{{ asset('img/bt-pindah.png') }}" width="auto"/>
                  <span>
                  Pindah
                  </span>
               </div>
               <div class="flex flex-col items-center text-[8px] text-center">
                  <img alt="Icon representing PBB service" class="mb-1" height="auto" src="{{ asset('img/bt-pbb.png') }}" width="auto"/>
                  <span>
                  PBB
                  </span>
               </div>
               <div class="flex flex-col items-center text-[8px] text-center">
                  <a href="/warga/login">
                    <img alt="Icon representing Aspirasi service" class="mb-1" height="auto" src="{{ asset('img/bt-aspirasi.png') }}" width="auto"/>
                    <span>
                    Aspirasi
                    </span>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <!-- Sambutan Lurah Section -->
      <section class="max-w-4xl mx-auto px-4 mt-6">
         <div class="header" style="background-color: #c70909; color: #ffffff; padding: 10px; font-size: 1.5em; font-weight: bold; border-radius: 20px; margin: 10px auto; text-align: center; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.25);">Sambutan Lurah</div>
         <div class="border border-[#b72a1a] rounded-md p-3 bg-white text-[14px] leading-tight">
            <p style="text-align:justify;">
               <b>SAMBUTAN LURAH PETERONGAN</b>
            </p>
            </br>
            <p style="text-align:justify;">
               Assalamualaikum Warahmatullahi Wabarakaatuh
            </p>
            <br>
            <p sytle="text-align:justify;">
               "Pertama-tama kami panjatkan puji syukur atas limpahan rahmat-rahmatNya, sehingga situs web&nbsp; 
               <a href="https://peterongan.semarangkota.go.id" style="color:#b72a1a; text-align:justify;">www.peterongan.semarangkota.go.id</a>&nbsp;ini dapat kami selesaikan dengan baik. Tak lupa kami ucapkan terima kasih kepada jajaran Dinas Komunikasi, Informatika, Statistika Dan Persandian Kota Semarang&nbsp;yang membantu kami sehingga situs web ini tersedia."
            </p>
            <br>
            <p>
               "Situs web&nbsp;<a href="https://peterongan.semarangkota.go.id" style="color:#b72a1a">www.peterogan.semarangkota.go.id&nbsp;</a>
               ini sebagai wujud komitmen kami dalam memberikan informasi seluas-seluasnya kepada masyarakat.&nbsp;&nbsp; Pada situs web ini kami isi dengan berita-berita seputar wilayah Kelurahan Peterongan.&nbsp; Tak kalah menariknya, di situs web ini senantiasa kami update&nbsp;info-info terbaru dan penting yang perlu siketahui olleh masyarakat.&nbsp; Oleh karena itu, masyarakat perlu sering melihat situs web ini agar tidak ketinggalan informasi penting khususnya untuk layanan administrasi di Kelurahan Peterongan. Kritik dan saran selalu kami nantikan, agar penyajian informasi di situs web ini dapat memberikan manfaat yang sebesar-besarnya bagi masyarakat."
            </p>
            <br>
            <p style="text-align:justify;">
               Wassalamualaikum Warahmatullahi Wabarakaatuh
            </p>
            <br>
            <p style="text-align:justify;">
               <ins>
                  <span style="font-size: 16px;">
                     <strong>ERNAWATI, SH</strong>
                  </span>
               </ins>
            </p>
         </div>
      </section>

      <!-- Start Halaman Aspirasi -->
      <section class="max-w-4xl mx-auto px-4 mt-6">
         <!-- Header Merah -->
         <div class="bg-[#c70909] text-white text-center text-xl font-bold rounded-xl py-2 shadow-md mb-4">
            Aspirasi
         </div>

         <!-- Kontainer Isi -->
         <div class="border border-[#b72a1a] rounded-lg p-4 bg-white margin: 10px auto">
            <div class="flex flex-col sm:flex-row items-center sm:items-start gap-4">
               <div class="w-full sm:w-1/2 flex justify-center">
                  <img src="{{ asset('img/gambar-animasi-selamat-datang-8.gif') }}" alt="Karakter Kartun" class="w-full max-w-[250px] h-auto" />
               </div>
               <div class="w-full sm:w-1/2 text-center sm:text-left font-bold text-[20px] leading-snug">
                  <p class="text-[#000] mb-3 mt-10 uppercase tracking-wide">
                     Ayo sampaikan aspirasimu kepada kami! Suara Anda berharga untuk mewujudkan lingkungan yang lebih baik, adil, dan sejahtera.
                  </p>
                  <button class="bg-yellow-400 hover:bg-yellow-500 text-[#b02a1f] font-bold text-sm rounded px-4 py-2 shadow">
                     <a href="/warga/login">Daftar Aspirasi</a>
                  </button>
               </div>
            </div>
         </div>
      </section>
      <!-- End Halaman Aspirasi -->

      <!-- Start Footer -->
      <br>
      <footer class="bg-[#c43c2f] text-white">
         <div class="max-w-7xl mx-auto px-4 sm:px-10 py-6 flex flex-wrap justify-center sm:justify-between items-center gap-6">
            <div class="col-md-3">
               <a href="https://semarangkota.go.id/" target="_blank">
                  <img src="https://bringin.semarangkota.go.id/medias/media/big/1.png" width="120px" height="60px">
               </a>
            </div>
            <div class="col-md-3">
                <a href="https://smartcity.semarangkota.go.id/" target="_blank">
                   <img src="https://bringin.semarangkota.go.id/medias/media/big/3.png" width="120px" height="60px">
                </a>
            </div>
            <div class="col-md-3">
                <a href="https://data.semarangkota.go.id/" target="_blank">
                   <img src="https://bringin.semarangkota.go.id/medias/media/big/logo (4).png" width="120px" height="60px">
               </a>
            </div>
            <a href="https://ppid.semarangkota.go.id/" target="_blank">
               <img src="https://bringin.semarangkota.go.id/medias/media/big/2 (1).png" width="120px" height="60px">
            </a>
         </div>
         <div class="bg-black text-white text-xs sm:text-sm flex justify-between items-center px-4 sm:px-10 py-2">
            <div class="col-md-6">
                <p>
                   © 2025
                   KELURAHAN PETERONGAN All rights reserved
                </p>
            </div>
            <div class="flex items-center gap-4">
                <a class="flex items-center gap-1 hover:underline" href="/legal-notices">
                <i class="fas fa-rss">
                </i>
                Legal notices
                </a>
                <a class="hover:underline" href="/sitemap">
                Sitemap
                </a>
                <a class="hover:underline" href="#sumber-daya-manusia">
                Sumber Daya Manusia
                </a>
            </div>
         </div>
      </footer>
      <!-- End Footer -->
      <!-- Scroll to top arrow on bottom right -->
      <button aria-label="Scroll to top" class="fixed bottom-2 right-2 bg-[#b72a1a] text-white text-xs rounded px-1 py-0.5" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
      <i class="fas fa-chevron-up">
      </i>
      </button>
   </body>
</html>