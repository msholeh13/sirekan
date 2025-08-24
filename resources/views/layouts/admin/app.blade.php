<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/logosmall.png') }}" />

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
          <a class="navbar-brand brand-logo" href="{{ route('dashboard') }}"><img src="{{ asset('assets/img/logoTulisan.png') }}" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="{{route('dashboard')}}"><img src="{{asset('assets/img/logosmall.png')}}" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link " id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="{{asset('assets/img/face/face1.jpg')}}" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">Admin</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{route('logout')}}">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
              </div>
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="{{route('logout')}}">
                <span class="me-2">Logout</span>
                <i class="mdi mdi-power"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
       <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile text-center">
              <a href="#" class="nav-link d-flex flex-column">
                <div class="nav-profile-image mb-2">
                  <img src="{{asset('assets/img/face/face1.jpg')}}" alt="profile" />
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="d-flex flex-column">
                  <span class="font-weight-bold mb-2">Admin</span>
                  <span class="text-secondary text-small">SIREKAN APP</span>
                </div>
              </a>
            </li>
            <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
              <a class="nav-link" href="{{route('dashboard')}}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item {{ request()->is('data') ? 'active' : '' }}">
              <a class="nav-link" href="{{route('data')}}">
                <span class="menu-title">Data</span>
                <i class="mdi mdi-database menu-icon"></i>
              </a>
            </li>
            <li class="nav-item {{ request()->is('bobot') ? 'active' : '' }}">
              <a class="nav-link" href="{{route('weight')}}">
                <span class="menu-title">Bobot</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            <li class="nav-item {{ request()->is('rekomendasi') ? 'active' : '' }}">
              <a class="nav-link" href="{{route('recommendation')}}">
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
          
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2025 <a href="" target="">Bang M</a>. All rights reserved. Distributed by <a href="http://themewagon.com" target="_blank">ThemeWagon</a></span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
      </div>

    {{-- aditional js before base js --}}
    @stack('before-script')
    

    {{-- plugin:js --}}
    <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>

    
    {{-- base js --}}
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script> 
    <script src="{{ asset('assets/js/dashboard.js') }}"></script> 
    <script src="{{ asset('assets/js/misc.js') }}"></script> 
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert2.js') }}"></script>
    @include('sweetalert2::index')

    {{-- aditional js after base js --}}
    @stack('after-script')
  </body>
</html>