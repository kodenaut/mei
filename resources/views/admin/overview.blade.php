@extends('admin.layout')
<link href="{{asset('css/style.css')}}" rel="stylesheet">

@section('content')
    <!-- Messages -->
    <section id="messages">
        <div class="container wow fadeIn">
            <div class="section-header">
                <a href="{{route('add-overview')}}" class="btn btn-outline-info btn-sm float-right" style="margin: 2px;">Add Overview
                    <i class="fas fa-plus-circle"></i>
                </a>
                <h3 class="section-title">Overview</h3>
                <hr>
            </div>
            <div class="row">
                @foreach($overviews as $overview)
                <article class="media content-section">
                    <div class="media-body">
                        <div class="article-metadata">
                            <h4><a class="article-title" href="">{{ $overview->title }}</a></h4>
                        </div>
                        <div class="col-sm-3 float-left">
                            <img src="{{ $overview->image }}" class="img-fluid rounded" alt="" style="width: 100%;">
                        </div>
                        <div class="col-sm-9 float-right">
                            <p class="article-content">{!! $overview->content !!}</p>
                            <hr>
                            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-{{ $overview->id }}"><i class="fas fa-info"></i> </button>
                            <a href="{{route('edit-overview', $overview->id)}}" class="btn btn-success btn-sm mx-1">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form method="post" action="{{route('delete-overview', $overview->id)}}" class="form-btn float-right">
                                @csrf
                                <button class="btn btn-danger btn-sm form-btn" type="submit" onclick='return confirm("Are you sure you want to Delete this Information?")'>
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </article>

                    <!-- School Modal -->
                    <div class="modal" id="modal-{{ $overview->id }}">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">{{ $overview->title }}</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <p>
                                        {!! $overview->content  !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- End of Modal-->

                    @endforeach
            </div>

        </div>
    </section>

    <!-- End Messages Section-->
    @endsection