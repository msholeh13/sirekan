<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>

    {{-- aditional style before base style --}}
    @stack('before-style')

    {{-- pluggins --}}
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    {{-- base style --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    {{-- aditional style after base style --}}
    @stack('after-style')
    
  </head>
  <body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
          <a class="navbar-brand brand-logo" href=""><img src="{{ asset('assets/img/logo.png') }}" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="#">
                <span class="me-2">Logout</span>
                <i class="mdi mdi-power"></i>
              </a>
            </li>
          </ul>
        </div>
      </nav>
       <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="{{asset('assets/img/face/face1.jpg')}}" alt="profile" />
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">Admin</span>
                  <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/data">
                <span class="menu-title">Data</span>
                <i class="mdi mdi-database menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/data">
                <span class="menu-title">Bobot</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/data">
                <span class="menu-title">Rekomendasi</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        <div class="main-panel">
          <div class="content-wrapper">
            
            @yield('content')

          </div>
        </div>
    </div>
    

    {{-- aditional js before base js --}}
    @stack('before-script')
    

    {{-- plugin:js --}}
    <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>

    
    {{-- base js --}}
    <script src="{{ asset('assets/js/dashboard.js') }}"></script> 
    <script src="{{ asset('assets/js/misc.js') }}"></script> 
    <script src="{{ asset('assets/js/settings.js') }}"></script>


    {{-- aditional js after base js --}}
    @stack('after-script')
  </body>
</html>