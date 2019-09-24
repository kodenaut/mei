@extends('mahanaim.layout')

@section('content')
    <!-- Top Stories Area -->
    <main id="main" style="margin-top: 2px;">
        <div class="container">
            <div class="row about-container">
                    <!-- End Stories Area -->


                    <!-- Start main body Area -->
                    <div class="main-body section-gap">
                        <div class="container box_1170">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="list-group p-0">
                                        <a href="#" class="list-group-item" style="font-family: Symbola; font-weight: bold; font-size: 16px; background: #265ea1; color: white;">Quick Links</a>
                                        <a href="{{route('our-schools')}}" class="list-group-item">Schools</a>
                                        <a href="{{route('fee-structure')}}" class="list-group-item">Fee Structure</a>
                                        <a href="{{route('term-dates')}}" class="list-group-item">Term Dates</a>
                                        <a href="{{route('timetable')}}" class="list-group-item">Timetable</a>
                                        <a href="#" class="list-group-item">Contact</a>
                                    </div>
                                </div>
                                <div class="col-lg-10 post-list">

                                    <!-- Start Post Area -->

                                        <!-- Single post -->
                                        <div class="card card-body" style="height: 100%;">
                                            <a href="" class="list-group-item mx-1 px-1 mt-0" style="background: #265ea1; color: black; font-size: 16px; font-family: Symbola;"><strong>Time Tables</strong></a>

                                            <div class="row">
                                            @foreach($timetables as $timetable)
                                                <div class="col-sm-2">
                                                    <li style="list-style: none;">
                                                        <a href="{{ $timetable->file }}" target="_blank" style="color: black; font-family: Symbola;"><strong><i class="fas fa-angle-double-right"></i> {{ $timetable->title }}</strong>
                                                        </a>
                                                    </li>
                                                </div>
                                        @endforeach
                                            </div>
                                        </div>
                                        <!-- End Single post -->


                                        <br>
                                    <!-- Start Post Area -->


                            </div>
                        </div>
                    </div>
                    <!-- Start main body Area -->
                </div>
            </div>
        </div>
    </main>

@endsection