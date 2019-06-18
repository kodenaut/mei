@extends('mahanaim.layout')


@section('content')
    <!--==========================
    Blog Section
    ============================-->
    <main id="main">
        <div class="row about-container">

            <div class="col-lg-12 content order-lg-1 order-2">

                <!--==========================
      Portfolio Section
    ============================-->
                <section id="portfolio">
                    <div class="container wow fadeInUp">
                        <div class="section-header">
                            <h3 class="section-title">Gallery</h3>
                            <hr>
                        </div>

                        <div class="row" id="portfolio-wrapper">

                            @foreach($photos as $photo)
                                <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                                    <a href="">
                                        <img src="{{$photo->image}}" alt="" style="width: 100%; height: 100%;">
                                        <div class="details" style="width: 84%;">
                                            <span>{{ $photo->caption }}</span>
                                        </div>
                                    </a>
                                </div>
                            @endforeach

                        </div>

                    </div>
                </section><!-- #portfolio -->

            </div>
        </div>
    </main>
@endsection