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
                    <form method="post" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="salutation" placeholder="Mr/Mrs/Miss...">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="fname" placeholder="First Name...">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="sname" placeholder="Last Name...">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="position" placeholder="Position...">
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control" name="bio" rows="4" placeholder="Short Bio..."></textarea>
                        </div>
                        <div class="form-group">
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
                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="card card-body">
                                <img src="img/team-1.jpg" alt="">
                            <div class="caption">
                                <h5>Name</h5>
                                <span>Position</span>
                                <p class="description">Staff short bio...</p>
                                <a href="" class="btn btn-info btn-sm float-left">
                                    <i class="fas fa-info"></i>
                                </a>
                                <a href="" class="btn btn-success btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-sm float-right mx-1">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- #team -->
    @endsection