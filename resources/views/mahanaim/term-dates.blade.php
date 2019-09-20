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
                                        <div class="card card-body mt-1" style="height: 117%;">
                                            @foreach($terms as $term)
                                                        <iframe src="{{ $term->file }}" style="width: 100%; height: 95%;"></iframe>
                                            @endforeach
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