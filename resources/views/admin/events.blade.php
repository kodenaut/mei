@extends('admin.layout')
<link href="{{asset('css/style.css')}}" rel="stylesheet">


@section('content')
    <section id="facts">
        <div class="container wow fadeIn">
            <div class="section-header">
                <a href="{{route('add-event')}}" class="btn btn-outline-info btn-sm float-right" style="margin: 2px;">Add Event
                    <i class="fas fa-plus-circle"></i>
                </a>
                <h3 class="section-title">Events</h3>
                <hr>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card card-body">
                        <h4 class="text-black-50">Event Title<small class="float-right">Date</small> </h4>
                        <img src="{{asset('img/team-1.jpg')}}" alt="" style="width: 100%;">
                        <div class="caption">
                        <p class="description">This is the event content...</p>
                        <hr>
                        <h5 class="float-left">Venue</h5>
                        </div>
                        <div class="icons">
                        <button class="btn btn-info btn-sm" style="width: 25px;">
                                <i class="fas fa-info"></i>
                        </button>
                        <a href="" class="btn btn-success btn-sm" style="width: 28px;">
                            <i class="fas fa-edit"></i>
                        </a>
                            <a href="" class="btn btn-danger btn-sm float-right">
                                <i class="fas fa-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #facts -->
    @endsection