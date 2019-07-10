@extends('mahanaim.layout')

@section('content')
    <!-- Top Stories Area -->
    <br>
    <main id="main" style="margin-top: 2px;">
        <div class="container">
            <div class="row about-container">
                <div class="col-lg-12 content order-lg-1 order-2">
                    <!-- End Stories Area -->


                    <!-- Start main body Area -->
                    <div class="main-body section-gap">
                        <div class="container box_1170">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="list-group p-0">
                                        <a href="#" class="list-group-item" style="font-family: Symbola; font-weight: bold; font-size: 16px; background: #1b6d85; color: black;">Quick Links</a>
                                        <a href="{{route('our-schools')}}" class="list-group-item">Schools</a>
                                        <a href="{{route('fee-structure')}}" class="list-group-item">Fee Structure</a>
                                        <a href="{{route('term-dates')}}" class="list-group-item">Term Dates</a>
                                        <a href="{{route('timetable')}}" class="list-group-item">Timetable</a>
                                        <a href="#" class="list-group-item">Contact</a>
                                    </div>
                                    <div class="list-group">
                                        <a href="#" class="list-group-item" style="font-family: Symbola;background: #1b6d85; color: black;"><strong>Follow us</strong></a>
                                        <a href="#" class="list-group-item"><i class="fab fa-facebook"></i>&nbsp;Facebook</a>
                                        <a href="#" class="list-group-item"><i class="fab fa-twitter"></i>&nbsp;Twitter</a>
                                        <a href="#" class="list-group-item"><i class="fab fa-instagram"></i>&nbsp;Instagram</a>
                                        <a href="#" class="list-group-item"><i class="fab fa-linkedin"></i>&nbsp;LinkedIn</a>
                                    </div>
                                </div>
                                <div class="col-lg-10 post-list">

                                    <!-- Start Post Area -->

                                        <!-- Single post -->
                                        <div class="card card-body" style="height: 100%;">
                                            <a href="" class="list-group-item mx-1 px-1 mt-0" style="background: #1b6d85; color: black; font-family: Symbola;"><strong>Timetable</strong></a>
                                            @foreach($timetables as $timetable)

                                                        <iframe src="{{ $timetable->file }}" height="98%"></iframe>
                                                </div>
                                                <hr style="border-style: dashed; margin: 0;">
                                        @endforeach
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