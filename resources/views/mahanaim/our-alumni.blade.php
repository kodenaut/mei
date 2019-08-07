@extends('mahanaim.layout')
<link href="{{asset('css/style.css')}}" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@section('content')
    <main id="main" style="padding-top: 5px;">
        <div class="container">

            <div class="row">
                <!--==========================
            Schools Section
          ============================-->
                <section id="services">
                    <div class="container wow fadeIn">
                        <div class="section-header">
                            <a href="" class="list-group-item mt-3 text-center" style="background: #0f7b9f; color: black; font-size: 18px; font-family: Symbola;"><strong>Our Alumni</strong></a>
                        </div>

                            @foreach($alumnis as $alumni)
                                <div class="col-lg-4 col-md-6 fadeInUp" data-wow-delay="0.2s" style="border-radius: 15px;">
                                    <div class="card card-body mb-3">
                                    <div class="box" style="height: 400px;">
                                        <img src="{{ $alumni->image }}" class="img-fluid rounded-circle mx-auto m-1" style="width: 150px; height: 150px;">
                                        <div class="caption m-2" style="border-radius: 5px;">
                                            <h4 class="title pt-0"><a href="">{{ $alumni->firstname }}&nbsp;{{ $alumni->lastname }}</a></h4>
                                            <p class="m-2">
                                                <?php
                                                    $cont =substr($alumni->content,0,305);
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
                                    <div class="modal-dialog">
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