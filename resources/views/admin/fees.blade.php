@extends('admin.layout')
<link href="{{asset('css/style.css')}}" rel="stylesheet">

@section('content')
    <!-- The Modal -->
    <div class="modal" id="modal-add">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Fee</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="post" class="form-horizontal" action="{{route('add-fee')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Title:</label>
                            <input type="text" class="form-control" name="title">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Fee Structure:</label>
                            <input type="file" name="structure" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!--==========================
    Schools Section
  ============================-->
        <section id="services" style="width: 100%;">
            <div class="container wow fadeIn">
                <div class="section-header">
                    <button class="btn btn-outline-danger btn-sm float-right" data-toggle="modal" data-target="#modal-add" style="margin: 2px;">Add Fee Structure
                        <i class="fas fa-upload"></i>
                    </button>
                    <a href="{{route('engineering')}}" class="btn btn-outline-secondary btn-sm">Engineering</a>
                    <a href="{{route('ict')}}" class="btn btn-outline-secondary btn-sm">ICT</a>
                    <a href="{{route('icdl')}}" class="btn btn-outline-secondary btn-sm">ICDL</a>
                    <a href="{{route('hospitality')}}" class="btn btn-outline-secondary btn-sm">Hospitality</a>
                    <a href="{{route('catering')}}" class="btn btn-outline-secondary btn-sm">Catering</a>
                    <a href="{{route('journalism')}}" class="btn btn-outline-secondary btn-sm">Journalism</a>
                    <a href="{{route('business')}}" class="btn btn-outline-secondary btn-sm">Business</a>
                    <a href="{{route('languages')}}" class="btn btn-outline-secondary btn-sm">Languages</a>
                    <a href="{{route('sports')}}" class="btn btn-outline-secondary btn-sm">Sports</a>
                    <hr>
                </div>

                @foreach($fees as $fee)
                <div class="row">
                    <div class="col-sm-12">
                        <div class="caption">
                            <form method="post" action="{{route('delete-fee', $fee->id)}}" class="form-btn float-right m-1">
                                @csrf
                                <button class="btn btn-danger btn-sm form-btn" type="submit" onclick='return confirm("Are you sure you want to Delete this Fee Structure?")'>
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                            <button class="btn btn-info btn-sm float-right m-1" data-toggle="modal" data-target="#updatemodal-{{ $fee->id }}">
                                <i class="fas fa-edit"></i>
                            </button>
                        </div>
                        <iframe src="{{ $fee->structure }}" style="height: 100%; width: 100%;"></iframe>
                    </div>

                        <!-- Update Modal -->
                        <div class="modal" id="updatemodal-{{ $fee->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Update Fee Structure</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Update body -->
                                    <div class="modal-body">
                                        <form method="post" class="form-horizontal" action="{{route('update-fee', $fee->id)}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label class="control-label">Fee Structure:</label>
                                                <input type="file" name="structure" class="form-control" value="{{ $fee->structure }}">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-info">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End of Modal-->



                </div>
                    @endforeach
            </div>
        </section><!-- #schools -->

    </div>
@endsection