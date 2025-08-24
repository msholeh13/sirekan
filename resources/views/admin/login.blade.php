<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login - SIREKAN</title>
    <!-- plugins:css -->
    {{-- <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../assets/vendors/font-awesome/css/font-awesome.min.css"> --}}

    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    {{-- base style --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/img/logosmall.png') }}" />
    </head>
    <body>
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="content-wrapper d-flex align-items-center auth">
                    <div class="row flex-grow">
                        <div class="col-lg-4 mx-auto">
                            <div class="auth-form-light text-left p-5">
                                <div class="">
                                    <img src="{{ asset('assets/img/logo.png') }}" class="img-fluid">
                                </div>
                                                        {{-- @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif --}}
                                <form class="pt-3" method="POST" action="{{route('login')}}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control form-control-lg @error('username') is-invalid @enderror" id="username" placeholder="Username" value="{{ old('username') }}">
                                        @error('username')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" id="password" placeholder="Password">
                                        @error('password')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="mt-3 d-grid gap-2">
                                        <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
        <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        {{-- <script src="../../assets/vendors/js/vendor.bundle.base.js"></script> --}}
        <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>

        <!-- endinject -->
        <!-- Plugin js for this page -->
        <!-- End plugin js for this page -->
        <!-- inject:js -->

        {{-- <script src="../../assets/js/off-canvas.js"></script>
        <script src="../../assets/js/misc.js"></script>
        <script src="../../assets/js/settings.js"></script>
        <script src="../../assets/js/todolist.js"></script>
        <script src="../../assets/js/jquery.cookie.js"></script> --}}

        <script src="{{ asset('assets/js/off-canvas.js') }}"></script> 
        <script src="{{ asset('assets/js/misc.js') }}"></script> 
        <script src="{{ asset('assets/js/settings.js') }}"></script>
        <script src="{{ asset('assets/js/sweetalert2.js') }}"></script>
        <!-- endinject -->


        @if($errors->has('loginError'))
            <script>
                const message = "{{ $errors->first('loginError') }}";
                
                const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
                });
                Toast.fire({
                icon: "error",
                title: message
                });
            </script>
        @endif
         
    </body>
</html>