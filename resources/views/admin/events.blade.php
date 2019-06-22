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

                @foreach($events as $event)
                <div class="col-sm-4">
                    <div class="card card-body" style="background: #e2f0fb;">
                        <h4 class="text-black-50">{{ $event->title }}<small class="float-right">{{ $event->created_at }}</small> </h4>
                        <img src="{{ $event->image }}" class="img-fluid rounded" alt="" style="height: 150px; width: 100%;">
                        <div class="caption">
                        <p class="description">{!! $event->description !!}</p>
                        <hr>
                        <h5 class="float-left">{{ $event->venue }}</h5>
                        </div>
                        <div class="icons">
                        <button class="btn btn-info btn-sm" style="width: 25px;">
                                <i class="fas fa-info"></i>
                        </button>
                        <a href="{{route('edit-event', $event->id)}}" class="btn btn-success btn-sm" style="width: 28px;">
                            <i class="fas fa-edit"></i>
                        </a>
                            <form method="post" action="{{route('delete-event', $event->id)}}" class="form-btn">
                                @csrf
                                <button class="btn btn-danger btn-sm form-btn" type="submit" onclick='return confirm("Are you sure you want to Delete this Event?")'>
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                    @endforeach

            </div>

        </div>
    </section><!-- #facts -->
    @endsection