@extends('mahanaim.layout')
@section('content')
<main id="main" class=>
    <!-- Start main body Area -->
    <div class="container">
        <div class="row about-container">
            <div class="col-lg-12 content">
            <div class="card card-body my-1" >
                <section id="services" style="width: 100%; margin-top: 0; padding-top: 0;">
                    <h3 class="text-center"><span class="badge" style="background: #265ea1;">Mission Statement</span></h3>
                <div class="row text-center">
                    @foreach($infos as $about)
                        <div class="col-sm-4" style="font-family: Symbola;">
                            <span class="badge">{{ $about->title }}</span>
                            <hr>
                                <?php
                                $cont =substr($about->content,0,200);
                                ?>
                                {!! $cont !!}...&nbsp;
                                <a href="#" data-toggle="modal" data-target="#modal-{{ $about->id }}" style="color: #0a568c;">
                                    More
                                </a>
                        </div>


                        <!-- Modal -->
                        <div class="modal" id="modal-{{$about->id}}">
                            <div class="modal-dialog modal-md">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title text-danger">{{ $about->title }}</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <p style="color: black;">
                                            {{ $about->content }}
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <span class="float-right">{{ $about->title }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End of Modal-->
                    @endforeach

                </div>
                   <br>
                    <h3 class="text-center"><span class="badge" style="background: #265ea1;">Our Tagline</span></h3>
                    <div class="row text-center">
                        @foreach($tags as $about)
                            <div class="col-sm-4" style="font-family: Symbola;">
                                <span class="badge">{{ $about->title }}</span>
                                <hr>
                                <?php
                                $cont =substr($about->content,0,200);
                                ?>
                                {!! $cont !!}...&nbsp;
                                <a href="#" data-toggle="modal" data-target="#modal-{{ $about->id }}" style="color: #0a568c;">
                                    More
                                </a>
                            </div>


                            <!-- Modal -->
                            <div class="modal" id="modal-{{$about->id}}">
                                <div class="modal-dialog modal-md">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title text-danger">{{ $about->title }}</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <p style="color: black;">
                                                {{ $about->content }}
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <span class="float-right">{{ $about->title }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End of Modal-->
                    @endforeach
                    </div>


                </section>
            </div>

        </div>
        </div>
    </div>
</main>
    @endsection