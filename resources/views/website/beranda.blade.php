@extends('website.layouts.web')

@section('title', 'Beranda')

@section('style')

  <style>

    .dots-corousel {
      margin: 0 5px;
      z-index: 30;
      position:absolute;
      top:0;
      right:0;
      display:flex; 
      padding:8px;
    }

    .dots-corousel > * + * {
      margin-left: 0.5rem;
    }

    .dots-corousel li button {
      display:inline-block;
      height:0.5rem;
      width:0.5rem;
      border:1px solid rgb(203,213,225);
      filter: drop-shadow(0 1px 1px rgb(0 0 0 / 0.05));
      font-size:0.0rem;
      background-color:rgb(203,213,225);
      border-radius: 9999px;
    }

    .dots-corousel li.slick-active button {
      background-color: rgb(255,255,255);
    }

    .dots-layanan {
      margin: 0 5px;
      z-index: 30;
      padding:0;
      width:100%;
      display:flex; 
      justify-content:center;
      /* padding-top:16px; */
    }

    .dots-layanan > * + * {
      margin-left: 0.5rem;
    }

    .dots-layanan button {
      display:inline-block;
      height:0.5rem;
      width:0.5rem;
      font-size:0.0rem;
      filter: drop-shadow(0 1px 1px rgb(0 0 0 / 0.05));
      background-color:rgb(226,232,240);
      border-radius: 9999px;
    }

    .dots-layanan li button {
      display:inline-block;
      height:0.5rem;
      width:0.5rem;
      font-size:0.0rem;
      background-color: rgb(241,245,249);
      border-radius: 9999px;
    }

    .dots-layanan li.slick-active button {
      background-color:rgb(203,213,225);
    }

  </style>

@endsection

@section('content')

  <!-- Corousel -->

  <div class="group relative w-full aspect-[1280/320] border-[1.5px] shadow-sm flex items-center justify-center rounded-md">

    <div class="slider-corousel flex justify-center items-center h-full w-full overflow-hidden rounded-md">

      <div class="bg-blue-200">
        <div class="flex items-center justify-center w-full aspect-[1280/320]">1</div>
      </div>

      <div class="bg-red-200">
        <div class="flex items-center justify-center w-full aspect-[1280/320]">2</div>
      </div>

      <div class="bg-green-200">
        <div class="flex items-center justify-center w-full aspect-[1280/320]">3</div>
      </div>

    </div>

    <div class="absolute left-0 h-full flex items-center justify-center">

      <button class="slider-corousel-control-left group-hover:opacity-100 opacity-0 group-hover:-translate-x-1/2 translate-x-1/2 h-12 w-12 bg-white rounded-full flex items-center justify-center cursor-pointer hover:scale-110 transition duration-500 ease-in-out active:scale-100 border-[1.5px] shadow-sm"><i class="bi bi-chevron-left"></i></button>

    </div>

    <div class="absolute right-0 h-full flex items-center justify-center">

      <button class="slider-corousel-control-right group-hover:opacity-100 opacity-0 group-hover:translate-x-1/2 -translate-x-1/2 h-12 w-12 bg-white rounded-full flex items-center justify-center cursor-pointer hover:scale-110 transition duration-500 ease-in-out active:scale-100 border-[1.5px] shadow-sm"><i class="bi bi-chevron-right"></i></button>

    </div>

  </div>

  <!-- Layanan -->

  <div class="group relative w-full border-[1.5px] shadow-sm p-4 rounded-md flex flex-col space-y-4">

    <h2 class="font-bold text-2xl">Layanan Kami</h2>

    <div class="slider-layanan flex items-stretch justify-around flex-wrap px-8 space-x-4">

      <div class="px-4">

        <a href="#" class="group/item w-full aspect-[1/1] flex flex-col justify-start items-center space-y-2">

          <div class="flex items-center justify-center">

            <div class="h-[80px] w-[80px] rounded-md shadow-md border-[1.5px] flex items-center justify-center shadow-blue-200 group-hover/item:shadow-blue-400 transition-all duration-300">

              <i class="bi bi-droplet-fill text-4xl text-blue-400 group-hover/item:text-blue-600"></i>

            </div>

          </div>

          <div class="flex items-start justify-center">

            <h3 class="font-bold text-center group-hover/item:text-blue-600 transition-all duration-300">Pengujian Produk</h3>

          </div>

        </a>
      
      </div>

      <div class="px-4">

        <a href="#" class="group/item w-full aspect-[1/1] flex flex-col justify-start items-center space-y-2">

          <div class="flex items-center justify-center">

            <div class="h-[80px] w-[80px] rounded-md shadow-md border-[1.5px] flex items-center justify-center shadow-blue-200 group-hover/item:shadow-blue-400 transition-all duration-300">

              <i class="bi bi-rulers text-4xl text-blue-400 group-hover/item:text-blue-600"></i>

            </div>

          </div>

          <div class="flex items-start justify-center">

            <h3 class="font-bold text-center group-hover/item:text-blue-600 transition-all duration-300">Kalibrasi</h3>

          </div>

        </a>
      
      </div>

      <div class="px-4">

        <a href="#" class="group/item w-full aspect-[1/1] flex flex-col justify-start items-center space-y-2">

          <div class="flex items-center justify-center">

            <div class="h-[80px] w-[80px] rounded-md shadow-md border-[1.5px] flex items-center justify-center shadow-blue-200 group-hover/item:shadow-blue-400 transition-all duration-300">

              <i class="bi bi-clipboard2-check-fill text-4xl text-blue-400 group-hover/item:text-blue-600"></i>

            </div>

          </div>

          <div class="flex items-start justify-center">

            <h3 class="font-bold text-center group-hover/item:text-blue-600 transition-all duration-300">Sertifikasi Produk</h3>

          </div>

        </a>
      
      </div>

      <div class="px-4">

        <a href="#" class="group/item w-full aspect-[1/1] flex flex-col justify-start items-center space-y-2">

          <div class="flex items-center justify-center">

            <div class="h-[80px] w-[80px] rounded-md shadow-md border-[1.5px] flex items-center justify-center shadow-blue-200 group-hover/item:shadow-blue-400 transition-all duration-300">

              <i class="bi bi-file-earmark-check-fill text-4xl text-blue-400 group-hover/item:text-blue-600"></i>

            </div>

          </div>

          <div class="flex items-start justify-center">

            <h3 class="font-bold text-center group-hover/item:text-blue-600 transition-all duration-300">Inspeksi Teknis</h3>

          </div>

        </a>
      
      </div>

      <div class="px-4">

        <a href="#" class="group/item w-full aspect-[1/1] flex flex-col justify-start items-center space-y-2">

          <div class="flex items-center justify-center">

            <div class="h-[80px] w-[80px] aspect-square rounded-md shadow-md border-[1.5px] flex items-center justify-center shadow-blue-200 group-hover/item:shadow-blue-400 transition-all duration-300">

              <i class="bi bi-shield-fill-check text-4xl text-blue-400 group-hover/item:text-blue-600"></i>

            </div>

          </div>

          <div class="flex items-start justify-center">

            <h3 class="font-bold text-center group-hover/item:text-blue-600 transition-all duration-300">Lembaga Pemeriksa Halal</h3>

          </div>

        </a>
      
      </div>

      <div class="px-4">

        <a href="#" class="group/item w-full aspect-[1/1] flex flex-col justify-start items-center space-y-2">

          <div class="flex items-center justify-center">

            <div class="h-[80px] w-[80px] aspect-square rounded-md shadow-md border-[1.5px] flex items-center justify-center shadow-blue-200 group-hover/item:shadow-blue-400 transition-all duration-300">

              <i class="bi bi-chat-right-quote-fill text-4xl text-blue-400 group-hover/item:text-blue-600"></i>

            </div>

          </div>

          <div class="flex items-start justify-center">

            <h3 class="font-bold text-center group-hover/item:text-blue-600 transition-all duration-300">Pendampingan Halal</h3>

          </div>

        </a>
      
      </div>

      <div class="px-4">

        <a href="#" class="group/item w-full aspect-[1/1] flex flex-col justify-start items-center space-y-2">

          <div class="flex items-center justify-center">

            <div class="h-[80px] w-[80px] aspect-square rounded-md shadow-md border-[1.5px] flex items-center justify-center shadow-blue-200 group-hover/item:shadow-blue-400 transition-all duration-300">

              <i class="bi bi-globe-asia-australia text-4xl text-blue-400 group-hover/item:text-blue-600"></i>

            </div>

          </div>

          <div class="flex items-start justify-center">

            <h3 class="font-bold text-center group-hover/item:text-blue-600 transition-all duration-300">Industri Hijau</h3>

          </div>

        </a>
      
      </div>

      <div class="px-4">

        <a href="#" class="group/item w-full aspect-[1/1] flex flex-col justify-start items-center space-y-2">

          <div class="flex items-center justify-center">

            <div class="h-[80px] w-[80px] aspect-square rounded-md shadow-md border-[1.5px] flex items-center justify-center shadow-blue-200 group-hover/item:shadow-blue-400 transition-all duration-300">

              <i class="bi bi-gear-fill text-4xl text-blue-400 group-hover/item:text-blue-600"></i>

            </div>

          </div>

          <div class="flex items-start justify-center">

            <h3 class="font-bold text-center group-hover/item:text-blue-600 transition-all duration-300">Inkubator Bisnis Teknologi</h3>

          </div>

        </a>
      
      </div>

      <div class="px-4">

        <a href="#" class="group/item w-full aspect-[1/1] flex flex-col justify-start items-center space-y-2">

          <div class="flex items-center justify-center">

            <div class="h-[80px] w-[80px] aspect-square rounded-md shadow-md border-[1.5px] flex items-center justify-center shadow-blue-200 group-hover/item:shadow-blue-400 transition-all duration-300">

              <i class="bi bi-robot text-4xl text-blue-400 group-hover/item:text-blue-600"></i>

            </div>

          </div>

          <div class="flex items-start justify-center">

            <h3 class="font-bold text-center group-hover/item:text-blue-600 transition-all duration-300">Optimalisasi Pemanfaatan Teknologi</h3>

          </div>

        </a>
      
      </div>

      <div class="px-4">

        <a href="#" class="group/item w-full aspect-[1/1] flex flex-col justify-start items-center space-y-2">

          <div class="flex items-center justify-center">

            <div class="h-[80px] w-[80px] aspect-square rounded-md shadow-md border-[1.5px] flex items-center justify-center shadow-blue-200 group-hover/item:shadow-blue-400 transition-all duration-300">

              <i class="bi bi-person-check-fill text-4xl text-blue-400 group-hover/item:text-blue-600"></i>

            </div>

          </div>

          <div class="flex items-start justify-center">

            <h3 class="font-bold text-center group-hover/item:text-blue-600 transition-all duration-300">Pelatihan Teknis Industri</h3>

          </div>

        </a>
      
      </div>

    </div>

    <div class="absolute left-0 h-full flex items-center justify-center">

      <div class="slider-layanan-bl group-hover:opacity-100 opacity-0 group-hover:-translate-x-1/2 translate-x-1/2 h-12 w-12 bg-white rounded-full flex items-center justify-center cursor-pointer hover:scale-110 transition duration-500 ease-in-out active:scale-100 border-[1.5px] shadow-sm"><i class="bi bi-chevron-left"></i></div>

    </div>

    <div class="absolute right-0 h-full flex items-center justify-center">

      <div class="slider-layanan-br group-hover:opacity-100 opacity-0 group-hover:translate-x-1/2 -translate-x-1/2 h-12 w-12 bg-white rounded-full flex items-center justify-center cursor-pointer hover:scale-110 transition duration-500 ease-in-out active:scale-100 border-[1.5px] shadow-sm"><i class="bi bi-chevron-right"></i></div>

    </div>

  </div>

  <!-- Berita -->

  <div class="group relative w-full border-[1.5px] shadow-sm p-4 rounded-md flex flex-col space-y-4">

    <h2 class="font-bold text-2xl">Berita Terkini</h2>

    <div class="w-full flex items-start">

      <div class="w-4/6 rounded-md overflow-none flex flex-col space-y-4 pr-4">

        <div class="bg-red-200 w-full aspect-[2/1] rounded-md"></div>

        <div class="flex flex-col space-y-4">

          <div class="flex flex-col space-y-2">
            
            <h3 class="font-bold text-xl">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore fuga facere dignissimos?</h3>

            <p class="text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. A incidunt ipsum facilis quo explicabo perspiciatis ducimus, placeat quasi rem aliquid ipsa possimus libero ad, omnis nulla, est consequuntur minus. Ipsam minima vel alias repellendus reprehenderit? Hic molestiae consequuntur doloremque quisquam alias, iste temporibus accusamus dolore eius, enim ab perspiciatis magnam... <span class="text-blue-600">Selengkapnya</span></p>
          
          </div>

          <div class="text-sm text-slate-500 flex items-center space-x-2">

            <i class="bi bi-calendar-date"></i>
            
            <span>Kamis, 04 April 2023</span>
            
          </div>

        </div>

      </div>

      <div class="flex-1 pl-4 flex flex-col space-y-8">

        <div class="w-full flex flex-col space-y-2">

          <div class="bg-blue-200 w-full aspect-[2/1] rounded-md"></div>

          <div class="flex flex-col space-y-2">

            <h3 class="font-bold">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore fuga facere dignissimos?</h3>

            <div class="text-sm text-slate-500 flex items-center space-x-2">

              <i class="bi bi-calendar-date"></i>
              
              <span>Kamis, 04 April 2023</span>
              
            </div>

          </div>

        </div>

        <div class="w-full flex flex-col space-y-2">

          <div class="bg-green-200 w-full aspect-[2/1] rounded-md"></div>

          <div class="flex flex-col space-y-2">

            <h3 class="font-bold">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore fuga facere dignissimos?</h3>

            <div class="text-sm text-slate-500 flex items-center space-x-2">

              <i class="bi bi-calendar-date"></i>
              
              <span>Kamis, 04 April 2023</span>
              
            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

  <!-- youtube -->

  <div class="group relative w-full border-[1.5px] shadow-sm p-4 rounded-md flex flex-col space-y-4">

    <h2 class="font-bold text-2xl">Youtube</h2>

    <div class="w-full flex items-stretch space-x-4">

      <div class="w-1/3 aspect-[2/1] bg-slate-200 rounded-md"></div>

      <div class="w-1/3 aspect-[2/1] bg-slate-200 rounded-md"></div>

      <div class="w-1/3 aspect-[2/1] bg-slate-200 rounded-md"></div>

    </div>

  </div>

  <!-- link terkait -->

  <div class="w-full border-[1.5px] shadow-sm p-4 rounded-md flex flex-col space-y-4">

    <h2 class="font-bold text-2xl">Link Terkait</h2>

    <div class="w-full flex items-stretch space-x-4">

      <div class="w-1/6 aspect-[2/1] bg-slate-200 rounded-md"></div>

      <div class="w-1/6 aspect-[2/1] bg-slate-200 rounded-md"></div>
      
      <div class="w-1/6 aspect-[2/1] bg-slate-200 rounded-md"></div>

      <div class="w-1/6 aspect-[2/1] bg-slate-200 rounded-md"></div>

      <div class="w-1/6 aspect-[2/1] bg-slate-200 rounded-md"></div>

      <div class="w-1/6 aspect-[2/1] bg-slate-200 rounded-md"></div>

    </div>

  </div>

  

@endsection

@section('script')

  <!-- Corousel Script -->

  <script>
        
    $(document).ready(function(){
      $('.slider-corousel').slick({
        dots:true,
        dotsClass: 'dots-corousel',
        autoplay: true,
        autoplaySpeed: 5000,
        infinite: true,
        slidesToShow: 1,
        arrows: false
      });

      $('.slider-corousel-control-left').click(function() {
        $('.slider-corousel').slick('slickPrev');
      });

      $('.slider-corousel-control-right').click(function() {
        $('.slider-corousel').slick('slickNext');
      });
    });

  </script>

  <!-- Main Layanan Script -->

  <script>

    $(document).ready(function(){
      $('.slider-layanan').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        infinite: true,
        slidesToShow: 7,
        slidesToScroll: 7,
        arrows: false,
        dots:true,
        dotsClass: 'dots-layanan'
      });

      $('.slider-layanan-bl').click(function() {
        $('.slider-layanan').slick('slickPrev');
      });

      $('.slider-layanan-br').click(function() {
        $('.slider-layanan').slick('slickNext');
      });
    });

  </script>

@endsection

      


      
