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
                                <h3 class="section-title">About Us</h3>
                                <br>
                            </div>
                            <div class="row">
                                @foreach($missions as $mission)
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="box">
                                        <div class="icon"><a href=""><i class="fa fa-bar-chart"></i></a></div>
                                        <h4 class="title"><a href="">Mission</a></h4>
                                        <p class="" style="max-lines: 5; line-height: 1.2em; height: 4.6em; overflow: hidden; text-overflow: ellipsis; max-width: 90%;">{{ $mission->content }}</p>
                                    </div>
                                </div>
                                @endforeach

                                @foreach($visions as $vision)
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="box">
                                        <div class="icon"><a href=""><i class="fa fa-paper-plane"></i></a></div>
                                        <h4 class="title"><a href="">Vision</a></h4>
                                        <p class="" style="max-lines: 5; line-height: 1.2em; height: 4.6em; overflow: hidden; text-overflow: ellipsis; max-width: 90%;">{{ $vision->content }}</p>
                                    </div>
                                </div>
                                    @endforeach

                                @foreach($philosophies as $philosophy)
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="box">
                                        <div class="icon"><a href=""><i class="fa fa-photo"></i></a></div>
                                        <h4 class="title"><a href="">Philosophy</a></h4>
                                        <p class="" style="max-lines: 5; line-height: 1.2em; height: 4.6em; overflow: hidden; text-overflow: ellipsis; max-width: 90%;">{{ $philosophy->content }}</p>
                                    </div>
                                </div>
                                    @endforeach
                        </div>

                <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
                        </div>
                    </section>
                    <br>
                    <hr>

                    <!--==========================
   Schools Section
 ============================-->
                    <section id="services">
                        <div class="container wow fadeIn">
                            <div class="section-header">
                                <h3 class="section-title">Schools</h3>
                                <p class="section-description">Mahanaim Eduacational Institute Has A Variety of Schools:</p>
                                <br><br>
                            </div>
                            <div class="row">
                                @foreach($schools as $school)
                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="box">
                                            <div class="icon"><a href=""><img src="{{asset('uploads')}}/{{$school->image}}"></a></div>
                                            <h4 class="title"><a href="">{{ $school->name }}</a></h4>
                                            <p class="description">{{ $school->description }}</p>
                                            <button class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#courses-{{ $school->id }}"><i class="fas fa-book-open">&nbsp;Courses</i> </button>
                                        </div>
                                    </div>

                                    <!-- School Modal -->
                                    <div class="modal" id="courses-{{ $school->id }}">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">{{ $school->name }} Courses</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <div class="boxmodal">
                                                                <table class="table" style="margin: 0 auto;">
                                                                    <tr><td>Name</td></tr>
                                                                    <tr><td>Qualification</td></tr>
                                                                    <tr><td>Duration</td></tr>
                                                                    <tr><td>Modules</td></tr>
                                                                    <tr><td>Exam Body</td></tr>
                                                                    <tr><td>Mode</td></tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Modal-->

                                @endforeach

                            </div>

                        </div>
                    </section><!-- #schools -->
                    <br>
                <hr>


            <!--==========================
      Team Section
    ============================-->
            <section id="team">
                <div class="container wow fadeInUp">
                    <div class="section-header">
                        <br>
                        <h3 class="section-title">Staff</h3>
                        <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                    </div>
                    <div class="row">

                        @foreach($staffs as $staff)
                        <div class="col-lg-3 col-md-6">
                            <div class="member">
                                <div class="card card-body">
                                    <img src="{{ $staff->passport }}" class="rounded-circle mx-auto d-block" alt="" style="height: 150px; width: 150px;">
                                    <div class="caption">
                                        <h5>{{ $staff->salutation }}&nbsp;{{ $staff->first_name }}</h5>
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

    <!--==========================
      Facts Section
    ============================-->
    <section id="facts">
        <div class="container wow fadeIn">
            <div class="section-header">
                <h3 class="section-title">Upcoming Events</h3>
                <hr>
            </div>
            <div class="row">
                @foreach($events as $event)
                <div class="col-sm-4">
                    <div class="card card-body m-2">
                        <h4 class="text-black-50">{{ $event->title }}<small class="float-right">Date</small> </h4>
                        <img src="{{asset('img/team-1.jpg')}}" alt="" style="width: 100%; height: 200px;">
                        <div class="caption">
                            <p class="description">{{ $event->description }}</p>
                            <h6 class="float-left">{{ $event->venue }}</h6>
                        </div>
                        <div class="icons">
                            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#event-modal" style="width: 25px;">
                                <i class="fas fa-info"></i>
                            </button>
                        </div>
                    </div>
                </div>
                    @endforeach

            </div>

        </div>
    </section><!-- #facts -->

            <!-- Events Modal-->
            <div class="modal" id="event-modal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Event Title</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <p>
                                Mahanaim Educational Institute (College) philosophies are based on utilizing the true word and knowledge of the heart that is manifested in the Bible. Through this methodology many students have amazingly acquired progressive and healthy mindsets while evolving into more effective individuals. We have discovered with assurance how people such as Abraham Lincoln and biblical figures such as Joseph and David gained wisdom from the word of God. We have employed education methodologies that will produce leaders for the next generation who will become catalysts of peace and bliss in the society.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Modal -->

    <!--==========================
    Blog Section
    ============================-->
            <section id="facts">
                <div class="container wow fadeIn">
                    <div class="section-header">
                        <h3 class="section-title">Latest Posts</h3>
                    </div>
                    <div class="row">
                        @foreach($posts as $post)
                        <article class="media content-section m-3">
                            <div class="media-body">
                                <div class="article-metadata">
                                    <h2><a class="article-title" href="">{{ $post->title }}</a><small class="text-muted float-right" style="font-size: 14px;">{{ $post->date }}</small></h2>
                                </div>
                                <div class="col-sm-3 float-left">
                                    <img src="{{$post->image}}" alt="" style="width: 100%;">
                                </div>
                                <div class="col-sm-9 float-right">
                                <p class="article-content">{{ $post->content }}</p>
                                <hr>
                                    <a class="mr-2 float-right" href="">Author</a>
                                </div>
                            </div>
                        </article>
                            @endforeach
                    </div>

                </div>
            </section>

                    <br>
                    <hr>
    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio">
        <div class="container wow fadeInUp">
            <div class="section-header">
                <h3 class="section-title">Gallery</h3>
                <hr>
            </div>

            <div class="row" id="portfolio-wrapper">

                @foreach($photos as $photo)
                <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                    <a href="">
                        <img src="{{$photo->image}}" alt="" style="">
                        <div class="details" style="width: 84%;">
                            <span>{{ $photo->caption }}</span>
                        </div>
                    </a>
                </div>
                    @endforeach

            </div>

        </div>
    </section><!-- #portfolio -->
                    <br>
                    <hr>


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
                                                <img class="rounded-circle" src="{{$partner->logo}}" alt="Name" style="height: 120px; width: 120px;">
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
                        <form action="" method="post" role="form" class="contactForm">
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
                            <div class="form-group"><button type="submit" style="width: 100%;">Send Message</button></div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #contact -->
        </div>
</main>
@endsection