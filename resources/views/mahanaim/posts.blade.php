@extends('mahanaim.layout')


@section('content')
    <!--==========================
    Blog Section
    ============================-->
    <main id="main">
        <div class="row about-container">

            <div class="col-lg-12 content order-lg-1 order-2">
    <section id="facts">
        <div class="container wow fadeIn">
            <div class="section-header">
                <h3 class="section-title">Blog</h3>
                <hr>
            </div>
            <div class="row">
                <article class="media content-section m-2">
                    <div class="media-body">
                        <div class="article-metadata">
                            <h2><a class="article-title" href="">Title</a><small class="text-muted float-right" style="font-size: 14px;">Date</small></h2>
                        </div>
                        <div class="col-sm-3 float-left">
                            <img src="{{asset('img/team-1.jpg')}}" alt="" style="width: 100%;">
                        </div>
                        <div class="col-sm-9 float-right">
                            <p class="article-content">Mahanaim Educational Institute (College) philosophies are based on utilizing the true word and knowledge of the heart that is manifested in the Bible. Through this methodology many students have amazingly acquired progressive and healthy mindsets while evolving into more effective individuals. We have discovered with assurance how people such as Abraham Lincoln and biblical figures such as Joseph and David gained wisdom from the word of God. We have employed education methodologies that will produce leaders for the next generation who will become catalysts of peace and bliss in the society.</p>
                            <hr>
                            <a class="mr-2 float-right" href="">Author</a>
                        </div>
                    </div>
                </article>
            </div>

        </div>
    </section>
            </div>
        </div>
    </main>
@endsection