@extends('mahanaim.custom')

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


@section('content')
    <!--==========================
    Blog Section
    ============================-->
    <main id="main" style="padding-top: 131px;">
        <div class="container">
            <section id="facts" class="pt-5">
                <div class="container wow fadeIn">
                    <div class="section-header">
                        <h3 class="section-title">Latest News</h3>
                        <hr style="margin-right: 25px;">
                    </div>
                </div>

                        @foreach($posts as $post)
                        <article class="media content-section" style="border-bottom: 1px solid grey; margin: 25px;">
                            <div class="media-body">
                                <div class="article-metadata">
                                    <h4><a class="article-title ml-4" href="{{route('show-post', $post->id)}}"><b>{{ $post->title }}</b></a><small class="text-muted float-right mr-3" style="font-size: 14px;">{{ $post->created_at }}</small></h4>
                                </div>
                                <div class="col-sm-3 float-left">
                                    <img src="{{ $post->image }}" class="img-fluid" alt="" style="width: 100%;">
                                    <a class="mr-2 mt-2 float-left" href="">Author</a>
                                </div>

                                <div class="col-sm-9 float-right">
                                    <p class="article-content">
                                        <?php
                                        $cont =substr($post->content,0,550);
                                        ?>
                                        {!! $cont !!}...&nbsp;
                                            <a href="{{route('show-post', $post->id)}}">
                                                Read more
                                            </a>
                                    </p>

                                    <hr style="margin-right: 25px;">

                                </div>
                            </div>
                        </article>
                            <br>
                            @endforeach
            </section>
        </div>
    </main>

<div class="row">
    <div class="col-sm-4"></div>
<div class="col-sm-4 mx-auto">
{{ $posts->links() }}
</div>
</div>
@endsection