@extends('admin.layout')
<link href="{{asset('css/style.css')}}" rel="stylesheet">

@section('content')
    <!-- The Modal -->
    <div class="modal" id="modal-add">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">New Schedule</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="post" class="form-horizontal" action="{{route('add-schedule')}}" enctype="multipart/form-data">
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
        <section id="services" style="width: 100%;">
            <div class="container wow fadeIn">
                <div class="section-header">
                    <button class="btn btn-outline-info btn-sm float-right" data-toggle="modal" data-target="#modal-add" style="margin: 2px;">
                        Add Schedule&nbsp;<i class="fas fa-plus-circle"></i>
                    </button>
                    <h3 class="section-title">Term Dates</h3>
                    <hr>
                    <br>
                </div>


                <div class="row">
                    @foreach($terms as $term)
                                    <div class="col-sm-2">
                                        <li style="list-style: none;">
                                            <a href="{{ $term->file }}" target="_blank" style="color: black; font-family: Symbola;"><strong><i class="fas fa-angle-double-right"></i> {{ $term->title }}</strong>
                                            </a>
                                        </li>
                                    <button class="btn btn-success btn-sm mx-1 float-left" data-toggle="modal" data-target="#updatemodal-{{ $term->id }}">
                                        <i class="fas fa-edit"></i>
                                    </button>

                                    <form method="post" action={{route('delete-term', $term->id)}}"" class="form-btn" style="display: inline-block;">
                                        @csrf
                                        <button class="btn btn-danger btn-sm form-btn" type="submit" onclick='return confirm("Are you sure you want to Delete this Schedule?")'>
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                    </div>



                        <!-- School Modal -->
                        <div class="modal" id="modal-{{ $term->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">{{ $term->title }}</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <iframe src="{{ $term->file }}" width="100%" style="height: 200%;"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End of Modal-->

                        <!-- Update Modal -->
                        <div class="modal" id="updatemodal-{{ $term->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Update {{ $term->title }}</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Update body -->
                                    <div class="modal-body">
                                        <form method="post" class="form-horizontal" action="" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label class="control-label">Title:</label>
                                                <input type="text" class="form-control" name="title" value="{{ $term->title }}">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">File:</label>
                                                <input type="file" name="file" class="form-control" value="{{ $term->file }}">
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
        </section>


@endsection