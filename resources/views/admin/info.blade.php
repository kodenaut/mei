@extends('admin.layout')
<link href="{{asset('css/style.css')}}" rel="stylesheet">

@section('content')
    <!-- Messages -->
    <section id="messages">
        <div class="container wow fadeIn">
            <div class="section-header">
                <a href="" class="btn btn-outline-info btn-sm float-right" data-toggle="modal" data-target="#statement-add" style="margin: 2px;">Add Statement
                    <i class="fas fa-plus-circle"></i>
                </a>
                <h3 class="section-title">Mission Statements</h3>
                <hr>
            </div>

            <!-- Modal-->
            <div class="modal" id="statement-add">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">New Statement</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form method="post" action="{{route('save-info')}}" class="form-control" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Title:</label>
                                            <input type="text" class="form-control" name="title">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Content:</label>
                                    <textarea name="content" class="form-control my-editor" rows="7"></textarea>
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


            <div class="row">
                @foreach($infos as $info)
                    <div class="col-sm-12">
                    <article class="media content-section">
                        <div class="media-body">
                            <div class="article-metadata">
                                <h4 class="pl-3"><a class="article-title" href="">{{ $info->title }}</a></h4>
                            </div>
                            <div class="col-sm-12 float-right">
                                <p class="article-content">{!! $info->content !!}</p>
                                <br>
                                <form method="post" action="{{route('delete-info', $info->id)}}" class="form-btn float-right">
                                    @csrf
                                    <button class="btn btn-danger btn-sm form-btn" type="submit" onclick='return confirm("Are you sure you want to Delete this Information?")'>
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                <a href="" data-toggle="modal" data-target="#update-{{ $info->id }}" class="btn btn-success btn-sm mx-1 float-right">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                        <hr>
                    </div>

                    <!-- Modal-->
                    <div class="modal" id="update-{{ $info->id }}">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Update {{ $info->title }}</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form method="post" action="{{route('update-info', $info->id)}}" class="form-control" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Title:</label>
                                                    <input type="text" class="form-control" name="title" value="{{ $info->title }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Content:</label>
                                            <textarea name="content" class="form-control my-editor" rows="7">{{ $info->content }}</textarea>
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
                @endforeach
            </div>

        </div>
    </section>

    <!-- End Messages Section-->
@endsection