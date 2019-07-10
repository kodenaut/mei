@extends('mahanaim.fee-custom')

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@section('content')
    <!--==========================
    Blog Section
    ============================-->
    <main id="main" style="padding-top: 35px;">
        <div class="container">
        <div class="row about-container">

            <div class="col-lg-12 content order-lg-1 order-2">
                <section id="facts">
                    <div class="container wow fadeIn">
                        <div class="section-header">
                            <h3 class="section-title pt-4">{{ $post->title }}</h3>
                            <hr style="margin-right: 25px;">
                        </div>
                        <div class="row">
                                <article class="media content-section m-2" style="width: 100%;">
                                    <div class="media-body">
                                        <div class="col-sm-3 float-left">
                                            <img src="{{ $post->image }}" class="img-fluid" alt="" style="width: 100%;">
                                        </div>
                                        <div class="col-sm-9 float-right" style="padding-right: 45px;">
                                            <p class="article-content" style="white-space: pre-line; line-height: 1.2em; height: 3.6em; overflow: hidden; text-overflow: ellipsis; max-width: 90%;">{!! $post->content !!}</p>
                                            <hr style="margin-right: 25px;">
                                            <small class="float-right">Posted on:&nbsp;{{ date('d-M-y', strtotime($post->created_at))}}</small>
                                            <a class="mr-2 float-left" href="">Author</a>
                                        </div>
                                    </div>
                                </article>
                        </div>

                    </div>
                </section>
            </div>
        </div>
        </div>
    </main>
@endsection