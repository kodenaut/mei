@extends('admin.layout')
<link href="{{asset('css/style.css')}}" rel="stylesheet">


@section('content')
<!--==========================
  Portfolio Section
============================-->
<section id="portfolio">
    <div class="container wow fadeInUp">
        <div class="section-header">
            <button class="btn btn-outline-info btn-sm float-right" data-toggle="modal" data-target="#photo-add" style="margin: 2px;">Add Photo
                <i class="fas fa-plus-circle"></i>
            </button>
            <h3 class="section-title">Gallery</h3>
            <hr>
        </div>

        <!-- Modal-->
        <div class="modal" id="photo-add">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">New Photo</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form method="post" action="{{route('add-photo')}}" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <textarea type="text" class="form-control" name="caption" rows="2" placeholder="Caption..."></textarea>
                            </div>
                            <div class="form-group">
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
        <!-- End of Modal -->

        <div class="row" id="portfolio-wrapper">

            @foreach($photos as $photo)
            <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                <a href="">
                    <img src="{{$photo->image}}" alt="" style="width: 100%; height: 100%;">
                    <div class="details">
                        <span>{{ $photo->caption }}</span>
                        <button class="btn btn-success btn-sm float-left m-1" data-toggle="modal" data-target="#updatemodal-{{ $photo->id }}">
                            <i class="fas fa-edit"></i>
                        </button>
                        <form method="post" action="{{route('delete-photo', $photo->id)}}" class="form-btn">
                            @csrf
                            <button class="btn btn-danger btn-sm form-btn" type="submit" onclick='return confirm("Are you sure you want to Delete this Photo?")'>
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </a>
            </div>

                <!-- Update Modal -->
                <div class="modal" id="updatemodal-{{ $photo->id }}">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Update Image</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Update body -->
                            <div class="modal-body">
                                <form method="post" class="form-horizontal" action="{{route('update-photo', $photo->id)}}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label class="control-label">Caption:</label>
                                        <textarea type="text" class="form-control" name="description" rows="4">{{ $photo->caption }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Image:</label>
                                        <input type="file" name="image" class="form-control" value="{{ $photo->image }}">
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
</section><!-- #portfolio -->

    @endsection