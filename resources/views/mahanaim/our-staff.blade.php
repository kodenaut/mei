@extends('mahanaim.custom')


@section('content')
    <!--==========================
    Blog Section
    ============================-->
    <main id="main">
        <div class="row about-container">

            <div class="col-lg-12 content order-lg-1 order-2">

                <!--==========================
  Team Section
============================-->
                <section id="team">
                    <div class="container wow fadeInUp">
                        <div class="section-header">
                            <br>
                            <h3 class="section-title">Staff</h3>
                            <hr>
                            <p class="section-description">Mahanaim Eduactional Institute Members of Staff.</p>
                        </div>
                        <div class="row">

                            @foreach($staffs as $staff)
                                <div class="col-lg-3 col-md-6">
                                    <div class="member">
                                        <div class="card card-body">
                                            <img src="{{ $staff->passport }}" class="rounded-circle mx-auto d-block" alt="" style="height: 150px; width: 150px;">
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
                <hr>

            </div>
        </div>
    </main>
@endsection