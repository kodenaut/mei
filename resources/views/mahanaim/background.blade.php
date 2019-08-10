@extends('mahanaim.layout')

@section('content')
    <main id="main">
        <div class="container wow fadeIn">
            <div class="row about-container">
                <div class="col-lg-12 content order-lg-1 order-2">
                <section id="facts" class="mb-3">
                        <div class="section-header">
                            <a href="" class="list-group-item text-center" style="background: #0f7b9f; color: black; font-size: 18px; font-family: Symbola;"><strong>Background Information</strong></a>
                        </div>
                            <div class="card card-body">
                            @foreach($overviews as $overview)
                                <article class="media content-section">
                                    <div class="media-body">
                                        <div class="article-metadata">
                                            <h4 class="pl-4"><a class="article-title" href="">{{ $overview->title }}</a></h4>
                                        </div>
                                        <div class="col-sm-3 float-left">
                                            <img src="{{ $overview->image }}" class="img-fluid" alt="" style="width: 100%; height: 200px;">
                                        </div>
                                        <div class="col-sm-9 float-right" style="padding-right: 45px;">
                                            <p class="article-content">{!! $overview->content !!}</p>
                                        </div>
                                    </div>
                                </article>

                            @endforeach
                            </div>

                </section>
<!-- End Messages Section-->
<!-- End of Overview -->
            </div>
        </div>
        </div>
    </main>
    @endsection