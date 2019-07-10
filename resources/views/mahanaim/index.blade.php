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
            <div class="col-lg-7 post-list">

                <!-- Start Post Area -->
                <section class="post-area">

                        <!-- Single post -->
                    <div class="card card-body">
                        <a href="" class="list-group-item mx-1 px-1 mt-0" style="background: #1b6d85; color: black; font-family: Symbola;"><strong>Recent News</strong></a>
                        @foreach($news as $new)
                        <div class="single-stories-carousel d-flex align-items-center">
                            <div class="col-sm-2 stories-thumb my-1 p-0">
                                <img class="img-fluid" src="{{ $new->image }}" alt="" style="height: 100px; width: 100%;">
                            </div>
                            <div class="stories-details" style="font-family: Symbola;">
                                <h5 style="margin-top: 0;"><a href="{{route('show-post', $new->id)}}" style="color: #1b6d85; font-family: Purisa;"><strong>{{ $new->title }}</strong></a>
                                    <span class="badge float-right" style="background: #1b1b1b;">{{ date('d-M-y', strtotime($new->created_at))}}</span>
                                </h5>
                                <p class="" style="">
                                    <?php
                                    $cont =substr($new->content,0,100);
                                    ?>
                                    {!! $cont !!}...&nbsp;
                                    <a href="{{route('show-post', $new->id)}}">
                                        <span class="badge" style="background: #0a568c;">More</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                            <hr style="border-style: dashed; margin: 0;">
                        @endforeach
                        <!-- End Single post -->
                    </div>

                    <br>
                    <div class="list-group m-1 p-1" style="border: 1px solid lightgray;">
                        <a href="" class="list-group-item mx-1 px-1" style="background: #1b6d85; color: black; font-family: Symbola;"><strong>Recent Notices</strong></a>
                        <ul style="list-style: square; padding-left: 22px;">
                        @foreach($notices as $notice)
                            <li>
                                <a href="{{route('view-notice', $notice->id)}}" style="color: black; font-family: Symbola;"><strong>{{ $notice->title }}</strong>
                                <span class="badge float-right" style="background: #1b1b1b;">{{ date('d-M-y', strtotime($notice->created_at))}}</span>
                                </a>
                            </li>
                                <hr style="border-style: dashed; margin: 0;">
                        @endforeach
                        </ul>

                    </div>

                <!-- Start Post Area -->
                </section>
            </div>


            <div class="col-lg-3 sidebar">
                    <div class="list-group p-1" style="border: 1px solid lightgray; color: black; font-family: Symbola; font-size: 15px; border-radius: 3px;">
                        <a href="#" class="list-group-item p-3" style="background: #1b6d85; color: black;"><strong>Weekly Message<span class="badge float-right" style="background: #1b1b1b;">Week 3</span> </strong></a>
                        @foreach($wms as $wm)
                           <?php
                            $cont =substr($new->content,0,280);
                            ?>
                            {!! $cont !!}... <a href="{{route('show-post', $wm->id)}}"><span class="badge" style="background: #0a568c;">More</span></a>
                        @endforeach
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- Start main body Area -->
            </div>
        </div>
    </div>
</main>

@endsection