@extends('mahanaim.fee-custom')

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@section('content')
    <!--==========================
    Blog Section
    ============================-->
    <main id="main" style="padding-top: 35px;">
        <div class="container">
        <div class="row about-container">

            <div class="col-sm-2">
                <div class="list-group">
                    <a href="#" class="list-group-item" style="font-family: Symbola; font-weight: bold; font-size: 16px; background: #0f7b9f; color: black;">Quick Links</a>
                    <a href="{{route('our-schools')}}" class="list-group-item">Schools</a>
                    <a href="{{route('fee-structure')}}" class="list-group-item">Fee Structure</a>
                    <a href="{{route('term-dates')}}" class="list-group-item">Term Dates</a>
                    <a href="{{route('timetable')}}" class="list-group-item">Timetable</a>
                    <a href="{{route('contact')}}" class="list-group-item">Contact</a>
                </div>
                <br>
                <div class="list-group">
                    <a href="#" class="list-group-item" style="font-family: Symbola;background: #0f7b9f; color: black;"><strong>Follow us</strong></a>
                    <a href="#" class="list-group-item"><i class="fab fa-facebook"></i>&nbsp;Facebook</a>
                    <a href="#" class="list-group-item"><i class="fab fa-twitter"></i>&nbsp;Twitter</a>
                    <a href="#" class="list-group-item"><i class="fab fa-instagram"></i>&nbsp;Instagram</a>
                    <a href="#" class="list-group-item"><i class="fab fa-linkedin"></i>&nbsp;LinkedIn</a>
                </div>
            </div>


            <div class="col-lg-10 content order-lg-1 order-2">

                <section id="facts">
                    <div class="container wow fadeIn">
                        <div class="section-header">
                            <a href="" class="list-group-item mx-1 px-1 mt-0 text-center" style="background: #0f7b9f; color: black; font-size: 18px; font-family: Symbola;"><strong>{{ $post->title }}</strong></a>

                            <hr style="margin-right: 25px;">
                        </div>
                        <div class="row">
                                <article class="media content-section" style="width: 100%;">
                                        <div class="col-sm-3 float-left">
                                            <img src="{{ $post->image }}" class="img-fluid" alt="" style="width: 100%;">
                                        </div>
                                        <div class="col-sm-9" style="font-family: Symbola">
                                            {!! $post->content !!}
                                            <hr style="margin-right: 25px;">
                                            <small class="float-right">Posted on:&nbsp;{{ date('d-M-y', strtotime($post->created_at))}}</small>
                                            <a class="mr-2 float-left" href="">Author</a>
                                        </div>
                                </article>
                        </div>

                    </div>
                </section>
            </div>
        </div>
        </div>
    </main>
@endsection