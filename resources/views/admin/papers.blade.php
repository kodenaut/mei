@extends('admin.layout')
<link href="{{asset('css/style.css')}}" rel="stylesheet">

@section('content')
    <!-- The Modal -->
    <div class="modal" id="modal-add">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">New Paper</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="post" class="form-horizontal" action="{{route('add-paper', $course->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Title:</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <label class="control-label">File:</label>
                            <input type="file" name="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!--==========================
    Schools Section
  ============================-->
        <section id="services" style="width: 100%;">
            <div class="container wow fadeIn">
                <div class="section-header">
                    <button class="btn btn-outline-info btn-sm float-right" data-toggle="modal" data-target="#modal-add" style="margin: 2px;">Add Paper
                        <i class="fas fa-plus-circle"></i>
                    </button>
                    <h3 class="section-title">{{ $course->name }}&nbsp;Past Papers</h3>
                    <hr>
                    <br>
                </div>
                <div class="row">

                    @foreach($papers as $paper)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="box m-1" style="height: 230px;">
                                <h4 class="title pt-2"><a href="">{{ $paper->title }}</a></h4>
                                    <iframe src="{{ $paper->file }}" width="100%"></iframe>
                                <div class="caption" style="display: block;">
                                    <button class="btn btn-info btn-sm mx-1" data-toggle="modal" data-target="#modal-{{ $paper->id }}">
                                        <i class="fas fa-info"></i>
                                    </button>

                                    <button class="btn btn-success btn-sm mx-1" data-toggle="modal" data-target="#updatemodal-{{ $paper->id }}">
                                        <i class="fas fa-edit"></i>
                                    </button>

                                    <form method="post" action="{{route('delete-paper', $paper->id)}}" class="form-btn" style="display: inline-block;">
                                        @csrf
                                        <button class="btn btn-danger btn-sm form-btn" type="submit" onclick='return confirm("Are you sure you want to Delete this Paper?")'>
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Update Modal -->
                        <div class="modal" id="updatemodal-{{ $paper->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Update {{ $paper->title }}</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Update body -->
                                    <div class="modal-body">
                                        <form method="post" class="form-horizontal" action="{{route('update-paper', $paper->id)}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label class="control-label">Title:</label>
                                                <input type="text" class="form-control" name="title" value="{{ $paper->title }}">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">File:</label>
                                                <input type="file" name="file" class="form-control" value="{{ $paper->file }}">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-info">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End of Modal-->

                        <!-- More Modal -->
                        <div class="modal" id="modal-{{ $paper->id }}" style="height: 100%;">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="height: 98%;">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">{{ $paper->title }}</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Update body -->
                                    <div class="modal-body" style="height: 90%;">
                                        <iframe src="{{ $paper->file }}" width="100%" height="100%;"></iframe>
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