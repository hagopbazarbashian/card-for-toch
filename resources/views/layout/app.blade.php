<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('favicon_io/android-chrome-512x512.png') }}">

    <meta name="description" content="Card youcan add widget and share your info via quick QE scan" />
    <meta name="keywords" content="">
    <!-- Standard Favicon -->
    <link rel="icon" href="{{ asset('favicon_io/android-chrome-512x512.png') }}">
    <!-- Touch Icons - iOS and Android 2.1+ -->
    <link rel="apple-touch-icon" href="{{asset('favicon_io/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicon_io/android-chrome-512x512.png') }}" >
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicon_io/android-chrome-192x192.png') }}" >
    <meta property="og:title" content="Get your first card">
    <meta property="og:description" content="Card youcan add widget and share your info via quick QE scan">
    <meta property="og:image" content="https://toch.am/assets/images/lot.png">
    <meta property="og:url" content="https://toch.am">
    <meta property="og:type" content="website">

    <title>@yield('title')</title>
     @include('layout.style')

</head>

<body class="  ">
   {{-- <span class="screen-darken"></span> --}}
   <!-- loader Start -->
  {{-- <div class="loader simple-loader">
     <div class="loader-body">
        <img src="{{asset('assets/images/logo.png')}}" alt="loader" class="img-fluid" width="300">
      </div>
  </div> --}}
  <!-- loader END -->  <!-- loader END -->
  <main class="main-content hide-on-desktop" id="content">
      <!--Nav Start-->
      <header class="header-center-home header-merchandise">
        @unless(request()->is(['/', 'login-user', 'register-user','welcome-user','welcome-user-get-card','admin/login']))
         @include('layout.nav-bar')
        @endunless
      </header>
      @yield('home')
  </main>

  @unless(request()->is(['/', 'login-user', 'register-user','welcome-user','welcome-user-get-card']))
   @include('layout.footer')
  @endunless

  @include('layout.rt_box')
  @include('layout.script_bottom')

  @if ($errors->any())
  @foreach ($errors->all() as $error)
  <script>
      iziToast.error({
      title: '',
      position: 'topRight',
      message: '<span style="color: red;">{{ $error }}</span>',
  });
  </script>
  @endforeach

  @endif

  @if (session()->get('error'))
  <script>
      iziToast.error({
      title: '',
      position: 'topRight',
      message: '<span  style="color:red; class="error-text">{{ session()->get('error') }}</span>',
  });
  </script>
  @endif

  @if (session()->get('succes'))
  <script>
      iziToast.success({
      title: '',
      position: 'topRight',
      message: '<span style="color: green; class="success-text">{{ session()->get('succes') }}</span>',
  });
  </script>
  @endif
</body>

</html>
