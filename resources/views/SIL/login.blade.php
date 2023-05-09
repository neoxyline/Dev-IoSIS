<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('assets/images/logo/indie.png') }}" />

        <title>Indie Services</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

    </head>
    <body>
        <div class="flex w-full h-screen items-center justify-center bg-[#F3F6FF] font-sans p-4 text-slate-700">

            <div class="w-full md:w-1/2 max-w-[420px] bg-[rgba(250,250,255,0.8)] p-12 shadow-md flex flex-col space-y-4 z-20 text-sm md:text-base">
                
                <div class="w-full flex flex-col justify-center items-center">

                    <div class="w-full flex justify-center items-center mb-4">

                        <img 
                            src="{{ asset('assets/images/logo/bbihp-min.png') }}"
                            alt="logo BBIHPMM"
                            class="w-[65%]"
                        />

                    </div>
                    
                    <h1 class="text-xl text-slate-700">Login Indie Services</h1>

                </div>

                <form method="POST" action="{{ route('login') }}" class="flex flex-col space-y-6 font-mono">

                    @csrf

                    <div class="w-full">

                        <input 
                            class="border-b-[2px] w-full p-2 focus:outline-none focus:border-[#0068FF] transition-colors duration-300 bg-[rgba(250,250,255,0.8)]"
                            type="text"  
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="Email"
                        />

                        @error('email')

                            <div class="mt-2 text-sm font-sans text-red-700">

                                {{ $message }}

                            </div>

                        @enderror

                    </div>

                    <div class="w-full"> 

                        <input 
                            class="border-b-[2px] w-full p-2 focus:outline-none focus:border-[#0068FF] transition-colors duration-300 bg-[rgba(250,250,255,0.8)]"
                            type="password"  
                            name="password"
                            value="{{ old('password') }}"
                            placeholder="Password"
                        />

                        @error('password')

                            <div class="mt-2 text-sm font-sans text-red-700">

                                {{ $message }}

                            </div>

                        @enderror

                    </div>

                    <button 
                        type="submit"
                        class="font-bold p-3 bg-[#0068FF] text-white"
                    >
                        Masuk
                    </button>

                </form>

                <div class="w-full py-0.5">

                    <div class="mx-auto w-1/2 h-[0.5px] bg-[#e8e8ed]"></div>

                </div>

                <a 
                    href="/auth/login-pelanggan"
                    class="inline-block text-center font-bold p-3 border-2 border-[#0068FF] text-[#0068FF] hover:bg-[#0068FF] hover:text-white transition-all duration-250"
                >
                    Login Pelanggan
                </a>

            </div>

            <div class="fixed bottom-0 left-0 opacity-10 w-full md:w-1/2 ">

                <img 
                    src="{{ asset('assets/images/siluet/industri-bg-3.png') }}" 
                    alt="Girl in a jacket"
                    class="w-full h-auto" 
                />

            </div>

            <div class="hidden md:block fixed bottom-0 right-0 opacity-10 w-1/2">

                <img 
                    src="{{ asset('assets/images/siluet/industri-bg-4.png') }}" 
                    alt="Girl in a jacket"
                    class="w-full h-auto" 
                />

            </div>

        </div>

    </body>

</html>
