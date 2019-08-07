@extends('admin.layout')


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
                            <h3 class="section-title text-center">{{ $post->title }}</h3>
                            <hr>
                        </div>
                        <div class="row">
                            <article class="media content-section" style="width: 100%; font-family: Monotron;">
                                <div class="media-body">
                                    <div class="col-sm-3 float-left">
                                        <img src="{{ $post->image }}" class="img-fluid" alt="" style="width: 100%;">
                                    </div>
                                    <div class="col-sm-9 float-right">
                                        <p class="article-content" style="white-space: pre-line; line-height: 1.2em; height: 3.6em; overflow: hidden; text-overflow: ellipsis; max-width: 90%;">{!! $post->content !!}</p>
                                        <hr>
                                        <a href="{{route('edit-post', $post->id)}}" class="btn btn-info btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form method="post" action="{{route('delete-post', $post->id)}}" style="display: inline;">
                                            @csrf
                                            <button class="btn btn-danger btn-sm form-btn" type="submit" onclick='return confirm("Are you sure you want to Delete this Post?")'>
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
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