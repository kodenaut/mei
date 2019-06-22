@extends('mahanaim.custom')

@section('content')
    <main id="main">
        <div class="row about-container">

            <div class="col-lg-12 content order-lg-1 order-2">
    <section id="facts">
        <div class="container wow fadeIn">
            <div class="section-header">
                <h3 class="section-title">Events</h3>
                <hr>
            </div>
            <div class="row">
                @foreach($events as $event)
                <div class="col-sm-4">
                    <div class="card card-body" style="background: #e2f0fb;">
                        <h4 class="text-black-50">{{ $event->title }}<small class="float-right">{{ $event->created_at }}</small> </h4>
                        <a href="{{ $event->image }}" target="_blank">
                        <img src="{{ $event->image }}" class="img-fluid" alt="" style="width: 100%; height: 250px;">
                        </a>
                        <div class="caption">
                            <p class="description">{!! $event->description !!} </p>
                            <hr>
                            <h6 class="float-left">Venue:&nbsp;{{ $event->venue }}</h6>
                        </div>
                        <div class="icons">
                            <button class="btn btn-info btn-sm" style="width: 25px;">
                                <i class="fas fa-info"></i>
                            </button>
                        </div>
                    </div>
                </div>
                    @endforeach

            </div>

        </div>
    </section><!-- #facts -->
            </div>
        </div>
    </main>
@endsection