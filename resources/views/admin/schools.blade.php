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
                    <form method="post" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name...">
                        </div>

                        <div class="form-group">
                            <textarea type="text" class="form-control" name="description" rows="4">Description...</textarea>
                        </div>
                        <div class="form-group">
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
        <section id="services">
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
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box">
                            <div class="icon">
                                <a href="">
                                    <i class="fa fa-desktop"></i>
                                </a>
                            </div>
                            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                                <button class="btn btn-info btn-sm float-left" data-toggle="modal" data-target="#school-modal">
                                    <i class="fas fa-info"></i>
                                </button>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #schools -->

                    <!-- School Modal -->
                    <div class="modal" id="school-modal">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">School Name</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <p>
                                        School description...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Modal-->

    </div>
@endsection