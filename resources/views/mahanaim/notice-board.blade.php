@extends('mahanaim.fee-custom')

@section('content')
    <main id="main">
        <div class="container">
            <div class="row">
                    <section id="services" style="width: 100%;">
                    <div class="container wow fadeIn">
                <div class="section-header pt-3">
                    <h3 class="text-center"> <strong>{{ $notice->title }}</strong></h3>
                    <hr>
                </div>
            </div>
                <!--==========================
            Schools Section
          ============================-->

                <article class="media content-section" style="width: 100%;">
                    <div class="media-body">
                        <div class="row">
                        <div class="col-sm-9">
                            <p class="article-content m-2">{!! $notice->content  !!} </p>

                            @if($notice->file)
                                <iframe src="{{ $notice->file }}" width="100%" style="height: 200%;"></iframe>
                                @endif
                            <hr>
                        </div>
                                <!-- Notice Board-->
                                <div class="col-sm-3">
                                    <div class="list-group mt-2" style="font-size: 14px; font-family: 'Source Sans Pro', sans-serif;">
                                        <a class="list-group-item list-group-item-primary" style="background: #98ccff; color: #ac2925;"><b>Recent News</b></a>
                                        @foreach($posts as $post)
                                            <a class="list-group-item list-group-item-light" href="{{route('show-post', $post->id)}}"><i class="fas fa-angle-double-right"></i> {{ $post->title }}</a>
                                        @endforeach
                                    </div>

                                    <div class="list-group mt-2" style="font-size: 14px; font-family: 'Source Sans Pro', sans-serif;">
                                        <a class="list-group-item list-group-item-primary" style="background: #98ccff; color: #ac2925;"><b>Follow Us:</b></a>
                                        <a class="list-group-item list-group-item-light" href="https://web.facebook.com/Mahanaim-Educational-Institute-365783176877179/" target="_blank" style="color: #1b4b72;"><b><i class="fab fa-facebook-square"></i> Facebook</b></a>
                                        <a class="list-group-item list-group-item-light" href="https://twitter.com/Mahanaimcollege" target="_blank" style="color: #1b4b72;"><b><i class="fab fa-twitter-square"></i> Twitter</b></a>
                                        <a class="list-group-item list-group-item-light" href="https://www.linkedin.com/in/mahanaim-educational-institute-b87231179/" target="_blank" style="color: #1b4b72;"><b><i class="fab fa-linkedin-square"></i> LinkedIn</b></a>
                                        <a class="list-group-item list-group-item-light" href="" style="color: #1b4b72;"><b><i class="fab fa-instagram"></i> Instagram</b></a>
                                    </div>

                                </div>

                                <!-- End of Notice Board -->
                        </div>
                    </div>
                </article>

                    </section>
            </div>

        </div>
    </main>
@endsection
