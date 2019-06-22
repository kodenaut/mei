@extends('mahanaim.custom')
<link href="{{asset('css/style.css')}}" rel="stylesheet">

@section('content')
    <main id="main">
        <div class="container-fluid">

            <div class="row">
                <!--==========================
            Schools Section
          ============================-->
                <section id="services" style="width: 100%;">
                    <div class="container wow fadeIn">
                        <div class="section-header">
                            <h3 class="section-title">Alumni</h3>
                            <hr>
                            <br>
                        </div>

                            @foreach($alumnis as $alumni)
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="box">
                                        <div class="icon">
                                            <a href="">
                                                <img class="img-fluid rounded-circle" src="{{ $alumni->image }}" alt="{{ $alumni->firstname }}" style="height: 70px; width: 80px;">
                                            </a>
                                        </div>

                                        <div class="caption">
                                            <h4 class="title"><a href="">{{ $alumni->firstname }}&nbsp;{{ $alumni->lastname }}</a></h4>
                                            <p class="m-0 p-0" style="line-height: 1.2em; overflow: hidden; text-overflow: ellipsis; max-width: 90%;white-space: nowrap;"> {!! $alumni->content !!}</p>
                                            <button class="btn btn-info btn-sm float-left" data-toggle="modal" data-target="#modal-{{ $alumni->id }}">
                                                <i class="fas fa-info"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- School Modal -->
                                <div class="modal" id="modal-{{ $alumni->id }}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">{{ $alumni->title }}</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <p class="m-0 p-0">
                                                    {!! $alumni->content !!}
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <p><i>{{ $alumni->firstname }}&nbsp;{{ $alumni->lastname }}</i></p>
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
    </main>
@endsection