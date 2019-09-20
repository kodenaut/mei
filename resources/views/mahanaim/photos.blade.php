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
                            <a href="" class="list-group-item mt-1 text-center" style="background: #265ea1; color: white; font-size: 18px; font-family: Symbola;"><strong>Gallery</strong></a>
                        </div>

                        <div class="row" id="portfolio-wrapper">

                            @foreach($photos as $photo)
                                <div class="col-sm-3 portfolio-item filter-app">
                                    <a href="{{ $photo->image }}" target="_blank">
                                        <img src="{{$photo->image}}" class="img-fluid" alt="" style="width: 100%; height:180px;">
                                        <div class="details" style="width: 84.5%;">
                                            <span>{{ $photo->caption }}</span>
                                        </div>
                                    </a>
                                </div>
                            @endforeach

                        </div>

                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <div class="d-flex justify-content-center">
                                {{ $photos->links() }}
                            </div>
                        </div>
                    </div>
                </section><!-- #portfolio -->

            </div>

    </main>
    <br><br>
@endsection