@extends('admin.layout')
<link href="{{asset('css/style.css')}}" rel="stylesheet">

@section('content')
    <!-- The Modal -->
    <div class="modal" id="partner-add">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">New Partner</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="post" action="{{route('add-partner')}}" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Name:</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Country:</label>
                            <input type="text" class="form-control" name="country">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Link:</label>
                            <input type="text" class="form-control" name="link">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Logo:</label>
                            <input type="file" class="form-control" name="logo">
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
                <button class="btn btn-outline-info btn-sm float-right" data-toggle="modal" data-target="#partner-add" style="margin: 2px;">Add Partner
                    <i class="fas fa-plus-circle"></i>
                </button>
                <h3 class="section-title">Our Partners</h3>
                <hr>
                <br>
            </div>

            <div class="row">
                @foreach($partners as $partner)
                    <div class="partner text-center m-3">
                        <a href="{{ $partner->link }}" target="_blank">
                            <img class="img-fluid rounded-circle mx-auto d-block" src="{{$partner->logo}}" alt="Name" style="height: 120px; width: 120px;">
                        </a>
                        <div class="caption">
                            <h6>{{ $partner->name }}</h6>
                            <p>{{ $partner->country }}</p>

                            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#update-{{ $partner->id }}">
                                <i class="fas fa-edit"></i>
                            </button>
                            <form method="post" action="{{route('delete-partner', $partner->id)}}" class="form-btn">
                                @csrf
                                <button class="btn btn-danger btn-sm form-btn" type="submit" onclick='return confirm("Are you sure you want to Delete this Partner?")'>
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                </div>

                    <!-- Update Modal -->
                    <div class="modal" id="update-{{ $partner->id }}">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Update {{ $partner->name }}</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form method="post" action="{{route('update-partner', $partner->id)}}" class="form-horizontal" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label class="control-label">Name:</label>
                                            <input type="text" class="form-control" name="name" value="{{ $partner->name }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Country:</label>
                                            <input type="text" class="form-control" name="country" value="{{ $partner->country }}">
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Link:</label>
                                            <input type="text" class="form-control" name="link" value="{{ $partner->link }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Logo:</label>
                                            <input type="file" class="form-control" name="logo">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-info">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Modal -->
                    @endforeach
            </div>

        </div>
    </section>
</div>
    @endsection

