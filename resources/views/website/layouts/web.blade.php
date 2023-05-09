<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="{{ asset('assets/images/industri.ico') }}" />

        <title>@yield('title') - BBIHPMM</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

        <link rel="stylesheet" href="{{ asset('icons/bootstrap-icons/font/bootstrap-icons.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('slick-corousel/slick/slick.css') }}"/>

        <!-- style -->
        @yield('style')
        

    </head>

    <body class="font-sans text-slate-600">

      @include('website/components/header')  

      <main class="max-w-screen-xl mx-auto flex flex-col space-y-8 p-8">

        @yield('content')

      </main>

      @include('website/components/footer')
      
      @include('website/components/login')

      <script type="text/javascript" src="{{ asset('jquery/jquery.min.js') }}"></script>

      <script type="text/javascript" src="{{ asset('slick-corousel/slick/slick.min.js') }}"></script>

      @yield('script')

      <script>

        $(".button-login").click(function () {

          $(".login").removeClass("hidden");

          $("body").css("overflow", "hidden");

        });

        $(".button-close-login").click(function () {

          $(".login").addClass("hidden");
          
          $("body").css("overflow", "auto");

        });

      </script>

    </body>

</html>