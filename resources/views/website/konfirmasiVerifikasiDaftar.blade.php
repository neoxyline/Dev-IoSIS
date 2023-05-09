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

        <style>
          input[type=number]::-webkit-outer-spin-button,
          input[type=number]::-webkit-inner-spin-button {
              -webkit-appearance: none;
              margin: 0;
          }
        </style>
        
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

          <div class="w-full text-center mb-2">

            <i class="bi bi-envelope text-5xl text-blue-600"></i>

          </div>

          <h2 class="text-xl font-bold">Masukkan Kode Verifikasi</h2>

          <p class="">Kode verifikasi telah dikirim melalui e-mail ke {{ $emailOrNomorHp }}.</p>

          <form method="post" action="#" class="my-4 flex flex-col justify-center space-y-2 px-16">

            <input type="number" class="focus:outline-none mt-4 border-b-2 border-b-blue-600 text-4xl font-bold text-center" max="999999" />

          </form>

          <p class="">Tidak menerima kode? <a href="#" class="text-blue-600 font-bold">Kirim ulang</a>

        </div>
      
      </main>

      <script type="text/javascript" src="{{ asset('jquery/jquery.min.js') }}"></script>

      <script type="text/javascript" src="{{ asset('slick-corousel/slick/slick.min.js') }}"></script>
    
  </body>

</html>