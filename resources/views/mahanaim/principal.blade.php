@extends('mahanaim.layout')

@section('content')
<main id="main" style="padding-top: 2px;">
    <div class="container">
        <div class="row about-container">
            <div class="col-lg-12 content order-lg-1 order-2">
                <section id="facts" class="pt-2">
                    <div class="container wow fadeIn">
                        <div class="section-header">
                            <h3 class="section-title">Principal's Message</h3>
                            <hr style="margin-right: 25px;">
                        </div>
                        <div class="row">
                            @foreach($overviews as $overview)
                            <article class="media content-section">
                                <div class="media-body">
                                    <div class="article-metadata">
                                        <h4 class="pl-4"><a class="article-title" href="">{{ $overview->title }}</a></h4>
                                    </div>
                                    <div class="col-sm-3 float-left">
                                        <img src="{{ $overview->image }}" class="img-fluid" alt="" style="width: 100%;">
                                        <h5>Name</h5>
                                    </div>
                                    <div class="col-sm-9 float-right" style="padding-right: 45px; color: black;">
                                        <p class="article-content">{!! $overview->content !!}</p>
                                        <hr style="margin-right: 25px;">
                                    </div>
                                </div>
                            </article>

                            @endforeach

                        </div>

                    </div>
                </section>
                <!-- End Messages Section-->
                <!-- End of Overview -->
            </div>
        </div>
    </div>
</main>
@endsection