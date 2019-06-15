@extends('mahanaim.layout')

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
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #facts -->
            </div>
        </div>
    </main>
@endsection