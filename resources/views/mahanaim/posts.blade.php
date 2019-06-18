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
                @foreach($posts as $post)
                <article class="media content-section m-2" style="width: 100%;">
                    <div class="media-body">
                        <div class="article-metadata">
                            <h4><a class="article-title" href="">{{ $post->title }}</a><small class="text-muted float-right" style="font-size: 14px;">{{ $post->created_at }}</small></h4>
                        </div>
                        <div class="col-sm-3 float-left">
                            <img src="{{ $post->image }}" alt="" style="width: 100%;">
                        </div>
                        <div class="col-sm-9 float-right">
                            <p class="article-content">{!! $post->content !!}</p>
                            <hr>
                            <a class="mr-2 float-right" href="">Author</a>
                        </div>
                    </div>
                </article>
                    @endforeach
            </div>

        </div>
    </section>
            </div>
        </div>
    </main>
@endsection