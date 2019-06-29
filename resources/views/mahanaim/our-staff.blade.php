@extends('mahanaim.custom')


@section('content')
    <!--==========================
    Blog Section
    ============================-->
    <main id="main" style="padding-top: 131px;">
        <div class="container">
        <div class="row about-container">

            <div class="col-lg-12 content order-lg-1 order-2">

                <!--==========================
  Team Section
============================-->
                <section id="team" class="pb-5">
                    <div class="container wow fadeInUp">
                        <div class="section-header">
                            <br>
                            <h3 class="section-title">Staff</h3>
                            <hr style="margin: 25px;">
                        </div>
                        <div class="row">

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

                    </div>
                </section><!-- #team -->

                <br>

            </div>
        </div>
        </div>
    </main>
@endsection