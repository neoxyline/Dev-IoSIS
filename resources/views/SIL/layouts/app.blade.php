<!DOCTYPE html>

<html lang="en">

  <head>

      <meta charset="UTF-8">

      <title>@yield('title') - Indie Services</title>

      <link rel="icon" href="{{ asset('assets/images/logo/indie.png') }}" />

      <!-- Styles -->

      <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

      <link rel="stylesheet" href="{{ asset('icons/bootstrap-icons/font/bootstrap-icons.css') }}">

  </head>

  <body class="bg-[#e8e8ed] font-sans flex items-start">

      @include('layouts/navbar')

      <main class="relative w-full max-w-screen-2xl mx-auto">

        <!-- header -->

        <div class="sticky top-0 w-full px-8 py-5 flex items-center justify-between bg-[#e8e8ed] border-b-[0.5px] border-b-white">
          
          <div class="flex items-center space-x-4">

            <button class="w-10 h-10 border-2 border-[rgba(24,27,72,0.5)] flex items-center justify-center text-slate-500 bg-white">
              
              <i class="bi bi-arrow-left text-[#181b48]"></i>
            
            </button>

            <div class="h-10 border-2 border-[rgba(24,27,72,0.5)] flex items-center text-slate-500 bg-white px-2 space-x-2">
              
              <i class="bi bi-search text-[#181b48]"></i>

              <input 
                type="text" 
                class="inline-block  focus:outline-none w-[270px]"
                placeholder="Quick search ..."
                autocomplete="off"
              />
            
            </div>

          </div>

          <div class="flex items-center space-x-4">

            <button class="w-10 h-10 border-2 border-[rgba(24,27,72,0.5)] flex items-center justify-center text-2xl text-slate-500 bg-white">

              <i class="bi bi-bell text-[#181b48]"></i>

            </button>

            <button class="w-10 h-10 border-2 border-[rgba(24,27,72,0.5)] flex items-center justify-center text-2xl text-slate-500 bg-white">

              <i class="bi bi-grid text-[#181b48]"></i>

            </button>

            <div class="w-10 h-10 border-2 border-[rgba(24,27,72,0.5)] bg-white"></div>


          </div>

        </div>

        <!-- content -->

        <div class="px-8 py-5">
          
          @yield('content')

        </div>

      </main>

      <footer class="w-full fixed bottom-0 left-0 pl-[280px] font-mono">

        <div class="text-[rgba(24,27,72,0.3)] text-sm text-center">

          &copy; 2023 Indie Services - BBSPJIHPMM Kementerian Perindustrian

        </div>

      </footer>

  </body>
</html>