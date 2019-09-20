@extends('mahanaim.layout')
<link href="{{asset('css/style.css')}}" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@section('content')
    <main id="main">
        <div class="container wow fadeInUp">
            <div class="row about-container">

                <div class="col-lg-12 content">

                <!--==========================
            Schools Section
          ============================-->
                <section id="services">
                        <div class="section-header">
                            <a href="" class="list-group-item text-center" style="background: #265ea1; color: white; font-size: 18px; font-family: Symbola;"><strong>Our Alumni</strong></a>
                        </div>

                    <div class="row mb-3">
                            @foreach($alumnis as $alumni)
                                <div class="col-sm-3" data-wow-delay="0.2s">
                                    <div class="member">
                                    <div class="card card-body mt-1">
                                        <img src="{{ $alumni->image }}" class="img-fluid rounded-circle mx-auto m-1" style="width: 80px; height: 80px;">
                                        <div class="caption">
                                            <h5 class="pt-0 text-center"><a href="" style="color: #0f7b9f;">{{ $alumni->firstname }}&nbsp;{{ $alumni->lastname }}</a></h5>
                                            <p class="m-2">
                                                <?php
                                                    $cont =substr($alumni->content,0,150);
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
                                                <h4 class="modal-title text-danger">{{ $alumni->title }}</h4>
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
        </div>
    </main>

    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 mx-auto">
            {{ $alumnis->links() }}
        </div>
    </div>
@endsection