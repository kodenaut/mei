@extends('admin.layout')
<link href="{{asset('css/style.css')}}" rel="stylesheet">

@section('content')
    <!-- Messages -->
    <section id="messages">
        <div class="container wow fadeIn">
            <div class="section-header">
                <a href="{{route('add-info')}}" class="btn btn-outline-info btn-sm float-right" style="margin: 2px;">Add Information
                    <i class="fas fa-plus-circle"></i>
                </a>
                <h3 class="section-title">Information</h3>
                <hr>
            </div>
            <div class="row">
                @foreach($infos as $info)
                    <div class="col-sm-12">
                    <article class="media content-section">
                        <div class="media-body">
                            <div class="article-metadata">
                                <h4><a class="article-title" href="">{{ $info->title }}</a></h4>
                            </div>
                            <div class="col-sm-12 float-right">
                                <p class="article-content">{!! $info->content !!}</p>
                                <hr>
                                <a href="{{route('edit-info', $info->id)}}" class="btn btn-success btn-sm mx-1">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('delete-info', $info->id)}}" class="form-btn float-right">
                                    @csrf
                                    <button class="btn btn-danger btn-sm form-btn" type="submit" onclick='return confirm("Are you sure you want to Delete this Information?")'>
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </article>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <!-- End Messages Section-->
@endsection