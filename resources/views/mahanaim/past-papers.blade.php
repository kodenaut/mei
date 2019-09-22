@extends('mahanaim.layout')
<link href="{{asset('css/style.css')}}" rel="stylesheet">

@section('content')
    <main id="main">
        <div class="container wow fadeInUp">

            <div class="row about-container">
                <div class="col-lg-12 content">
                    <!--==========================
                Schools Section
              ============================-->
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="list-group">
                                <a href="#" class="list-group-item" style="font-family: Symbola; font-weight: bold; font-size: 16px; background: #265ea1; color: white;">Quick Links</a>
                                <a href="{{route('our-schools')}}" class="list-group-item">Schools</a>
                                <a href="{{route('fee-structure')}}" class="list-group-item">Fee Structure</a>
                                <a href="{{route('term-dates')}}" class="list-group-item">Term Dates</a>
                                <a href="#" class="list-group-item">Timetable</a>
                                <a href="{{route('contact')}}" class="list-group-item">Contact</a>
                            </div>
                            <div class="list-group">
                                <a href="#" class="list-group-item" style="font-family: Symbola; background: #265ea1; color: white;"><strong>Follow us</strong></a>
                                <a href="#" class="list-group-item"><i class="fab fa-facebook"></i>&nbsp;Facebook</a>
                                <a href="#" class="list-group-item"><i class="fab fa-twitter"></i>&nbsp;Twitter</a>
                                <a href="#" class="list-group-item"><i class="fab fa-instagram"></i>&nbsp;Instagram</a>
                                <a href="#" class="list-group-item"><i class="fab fa-linkedin"></i>&nbsp;LinkedIn</a>
                            </div>
                        </div>

                        <div class="col-sm-9">
                        <section id="services" style="width: 100%;">
                        <div class="section-header">
                            <a href="" class="list-group-item text-center" style="background: #265ea1; color: white; font-size: 18px; font-family: Symbola;"><strong>KCSE Subjects</strong></a>
                        </div>
                        <div class="row mb-3">
                            @foreach($subjects as $subject)
                                <div class="col-sm-3">
                                    <li style="list-style: none;">
                                        <a href="{{route('papers', $subject->id)}}" style="color: black; font-family: Symbola;"><strong><i class="fas fa-angle-double-right"></i> {{ $subject->title }}</strong>
                                        </a>
                                    </li>
                                </div>

                                <hr style="border-style: dashed; margin: 0;">
                            @endforeach

                        </div>
                    </section><!-- #schools -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection