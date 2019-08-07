@extends('mahanaim.layout')


@section('content')
    <!--==========================
    Blog Section
    ============================-->
    <main id="main">
        <div class="container wow fadeInUp">


                <!--==========================
      Portfolio Section
    ============================-->
                <section id="portfolio">
                        <div class="section-header">
                            <a href="" class="list-group-item mt-3 text-center" style="background: #0f7b9f; color: black; font-size: 18px; font-family: Symbola;"><strong>Gallery</strong></a>
                        </div>

                        <div class="row" id="portfolio-wrapper">

                            @foreach($photos as $photo)
                                <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                                    <a href="">
                                        <img src="{{$photo->image}}" class="img-fluid" alt="" style="width: 100%; height:180px;">
                                        <div class="details" style="width: 84%;">
                                            <span>{{ $photo->caption }}</span>
                                        </div>
                                    </a>
                                </div>
                            @endforeach

                        </div>
                </section><!-- #portfolio -->

            </div>
        </div>
    </main>
@endsection