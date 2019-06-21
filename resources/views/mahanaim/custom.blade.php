<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Mahanaim</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{asset('images/icon/logo.jpg')}}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
      Theme Name: Regna
      Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    ======================================================= -->
</head>

<body>

<!--==========================
Header
============================-->
<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <a href="{{route('homepage')}}"><img src="{{asset('img/logo.png')}}" alt="" title="" /></a>
            <!-- Uncomment below if you prefer to use a text logo -->
            <!--<h1><a href="#hero">Regna</a></h1>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="{{route('homepage')}}">Home</a></li>
                <li class="menu-has-children"><a href="">About</a>
                    <ul>
                        <li><a href="{{route('our-staffs')}}">Staff</a></li>
                        <li><a href="{{route('background')}}">Backround</a> </li>
                        <li><a href="{{route('chancellor')}}">Chancellor's Message</a> </li>
                        <li><a href="{{route('principal')}}">Principal's Message</a> </li>
                    </ul>
                </li>
                <li class="menu-has-children"><a href="">Academics</a>
                    <ul>
                        <li><a href="{{route('our-schools')}}">Schools</a></li>
                        <li><a href="#">Examination</a></li>
                    </ul>
                </li>
                <li class="menu-has-children"><a href="">Admissions</a>
                    <ul>
                        <li><a href="#">Apply</a></li>
                        <li><a href="#">Academic Calender</a></li>
                        <li><a href="{{route('fee-structure')}}">Fee Structure</a></li>
                        <li><a href="#">Scholarship</a></li>
                        <li><a href="#">E-Learning</a></li>
                    </ul>
                </li>
                <li><a href="{{route('our-posts')}}">Blog</a></li>
                <li>
                    <a href="{{route('our-notices')}}">Notice</a>
                </li>
                <li><a href="{{route('our-photos')}}">Gallery</a></li>
                <li class="menu-has-children"><a href="">Accounts</a>
                    <ul>
                        <li><a href="https://mahanaim.dsl.ke/staff/" target="_blank">Staff</a></li>
                        <li><a href="https://mahanaim.dsl.ke/students/" target="_blank">Student</a> </li>
                    </ul>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<!--==========================
  Hero Section
============================-->
<section id="hero1">
    <div class="hero-container">
        <h1>Mahanaim Educational Institute</h1>
        <h2>Challenge Change Cohesion</h2>
    </div>
</section><!-- #hero -->

@yield('content')
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>



<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>

<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>
</body>
</html>