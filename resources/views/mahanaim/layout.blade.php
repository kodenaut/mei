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

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Concert One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Monoton">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Neucha">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


    <!-- Libraries CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">

    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>

<!--==========================
Header
============================-->
<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <a href="{{route('homepage')}}"><img src="{{asset('img/logo.png')}}" alt="" title="" /></a>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light float-right sticky-top fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class=" navbar-nav nav-menu mr-auto">
                <li class="menu-active"><a href="{{route('homepage')}}">Home</a></li>
                <li class="menu-has-children"><a class="" href="">About</a>
                    <ul>
                        <li><a href="{{route('our-staffs')}}">Staff</a></li>
                        <li><a href="{{route('background')}}">Backround</a> </li>
                        <li><a href="{{route('our-alumnis')}}">Alumni</a> </li>
                        <li><a href="{{route('chancellor')}}">Chancellor's Message</a> </li>
                        <li><a href="{{route('principal')}}">Principal's Message</a> </li>
                    </ul>
                </li>
                <li class="menu-has-children nav-item"><a href="">Academics</a>
                    <ul>
                        <li><a class="" href="{{route('our-schools')}}">Schools</a></li>
                        <li><a href="{{route('term-dates')}}">Academic Calender</a></li>
                        <!--
                        <li><a href="{{route('past-papers')}}">Past Papers</a></li>
                        -->
                        <li><a href="#">Examination</a></li>
                    </ul>
                </li>
                <li class="menu-has-children"><a href="">Admissions</a>
                    <ul>
                        <li><a href="#">Apply</a></li>
                        <li><a href="{{route('fee-structure')}}">Fee Structure</a></li>
                        <li><a href="#">Scholarship</a></li>
                        <li><a href="#">E-Learning</a></li>
                    </ul>
                </li>
                <!--
                <li><a href="{{route('our-posts')}}">News</a></li>
                -->
                <li><a href="{{route('our-photos')}}">Gallery</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
                <li class="menu-has-children"><a href="">Portal</a>
                    <ul>
                        <li><a href="https://mahanaim.dsl.ke/staff/" target="_blank">Staff</a></li>
                        <li><a href="https://mahanaim.dsl.ke/students/" target="_blank">Student</a> </li>
                    </ul>
            </ul>
            </div>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<!--==========================
  Hero Section
============================-->
<section id="hero">
        <div class="container">

        <!-- Begin Slider -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{asset('img/1.jpg')}}" alt="Los Angeles" style="width:100%; height: 180px;">
                </div>

                <div class="item">
                    <img src="{{asset('img/g.jpg')}}" alt="Chicago" style="width:100%; height: 180px;">
                </div>

                <div class="item">
                    <img src="{{asset('img/1.jpg')}}" alt="Chicago" style="width:100%; height: 180px;">
                </div>

            </div>

            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <! -- End of Slider -->

            <!--
            <div class="video">
            <iframe src="https://www.youtube.com/embed/NTYJOV_lLIU?autoplay=1"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            -->

        </div>
</section><!-- #hero -->
@yield('content')

<!--==========================
  Footer
============================-->
<footer id="footer">
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 text-center">
            <div class="copyright text-center">
                &copy; Copyright <strong>mei</strong>. All Rights Reserved
            </div>

            <div class="credits">
                Designed by <a href="https://kodenaut.github.io">Mahanaim</a>

            </div>
            </div>
        </div>
        </div>
    <br>
</footer><!-- #footer -->

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
<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="js/easing.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.tabs.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="{{asset('js/main1.js')}}"></script>
</body>
</html>