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
                    <div class="col-sm-3">
                        <div class="member">
                            <div class="card card-body">
                                <img src="{{ $staff->passport }}" class="img-fluid rounded-circle mx-auto d-block" alt="" style="height: 150px; width: 150px;">
                            <div class="caption">
                                <h5>{{ $staff->salutation }} {{ $staff->first_name }}</h5>
                                <span>{{ $staff->position }}</span>
                                <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#updatemodal-{{ $staff->id }}">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <form method="post" action="{{route('delete-staff', $staff->id)}}" class="form-btn" style="display: inline-block;">
                                    @csrf
                                    <button class="btn btn-danger btn-sm form-btn" type="submit" onclick='return confirm("Are you sure you want to Delete this Staff?")'>
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>

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
                                    <input type="text" class="form-control" name="salutation" value="{{ $staff->salutation }}">
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
                                    <label class="control-label">Passport:</label>
                                    <input type="file" name="passport" class="form-control" value="{{ $staff->passport }}">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info">Update</button>
                                </div>
                            </form>
                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Update Modal -->

                        @endforeach
                </div>

                <div class="row justify-content-center ">
                    {{ $staffs->links() }}
                </div>

            </div>
        </section><!-- #team -->
    @endsection