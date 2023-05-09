<!-- Login -->

<div class="login hidden fixed top-0 left-0 w-full h-screen z-50">

  <div class="relative w-full h-full flex items-center justify-center">

    <div class="button-close-login absolute left-0 top-0 w-full h-full bg-black opacity-30"></div>

    <div class="min-w-[400px] z-50 bg-white border-[1.5px] shadow-sm rounded-md">

      <div class="pb-2 pt-4 px-8">

        <button class="button-close-login w-8 h-8 border-[1.5px] hover:border-blue-600 hover:text-blue-600 rounded-md flex items-center justify-center text-sm transition-all duration-300"><i class="bi bi-x-lg"></i></button>

      </div>

      <div class="w-full flex justify-between items-end py-2 px-8">

        <h4 class="text-4xl font-bold">Masuk</h4> 

        <a href="{{ route('daftar') }}" class="text-lg text-blue-600">Daftar</a>

      </div>

      <form class="flex flex-col space-y-2 px-8 py-8" method="POST" action="{{ route('login-pelanggan') }}">

        @csrf

        <div class="">

          <label for="email" class="font-bold">Email atau Nomor HP </label>

          <input id="email" type="text" class="border-[1.5px] w-full rounded-md p-2 shadow-sm focus:outline-none focus:border-blue-600 transition-all duration-300" required />

        </div>

        <div class="">

          <label for="password" class="font-bold">Kata Sandi</label>

          <input id="password" type="password" class="border-[1.5px] w-full rounded-md p-2 shadow-sm focus:outline-none focus:border-blue-600 transition-all duration-300" />

        </div>

        <div class="py-2">

          <button type="submit" class="p-2 bg-blue-600 w-full rounded-md text-white">Lanjutkan</button>

        </div>

        <div class="w-full flex justify-center py-2 items-center">

          <div class="">Atau masuk dengan</div>

        </div>

        <div class="py-2">

          
          <button type="button" class="p-2 border-[1.5px] shadow-sm border-red-600 w-full rounded-md flex items-center justify-center space-x-2 text-red-600">
          
            <i class="bi bi-google"></i>  

            <span>Google</span>
          
          </button>

        </div>

      </form>

    </div>

  </div>

</div>

<!-- script -->