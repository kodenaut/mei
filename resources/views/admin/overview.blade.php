@extends('admin.layout')
<link href="{{asset('css/style.css')}}" rel="stylesheet">

@section('content')
    <!-- Messages -->
    <section id="messages">
        <div class="container wow fadeIn">
            <div class="section-header">
                <h3 class="section-title">Overview</h3>
                <hr>
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
                            <button class="btn btn-info btn-sm float-right"><i class="fas fa-info"></i> </button>
                        </div>
                    </div>
                </article>

                <article class="media content-section">
                    <div class="media-body">
                        <div class="article-metadata">
                            <h4><a class="article-title" href="">Chancellor's Message</a><small class="text-muted float-right" style="font-size: 14px;">Name</small></h4>
                        </div>
                        <div class="col-sm-3 float-right">
                            <img src="{{asset('img/team-1.jpg')}}" alt="" style="width: 100%;">
                        </div>
                        <div class="col-sm-9 float-left">
                            <p class="article-content">Mahanaim Educational Institute (College) philosophies are based on utilizing the true word and knowledge of the heart that is manifested in the Bible. Through this methodology many students have amazingly acquired progressive and healthy mindsets while evolving into more effective individuals. We have discovered with assurance how people such as Abraham Lincoln and biblical figures such as Joseph and David gained wisdom from the word of God. We have employed education methodologies that will produce leaders for the next generation who will become catalysts of peace and bliss in the society.</p>
                            <hr>
                            <button class="btn btn-info btn-sm float-right"><i class="fas fa-info"></i> </button>
                        </div>
                    </div>
                </article>

                <article class="media content-section">
                    <div class="media-body">
                        <div class="article-metadata">
                            <h4><a class="article-title" href="">Principal's Message</a><small class="text-muted float-right" style="font-size: 14px;">Name</small></h4>
                        </div>
                        <div class="col-sm-3 float-left">
                            <img src="{{asset('img/team-1.jpg')}}" alt="" style="width: 100%;">
                        </div>
                        <div class="col-sm-9 float-right">
                            <p class="article-content">Mahanaim Educational Institute (College) philosophies are based on utilizing the true word and knowledge of the heart that is manifested in the Bible. Through this methodology many students have amazingly acquired progressive and healthy mindsets while evolving into more effective individuals. We have discovered with assurance how people such as Abraham Lincoln and biblical figures such as Joseph and David gained wisdom from the word of God. We have employed education methodologies that will produce leaders for the next generation who will become catalysts of peace and bliss in the society.</p>
                            <hr>
                            <button class="btn btn-info btn-sm float-right"><i class="fas fa-info"></i> </button>
                        </div>
                    </div>
                </article>
            </div>

        </div>
    </section>

    <!-- End Messages Section-->
    @endsection