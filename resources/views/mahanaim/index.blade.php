@extends('mahanaim.layout')

@section('content')
<main id="main">

    <!--==========================
      About Us Section
    ============================-->
        <div class="container">
            <div class="row about-container">

                <div class="col-lg-12 content order-lg-1 order-2">
                    <section id="about">
                        <div class="container wow fadeIn">
                            <div class="section-header">
                                <h3 class="section-title">Our Tagline</h3>
                                <br>
                            </div>

                            <div class="row">
                                <hr>

                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="box">
                                        <div class="icon"><a href=""><i class="fa fa-bar-chart"></i></a></div>
                                        <h4 class="title"><a href="">Challenge</a></h4>
                                        <p class="">We encourage tomorrow’s leaders through various challenges,
                                            especially in overcoming their personal limits & thoughts.</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="box">
                                        <div class="icon"><a href=""><i class="fa fa-bar-chart"></i></a></div>
                                        <h4 class="title"><a href="">Change</a></h4>
                                        <p class="">Anyone who boards the Mahanaim Ship of Change gains a clean and a radiant heart.</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="box">
                                        <div class="icon"><a href=""><i class="fa fa-users"></i></a></div>
                                        <h4 class="title"><a href="">Cohesion</a></h4>
                                        <p class="">A single solace, where the exchange between youths from over 80 different countries occur, promotes unison.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <br>
                    <hr>

                    <!--==========================
    Blog Section
    ============================-->
                    <section id="facts">
                        <div class="container wow fadeIn">
                            <div class="section-header">
                                <h3 class="section-title">MEI Information</h3>
                                <hr>
                            </div>
                            <div class="row">
                                @foreach($infos as $info)
                                    <article class="media content-section m-2" style="width: 100%;">
                                        <div class="media-body">
                                            <div class="article-metadata">
                                                <h4><a class="article-title" href=""><strong>{{ $info->title }}</strong></a></h4>
                                            </div>
                                            <div class="col-sm-12">
                                                <p class="article-content">{!! $info->content  !!} </p>
                                                <hr>
                                            </div>
                                        </div>
                                    </article>
                                @endforeach

                            </div>

                        </div>
                    </section>
                    <hr>
                    <br>

                            <!--==========================
                    Schools Section
                    ============================-->
                        <section id="services" style="width: 100%;">
                            <div class="container wow fadeIn">
                                <div class="section-header">
                                    <h3 class="section-title">Our Partners</h3>
                                    <hr>
                                    <br>
                                </div>

                                <div class="row">
                                    @foreach($partners as $partner)
                                        <div class="partner text-center m-3">
                                            <a href="{{ $partner->link }}" target="_blank">
                                                <img class="rounded-circle" src="{{$partner->logo}}" alt="Name" style="height: 70px; width: 70px;">
                                            </a>
                                            <div class="caption">
                                                <h6>{{ $partner->name }}</h6>
                                                <p>{{ $partner->country }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                    <br>
                    <hr>


                                        <!--==========================
                                          Contact Section
                                        ============================-->
    <section id="contact">
        <div class="container wow fadeInUp">
            <div class="section-header">
                <h3 class="section-title">Contact</h3>
                <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>
        </div>

        <!-- Uncomment below if you wan to use dynamic maps -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

        <div class="container wow fadeInUp mt-5">
            <div class="row justify-content-center">

                <div class="col-lg-3 col-md-4">

                    <div class="info">
                        <div>
                            <i class="fa fa-map-marker"></i>
                            <p>Off Thika Road<br>Behind Safari Park Hotel<br>
                            Next to USIU University</p>
                        </div>

                        <div>
                            <i class="fa fa-envelope"></i>
                            <p>info@mahanaim.ac.ke</p>
                        </div>

                        <div>
                            <i class="fa fa-phone"></i>
                            <p>+254 701033228</p>
                        </div>
                    </div>

                    <div class="social-links">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

                <div class="col-lg-5 col-md-8">
                    <div class="form">
                        <form action="{{route('save-message')}}" method="post" role="form" class="contactForm">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group"><button type="submit" class="btn btn-info" style="width: 100%;">Send Message</button></div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #contact -->
        </div>
            </div>
        </div>
</main>
@endsection