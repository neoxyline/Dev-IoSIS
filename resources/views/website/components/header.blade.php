<!-- Header -->

<header class="z-50 border-b-[1.5px] shadow-sm w-full sticky top-0 left-0 px-8 py-2 bg-white">

  <div class="mx-auto flex items-center">

    <a href="{{ route('beranda') }}" class="block w-1/4">

      <img 
          src="{{ asset('assets/images/logo/bbihp-min.png') }}"
          alt="logo BBIHPMM"
          class="w-[160px]"
      />

    </a>

    <div class="flex-1 px-8 flex items-center space-x-8">

      <!-- Navigasi -->

      <nav class="w-full flex items-center justify-end space-x-2">

        <!-- Beranda -->

        <div class="relative group">

          <a href="{{ route('beranda') }}" class="inline-block p-2 {{ Request::is('/') ? 'text-blue-600 bg-slate-100' : '' }} group-hover:bg-slate-100 group-hover:text-blue-600 rounded-md">Beranda</a>

        </div>

        <!-- Tentang Kami -->

        <div class="relative group">

          <span class="inline-block p-2 group-hover:bg-slate-100 group-hover:text-blue-600 rounded-md cursor-pointer">Tentang Kami</span>

          <div class="group-hover:block hidden absolute top-full left-0">

            <div class="bg-white rounded-md border-[1.5px] p-2 min-w-max flex flex-col mt-2">
  
              <a href="#" class="inline-block p-1 hover:text-blue-600 rounded-md">Sejarah</a>
  
              <a href="#" class="inline-block p-1 hover:text-blue-600 rounded-md">Visi & Misi</a>
  
              <a href="#" class="inline-block p-1 hover:text-blue-600 rounded-md break-keep">Struktur Organisasi</a>
  
              <a href="#" class="inline-block p-1 hover:text-blue-600 rounded-md break-keep">Tugas Fungsi</a>
  
              <a href="#" class="inline-block p-1 hover:text-blue-600 rounded-md break-keep">Kebijakan Mutu</a>
  
            </div>

          </div>


        </div>

        <!-- Layanan -->

        <div class="relative group">
          
          <span class="inline-block p-2 group-hover:bg-slate-100 group-hover:text-blue-600 rounded-md cursor-pointer">Layanan</span>

          <div class="group-hover:block hidden absolute top-full right-0">

            <div class="flex bg-white rounded-md border-[1.5px] p-2 min-w-max space-x-4 mt-2">

              <div class="flex flex-col">

                <a href="#" class="inline-block p-1 hover:text-blue-600 rounded-md">Pengujian Produk</a>

                <a href="#" class="inline-block p-1 hover:text-blue-600 rounded-md">Kalibrasi</a>

                <a href="#" class="inline-block p-1 hover:text-blue-600 rounded-md break-keep">Sertifikasi Produk</a>

                <a href="#" class="inline-block p-1 hover:text-blue-600 rounded-md break-keep">Inspeksi Teknis</a>

                <a href="#" class="inline-block p-1 hover:text-blue-600 rounded-md break-keep">Lembaga Pemeriksa Halal</a>

              </div>

              <div class="flex flex-col">

                <a href="#" class="inline-block p-1 hover:text-blue-600 rounded-md break-keep">Pendampingan Halal</a>

                <a href="#" class="inline-block p-1 hover:text-blue-600 rounded-md break-keep">Industri Hijau</a>

                <a href="#" class="inline-block p-1 hover:text-blue-600 rounded-md break-keep">Inkubator Bisnis Teknologi</a>

                <a href="#" class="inline-block p-1 hover:text-blue-600 rounded-md break-keep">Optimalisasi Pemanfaatan Teknologi</a>

                <a href="#" class="inline-block p-1 hover:text-blue-600 rounded-md break-keep">Pelatihan Teknis Industri</a>

              </div>

            </div>

          </div>

        </div>

        <!-- Publikasi -->

        <div class="relative group">
          
          <span class="inline-block p-2 group-hover:bg-slate-100 group-hover:text-blue-600 rounded-md cursor-pointer">Publikasi</span>

          <div class="group-hover:block hidden absolute top-full left-0">

            <div class="bg-white rounded-md border-[1.5px] p-2 min-w-max flex flex-col mt-2">

              <a href="#" class="inline-block p-1 hover:text-blue-600 rounded-md">Berita</a>

              <a href="#" class="inline-block p-1 hover:text-blue-600 rounded-md break-keep">Tarif Layanan</a>

              <a href="#" class="inline-block p-1 hover:text-blue-600 rounded-md break-keep">PPID</a>

              <a href="#" class="inline-block p-1 hover:text-blue-600 rounded-md break-keep">Kode Etik Pelayanan Publik</a>

            </div>

          </div>
        
        </div>

        <div>
          
          <span class="inline-block p-2 hover:bg-slate-100 hover:text-blue-600 rounded-md cursor-pointer">Kontak Kami</span>
        
        </div>

        <div>

          <span class="inline-block p-2 hover:bg-slate-100 hover:text-blue-600 rounded-md cursor-pointer"><i class="bi bi-search"></i></span>
        
        </div>

      </nav>

      <!-- User -->

      <div class="border-l-2 pl-4">

        <!-- belum terotentikasi -->

        <div class="flex items-center justify-center space-x-2 ">

          <button type="button" class="button-login px-4 py-[4px] bg-white text-blue-600 border-[1.5px] border-blue-600 font-bold rounded-md">Masuk</button>
  
          <a href="{{ route('daftar') }}" class="px-4 py-[4px] bg-blue-600 text-white border-[1.5px] border-blue-600 font-bold rounded-md">Daftar</a>

        </div>

        <!-- terotentikasi -->

        <!-- <div class="group relative">

          <button type="button" class="group-hover:bg-slate-100 rounded-md px-2 py-1 flex items-center space-x-2">

            <i class="bi bi-three-dots-vertical text-xl group-hover:text-blue-600"></i>
            <div class="w-8 h-8 bg-slate-200 border-[2px] shadow-sm rounded-md overflow-hidden"></div>

          </button>

          <div class="group-hover:block hidden absolute top-full right-0 ">

            <div class="mt-2 min-w-[200px] w-max bg-white border-[1.5px] shadow-sm rounded-md overflow-hidden">
  
              <a href="#" class="group/profil hover:bg-slate-100 flex items-center space-x-4 p-4 border-b-[1.5px] shadow-sm">
  
                <div class="w-14 h-14 bg-slate-200 border-[2px] shadow-sm rounded-md overflow-hidden"></div>
  
                <div class="flex flex-col space-y-0 group-hover/profil:text-blue-600">
  
                  <h5 class="font-bold">PT. Tonasa Tbk.</h5>
                  <span class="text-sm">tonasapangkep@gmail.com</span>
  
                </div>
  
              </a>
              
              <div class="p-4 flex flex-col">
  
                <a href="#" class="flex items-center space-x-2 rounded-md p-1 hover:bg-slate-100 hover:text-blue-600">
  
                  <div class="w-8 h-8 border-[1.5px] shadow-sm rounded-md flex justify-center items-center">
  
                    <i class="bi bi-house"></i>
                    
                  </div>
  
                  <span class="font-bold">Dashboard</span>
                
                </a>
  
                <a href="#" class="flex items-center space-x-2 rounded-md p-1 hover:bg-slate-100 hover:text-blue-600">
  
                  <div class="w-8 h-8 border-[1.5px] shadow-sm rounded-md flex justify-center items-center">
  
                    <i class="bi bi-person"></i>
                    
                  </div>
  
                  <span class="font-bold">Data Pengguna</span>
                
                </a>

                <a href="#" class="flex items-center space-x-2 rounded-md p-1 hover:bg-slate-100 hover:text-blue-600">
  
                  <div class="w-8 h-8 border-[1.5px] shadow-sm rounded-md flex justify-center items-center">
  
                    <i class="bi bi-box-arrow-right"></i>
                    
                  </div>
  
                  <span class="font-bold">Keluar</span>
                
                </a>

                
              </div>
  
            </div>

          </div>


        </div> -->


      </div>

    </div>

  </div>

</header>