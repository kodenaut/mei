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
                        <h4 class="modal-title">New Staff</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form method="post" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <textarea type="text" class="form-control" name="bio" rows="2">Caption...</textarea>
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
            <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                <a href="">
                    <img src="img/portfolio/app1.jpg" alt="" style="width: 100%; height: 100%;">
                    <div class="details">
                        <h4>App 1</h4>
                        <span>Alored dono par</span>
                    </div>
                </a>
            </div>
        </div>

    </div>
</section><!-- #portfolio -->
    @endsection