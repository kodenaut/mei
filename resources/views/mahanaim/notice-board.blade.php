@extends('mahanaim.fee-custom')

@section('content')
    <main id="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                <div class="section-header pt-3">
                    <h3 class="text-center"> <strong>Mahanaim Educational Institute Notice Board</strong></h3>
                    <hr>
                    <p class="text-center"> All the important College Notice will be posted here:</p>
                </div>
                </div>
            </div>

            <div class="row">

                <!--==========================
            Schools Section
          ============================-->
                @foreach($notices as $notice)
                <div class="col-sm-3">
                    <div class="list-group">
                        <h5 class="list-group-item list-group-item-info" href="">{{ $notice->title }}<small class="float-right">
                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#notice-{{ $notice->id }}">
                                    <i class="fas fa-info"></i>
                                </button>
                            </small>
                            <small class="">Posted:&nbsp;{{ $notice->created_at }}</small>
                        </h5>

                            <div class="caption" style="border: solid 1px grey; height: 130px; max-height: 130px;">
                                <p class="m-1">{{ $notice->content }}</p>
                            </div>
                    </div>
                </div>

                    <!-- Notice Modal-->
                    <div class="modal" id="notice-{{ $notice->id }}">
                        <div class="modal-dialog modal-lg" style="height: 150%;">
                            <div class="modal-content" style="height: 90%;">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">{{ $notice->title }}</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <p>
                                        {{ $notice->content }}
                                    </p>
                                    <hr>
                                    <iframe src="{{ $notice->file }}" style="height: 80%; width: 100%;"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- End of Modal-->

                @endforeach
            </div>

        </div>
    </main>
@endsection
