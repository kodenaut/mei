@extends('mahanaim.layout')

@section('content')
    <main id="main">
        <div class="container  wow fadeIn">
            <div class="row about-container">
                <div class="col-lg-12 content order-lg-1 order-2">

                    <section id="facts">
                            <div class="section-header">
                                <a href="" class="list-group-item text-center" style="background: #265ea1; color: white; font-size: 18px; font-family: Symbola;"><strong>Greetings</strong></a>
                            </div>

                                @foreach($greetings as $new)
                            <div class="single-stories-carousel d-flex align-items-center" style="font-family: cursive;">
                                <div class="col-sm-2 stories-thumb my-1 p-0">
                                    <img class="img-fluid" src="{{ $new->image }}" alt="" style="height: 170px; width: 100%;">
                                </div>
                                <div class="stories-details m-4" style="font-family: Symbola;">
                                    <h4 style="margin-top: 0;"><a href="" data-toggle="modal" data-target="#modal-{{ $new->id }}" style="color: #024DA1; font-family: Purisa;"><strong>{{ $new->title }}</strong></a>
                                    </h4>
                                    <p class="">
                                        <?php
                                        $cont =substr($new->content,0,1050);
                                        ?>
                                        {!! $cont !!}...&nbsp;
                                        <a href="" data-toggle="modal" data-target="#modal-{{ $new->id }}">
                                            <span class="badge" style="background: #0a568c;"> More</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <hr style="border-style: dashed; margin: 0;">

                            <!-- School Modal -->
                            <div class="modal" id="modal-{{ $new->id }}">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title text-danger">{{ $new->title }}</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <p style="color: black;">
                                                {!! $new->content !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                @endforeach


                    </section>
                    <!-- End Messages Section-->
                    <!-- End of Overview -->
                </div>
            </div>
        </div>
    </main>
@endsection