@extends('admin.layout')

<link href="{{asset('css/style.css')}}" rel="stylesheet">


@section('content')
    <!-- The Modal -->
    <div class="modal" id="modal-add">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">New Image</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="post" action="{{route('add-slide')}}" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Title:</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tag Line:</label>
                            <input type="text" class="form-control" name="tagline">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Image:</label>
                            <input type="file" class="form-control" name="image">
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
                <button class="btn btn-outline-info btn-sm float-right m-1" data-toggle="modal" data-target="#modal-add" style="margin: 2px;">Add Image
                    <i class="fas fa-user-plus"></i>
                </button>
                <h3 class="section-title">Slider Images</h3>
                <hr>
            </div>
            <div class="row">

                @foreach($slides as $slide)
                    <div class="col-sm-4">
                        <div class="member">
                            <div class="card card-body">
                                <img src="{{ $slide->image }}" class="img-thumbnail mx-auto d-block" alt="" style="height: 100%; width: 100%;">
                                <div class="caption">
                                    <button class="btn btn-success btn-sm float-left m-1" data-toggle="modal" data-target="#update-{{ $slide->id }}">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <form method="post" action="{{route('delete-slide', $slide->id)}}" class="form-btn float-left m-1">
                                        @csrf
                                        <button class="btn btn-danger btn-sm form-btn" type="submit" onclick='return confirm("Are you sure you want to Delete this Image?")'>
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- The Modal -->
                    <div class="modal" id="update-{{ $slide->id }}">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Update Image</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form method="post" action="{{route('update-slide', $slide->id)}}" class="form-horizontal" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label class="control-label">Title:</label>
                                            <input type="text" class="form-control" name="title" value="{{ $slide->title }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Tag Line:</label>
                                            <input type="text" class="form-control" name="tagline" value="{{ $slide->tagline }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Image:</label>
                                            <input type="file" class="form-control" name="image" value="{{ $slide->image }}">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-info">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End modal -->

                @endforeach
            </div>

        </div>
    </section><!-- #team -->
@endsection