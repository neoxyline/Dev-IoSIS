<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="{{ asset('assets/images/industri.ico') }}" />

        <title>Daftar - BBIHPMM</title>

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

                <h1 class="text-3xl font-bold">Daftar Sekarang</h1> 

                <div class="">

                  <span>Sudah mempunyai akun ?</span>
                  <a href="{{ route('masuk') }}" class="text-blue-600">Masuk</a>

                </div>

              </div>

              <div class="flex flex-col space-y-2 px-8 pb-8">

                <div class="py-2">
                  
                  <a href="{{ route('daftar-google-redirect') }}" class="block relative p-2 border-[1.5px] border-slate-400 shadow-sm w-full rounded-md">

                    <div class="absolute top-0 left-0 h-full flex items-center px-8">

                      <i class="bi bi-google text-red-600"></i>  

                    </div>

                    <div class="w-full text-center">
                      
                      <span class="font-bold text-slate-600 text-lg">Google</span>

                    </div>
  
                  </a>

                  @error('google')
                  
                    <div class="mt-2">
                      
                      <span class="text-red-600">Email telah digunakan !</span>

                    </div>
  
                  @enderror

                </div>
                
                <div class="w-full flex justify-center py-2 items-center">
  
                  <div class="text-slate-400">atau daftar dengan</div>
  
                </div>
  
                <form class="flex flex-col space-y-2" method="POST" action="{{ route('daftar') }}">
  
                  @csrf
  
                  <div class="">
  
                    <label for="email-or-nomor-hp" class="">Email atau Nomor HP</label>
  
                    <input id="email-or-nomor-hp" type="text" name="email_or_nomor_hp" class="border-[1.5px] border-slate-300 w-full rounded-md p-2 shadow-sm focus:outline-none focus:border-blue-600 transition-all duration-300" oninput="checkInputDaftar()" required />
  
                  </div>
  
                  <div class="py-2">
  
                    <button id="submit-daftar" type="submit" class="p-2 bg-slate-200 w-full rounded-md text-white font-bold text-xl" disabled>Daftar</button>
  
                  </div>
  
                </form>

              </div>


            </div>

          </div>

        </div>
      
      </main>

      <script type="text/javascript" src="{{ asset('jquery/jquery.min.js') }}"></script>

      <script type="text/javascript" src="{{ asset('slick-corousel/slick/slick.min.js') }}"></script>

      <!-- Verifikasi email atau nomor handphone -->

      <script>

        function validatePhoneNumber(phoneNumber) {

          const regex = /^\d{7,}$/; // Angka sebanyak 10 karakter

          return regex.test(phoneNumber);

        }

        function validateEmail(email) {

          const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Format email standar

          return regex.test(email);

        }

        function checkInputDaftar() {

          let value = $('#email-or-nomor-hp').val();

          const isEmail = validateEmail(value);
          
          const isNomorHP = validatePhoneNumber(value);

          if (isEmail || isNomorHP) {

            console.log(true);
            console.log($('#submit-daftar'));
            
            $('#submit-daftar').attr('disabled', false);
            $('#submit-daftar').addClass('bg-blue-600');
            $('#submit-daftar').removeClass('bg-slate-200');
            
            return;
            
          }
          
          $('#submit-daftar').attr('disabled', true);
          $('#submit-daftar').addClass('bg-slate-200');
          $('#submit-daftar').removeClass('bg-blue-600');

          return;

        }

      </script>
    
  </body>

</html>