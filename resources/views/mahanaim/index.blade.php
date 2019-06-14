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
                                        <p class="description">{{ $mission->content }}</p>
                                    </div>
                                </div>
                                @endforeach

                                @foreach($visions as $vision)
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="box">
                                        <div class="icon"><a href=""><i class="fa fa-paper-plane"></i></a></div>
                                        <h4 class="title"><a href="">Vision</a></h4>
                                        <p class="">{{ $vision->content }}</p>
                                    </div>
                                </div>
                                    @endforeach

                                @foreach($philosophies as $philosophy)
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="box">
                                        <div class="icon"><a href=""><i class="fa fa-photo"></i></a></div>
                                        <h4 class="title"><a href="">Philosophy</a></h4>
                                        <p class="description">{{ $philosophy->content }}</p>
                                    </div>
                                </div>
                                    @endforeach
                        </div>

                <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
                        </div>
                    </section>


            <!--==========================
      Team Section
    ============================-->
            <section id="team">
                <div class="container wow fadeInUp">
                    <div class="section-header">
                        <br><br><br>
                        <h3 class="section-title">Staff</h3>
                        <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="member">
                                <div class="card card-body">
                                    <img src="img/team-1.jpg" alt="" style="height: 200px; width: 100%;">
                                    <div class="caption">
                                        <h5>Name</h5>
                                        <span>Position</span>
                                        <p class="description">Staff short bio...</p>
                                        <a href="" class="btn btn-info btn-sm float-left">
                                            <i class="fas fa-info"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- #team -->

            <!--==========================
     Schools Section
   ============================-->
            <section id="services">
                <div class="container wow fadeIn">
                    <div class="section-header">
                        <br><br><br>
                        <h3 class="section-title">Schools</h3>
                        <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                        <br>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="box">
                                <div class="icon"><a href=""><i class="fa fa-desktop"></i></a></div>
                                <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                                <button class="btn btn-info btn-sm float-left" data-toggle="modal" data-target="#school-modal">
                                    <i class="fas fa-info"></i>
                                </button>
                                <a href="" class="btn btn-danger btn-sm float-right"><i class="fas fa-book-open">&nbsp;Courses</i> </a>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- #schools -->

                    <!-- School Modal -->
                    <div class="modal" id="school-modal">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">School Name</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <p>
                                        School description...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Modal-->

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
                <div class="col-sm-4">
                    <div class="card card-body m-2">
                        <h4 class="text-black-50">Event Title<small class="float-right">Date</small> </h4>
                        <img src="{{asset('img/team-1.jpg')}}" alt="" style="width: 100%; height: 200px;">
                        <div class="caption">
                            <p class="description">This is the event content...</p>
                            <h6 class="float-left">Venue</h6>
                        </div>
                        <div class="icons">
                            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#event-modal" style="width: 25px;">
                                <i class="fas fa-info"></i>
                            </button>
                        </div>
                    </div>
                </div>

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
                        <article class="media content-section m-3">
                            <div class="media-body">
                                <div class="article-metadata">
                                    <h2><a class="article-title" href="">Title</a><small class="text-muted float-right" style="font-size: 14px;">Date</small></h2>
                                </div>
                                <div class="col-sm-3 float-left">
                                    <img src="{{asset('img/team-1.jpg')}}" alt="" style="width: 100%;">
                                </div>
                                <div class="col-sm-9 float-right">
                                <p class="article-content">Mahanaim Educational Institute (College) philosophies are based on utilizing the true word and knowledge of the heart that is manifested in the Bible. Through this methodology many students have amazingly acquired progressive and healthy mindsets while evolving into more effective individuals. We have discovered with assurance how people such as Abraham Lincoln and biblical figures such as Joseph and David gained wisdom from the word of God. We have employed education methodologies that will produce leaders for the next generation who will become catalysts of peace and bliss in the society.</p>
                                <hr>
                                    <a class="mr-2 float-right" href="">Author</a>
                                </div>
                            </div>
                        </article>
                    </div>

                </div>
            </section>

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
                <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                    <a href="">
                        <img src="img/portfolio/app1.jpg" alt="" style="width: 100%; height: 100%;">
                        <div class="details" style="width: 84%;">
                            <h4>App 1</h4>
                            <span>Alored dono par</span>
                        </div>
                    </a>
                </div>



            </div>

        </div>
    </section><!-- #portfolio -->

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