<!DOCTYPE html>
<html>

  <head>

      <title>BBIHPMM</title>
      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

  </head>

  <body>

    <a href="{{ route('beranda') }}" style="display:block;width:140px;">

      <img 
          src="http://bbihp.or.id/intranet/assets/images/logo@2x.png"
          alt="logo BBIHPMM"
          style="width:100%;"
      />

    </a>

    <p style="color:rgb(71,85,105);">Halo, <span style="font-weight:600;color:rgb(71,85,105);">Sobat Industri</span></p>

    <h2 style="color:rgb(71,85,105);">Yuk, mulai aktivasi akun BBIHPMM kamu.</h2>

    <p style="color:rgb(71,85,105);">Cukup masukkan kode verifikasi di bawah ini untuk mengaktifkan akunmu.</p>

    <p style="width:max-content;padding:0.5rem;border-width:1px;border-style:solid;border-color:rgb(71,85,105);border-radius:0.375rem;color:rgb(71,85,105);font-size:24px;font-weight:600;">

        {{ $mailData['code'] }}

    </p>

    <p style="color:rgb(71,85,105);">Kode di atas hanya berlaku 20 menit. Mohon jangan sebarkan kode ini kepada siapapun, terima kasih.</p>

  </body>

</html>