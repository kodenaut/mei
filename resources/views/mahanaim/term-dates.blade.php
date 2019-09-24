@extends('mahanaim.layout')

@section('content')
    <!-- Top Stories Area -->
    <main id="main">
        <div class="container">
            <div class="row about-container">
                <div class="col-lg-12 content order-lg-1 order-2">
                    <!-- End Stories Area -->


                    <!-- Start main body Area -->
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="list-group p-0">
                                        <a href="#" class="list-group-item" style="font-family: Symbola; font-weight: bold; font-size: 16px; background: #265ea1; color: white;">Quick Links</a>
                                        <a href="{{route('our-schools')}}" class="list-group-item" style="color: #0a568c;">Schools</a>
                                        <a href="{{route('fee-structure')}}" class="list-group-item" style="color: #0a568c;">Fee Structure</a>
                                        <a href="{{route('term-dates')}}" class="list-group-item" style="color: #0a568c;">Term Dates</a>
                                        <a href="{{route('timetable')}}" class="list-group-item" style="color: #0a568c;">Timetable</a>
                                        <a href="{{route('contact')}}" class="list-group-item" style="color: #0a568c;">Contact</a>
                                    </div>
                                </div>
                                <div class="col-sm-10">

                                    <!-- Start Post Area -->

                                        <!-- Single post -->
                                        <div class="card card-body mt-1" style="height: 100%;">
                                            <div class="section-header">
                                                <a href="" class="list-group-item text-center" style="background: #265ea1; color: white; font-size: 18px; font-family: Symbola;"><strong>Our Schedule</strong></a>
                                            </div>

                                            <div class="row">
                                            @foreach($terms as $term)
                                                <div class="col-sm-2">
                                                <li style="list-style: none;">
                                                    <a href="{{ $term->file }}" target="_blank" style="color: black; font-family: Symbola;"><strong><i class="fas fa-angle-double-right"></i> {{ $term->title }}</strong>
                                                    </a>
                                                </li>
                                                </div>
                                            @endforeach
                                            </div>
                                        <!-- End Single post -->
                                        </div>

                                        <br>
                                    <!-- Start Post Area -->
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- Start main body Area -->
                </div>

    </main>
    <br>
    <br>

@endsection