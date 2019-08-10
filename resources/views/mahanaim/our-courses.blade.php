@extends('mahanaim.layout')

<link href="{{asset('css/style.css')}}" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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
                    <a href="" class="list-group-item text-center" style="background: #0f7b9f; color: black; font-size: 18px; font-family: Symbola;"><strong>{{$school->name}}&nbsp;Courses</strong></a>
                </div>
                <div class="row">

                    @foreach($courses as $course)
                        <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="caption">
                                <ul class="list-group">
                                    <li class="list-group-item active">{{ $course->name }}</li>

                                    <div class="row my-1">
                                        <div class="col-sm-6">
                                            <li class="list-group-item">Grade:&nbsp;{{ $course->qualification }}</li>
                                        </div>
                                        <div class="col-sm-6">
                                            <li class="list-group-item">Duration:&nbsp;{{ $course->duration }}</li>
                                        </div>
                                    </div>

                                    <div class="row my-1">
                                        <div class="col-sm-6">
                                            <li class="list-group-item">Modules:&nbsp;{{ $course->modules }}</li>
                                        </div>
                                        <div class="col-sm-6">
                                            <li class="list-group-item">Exam:&nbsp;{{ $course->exam_body }}</li>
                                        </div>
                                    </div>
                                    <div class="row my-1">
                                        <div class="col-sm-12 text-center">
                                            <li class="list-group-item">Mode:&nbsp;{{ $course->mode }}</li>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
        </section><!-- #schools -->

    </div>
        </div>
    </main>
@endsection
