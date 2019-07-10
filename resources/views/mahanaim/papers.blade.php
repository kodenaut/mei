@extends('mahanaim.fee-custom')

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
                <div class="col-sm-3" style="padding-top: 5%;">
                    <div class="list-group">
                        <a class="list-group-item list-group-item-primary" style="color: black;"><b>Courses</b></a>
                        @foreach($courses as $course)
                        <a class="list-group-item list-group-item-light" href="{{route('course-papers', $course->id) }}" style="color: #0a568c;">{{ $course->name }}</a>
                            @endforeach
                    </div>
                </div>

                <div class="col-sm-9">
                    <div class="section-header text-center">
                        <h3 class="section-title pt-2">Past Papers</h3>
                        <hr>
                    </div>

                    <div class="row">

                        @foreach($papers as $paper)
                            <div class="col-sm-3 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="box m-1" style="height: 200px; border: 1px solid lightgray;">
                                    <h4 class="title pt-2 text-center"><a href="">{{ $paper->title }}</a></h4>
                                    <iframe src="{{ $paper->file }}" width="97%" height="100px;" style="margin: 4px;"></iframe>
                                    <div class="caption" style="display: block;">
                                        <button class="btn btn-info btn-sm mx-1" data-toggle="modal" data-target="#modal-{{ $paper->id }}">
                                           View
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- More Modal -->
                            <div class="modal" id="modal-{{ $paper->id }}" style="height: 100%;">
                                <div class="modal-dialog modal-lg" style="height: 99%;">
                                    <div class="modal-content" style="height: 98%;">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">{{ $paper->title }}</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Update body -->
                                        <div class="modal-body" style="height: 90%;">
                                            <iframe src="{{ $paper->file }}" width="100%" height="88%;"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- End of Modal-->
                        @endforeach

                    </div>


                </div>
            </div>

        </div>
    </main>
@endsection
