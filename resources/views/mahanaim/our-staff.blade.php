@extends('mahanaim.layout')


@section('content')
    <!--==========================
    Blog Section
    ============================-->
    <main id="main">
        <div class="container wow fadeInUp">
        <div class="row about-container">

            <div class="col-lg-12 content">
                <!--==========================
  Team Section
============================-->
                <section id="team" class="pb-3">
                        <div class="section-header">
                            <a href="" class="list-group-item text-center" style="background: #265ea1; color: white; font-size: 18px; font-family: Symbola;"><strong>Our Staff</strong></a>
                        </div>
                        <div class="row mt-2">

                            @foreach($staffs as $staff)
                                <div class="col-sm-3 my-1">
                                    <div class="member">
                                        <div class="card card-body">
                                            <img src="{{ $staff->passport }}" class="img-fluid rounded-circle mx-auto d-block" alt="" style="height: 80px; width: 80px;">
                                            <div class="caption">
                                                <h6>{{ $staff->salutation }}&nbsp;{{ $staff->first_name }}&nbsp;{{ $staff->last_name }}</h6>
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