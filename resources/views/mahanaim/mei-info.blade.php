@extends('mahanaim.layout')

@section('content')
    <br>
    <main id="main" style="padding-top: 5px;">

        <!--==========================
          About Us Section
        ============================-->
        <div class="container">
            <div class="row about-container">
                <div class="col-lg-12 content order-lg-1 order-2">
                    <section id="about">
                        <div class="container wow fadeIn">

                            <div class="section-header">
                                <h3 class="section-title">Our Tagline</h3>
                                <br>
                            </div>

                            <div class="row mr-4">
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="box">
                                        <div class="icon"><a href=""><i class="fa fa-bar-chart"></i></a></div>
                                        <h4 class="title"><a href="">Challenge</a></h4>
                                        <p class="">We encourage tomorrow’s leaders through various challenges,
                                            especially in overcoming their personal limits & thoughts.</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="box">
                                        <div class="icon"><a href=""><i class="fa fa-bar-chart"></i></a></div>
                                        <h4 class="title"><a href="">Change</a></h4>
                                        <p class="">Anyone who boards the Mahanaim Ship of Change gains a clean and a radiant heart.</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="box">
                                        <div class="icon"><a href=""><i class="fa fa-users"></i></a></div>
                                        <h4 class="title"><a href="">Cohesion</a></h4>
                                        <p class="">A single solace, where the exchange between youths from over 80 different countries occur, promotes unison.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <hr>

                    <!--==========================
    Information Section
    ============================-->
                    <div class="row">
                        <div class="col-sm-9">
                            <section id="facts">
                                <div class="container wow fadeIn">
                                    <div class="section-header">
                                        <div class="col-sm-9">
                                            <h3 class="section-title">MEI Information</h3>
                                            <hr class="mr-4">
                                        </div>
                                    </div>

                                    @foreach($infos as $info)
                                        <article class="media content-section" style="width: 100%; color: black;">
                                            <div class="media-body">
                                                <div class="article-metadata">
                                                    <h4 class="" style="font-family: Concert One;"><a class="article-title pl-4" href="" style="color: #0a568c;"><strong>{{ $info->title }}</strong></a></h4>
                                                </div>
                                                <div class="col-sm-8">
                                                    <p class="article-content">{!! $info->content  !!} </p>
                                                    <hr>
                                                </div>
                                            </div>
                                        </article>
                                    @endforeach


                                </div>
                            </section>
                        </div>


                        <!-- Notice Board-->
                        <div class="col-sm-3">
                            <div class="list-group" style="font-size: 14px; font-family: 'Source Sans Pro', sans-serif;">
                                <a class="list-group-item list-group-item-primary" style="background: #98ccff; color: #ac2925;"><b>Notice Board</b></a>
                                @foreach($notices as $notice)
                                    <a class="list-group-item list-group-item-light" href="{{route('view-notice', $notice->id)}}" style="color: #0a568c;"><i class="fas fa-angle-double-right"></i> {{ $notice->title }}</a>
                                @endforeach
                            </div>

                            <hr>
                            <br>

                            <div class="list-group" style="font-size: 14px; font-family: 'Source Sans Pro', sans-serif;">
                                <a class="list-group-item list-group-item-primary" style="background: #98ccff; color: #ac2925;"><b>Recent News</b></a>
                                @foreach($posts as $post)
                                    <a class="list-group-item list-group-item-light" href="{{route('show-post', $post->id)}}" style="color: #0a568c;"><i class="fas fa-angle-double-right"></i> {{ $post->title }}</a>
                                @endforeach
                            </div>
                            <hr>

                        </div>

                        <!-- End of Notice Board -->
                    </div>
                    <hr>
                    <br>
                </div>
            </div>
        </div>
    </main>
    @endsection