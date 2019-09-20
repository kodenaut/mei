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
                    <form method="post" class="form-horizontal" action="{{route('add-paper', $subject->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Title:</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Year:</label>
                                    <input type="text" class="form-control" name="year">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Question Paper:</label>
                                    <input type="file" class="form-control" name="qpaper">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Answers:</label>
                                    <input type="file" class="form-control" name="apaper">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal-->

    <div class="row">
        <!--==========================
    Schools Section
  ============================-->
        <section id="services" style="width: 100%;">
            <div class="container wow fadeIn">
                <div class="section-header mb-0">
                    <button class="btn btn-outline-info btn-sm float-right" data-toggle="modal" data-target="#modal-add" style="margin: 2px;">Add Paper
                        <i class="fas fa-plus-circle"></i>
                    </button>
                    <h3 class="section-title">{{ $subject->title }} Papers</h3>
                    <hr>
                </div>
                <div class="row">

                    <div class="col-sm-12 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="message-box">
                            <div class="row">
                                @foreach($papers as $paper)
                                    <div class="col-sm-3">
                                        <li style="list-style: none;">
                                            <a href="" style="color: black; font-family: Symbola;"><strong><i class="fas fa-angle-double-right"></i> {{ $paper->title }}</strong>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#paper-{{ $subject->id }}"><i class="fas fa-edit"></i> </a>
                                            <form method="post" action="{{route('delete-subject', $subject->id)}}" class="form-btn m-1" style="display: inline-block;">
                                                @csrf
                                                <button style="color: red;" type="submit" onclick='return confirm("Are you sure you want to Delete this Subject?")'>
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </li>
                                    </div>

                                    <hr style="border-style: dashed; margin: 0;">

                                    <!-- The Modal -->
                                    <div class="modal" id="paper-{{ $subject->id }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">New Subject</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <form method="post" class="form-horizontal" action="{{route('update-subject', $subject->id)}}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label class="control-label">Title:</label>
                                                            <input type="text" class="form-control" name="title" value="{{ $subject->title }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-info">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Modal-->
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- #schools -->
    </div>

@endsection