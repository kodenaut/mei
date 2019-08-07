     @extends('admin.layout')

     @section('content')
     <!-- MAIN CONTENT-->
     <main id="main">
          <div class="row about-container" style="font-family: Motron;">

               <div class="col-lg-12 content order-lg-1 order-2">
                    <section id="facts">
                         <div class="container wow fadeIn">
                    <div class="row">
                              <div class="col-sm-3 mb-1">
                                   <div class="card text-white bg-success o-hidden h-90">
                                        <div class="card-body">
                                             <div class="card-body-icon">
                                                  <i class="fas fa-fw fa-users"></i>
                                             </div>
                                             <div class="mr-5">Staff</div>
                                        </div>
                                        <a class="card-footer text-white clearfix small z-1" href="{{route('staffs')}}">
                                             <span class="float-left">{{ $details[0] }}</span>
                                             <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                          </span>
                                        </a>
                                   </div>
                              </div>

                              <div class="col-sm-3 mb-1">
                                   <div class="card text-white bg-warning o-hidden h-90">
                                        <div class="card-body">
                                             <div class="card-body-icon">
                                                  <i class="fas fa-fw fa-users"></i>
                                             </div>
                                             <div class="mr-5">Schools</div>
                                        </div>
                                        <a class="card-footer text-white clearfix small z-1" href="{{route('schools')}}">
                                             <span class="float-left">{{ $details[1] }}</span>
                                             <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                          </span>
                                        </a>
                                   </div>
                              </div>

                              <div class="col-sm-3 mb-1">
                                   <div class="card text-white bg-danger o-hidden h-90">
                                        <div class="card-body">
                                             <div class="card-body-icon">
                                                  <i class="fas fa-fw fa-book"></i>
                                             </div>
                                             <div class="mr-5">Courses</div>
                                        </div>
                                        <a class="card-footer text-white clearfix small z-1" href="">
                                             <span class="float-left">{{ $details[2] }}</span>
                                             <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                          </span>
                                        </a>
                                   </div>
                              </div>

                              <div class="col-sm-3 mb-3">
                                   <div class="card text-white bg-primary o-hidden h-90">
                                        <div class="card-body">
                                             <div class="card-body-icon">
                                                  <i class="fas fa-fw fa-envelope-open"></i>
                                             </div>
                                             <div class="mr-5">Messages</div>
                                        </div>
                                        <a class="card-footer text-white clearfix small z-1" href="">
                                             <span class="float-left">{{ $details[3] }}</span>
                                             <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                          </span>
                                        </a>
                                   </div>
                              </div>

                              <div class="col-sm-3 mb-1">
                                   <div class="card text-white bg-info o-hidden h-90">
                                        <div class="card-body">
                                             <div class="card-body-icon">
                                                  <i class="fas fa-fw fa-book-open"></i>
                                             </div>
                                             <div class="mr-5">News</div>
                                        </div>
                                        <a class="card-footer text-white clearfix small z-1" href="{{route('posts')}}">
                                             <span class="float-left">{{ $details[4] }}</span>
                                             <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                          </span>
                                        </a>
                                   </div>
                              </div>

                              <div class="col-sm-3 mb-3">
                                   <div class="card text-white bg-success o-hidden h-90">
                                        <div class="card-body">
                                             <div class="card-body-icon">
                                                  <i class="fas fa-fw fa-users"></i>
                                             </div>
                                             <div class="mr-5">Events</div>
                                        </div>
                                        <a class="card-footer text-white clearfix small z-1" href="">
                                             <span class="float-left">{{ $details[5] }}</span>
                                             <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                          </span>
                                        </a>
                                   </div>
                              </div>

                              <div class="col-sm-3 mb-1">
                                   <div class="card text-white bg-secondary o-hidden h-90">
                                        <div class="card-body">
                                             <div class="card-body-icon">
                                                  <i class="fas fa-fw fa-photo"></i>
                                             </div>
                                             <div class="mr-5">Photos</div>
                                        </div>
                                        <a class="card-footer text-white clearfix small z-1" href="{{route('photos')}}">
                                             <span class="float-left">{{ $details[6] }}</span>
                                             <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                          </span>
                                        </a>
                                   </div>
                              </div>

                              <div class="col-sm-3 mb-1">
                                   <div class="card text-white bg-warning o-hidden h-90">
                                        <div class="card-body">
                                             <div class="card-body-icon">
                                                  <i class="fas fa-fw fa-users"></i>
                                             </div>
                                             <div class="mr-5">Partners</div>
                                        </div>
                                        <a class="card-footer text-white clearfix small z-1" href="{{route('partners')}}">
                                             <span class="float-left">{{ $details[7] }}</span>
                                             <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                          </span>
                                        </a>
                                   </div>
                              </div>

                        <div class="col-sm-3 mb-1">
                            <div class="card text-white bg-danger o-hidden h-90">
                                <div class="card-body">
                                    <div class="card-body-icon">
                                        <i class="fas fa-fw fa-users"></i>
                                    </div>
                                    <div class="mr-5">Notices</div>
                                </div>
                                <a class="card-footer text-white clearfix small z-1" href="{{route('notices')}}">
                                    <span class="float-left">{{ $details[8] }}</span>
                                    <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                          </span>
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-1">
                            <div class="card text-white bg-info o-hidden h-90">
                                <div class="card-body">
                                    <div class="card-body-icon">
                                        <i class="fas fa-fw fa-users"></i>
                                    </div>
                                    <div class="mr-5">Alumni</div>
                                </div>
                                <a class="card-footer text-white clearfix small z-1" href="{{route('alumnis')}}">
                                    <span class="float-left">{{ $details[8] }}</span>
                                    <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                          </span>
                                </a>
                            </div>
                        </div>

                         </div>
                         </div>
                    </section>
               </div>
          </div>
     </main>
     @endsection
<!-- end document-->