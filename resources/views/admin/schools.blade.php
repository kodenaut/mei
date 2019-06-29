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
                                    <img class="img-fluid rounded-circle" src="{{ $school->image }}" alt="{{ $school->name }}" style="height: 70px; width: 74px;">
                                </a>
                            </div>

                            <h4 class="title pt-5"><a href="">{{ $school->name }}</a></h4>
                            <p class="">
                                <?php
                                $cont =substr($school->description,0,150);
                                ?>
                                {!! $cont !!}...&nbsp;
                                <a href="" data-toggle="modal" data-target="#modal-{{ $school->id }}">
                                    Read more
                                </a>
                            </p>

                            <div class="caption" style="display: block;">
                                <button class="btn btn-success btn-sm mx-1 float-left" data-toggle="modal" data-target="#updatemodal-{{ $school->id }}">
                                    <i class="fas fa-edit"></i>
                                </button>

                                <form method="post" action="{{route('delete-school', $school->id)}}" class="form-btn" style="display: inline-block;">
                                    @csrf
                                <button class="btn btn-danger btn-sm form-btn" type="submit" onclick='return confirm("Are you sure you want to Delete this School?")'>
                                    <i class="fas fa-trash"></i>
                                </button>
                                </form>

                                <a href="{{route('courses', $school->id)}}" class="btn btn-warning btn-sm float-right mr-2">
                                    <i class="fas fa-book-open">&nbsp;Courses</i>
                                </a>
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
                        @endforeach



                </div>
            </div>
        </section><!-- #schools -->

    </div>
@endsection