<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="{{ asset('assets/images/industri.ico') }}" />

        <title>Verifikasi - BBIHPMM</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

        <link rel="stylesheet" href="{{ asset('icons/bootstrap-icons/font/bootstrap-icons.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('slick-corousel/slick/slick.css') }}"/>
        
    </head>

    <body class="font-sans text-slate-600">

      <header class="p-2 bg-blue-600">

        <div class="relative max-w-screen-sm mx-auto flex justify-center items-center text-slate-100">

          <div class="absolute left-0 top-0 h-full flex items-start">
  
            <a href="{{ route('daftar') }}" class="w-max flex items-center justify-center">
  
              <i class="bi bi-arrow-left text-2xl"></i>
  
            </a>
          
          </div>
  
          <h1 class="font-medium text-2xl">Verifikasi</h1>

        </div>

      </header>

      <main class="max-w-screen-sm mx-auto flex flex-col space-y-8 py-8 px-24">

        <div class="text-center flex flex-col justify-center space-y-2">

          <h2 class="text-xl font-bold">Pilih Metode Verifikasi</h2>

          <p class="">Pilih salah satu metode dibawah ini untuk mendapatkan kode verifikasi.</p>

          <div class="py-4 flex flex-col space-y-2">

            @if ($jenisVerifikasi == 'nomorHp') 

              <form method="post" action="#" class="">

                @csrf

                <input type="hidden" name="email" value="{{ $kirimKe }}" />

                <div class="group p-4 border-[1.5px] shadow-md rounded-md flex items-center space-x-4 hover:border-blue-600">

                  <i class="bi bi-whatsapp text-4xl text-green-600"></i>
                  
                  <button type="submit" class="w-full flex flex-col justify-start items-start">
                    
                    <h3 class="font-bold text-lg group-hover:text-blue-600">WhatsApp ke</h3>
                    
                    <span>{{ $kirimKe }}</span> 
  
                  </button>

                </div>

              </form>

            @else

              <form method="post" action="{{ route('daftar-verifikasi-email'); }}" class="">

                @csrf

                <input type="hidden" name="email" value="{{ $kirimKe }}" />

                <button type="submit" class="w-full group p-4 border-[1.5px] shadow-md rounded-md flex items-center space-x-4 hover:border-blue-600">

                  <i class="bi bi-envelope text-4xl text-blue-600"></i>
                  
                  <div class="w-full flex flex-col justify-start items-start">
                    
                    <h3 class="font-bold text-lg group-hover:text-blue-600">E-mail ke</h3>
                    
                    <span>{{ $kirimKe }}</span> 
  
                  </div>

                </button>

              </form>

            @endif

          </div>

          @if ($jenisVerifikasi === 'nomorHp')

            <p>Berkendala dengan metode di atas? <a href="#" class="text-blue-600 font-bold">Gunakan Metode SMS</a></p> 

          @endif

        </div>
      
      </main>

      <script type="text/javascript" src="{{ asset('jquery/jquery.min.js') }}"></script>

      <script type="text/javascript" src="{{ asset('slick-corousel/slick/slick.min.js') }}"></script>
    
  </body>

</html>