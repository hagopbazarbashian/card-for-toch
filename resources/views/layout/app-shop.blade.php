<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>
  <!-- Google Font Api KEY-->
  <meta name="google_font_api" content="AIzaSyBG58yNdAjc20_8jAvLNSVi9E4Xhwjau_k">

  @include('layout.style-shop')

</head>

<body class="  ">
  <span class="screen-darken"></span>
  {{-- <div class="loader simple-loader">
     <div class="loader-body">
        <img src="./assets/images/loader.gif" alt="loader" class="img-fluid " width="300">
      </div>
  </div> --}}
  <!-- loader END -->  <!-- loader END -->
  <main class="main-content">
      <!--Nav Start-->
     @include('layout.nav-bar-shop')
     @yield('home')

</main>
@include('layout.footer-shop')



  <div id="back-to-top" style="display: none;">
     <a class="p-0 btn bg-primary btn-sm position-fixed top border-0 rounded-circle" id="top" href="#top">
        <i class="fa-solid fa-chevron-up"></i>
     </a>
  </div>
  @include('layout.script_bottom')
</body>

</html>
