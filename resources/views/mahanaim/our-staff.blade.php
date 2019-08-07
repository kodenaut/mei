@extends('mahanaim.layout')


@section('content')
    <!--==========================
    Blog Section
    ============================-->
    <main id="main" style="padding-top: 2px;">
        <div class="container wow fadeInUp">
        <div class="row about-container">

            <div class="col-lg-12 content">
                <!--==========================
  Team Section
============================-->
                <section id="team" class="pb-3">
                        <div class="section-header">
                            <a href="" class="list-group-item mt-3 text-center" style="background: #0f7b9f; color: black; font-size: 18px; font-family: Symbola;"><strong>Our Staff</strong></a>
                        </div>
                        <div class="row mt-2">

                            @foreach($staffs as $staff)
                                <div class="col-sm-3">
                                    <div class="member">
                                        <div class="card card-body">
                                            <img src="{{ $staff->passport }}" class="img-fluid rounded-circle mx-auto d-block" alt="" style="height: 150px; width: 150px;">
                                            <div class="caption">
                                                <h5>{{ $staff->salutation }}&nbsp;{{ $staff->first_name }}&nbsp;{{ $staff->last_name }}</h5>
                                                <span>{{ $staff->position }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                </section><!-- #team -->

                <br>

            </div>
        </div>
        </div>
    </main>
@endsection