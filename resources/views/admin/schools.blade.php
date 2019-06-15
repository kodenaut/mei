@extends('admin.layout')
<link href="{{asset('css/style.css')}}" rel="stylesheet">

@section('content')
  <!-- The Modal -->
    <div class="modal" id="modal-add">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">New School</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="post" class="form-horizontal" action="{{route('add-school')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Name:</label>
                            <input type="text" class="form-control" name="name">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Description:</label>
                            <textarea type="text" class="form-control" name="description" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Image:</label>
                            <input type="file" name="image" class="form-control">
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
                    <button class="btn btn-outline-info btn-sm float-right" data-toggle="modal" data-target="#modal-add" style="margin: 2px;">Add School
                        <i class="fas fa-plus-circle"></i>
                    </button>
                    <h3 class="section-title">Schools</h3>
                    <hr>
                    <br>
                </div>
                <div class="row">

                    @foreach($schools as $school)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box">
                            <div class="icon">
                                <a href="">
                                    <img class="rounded-circle" src="{{ $school->image }}" alt="{{ $school->name }}" style="height: 70px; width: 74px;">
                                </a>
                            </div>

                            <div class="caption">
                            <h4 class="title"><a href="">{{ $school->name }}</a></h4>
                            <p class="description"> {{ $school->description }}</p>
                                <button class="btn btn-info btn-sm float-left" data-toggle="modal" data-target="#modal-{{ $school->id }}">
                                    <i class="fas fa-info"></i>
                                </button>
                                <button class="btn btn-success btn-sm mx-1" data-toggle="modal" data-target="#updatemodal-{{ $school->id }}">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <a class="btn btn-danger btn-sm"  href="{{route('delete-school', $school->id)}}" onclick='return confirm("Are you sure you want to Delete this School?")'>
                                    <i class="fas fa-trash"></i>
                                </a>
                                <button class="btn btn-warning btn-sm float-right" data-toggle="modal" data-target="#courses-{{ $school->id }}">
                                    <i class="fas fa-book-open">&nbsp;Courses</i>
                                </button>
                            </div>
                        </div>
                    </div>

                        <!-- School Modal -->
                        <div class="modal" id="modal-{{ $school->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">{{ $school->name }}</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <p>
                                            {{ $school->description }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End of Modal-->

                        <!-- Update Modal -->
                        <div class="modal" id="updatemodal-{{ $school->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Update {{ $school->name }}</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Update body -->
                                    <div class="modal-body">
                                        <form method="post" class="form-horizontal" action="{{route('update-school', $school->id)}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label class="control-label">Name:</label>
                                                <input type="text" class="form-control" name="name" value="{{ $school->name }}">
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label">Description:</label>
                                                <textarea type="text" class="form-control" name="description" rows="4">{{ $school->description }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Image:</label>
                                                <input type="file" name="image" class="form-control" value="{{ $school->image }}">
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

                        <!-- School Modal -->
                        <div class="modal" id="schoolmodal-{{ $school->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">{{ $school->name }}</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <p>
                                            {{ $school->description }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Modal-->

                        <!-- Courses Modal -->
                        <div class="modal" id="courses-{{ $school->id }}">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">{{ $school->name }} Courses</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="boxmodal">
                                                    <table class="table" style="margin: 0 auto;">
                                                        <tr><td>Name</td></tr>
                                                        <tr><td>Qualification</td></tr>
                                                        <tr><td>Duration</td></tr>
                                                        <tr><td>Modules</td></tr>
                                                        <tr><td>Exam Body</td></tr>
                                                        <tr><td>Mode</td></tr>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>

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