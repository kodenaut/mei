@extends('mahanaim.custom')

<link href="{{asset('css/style.css')}}" rel="stylesheet">

@section('content')
    <main id="main" style="padding-top: 120px;">
        <div class="container-fluid">

    <div class="row">
        <!--==========================
    Schools Section
  ============================-->
        <section id="services" style="width: 100%;">
            <div class="container wow fadeIn">
                <div class="section-header">
                    <h3 class="section-title">{{ $school->name }}&nbsp;Courses</h3>
                    <hr>
                    <br>
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
