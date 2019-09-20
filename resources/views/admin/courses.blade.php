@extends('admin.layout')

<link href="{{asset('css/style.css')}}" rel="stylesheet">

@section('content')
    <!-- Course Modal -->
    <div class="modal" id="course-add">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Course</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="post" action="{{route('add-course', $school->id)}}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Name:</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Qualification:</label>
                                    <input type="text" class="form-control" name="qualification">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Duration:</label>
                                    <input type="text" class="form-control" name="duration">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Modules:</label>
                                    <input type="text" class="form-control" name="modules">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Exam Body:</label>
                                    <input type="text" class="form-control" name="exam">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Mode:</label>
                                    <input type="text" class="form-control" name="mode">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info" style="width: 100%;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- End of Modal-->


    <div class="row">
        <!--==========================
    Schools Section
  ============================-->
        <section id="services" style="width: 100%;">
            <div class="container wow fadeIn">
                <div class="section-header">
                    <button class="btn btn-outline-info btn-sm float-right" data-toggle="modal" data-target="#course-add" style="margin: 2px;">Add Course
                        <i class="fas fa-plus-circle"></i>
                    </button>
                    <h3 class="section-title">{{ $school->name }}&nbsp;Courses</h3>
                    <hr>
                    <br>
                </div>
                <div class="row">

                    @foreach($courses as $course)
                        <div class="col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
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
                                            <div class="col-sm-6">
                                            <li class="list-group-item">Mode:&nbsp;{{ $course->mode }}</li>
                                            </div>

                                            <div class="col-sm-6">
                                                <li class="list-group-item">
                                                <form method="post" action="{{route('delete-course', $course->id)}}" class="form-btn" style="display: inline-block;">
                                                    @csrf
                                                    <button class="btn btn-danger btn-sm form-btn" type="submit" onclick='return confirm("Are you sure you want to Delete this Course?")'>
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#updatemodal-{{ $course->id }}">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                </li>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                        </div>


                        <!-- Update Modal -->
                        <div class="modal" id="updatemodal-{{ $course->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Update {{ $course->name }}</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Update body -->
                                    <div class="modal-body">
                                        <form method="post" action="{{route('update-course', $course->id)}}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Name:</label>
                                                        <input type="text" class="form-control" name="name" value="{{ $course->name }}">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Qualification:</label>
                                                        <input type="text" class="form-control" name="qualification" value="{{ $course->qualification }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Duration:</label>
                                                        <input type="text" class="form-control" name="duration" value="{{ $course->duration }}">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Modules:</label>
                                                        <input type="text" class="form-control" name="modules" value="{{ $course->modules }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Exam Body:</label>
                                                        <input type="text" class="form-control" name="exam" value="{{ $course->exam_body }}">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Mode:</label>
                                                        <input type="text" class="form-control" name="mode" value="{{ $course->mode }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-info" style="width: 100%;">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End of Modal-->

                    @endforeach



                </div>
            </div>
        </section><!-- #schools -->

    </div>
@endsection