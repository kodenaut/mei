@extends('admin.layout')

<link href="{{asset('css/style.css')}}" rel="stylesheet">


@section('content')
    <!--==========================
Team Section
============================-->
    <section id="team">
        <div class="container wow fadeInUp">
            <div class="section-header">
                <a href="{{route('add-alumnus')}}" class="btn btn-outline-info btn-sm float-right mt-1">Add Alumnus
                    <i class="fas fa-user-plus"></i>
                </a>
                <h3 class="section-title">Alumni</h3>
                <hr>
            </div>
            <div class="row">

                @foreach($alumnis as $alumni)
                    <div class="col-sm-4">
                        <div class="member">
                            <div class="card card-body">
                                <img src="{{ $alumni->image }}" class="img-fluid rounded mx-auto d-block" alt="" style="height: 200px; width: 100%;">
                                <div class="caption">
                                    <h5>{{ $alumni->firstname }} {{ $alumni->lastname }}</h5>
                                    <button class="btn btn-info btn-sm float-left" data-toggle="modal" data-target="#modal-{{ $alumni->id }}">
                                        <i class="fas fa-info"></i>
                                    </button>
                                    <a class="btn btn-success btn-sm" href="{{route('edit-alumnus', $alumni->id)}}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form method="post" action="{{route('delete-alumnus', $alumni->id)}}" class="form-btn float-right">
                                        @csrf
                                        <button class="btn btn-danger btn-sm form-btn" type="submit" onclick='return confirm("Are you sure you want to Delete this Alumnus?")'>
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Alumnus Modal -->
                    <div class="modal" id="modal-{{ $alumni->id }}">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">{{ $alumni->title }}</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <p>
                                        {!! $alumni->content !!}
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <p><i>{{ $alumni->firstname }}&nbsp;{{ $alumni->lastname }}</i></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- End of Modal-->
                @endforeach
            </div>

        </div>
    </section><!-- #team -->
@endsection