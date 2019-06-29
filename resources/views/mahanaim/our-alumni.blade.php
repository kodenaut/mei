@extends('mahanaim.custom')
<link href="{{asset('css/style.css')}}" rel="stylesheet">

@section('content')
    <main id="main" style="padding-top: 120px;">
        <div class="container">

            <div class="row">
                <!--==========================
            Schools Section
          ============================-->
                <section id="services">
                    <div class="container wow fadeIn">
                        <div class="section-header">
                            <h3 class="section-title">Alumni</h3>
                            <hr>
                            <br>
                        </div>

                            @foreach($alumnis as $alumni)
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s" style="border-radius: 15px;">
                                    <div class="card card-body mb-3">
                                    <div class="box" style="height: 400px;">
                                        <img src="{{ $alumni->image }}" class="img-fluid rounded-circle mx-auto" style="width: 150px; height: 150px;">
                                        <div class="caption m-2" style="border-radius: 5px;">
                                            <h4 class="title pt-0"><a href="">{{ $alumni->firstname }}&nbsp;{{ $alumni->lastname }}</a></h4>
                                            <p class="m-2">
                                                <?php
                                                    $cont =substr($alumni->content,0,370);
                                                ?>
                                                {!! $cont !!}...&nbsp;
                                                    <a href="#" data-toggle="modal" data-target="#modal-{{ $alumni->id }}">
                                                        Read more
                                                    </a>
                                            </p>

                                        </div>
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

    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 mx-auto">
            {{ $alumnis->links() }}
        </div>
    </div>
@endsection