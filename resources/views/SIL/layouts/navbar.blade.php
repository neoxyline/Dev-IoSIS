<!-- Navbar -->

<header class="sticky top-0 left-0 w-[320px] max-w-[370px] h-screen bg-[#FFF] flex flex-col font-mono">
  
  <!-- Logo -->

  <div class="py-5 px-8 bg-[#FFF]">

    <div class="w-full flex justify-center items-center h-10">

      <img 
          src="{{ asset('assets/images/logo/indie-services.png') }}"
          alt="logo indie"
          class="w-[70%] h-auto"
      />

    </div>

  </div>

  <div class="w-full h-[0.5px] bg-[#e8e8ed]"></div>

  <!-- Title -->

  <div class="text-xl font-bold bg-[rgba(24,27,72,1)] text-[#e8e8ed] text-center p-2 flex items-center justify-center space-x-2">
    
    <i class="bi bi-gear"></i>
    <h1>Settings</h1>

  </div>

  <div class="w-full h-[0.5px] bg-[#e8e8ed]"></div>

  <!-- menu -->

  <nav class="h-full overflow-y-scroll text-sm text-[#2f325a]">

    <div>

      <h2 class="w-full p-2 font-extrabold border-b-[0.5px] border-[rgba(24,27,72,0.05)]">Link</h2>

      <ul>

        <li class="py-2 pl-8 border-b-[0.5px] border-[rgba(24,27,72,0.05)] flex items-center space-x-2 bg-[#e8e8ed]">
          
          <i class="bi bi-window"></i>

          <span>App</span>
      
        </li>

        <li class="py-2 pl-8 border-b-[0.5px] border-[rgba(24,27,72,0.05)] flex items-center space-x-2">
        
          <i class="bi bi-list"></i>

          <span>Menu</span>
        
        </li>

      </ul>

    </div>

  </nav>

</header>