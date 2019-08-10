@extends('mahanaim.layout')

@section('content')
<!-- Top Stories Area -->

<main id="main" class="mt-2">
<!-- Start main body Area -->
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <div class="list-group">
                    <a href="#" class="list-group-item" style="font-family: Symbola; font-weight: bold; font-size: 16px; background: #0f7b9f; color: black;">Quick Links</a>
                    <a href="{{route('our-schools')}}" class="list-group-item">Schools</a>
                    <a href="{{route('fee-structure')}}" class="list-group-item">Fee Structure</a>
                    <a href="{{route('term-dates')}}" class="list-group-item">Term Dates</a>
                    <a href="{{route('timetable')}}" class="list-group-item">Timetable</a>
                    <a href="{{route('contact')}}" class="list-group-item">Contact</a>
                </div>
                <div class="list-group">
                    <a href="#" class="list-group-item" style="font-family: Symbola;background: #0f7b9f; color: black;"><strong>Follow us</strong></a>
                    <a href="#" class="list-group-item"><i class="fab fa-facebook"></i>&nbsp;Facebook</a>
                    <a href="#" class="list-group-item"><i class="fab fa-twitter"></i>&nbsp;Twitter</a>
                    <a href="#" class="list-group-item"><i class="fab fa-instagram"></i>&nbsp;Instagram</a>
                    <a href="#" class="list-group-item"><i class="fab fa-linkedin"></i>&nbsp;LinkedIn</a>
                </div>
            </div>
            <div class="col-sm-7 post-list m-0">

                <!-- Start Post Area -->
                <section class="post-area">

                        <!-- Single post -->
                    <div class="card card-body m-0">
                        <a href="" class="list-group-item mx-1 px-1 mt-0" style="background: #0f7b9f; color: black; font-size: 16px; font-family: Symbola;"><strong>Recent News</strong></a>
                        @foreach($news as $new)
                        <div class="single-stories-carousel d-flex align-items-center m-0">
                            <div class="col-sm-2 stories-thumb my-1 p-0">
                                <img class="img-fluid" src="{{ $new->image }}" alt="" style="height: 100px; width: 100%;">
                            </div>
                            <div class="stories-details m-0" style="font-family: Symbola;">
                                <h5 style="margin-top: 0;"><a href="{{route('show-post', $new->id)}}" style="color: #1b6d85; font-family: Purisa;"><strong>{{ $new->title }}</strong></a>
                                    <span class="badge float-right" style="background: #1b1b1b;">{{ date('d-M-y', strtotime($new->created_at))}}</span>
                                </h5>
                                <p class="">
                                    <?php
                                    $cont =substr($new->content,0,190);
                                    ?>
                                    {!! $cont !!}...&nbsp;
                                    <a href="{{route('show-post', $new->id)}}">
                                        <span class="badge" style="background: #0a568c;">Read More</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                            <hr style="border-style: dashed; margin: 0;">
                        @endforeach
                        <!-- End Single post -->
                    </div>

                    <br>
                    <div class="list-group m-0 p-1" style="border: 1px solid lightgray;">
                        <a href="" class="list-group-item mx-1 px-1" style="background: #0f7b9f; color: black; font-family: Symbola;"><strong>Recent Notices</strong></a>
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


            <div class="col-sm-3 sidebar m-0">
                    <div class="list-group p-1" style="border: 1px solid lightgray; color: black; font-family: cursive; font-size: 13px; border-radius: 3px;">
                       @foreach($wms as $wm)
                        <a href="#" class="list-group-item p-3" style="background: #0f7b9f; color: black;"><strong>{{ $wm->title }}<span class="badge float-right" style="background: #1b1b1b;">Week 3</span> </strong></a>
                       @endforeach
                        @foreach($wms as $wm)
                           <?php
                            $cont =substr($wm->content,0,550);
                            ?>
                            {!! $cont !!}...
                               <a href="{{route('show-post', $wm->id)}}">
                                   <span class="badge" style="background: #0a568c;">Read More</span>
                               </a>
                        @endforeach
                    </div>
            </div>
        </div>
    </div>

</main>

@endsection