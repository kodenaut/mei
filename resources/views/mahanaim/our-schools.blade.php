@extends('mahanaim.layout')
<link href="{{asset('css/style.css')}}" rel="stylesheet">

@section('content')
    <main id="main">
        <div class="container wow fadeInUp">

    <div class="row about-container">
        <div class="col-lg-12 content">
        <!--==========================
    Schools Section
  ============================-->
        <section id="services" style="width: 100%;">
                <div class="section-header">
                    <a href="" class="list-group-item text-center" style="background: #265ea1; color: white; font-size: 18px; font-family: Symbola;"><strong>Our Schools</strong></a>
                </div>
            <div class="row mb-3">
                    @foreach($schools as $school)
                        <div class="col-sm-3 pt-5 mt-3 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="box">
                                <div class="icon">
                                    <a href="">
                                        <img class="img-fluid rounded-circle" src="{{ $school->image }}" alt="{{ $school->name }}" style="height: 70px; width: 74px;">
                                    </a>
                                </div>

                                <div class="caption mb-2">
                                    <h4 class="title pt-5"><a href="">{{ $school->name }}</a></h4>
                                    <p class="" style="color: black;">
                                        <?php
                                        $cont =substr($school->description,0,50);
                                        ?>
                                        {!! $cont !!}...&nbsp;
                                        <a href="#" data-toggle="modal" data-target="#modal-{{ $school->id }}">
                                            More
                                        </a>
                                    </p>
                                    <a href="{{route('our-courses', $school->id)}}" class="btn btn-info btn-sm mx-auto">
                                        <i class="fas fa-graduation-cap">&nbsp;Courses</i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- School Modal -->
                        <div class="modal" id="modal-{{ $school->id }}">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title text-danger">School of&nbsp;{{ $school->name }}</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <p style="color: black;">
                                            {{ $school->description }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End of Modal-->
                    @endforeach

                </div>
        </section><!-- #schools -->

    </div>
        </div>
        </div>
    </main>
@endsection