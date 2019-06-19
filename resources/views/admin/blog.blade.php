@extends('admin.layout')
<link href="{{asset('css/style.css')}}" rel="stylesheet">


@section('content')
    <!--==========================
    Blog Section
    ============================-->
    <section id="facts">
        <div class="container wow fadeIn">
            <div class="section-header">
                <a href="{{route('add-post')}}" class="btn btn-outline-info btn-sm float-right" style="margin: 2px;">Add Post
                    <i class="fas fa-plus-circle"></i>
                </a>
                <h3 class="section-title">Blog</h3>
                <hr>
            </div>
            <div class="row">
                @foreach($posts as $post)
                <article class="media content-section m-2" style="width: 100%;">
                    <div class="media-body">
                        <div class="col-sm-3 float-left">
                            <img src="{{ $post->image }}" alt="" style="width: 100%;" class="rounded img-fluid">
                        </div>
                        <div class="article-metadata">
                            <h4><a class="article-title" href="{{route('view-post', $post->id)}}">{{ $post->title }}</a><small class="text-muted float-right" style="font-size: 14px;">{{ $post->created_at }}</small></h4>
                        </div>
                        <div class="col-sm-9 float-right">
                            <p class="article-content">{!! $post->content  !!} </p>
                            <hr>
                            <a class="mr-2 float-left" href="">Author</a>
                            <a class="mr-2 float-right" style="color: steelblue;" href="{{route('view-post', $post->id)}}">More>></a>
                        </div>
                    </div>
                </article>
                    @endforeach

            </div>

        </div>
    </section>
    @endsection