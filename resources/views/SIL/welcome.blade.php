<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="{{ asset('assets/images/logo/indie.png') }}" />

        <title>Welcome - Indie Services</title>

        <!-- Styles -->

        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

        <link rel="stylesheet" href="{{ asset('icons/bootstrap-icons/font/bootstrap-icons.css') }}">

    </head>

    <body class="font-sans">

      <div class="max-w-screen-2xl mx-auto min-h-screen flex items-start bg-[#e8e8ed] shadow-lg">

        <!-- Navbar -->

        <div class="sticky top-0 left-0 min-w-[270px] max-w-[320px] flex flex-col bg-white h-screen">

          <div class="flex justify-center items-center p-6">

            <img 
                src="{{ asset('assets/images/logo/indie-services.png') }}"
                alt="logo indie"
                class="w-[70%] h-auto"
            />

          </div>

          <!-- Profile -->

          <div class="p-4 flex items-center justify-center flex-col space-y-2 border-b-[0.5px]">

            <div class="w-24 h-24 bg-blue-700 rounded-full"></div>

            <div class="flex flex-col space-y-0.5 items-center text-slate-600">

              <h3 class="text-2xl font-bold capitalize">{{ Auth::user()->name }}</h3>
              <span class="text-base">{{ Auth::user()->email }}</span>

            </div>

          </div>

          <!-- Menu -->

          <nav class="h-full overflow-y-auto py-4 text-slate-500">

            <div class="px-4 py-2 flex items-center">
              
              <div class="w-8 h-8 flex items-center justify-center rounded-full border-[0.5px] border-blue-700 bg-blue-700">

                <i class="bi bi-window text-white p-0"></i>

              </div>

              <span class="pl-4 text-blue-700">Dashboard</span>

            </div>

            <div class="px-4 py-2 flex items-center">
              
              <div class="w-8 h-8 flex items-center justify-center rounded-full border-[0.5px]">

                <i class="bi bi-person text-slate-500 p-0"></i>

              </div>

              <span class="pl-4">Profile</span>

            </div>

            <div class="px-4 py-2 flex items-center">
              
              <div class="w-8 h-8 flex items-center justify-center rounded-full border-[0.5px]">

                <i class="bi bi-gear text-slate-500 p-0"></i>

              </div>

              <span class="pl-4">Settings</span>

            </div>

          </nav>

        </div>

        <!-- Main -->

        <div class="flex-1">

          <!-- Header -->

          <header class="sticky top-0 px-8 py-4 flex items-center justify-between">

            <div class="rounded-full min-w-[320px] bg-white px-4 flex items-center text-slate-500">

              <i class="bi bi-search text-xl"></i>

              <input 
              
                type="text"
                placeholder="Search..."
                class="focus:outline-none py-2 px-4 "

              />

            </div>

            <div class="flex items-center space-x-2">

              <button class="flex items-center justify-center h-12 w-12 bg-white rounded-full text-slate-500">
                
                <i class="bi bi-chat text-xl"></i>
                
              </button>
              
              <button class="flex items-center justify-center h-12 w-12 bg-white rounded-full text-slate-500">
  
                <i class="bi bi-bell text-xl"></i>
  
              </button>

            </div>

          </header>

          <main class="p-6">

            <div class="h-[2000px]"></div>

            <!-- <h1 class="text-2xl font-bold">Welcome</h1> -->

          </main>
          
        </div>

      </div>

      <div class="fixed bottom-0 left-0 opacity-[0.00] w-full md:w-1/2 ">

          <img 
              src="{{ asset('assets/images/siluet/industri-bg-3.png') }}" 
              alt="Girl in a jacket"
              class="w-full h-auto" 
          />

      </div>

      <div class="hidden md:block fixed bottom-0 right-0 opacity-[0.00] w-1/2">

          <img 
              src="{{ asset('assets/images/siluet/industri-bg-4.png') }}" 
              alt="Girl in a jacket"
              class="w-full h-auto" 
          />

      </div>


    </body>

</html>
