
<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title >@yield('title')</title>
    <meta name="description"  content="">
    <meta name="keywords" content="">
    <meta name="author" content="Iqonic Design">
    <meta name="DC.title" content="@yield('title')">

    @include('admin.layout.style')
    <style>
       .loader-body{
          background-color: black;
          }
        .sidebar .sidebar-toggle{
          background: #68b7e2 !important;
        }
        .header-hover-menu .iq-nav-menu li .nav-link.active{
           color:#68b7e2 !important;
        }
    </style>

</head>

<body class="dark theme-color-default">
    <!-- loader Start -->
    {{-- <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body">
                <img src="{{ asset('assets/images/loader.gif') }}" alt="loader" class="image-loader img-fluid ">
            </div>
        </div>
    </div> --}}
    @include('admin.layout.side')
    <main class="main-content">
        <div class="position-relative">
            @include('admin.layout.nav')
        </div>
        <div class="content-inner container-fluid pb-0" id="page_layout">
            @yield('admin_home')
        </div>

        {{-- @include('admin.layout.footer') --}}

    </main>

    @include('admin.layout.js')

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
