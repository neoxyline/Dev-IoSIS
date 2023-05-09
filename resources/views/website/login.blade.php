<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="{{ asset('assets/images/industri.ico') }}" />

        <title>Masuk - BBIHPMM</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

        <link rel="stylesheet" href="{{ asset('icons/bootstrap-icons/font/bootstrap-icons.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('slick-corousel/slick/slick.css') }}"/>
        
    </head>

    <body class="font-sans text-slate-600">

      <header class="p-4 w-full flex justify-center items-center">

        <a href="{{ route('beranda') }}" class="block w-[180px]">

          <img 
              src="{{ asset('assets/images/logo/bbihp-min.png') }}"
              alt="logo BBIHPMM"
              class="w-full"
          />

        </a>

      </header>

      <main class="max-w-screen-xl mx-auto flex flex-col space-y-8 p-8">

        <div class="w-full flex items-stretch">

          <div class="flex-1">


          </div>

          <div class="flex-1 flex justify-center">

            <div class="min-w-[420px] mx-auto z-50 bg-white border-[1.5px] shadow-lg rounded-md flex flex-col space-y-8">

              <div class="w-full flex flex-col items-start pt-8 px-8">

                <h1 class="text-3xl font-bold">Masuk</h1> 

                <div class="">

                  <span>Belum mempunyai akun ?</span>
                  <a href="{{ route('daftar') }}" class="text-blue-600">Daftar</a>

                </div>

              </div>

              <div class="flex flex-col space-y-2 px-8 pb-8">

                <form class="flex flex-col space-y-2" method="POST" action="{{ route('login-pelanggan') }}">
    
                    @csrf

                    <div class="">

                        <label for="email" class="">Email atau Nomor HP </label>

                        <input id="email" type="text" class="border-[1.5px] w-full rounded-md p-2 shadow-sm focus:outline-none focus:border-blue-600 transition-all duration-300" required />

                    </div>

                    <div class="">

                        <label for="password" class="">Kata Sandi</label>

                        <input id="password" type="password" class="border-[1.5px] w-full rounded-md p-2 shadow-sm focus:outline-none focus:border-blue-600 transition-all duration-300" />

                    </div>

                    <div class="py-2">

                        <button type="submit" class="p-2 bg-blue-600 w-full rounded-md text-white">Lanjutkan</button>

                    </div>

                </form>

                <div class="w-full flex justify-center py-2 items-center">
  
                  <div class="text-slate-400">atau masuk dengan</div>
  
                </div>

                <div class="py-2">
                  
                  <button type="button" class="relative p-2 border-[1.5px] border-slate-400 shadow-sm w-full rounded-md">

                    <div class="absolute top-0 left-0 h-full flex items-center px-8">

                      <i class="bi bi-google text-red-600"></i>  

                    </div>

                    <div class="w-full text-center">
                      
                      <span class="font-bold text-slate-600 text-lg">Google</span>

                    </div>
                  
                  </button>
  
                </div>

              </div>

            </div>

          </div>

        </div>
      
      </main>

      <script type="text/javascript" src="{{ asset('jquery/jquery.min.js') }}"></script>

      <script type="text/javascript" src="{{ asset('slick-corousel/slick/slick.min.js') }}"></script>
    
  </body>

</html>