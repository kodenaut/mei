@extends('mahanaim.layout')

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@section('content')
    <main id="main">
        <div class="container">
        <div class="row about-container">
        <!--==========================
    Schools Section
  ============================-->
            <!--
        <div class="col-sm-2">
            <div class="list-group">
                <a class="list-group-item list-group-item-light" style="color: white; background: #265ea1;"><b>Schools</b></a>
                <a class="list-group-item list-group-item-primary" href="{{route('fee-structure')}}">Engineering</a>
                <a class="list-group-item list-group-item-success" href="{{route('ict-fee')}}">ICT</a>
                <a class="list-group-item list-group-item-warning" href="{{route('icdl-fee')}}">ICDL</a>
                <a class="list-group-item list-group-item-danger" href="{{route('hospitality-fee')}}">Hospitality</a>
                <a class="list-group-item list-group-item-secondary" href="{{route('catering-fee')}}">Catering</a>
                <a class="list-group-item list-group-item-primary" href="{{route('journalism-fee')}}">Journalism</a>
                <a class="list-group-item list-group-item-info" href="{{route('business-fee')}}">Business</a>
                <a class="list-group-item list-group-item-dark" href="{{route('languages-fee')}}">Languages</a>
                <a class="list-group-item list-group-item-success" href="{{route('sports-fee')}}">Sports</a>
            </div>
        </div>
        -->

            <div class="col-sm-3">
                <div class="list-group">
                    <a href="#" class="list-group-item" style="font-family: Symbola; font-weight: bold; font-size: 16px; background: #265ea1; color: white;">Quick Links</a>
                    <a href="{{route('our-schools')}}" class="list-group-item">Schools</a>
                    <a href="{{route('fee-structure')}}" class="list-group-item">Fee Structure</a>
                    <a href="{{route('term-dates')}}" class="list-group-item">Term Dates</a>
                    <a href="{{ route('timetable') }}" class="list-group-item">Timetable</a>
                    <a href="#" data-toggle="modal" data-target="#kcse-modal" class="list-group-item">KCSE Past Papers</a>
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
                <div class="section-header text-center">
                    <a href="" class="list-group-item text-center" style="background: #024DA1; color: white; font-size: 18px; font-family: Symbola;"><strong>Fee Structure</strong></a>
                </div>


                     <div class="card card-body mt-1" style="height: 45%;">
                         <div class="">
                             <h4 class="text-center">Download Fee Structure</h4>
                             <hr>
                         </div>
                         <div class="row">
                @foreach($fees as $fee)
                             <div class="col-sm-3">
                                 <li style="list-style: none; margin: 5px;">
                                     <a href="{{ $fee->structure }}" target="_blank" style="color: black; font-family: Symbola;"><strong><i class="fas fa-angle-double-right"></i> {{ $fee->title }}</strong>
                                     </a>
                                 </li>
                             </div>
                @endforeach
                         </div>
                     </div>

            <div class="list-group mt-2 p-1" style="border: 1px solid lightgray;">
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
    </main>
    @endsection
