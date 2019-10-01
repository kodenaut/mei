@extends('mahanaim.layout')

@section('content')
<!-- Top Stories Area -->

<main id="main" class="mt-2">
<!-- Start main body Area -->
    <div class="container">
        <div class="row">
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
                    <a href="https://www.facebook.com/Mahanaim-Educational-Institute-365783176877179/" class="list-group-item"><i class="fab fa-facebook"></i>&nbsp;Facebook</a>
                    <a href="https://twitter.com/Mahanaimcollege" class="list-group-item"><i class="fab fa-twitter"></i>&nbsp;Twitter</a>
                    <a href="https://www.instagram.com/mahanaimcollege/" class="list-group-item"><i class="fab fa-instagram"></i>&nbsp;Instagram</a>
                    <a href="#" class="list-group-item"><i class="fab fa-linkedin"></i>&nbsp;LinkedIn</a>
                </div>
            </div>
            <div class="col-sm-6 post-list m-0">

                <!-- Start Post Area -->
                <section class="post-area">

                        <!-- Single post -->
                    <div class="card card-body m-0">
                        <a href="" class="list-group-item mx-1 px-1 mt-0" style="background: #265ea1; color: white; font-size: 16px; font-family: Symbola;"><strong>Recent News</strong></a>
                        @foreach($news as $new)
                        <div class="single-stories-carousel d-flex align-items-center" style="font-family: cursive; font-size: 12px;">
                            <div class="col-sm-2 stories-thumb my-1 p-0">
                                <img class="img-fluid" src="{{ $new->image }}" alt="" style="height: 100px; width: 100%;">
                            </div>
                            <div class="stories-details" style="font-family: Symbola;">
                                <h5 style="margin-top: 0;"><a href="" data-toggle="modal" data-target="#modal-{{ $new->id }}" style="color: #024DA1; font-family: Purisa;"><strong>{{ $new->title }}</strong></a>
                                    <span class="badge float-right" style="background: #1b1b1b; float: right;">{{ date('d-M-y', strtotime($new->created_at))}}</span>
                                </h5>
                                <p class="">
                                    <?php
                                    $cont =substr($new->content,0,450);
                                    ?>
                                    {!! $cont !!}...&nbsp;
                                    <a href="" data-toggle="modal" data-target="#modal-{{ $new->id }}">
                                        <span class="badge" style="background: #0a568c;"> More</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                            <hr style="border-style: dashed; margin: 0;">

                            <!-- School Modal -->
                            <div class="modal" id="modal-{{ $new->id }}">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title text-danger">{{ $new->title }}</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <p style="color: black;">
                                                {!! $new->content !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- End of Modal-->
                        @endforeach
                        <!-- End Single post -->

                        <div class="row justify-content-center mb-0">
                                    {{ $news->links() }}
                            </div>
                        </div>

                    <br>
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

                <!-- Start Post Area -->
                </section>
            </div>


            <div class="col-sm-3 sidebar">
                <a href="{{route('our-alumnis')}}" class="list-group-item mb-1" style="background: #265ea1; color: white;"><strong><i class="fa fa-angle-double-right"></i>Alumni Section</strong></a>
                @foreach($wms as $wm)
                    <div class="list-group px-1 my-1" style="border: 1px solid lightgray; color: black; font-family: cursive; font-size: 13px; border-radius: 3px;">
                          <img src="{{ $wm->image }}" class="img-fluid mx-auto rounded-circle" style="height: 50px; width: 50px;">
                        <h5 class="text-center my-0" style="color: #0f7b9f;">{{$wm->firstname}}&nbsp;{{ $wm->lastname }}</h5>
                           <?php
                            $cont =substr($wm->content,0,100);
                            ?>
                            {!! $cont !!}...
                               <a href="" data-toggle="modal" data-target="#new-{{ $wm->id }}">
                                   <span class="badge" style="background: #0a568c;">Read More</span>
                               </a>

                    </div>
                               <!-- School Modal -->
                               <div class="modal" id="new-{{ $wm->id }}">
                                   <div class="modal-dialog modal-lg">
                                       <div class="modal-content">

                                           <!-- Modal Header -->
                                           <div class="modal-header">
                                               <h4 class="modal-title text-danger">{{ $wm->title }}</h4>
                                               <button type="button" class="close" data-dismiss="modal">&times;</button>
                                           </div>

                                           <!-- Modal body -->
                                           <div class="modal-body">
                                               <p style="color: black;">
                                                   {!! $wm->content !!}
                                               </p>
                                           </div>
                                           <div class="modal-footer">
                                               <p>{{ $wm->firstname }}&nbsp;{{ $wm->lastname }}</p>
                                           </div>
                                       </div>
                                   </div>
                               </div>

                               <!-- End of Modal-->
                        @endforeach

            </div>
        </div>
    </div>

    <!-- KCSE Modal -->
    <div class="modal" id="kcse-modal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title text-">Fill in the details to access the papers</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="post" action="{{route('past-papers')}}">
                        @csrf
                        <div class="row mb-4">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Full Name:</label><span class="required">*</span>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">School:</label><span class="required">*</span>
                                    <input type="text" name="school" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Email Address:</label><span class="required">*</span>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Phone Number:</label><span class="required">*</span>
                                    <input type="number" name="phone" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <h5 class=""><input type="checkbox" id="checkbox" class="mt-2">&nbsp;By checking this box you agree to our <a href="{{route('tcs')}}" target="_blank" class="text-primary"> terms and conditions</a>.</h5>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</main>

@endsection