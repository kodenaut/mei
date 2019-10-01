@extends('mahanaim.layout')
<link href="{{asset('css/style.css')}}" rel="stylesheet">

@section('content')
    <main id="main">
        <div class="container wow fadeInUp">

            <div class="row about-container">
                <div class="col-lg-12 content">
                    <!--==========================
                Schools Section
              ============================-->
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="list-group">
                                <a href="#" class="list-group-item" style="font-family: Symbola; font-weight: bold; font-size: 16px; background: #265ea1; color: white;">Quick Links</a>
                                <a href="{{route('our-schools')}}" class="list-group-item">Schools</a>
                                <a href="{{route('fee-structure')}}" class="list-group-item">Fee Structure</a>
                                <a href="{{route('term-dates')}}" class="list-group-item">Term Dates</a>
                                <a href="#" class="list-group-item">Timetable</a>
                                <a href="{{route('contact')}}" class="list-group-item">Contact</a>
                            </div>
                            <div class="list-group">
                                <a href="#" class="list-group-item" style="font-family: Symbola; background: #265ea1; color: white;"><strong>Follow us</strong></a>
                                <a href="#" class="list-group-item"><i class="fab fa-facebook"></i>&nbsp;Facebook</a>
                                <a href="#" class="list-group-item"><i class="fab fa-twitter"></i>&nbsp;Twitter</a>
                                <a href="#" class="list-group-item"><i class="fab fa-instagram"></i>&nbsp;Instagram</a>
                                <a href="#" class="list-group-item"><i class="fab fa-linkedin"></i>&nbsp;LinkedIn</a>
                            </div>
                        </div>

                        <div class="col-sm-9">
                            <section id="services" style="width: 100%;">
                                <div class="section-header">
                                    <a href="" class="list-group-item text-center" style="background: #265ea1; color: white; font-size: 18px; font-family: Symbola;"><strong>{{ $subject->title }} Papers</strong></a>
                                </div>
                                <div class="row mb-3">
                                    @foreach($papers as $paper)
                                        <div class="col-sm-3 m-3">
                                            <li style="list-style: none;">
                                                <a href="{{ $paper->file }}" target="_blank" style="color: black; font-family: Symbola;"><strong><i class="fas fa-book-open"></i> {{ $paper->title }}~{{ $paper->year }}</strong>
                                                </a>
                                            </li>
                                        </div>

                                        <hr style="border-style: dashed; margin: 0;">
                                    @endforeach

                                </div>
                            </section><!-- #schools -->

                            <br><br><br><br><br>
                            <div class="list-group m-0 p-1" style="border: 1px solid lightgray;">
                                <a href="" class="list-group-item mx-1 px-1" style="background: #265ea1; color: white; font-family: Symbola;"><strong>Recent Notices</strong></a>
                                <ul style="list-style: none; padding-left: 22px;">
                                    @foreach($notices as $notice)
                                        <li>
                                            <a href="" style="color: black; font-family: Symbola;" data-toggle="modal" data-target="#notice-{{ $notice->id }}"><strong><i class="fas fa-angle-double-right"></i> {{ $notice->title }}</strong>
                                                <span class="badge float-right" style="background: #1b1b1b;">{{ date('d-M-y', strtotime($notice->created_at))}}</span>
                                            </a>
                                        </li>
                                        <hr style="border-style: dashed; margin: 0;">

                                        <!-- School Modal -->
                                        <div class="modal" id="notice-{{ $notice->id }}">
                                            <div class="modal-dialog modal-md">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title text-danger">{{ $notice->title }}</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <p style="color: black;">
                                                            {!! $notice->content !!}
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        @if($notice->file)
                                                            Document: <a href="{{ $notice->file }}" target="_blank">{{ $notice->title }}</a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- End of Modal-->
                                    @endforeach
                                </ul>

                            </div>

                        </div>
                    </div>



                </div>
            </div>
        </div>
    </main>
@endsection