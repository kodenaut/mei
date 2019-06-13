@extends('mahanaim.layout')

@section('content')
    <main id="main">
        <div class="row about-container">

            <div class="col-lg-12 content order-lg-1 order-2">
                <section id="about">
                    <div class="container wow fadeIn">
                        <div class="section-header">
                            <h3 class="section-title">Our Tagline</h3>
                            <br>
                        </div>

                        <div class="row">
                            <hr>

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

                <!-- Messages -->
                <section id="messages">
                    <div class="container wow fadeIn">
                        <div class="section-header">
                            <h3 class="section-title">Overview</h3>
                            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                        </div>
                        <div class="row">
                            <article class="media content-section">
                                <div class="media-body">
                                    <div class="article-metadata">
                                        <h4><a class="article-title" href="">Background</a><small class="text-muted float-right" style="font-size: 14px;">Date</small></h4>
                                    </div>
                                    <div class="col-sm-3 float-left">
                                        <img src="{{asset('img/team-1.jpg')}}" alt="" style="width: 100%;">
                                    </div>
                                    <div class="col-sm-9 float-right">
                                        <p class="article-content">Mahanaim Educational Institute (College) philosophies are based on utilizing the true word and knowledge of the heart that is manifested in the Bible. Through this methodology many students have amazingly acquired progressive and healthy mindsets while evolving into more effective individuals. We have discovered with assurance how people such as Abraham Lincoln and biblical figures such as Joseph and David gained wisdom from the word of God. We have employed education methodologies that will produce leaders for the next generation who will become catalysts of peace and bliss in the society.</p>
                                        <hr>
                                        <button class="btn btn-info btn-sm float-right" data-toggle="modal" data-target="#overview-modal"><i class="fas fa-info"></i> </button>
                                    </div>
                                </div>
                            </article>

                            <article class="media content-section">
                                <div class="media-body">
                                    <div class="article-metadata">
                                        <h4><a class="article-title" href="">Chancellor's Message</a><small class="text-muted float-right" style="font-size: 14px;">Date</small></h4>
                                    </div>
                                    <div class="col-sm-3 float-left">
                                        <img src="{{asset('img/team-1.jpg')}}" alt="" style="width: 100%;">
                                    </div>
                                    <div class="col-sm-9 float-right">
                                        <p class="article-content">Mahanaim Educational Institute (College) philosophies are based on utilizing the true word and knowledge of the heart that is manifested in the Bible. Through this methodology many students have amazingly acquired progressive and healthy mindsets while evolving into more effective individuals. We have discovered with assurance how people such as Abraham Lincoln and biblical figures such as Joseph and David gained wisdom from the word of God. We have employed education methodologies that will produce leaders for the next generation who will become catalysts of peace and bliss in the society.</p>
                                        <hr>
                                        <button class="btn btn-info btn-sm float-right" data-toggle="modal" data-target="#overview-modal"><i class="fas fa-info"></i> </button>
                                    </div>
                                </div>
                            </article>

                            <article class="media content-section">
                                <div class="media-body">
                                    <div class="article-metadata">
                                        <h4><a class="article-title" href="">Principal's Message</a><small class="text-muted float-right" style="font-size: 14px;">Date</small></h4>
                                    </div>
                                    <div class="col-sm-3 float-left">
                                        <img src="{{asset('img/team-1.jpg')}}" alt="" style="width: 100%;">
                                    </div>
                                    <div class="col-sm-9 float-right">
                                        <p class="article-content">Mahanaim Educational Institute (College) philosophies are based on utilizing the true word and knowledge of the heart that is manifested in the Bible. Through this methodology many students have amazingly acquired progressive and healthy mindsets while evolving into more effective individuals. We have discovered with assurance how people such as Abraham Lincoln and biblical figures such as Joseph and David gained wisdom from the word of God. We have employed education methodologies that will produce leaders for the next generation who will become catalysts of peace and bliss in the society.</p>
                                        <hr>
                                        <button class="btn btn-info btn-sm float-right" data-toggle="modal" data-target="#overview-modal"><i class="fas fa-info"></i> </button>
                                    </div>
                                </div>
                            </article>

                        </div>

                    </div>
                </section>

                <!-- Overview Modal-->
                <div class="modal" id="overview-modal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Background</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <p>
                                    Mahanaim Educational Institute (College) philosophies are based on utilizing the true word and knowledge of the heart that is manifested in the Bible. Through this methodology many students have amazingly acquired progressive and healthy mindsets while evolving into more effective individuals. We have discovered with assurance how people such as Abraham Lincoln and biblical figures such as Joseph and David gained wisdom from the word of God. We have employed education methodologies that will produce leaders for the next generation who will become catalysts of peace and bliss in the society.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Modal -->

                <!-- End Messages Section-->

            </div>

        </div>
    </main>
    @endsection
