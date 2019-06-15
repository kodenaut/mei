@extends('admin.layout')

<link href="{{asset('css/style.css')}}" rel="stylesheet">


@section('content')
      <!-- The Modal -->
    <div class="modal" id="modal-add">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">New Staff</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="post" action="{{ route('add-staff') }}" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Salutation:</label>
                            <input type="text" class="form-control" name="salutation">
                        </div>
                        <div class="form-group">
                            <label class="control-label">First Name:</label>
                            <input type="text" class="form-control" name="fname">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Last Name:</label>
                            <input type="text" class="form-control" name="sname">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Position:</label>
                            <input type="text" class="form-control" name="position">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Bio:</label>
                            <textarea type="text" class="form-control" name="bio" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Passport:</label>
                            <input type="file" class="form-control" name="passport">
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
 Team Section
============================-->
        <section id="team">
            <div class="container wow fadeInUp">
                <div class="section-header">
                    <button class="btn btn-outline-info btn-sm float-right" data-toggle="modal" data-target="#modal-add" style="margin: 2px;">Add Staff
                        <i class="fas fa-user-plus"></i>
                    </button>
                    <h3 class="section-title">Staff</h3>
                    <hr>
                </div>
                <div class="row">

                    @foreach($staffs as $staff)
                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="card card-body">
                                <img src="img/team-1.jpg" alt="">
                            <div class="caption">
                                <h5>{{ $staff->salutation }} {{ $staff->first_name }}</h5>
                                <span>{{ $staff->position }}</span>
                                <p class="description">{{ $staff->bio }}</p>
                                <button class="btn btn-info btn-sm float-left" data-toggle="modal" data-target="#modal-{{ $staff->id }}">
                                    <i class="fas fa-info"></i>
                                </button>
                                <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#updatemodal-{{ $staff->id }}">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <a href="" class="btn btn-danger btn-sm float-right mx-1">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                            </div>
                        </div>
                    </div>

                        <!--  Modal -->
                        <div class="modal" id="modal-{{ $staff->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">{{ $staff->salutation }} {{ $staff->first_name }}</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <div class="modal-body">
                                        <p>{{ $staff->bio }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <p>{{ $staff->position }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Modal -->

                        <!-- Update Modal -->
                        <div class="modal" id="updatemodal-{{ $staff->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Update {{ $staff->salutation }} {{ $staff->first_name }}</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                        <div class="modal-body">
                            <form method="post" class="form-horizontal" action="{{route('update-staff', $staff->id)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label">Salutation:</label>
                                    <input type="text" class="form-control" name="name" value="{{ $staff->salutation }}">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">First Name:</label>
                                    <input type="text" class="form-control" name="fname" value="{{ $staff->first_name }}">
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Last Name Name:</label>
                                    <input type="text" class="form-control" name="sname" value="{{ $staff->last_name }}">
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Position:</label>
                                    <input type="text" class="form-control" name="position" value="{{ $staff->position }}">
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Bio:</label>
                                    <textarea type="text" class="form-control" name="bio" rows="4">{{ $staff->bio }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Passport:</label>
                                    <input type="file" name="image" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                </div>
                            </form>
                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Update Modal -->

                        @endforeach
                </div>

            </div>
        </section><!-- #team -->
    @endsection