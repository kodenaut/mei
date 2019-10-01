@extends('admin.layout')
<link href="{{asset('css/style.css')}}" rel="stylesheet">

@section('content')
    <!-- The Modal -->
    <div class="modal" id="modal-add">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Notice</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="post" class="form-horizontal" action="{{route('add-notice')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Title:</label>
                            <input type="text" class="form-control" name="title">
                        </div>

                        <div class="form-group">
                            <label class="control-label">File:</label>
                            <input type="file" name="file" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Content:</label>
                            <textarea class="form-control" name="content" rows="6"></textarea>
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
    Schools Section
  ============================-->
        <section id="services" style="width: 100%;">
            <div class="container wow fadeIn">
                <div class="section-header">
                    <button class="btn btn-outline-danger btn-sm float-right" data-toggle="modal" data-target="#modal-add" style="margin: 2px;">Add Notice
                        <i class="fas fa-plus-circle"></i>
                    </button>
                    <hr>
                </div>

                <div class="row">
                @foreach($notices as $notice)
                                <div class="col-sm-3">
                                    <a href="{{ $notice->file }}" target="_blank"> <h4 class="article-title text-primary">{{ $notice->title }}</h4></a>
                                    <?php
                                        $cont =substr($notice->content,0,50);
                                        ?>
                                        {!! $cont !!}...&nbsp
                                        <form method="post" action="{{route('delete-notice', $notice->id)}}" class="form-btn float-right m-1">
                                            @csrf
                                            <button class="btn btn-danger btn-sm form-btn" type="submit" onclick='return confirm("Are you sure you want to Delete this Notice?")'>
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                        <button class="btn btn-info btn-sm m-1" data-toggle="modal" data-target="#updatemodal-">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                </div>

                        <!-- Update Modal -->
                        <div class="modal" id="updatemodal-">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Update {{ $notice->title }}</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Update body -->
                                    <div class="modal-body">
                                        <form method="post" class="form-horizontal" action="{{ route('update-notice', $notice->id) }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Title:</label>
                                                        <input type="text" name="title" class="form-control" value="{{ $notice->title }}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">File:</label>
                                                        <input type="file" name="file" class="form-control" value="{{ $notice->file }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Content:</label>
                                                    <textarea class="form-control" name="content" rows="6">{{ $notice->content }}</textarea>
                                                </div>
                                                </div>
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
        </section>
@endsection