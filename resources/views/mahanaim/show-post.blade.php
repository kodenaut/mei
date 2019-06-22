@extends('mahanaim.custom')


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
                            <h3 class="section-title">{{ $post->title }}</h3>
                            <hr>
                        </div>
                        <div class="row">
                                <article class="media content-section m-2" style="width: 100%;">
                                    <div class="media-body">
                                        <div class="col-sm-3 float-left">
                                            <img src="{{ $post->image }}" class="img-fluid" alt="" style="width: 100%;">
                                        </div>
                                        <div class="col-sm-9 float-right">
                                            <p class="article-content" style="white-space: pre-line; line-height: 1.2em; height: 3.6em; overflow: hidden; text-overflow: ellipsis; max-width: 90%;">{!! $post->content !!}</p>
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