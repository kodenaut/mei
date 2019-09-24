@extends('admin.layout')
<link href="{{asset('css/style.css')}}" rel="stylesheet">

@section('content')
    <!-- The Modal -->
    <div class="modal" id="modal-add">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">New Timetable</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="post" class="form-horizontal" action="{{route('add-timetable')}}" enctype="multipart/form-data">
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

        <!--==========================
    Schools Section
  ============================-->
        <div id="services" style="width: 100%;">
            <div class="container wow fadeIn">
                <div class="section-header" style="margin-bottom: 0;">
                    <button class="btn btn-outline-info btn-sm float-right" data-toggle="modal" data-target="#modal-add" style="margin: 2px;">
                        Add Timetable&nbsp;<i class="fas fa-plus-circle"></i>
                    </button>
                    <h3 class="section-title">Timetable</h3>
                    <hr>
                    <br>
                </div>

                <div class="row">
                    @foreach($tables as $table)

                        <div class="col-sm-2">
                                <li style="list-style: none;">
                                    <a href="{{ $table->file }}" target="_blank" style="color: black; font-family: Symbola;"><strong><i class="fas fa-angle-double-right"></i> {{ $table->title }}</strong>
                                    </a>
                                </li>

                            <button class="btn btn-success btn-sm mx-1 float-left" data-toggle="modal" data-target="#updatemodal-{{ $table->id }}">
                                <i class="fas fa-edit"></i>
                            </button>

                            <form method="post" action="" class="form-btn" style="display: inline-block;">
                                @csrf
                                <button class="btn btn-danger btn-sm form-btn" type="submit" onclick='return confirm("Are you sure you want to Delete this Timetable?")'>
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>


            <!-- School Modal -->
            <div class="modal" id="modal-{{ $table->id }}">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">{{ $table->title }}</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <iframe src="{{ $table->file }}" width="100%" style="height: 200%;"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End of Modal-->

            <!-- Update Modal -->
            <div class="modal" id="updatemodal-{{ $table->id }}">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Update {{ $table->title }}</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Update body -->
                        <div class="modal-body">
                            <form method="post" class="form-horizontal" action="" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label">Title:</label>
                                    <input type="text" class="form-control" name="title" value="{{ $table->title }}">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">File:</label>
                                    <input type="file" name="file" class="form-control" value="{{ $table->file }}">
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
        @endforeach
        </div>

            </div>
        </div>

@endsection