<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login | MEI</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <!-- Bootstrap 3.3.7 -->
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- animate.css -->
<link media="all" type="text/css" rel="stylesheet" href="{{asset('assets/animate.min.css')}}">
<!-- Font Awesome -->
<link media="all" type="text/css" rel="stylesheet" href="{{asset('assets/font-awesome.min.css')}}">

<link media="all" type="text/css" rel="stylesheet" href="{{asset('assets/select2.min.css')}}">
<!-- Theme style -->
<link media="all" type="text/css" rel="stylesheet" href="{{asset('assets/AdminLTE.css')}}">
<!-- iCheck -->
<link media="all" type="text/css" rel="stylesheet" href="{{asset('assets/all.css')}}">
<!-- AdminLTE Skins. Choose a skin from the css/skins-->

<!-- Pace style -->
<link media="all" type="text/css" rel="stylesheet" href="{{asset('assets/pace.min.css')}}">

<!-- Ladda  -->
<link media="all" type="text/css" rel="stylesheet" href="{{asset('assets/ladda-themeless.min.css')}}">


<!-- toastr -->
<link media="all" type="text/css" rel="stylesheet" href="{{asset('assets/toastr.min.css')}}">
<!-- sweetalert2 -->
<link media="all" type="text/css" rel="stylesheet" href="{{asset('assets/sweetalert2.css')}}">
<link media="all" type="text/css" rel="stylesheet" href="{{asset('assets/lightbox.min.css')}}">

<link media="all" type="text/css" rel="stylesheet" href="{{asset('assets/core.css')}}">
<link media="all" type="text/css" rel="stylesheet" href="{{asset('assets/custom.css')}}">







    <style type="text/css">
        .login-box, .register-box {
            width: 720px;
            margin: 2% auto;
        }

        .login-left {
            border-right: 4px solid #ddd;
        }

        @media (max-width: 470px) {
            .login-box, .register-box {
                width: 340px;
            }

            .login-left {
                border-right: none;
            }
        }

        .or-separator {
            text-align: center;
            margin: 10px 0;
            text-transform: uppercase;
        }

        .or-separator:after, .or-separator:before {
            content: ' -- ';
        }

        #terms {
            color: black;
        }

        #terms-anchor {
            text-transform: uppercase;
        }


    </style>
 </head>   
<body class="hold-transition login-page no-block-ui">

          <!-- Main content -->
          <div class="login-box">
           <!-- /.login-logo -->
          <div class="login-box-body">
          <div class="login-logo text-center">
            <a href="{{route('homepage')}}">
                <img class="site_logo img-responsive m-t-20"
                     style="max-width: 290px; margin: 0 auto;"
                     src="{{asset('img/logo.png')}}">
            </a>
        </div>

          </div>
          </div>
    <main class="">
      @yield('content')
    </main>


</body>
    <!-- jQuery 3 -->
<script src="scripts/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="scripts/bootstrap.min.js"></script>


<!-- iCheck -->
<script src="scripts/icheck.min.js"></script>
<!-- Pace -->
<script src="scripts/pace.min.js"></script>

<!-- Jquery BlockUI -->
<script src="scripts/jquery.blockUI.min.js"></script>

<!-- Ladda -->
<script src="scripts/spin.min.js"></script>
<script src="scripts/ladda.min.js"></script>

<!-- toastr -->
<script src="scripts/toastr.min.js"></script>
<!-- SlimScroll -->
<script src="scripts/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="scripts/fastclick.js"></script>

<script src="scripts/sweetalert2.all.min.js"></script>
<script src="scripts/select2.full.min.js"></script>
<!-- AdminLTE App -->
<script src="scripts/adminlte.min.js"></script>

<script src="scripts/functions.js"></script>
<script src="scripts/main.js"></script>
<!-- corals js -->
<script src="scripts/lodash.js"></script>
<script src="scripts/lightbox.min.js"></script>
<script src="scripts/clipboard.min.js"></script>
<script src="scripts/corals_functions.js"></script>
<script src="scripts/corals_main.js"></script>