@extends('mahanaim.layout')

@section('content')
    <!-- Top Stories Area -->
    <br>
    <main id="main" style="margin-top: 2px;">
        <div class="container">
            <div class="row about-container">
                <div class="col-lg-12 content order-lg-1 order-2">
                    <section class="top-stories-area">
                        <div class="container wow fadeIn">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <h4 style="font-family: 'Monoton'; margin-left: 22px; border-bottom: 1px solid lightgray; margin-bottom: 1px;">
                                        <i class="fas fa-newspaper"></i>&nbsp;Recent News</h4>
                                    <div class="owl-carousel active-stories-carousel">

                                        <!-- single stories carousel -->
                                        @foreach($posts as $post)
                                            <div class="single-stories-carousel d-flex align-items-center">
                                                <div class="stories-thumb">
                                                    <img class="img-fluid" src="{{ $post->image }}" alt="" style="height: 100px; width: 300px;">
                                                </div>
                                                <div class="stories-details">
                                                    <h6><a href="{{route('show-post', $post->id)}}" style="color: black;"><b>{{ $post->title }}</b></a></h6>
                                                    <p class="">
                                                        <?php
                                                        $cont =substr($post->content,0,20);
                                                        ?>
                                                        {!! $cont !!}...&nbsp;
                                                        <a href="{{route('show-post', $post->id)}}">
                                                            More
                                                        </a>
                                                    </p>

                                                    <p>{{ date('d-M-y', strtotime($post->created_at))}}</p>
                                                </div>
                                            </div>
                                    @endforeach
                                    <!-- End single stories carousel -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <br>
                    <!-- End Stories Area -->


                    <!-- Start main body Area -->
                    <div class="main-body section-gap">
                        <div class="container box_1170">
                            <div class="row">
                                <div class="col-lg-8 post-list">

                                    <!-- Start Post Area -->
                                    <section class="post-area">

                                        <!-- Single post -->
                                        @foreach($olds as $old)
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-post-item">
                                                    <div class="post-thumb">
                                                        <img class="img-fluid" src="{{ $old->image }}" alt="" style="height: 300px;">
                                                    </div>
                                                    <div class="post-details">
                                                        <h4><a href="{{route('show-post', $old->id)}}">{{ $old->title }}</a></h4>
                                                        <p class="">
                                                            <?php
                                                            $cont =substr($old->content,0,150);
                                                            ?>
                                                            {!! $cont !!}...&nbsp;
                                                            <a href="{{route('show-post', $old->id)}}">
                                                                More
                                                            </a>
                                                        </p>
                                                        <div class="blog-meta">
                                                            <a href="#" class="m-gap"><i class="fas fa-calendar"></i>&nbsp;{{ date('d-M-y', strtotime($old->created_at))}}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    @endforeach
                                    <!-- End Single post -->

                                    </section>
                                    <!-- Start Post Area -->
                                </div>


                                <div class="col-lg-4 sidebar">

                                    <div class="single-widget popular-posts-widget">
                                        <div class="jq-tab-wrapper" id="horizontalTab">
                                            <div class="jq-tab-menu">
                                                <div class="jq-tab-title" style="font-size: 15px; font-family: 'Monoton';"><b>Notice Board</b></div>
                                            </div>
                                            <div class="jq-tab-content-wrapper">
                                                @foreach($notices as $notice)
                                                    <div class="single-popular-post d-flex flex-row">
                                                        <div class="popular-details">
                                                            <h6><a href="{{ route('view-notice', $notice->id) }}">{{ $notice->title }}</a></h6>
                                                            <p style="color: white;white-space: nowrap;overflow: hidden;text-overflow: ellipsis; max-width: 45%;">{{ $notice->content }}</p>
                                                            <p><i class="fas fa-calendar"></i>&nbsp;{{ date('d-M-y', strtotime($notice->created_at))}}</p>
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start main body Area -->
            </div>
        </div>
    </main>

@endsection