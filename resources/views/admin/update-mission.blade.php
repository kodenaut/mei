@extends('admin.layout')

@section('content')
    <div class="row">
            <div class="col-sm-8">
                <div class="card card-body" style="border-radius: 10px;">
                    <h4 class="text-info">Update Mission</h4>
                    <hr>
                    <form method="post" action="{{route('update-mission', $mission->id)}}" class="form-horizontal">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" rows="7" name="content">{{$mission->content}}</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>

                    </form>
                </div>
            </div>
    </div>
@endsection