@extends('admin.layout')
<link href="{{asset('css/style.css')}}" rel="stylesheet">


@section('content')
    <!--==========================
    Blog Section
    ============================-->
    <section id="facts">
        <div class="container wow fadeIn">
            <div class="section-header">
                <h3 class="section-title">New Event</h3>
                <hr>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="media-body m-2">
                        <form method="post" action="" class="form-control" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="control-label">Title:</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Description:</label>
                                <textarea class="form-control" name="description" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Venue:</label>
                                <input type="text" class="form-control" name="venue">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Image:</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection