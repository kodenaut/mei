@extends('mahanaim.layout')

@section('content')
    <!-- Top Stories Area -->
    <main id="main">
        <div class="container mt-5">
            <div class="row" id="contatti">

                    <div class="row m-3">
                        <div class="col-sm-6 maps">
                            <h2 class="text-uppercase mt-3 font-weight-bold text-white text-center">Visit us</h2>
                            <iframe src="https://maps.google.com/maps?q=mahanaim%20educational%20institute&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <div class="col-sm-6">
                            <h2 class="text-uppercase mt-3 font-weight-bold text-white text-center">Contact Us</h2>
                            <form action="{{route('save-message')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control mt-2" placeholder="Name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control mt-2" placeholder="Email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control mt-2" placeholder="Subject" name="subject" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Your message..." rows="6" name="message" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                        <button class="btn btn-success" type="submit" style="width: 100%;">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div class="col-sm-6">
                            <div class="text-white">
                                <i class="fas fa-phone mt-3"></i> <a href="tel:+">+254701033228</a>
                                <br><br>
                                <i class="fa fa-envelope mt-3"></i> <a href="mailto:info@mei.ac.ke">info@mei.ac.ke</a><br>
                            </div>
                            </div>

                            <div class="col-sm-6">
                            <div class="text-white text-center">
                                <i class="fas fa-globe mt-3"></i>
                                <ul class="">
                                    <li>Off Thika Road</li>
                                    <li>Behind Safari Park Hotel</li>
                                    <li>Next to USIU.</li>
                                </ul>
                            </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        <!-- Start main body Area -->

    </main>

@endsection