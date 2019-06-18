@extends('admin.layout')
<link href="{{asset('css/style.css')}}" rel="stylesheet">


@section('content')
    <!-- The Modal -->
    <div class="modal" id="modal-add">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">New Notice</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="post" class="form-horizontal" action="{{route('add-notice')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Title:</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">File:</label>
                                    <input type="file" name="file" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Content:</label>
                            <textarea type="text" class="form-control" name="content" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--End of Modal-->

    <section id="facts">
        <div class="container wow fadeIn">
            <div class="section-header">
                <button class="btn btn-outline-info btn-sm float-right" data-toggle="modal" data-target="#modal-add" style="margin: 2px;">Add Notice
                    <i class="fas fa-plus-circle"></i>
                </button>
                <h3 class="section-title">Notice Board</h3>
                <hr>
                <!--==========================
            Schools Section
          ============================-->

                <div class="row m-1">
                    <div class="list">
                        @foreach($notices as $notice)
                        <a class="btn btn-outline-info m-1" href="">{{ $notice->title }}</a>
                            @endforeach
                    </div>
                </div>

                <div class="row">
                <div class="col-sm-12" style="height: 110%;">
                    @foreach($notices as $notice)
                                <article class="media content-section m-1" style="width: 100%;">
                                    <div class="media-body">
                                        <div class="article-metadata">
                                            <h4><a class="article-title" href="">{{ $notice->title }}</a></h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="article-content">{{ $notice->content }}</p>
                                            <br>
                                            @if($notice->file)
                                            <iframe src="{{ $notice->file }}" style="height: 100%; width: 100%;"></iframe>
                                            @endif

                                    </div>
                                    </div>
                                </article>
                    @endforeach
                </div>
            </div>

        </div>
        </div>
    </section>
@endsection
