@extends('mahanaim.layout')

@section('content')
    <!-- Top Stories Area -->
    <br>
    <main id="main" style="margin-top: 2px;">


        <div class="container">
                    <!-- End Stories Area -->

                            <div class="row">
                                <div class="col-lg-2 col-sm-2">
                                    <div class="list-group p-0">
                                        <a href="#" class="list-group-item" style="font-family: Symbola; font-weight: bold; font-size: 16px; background: #1b6d85; color: black;">Quick Links</a>
                                        <a href="{{route('our-schools')}}" class="list-group-item">Schools</a>
                                        <a href="{{route('fee-structure')}}" class="list-group-item">Fee Structure</a>
                                        <a href="{{route('term-dates')}}" class="list-group-item">Term Dates</a>
                                        <a href="{{route('timetable')}}" class="list-group-item">Timetable</a>
                                        <a href="#" class="list-group-item">Contact</a>
                                    </div>
                                </div>

                                <div class="col-lg-7 col-sm-7 post-list">

                                    <!-- Start Post Area -->
                                    <section class="post-area">

                                        <!-- Single post -->
                                        <div class="card card-body">
                                            <a href="" class="list-group-item px-1 mt-0" style="background: #1b6d85; color: black; font-family: Symbola;"><strong>{{ $notice->title }}</strong></a>

                                                <div class="single-stories-carousel d-flex align-items-center">
                                                    <div class="stories-details" style="font-family: Symbola;">
                                                        <p class="" style="">
                                                          {{ $notice->content }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr style="border-style: dashed; margin: 0;">
                                        <!-- End Single post -->
                                        </div>

                                        <br>

                                        <!-- Start Post Area -->
                                    </section>
                                </div>


                                <div class="col-lg-3 col-sm-3 sidebar">
                                    <div class="list-group" style="border: 1px solid lightgray; color: black; font-family: Symbola; font-size: 15px; border-radius: 3px;">
                                        <a href="#" class="list-group-item" style="background: #1b6d85; color: black;"><strong>Other Notices<span class="badge float-right" style="background: #1b1b1b;">
                                                    <i class="fas fa-book-open"></i>
                                                </span> </strong></a>
                                        @foreach($notices as $notice)
                                             <a href="{{route('view-notice', $notice->id)}}" class="list-group-item">{{ $notice->title }}<span class="badge" style="background: #0a568c;">{{ date('d-M-y', strtotime($notice->created_at))}}</span></a>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        </div>
                    <!-- Start main body Area -->

    </main>

@endsection