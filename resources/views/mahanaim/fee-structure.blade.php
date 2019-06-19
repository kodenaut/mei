@extends('mahanaim.fee-custom')

@section('content')
    <main id="main">
        <div class="container-fluid">
        <div class="row">
        <!--==========================
    Schools Section
  ============================-->
        <div class="col-sm-3 m-1" style="padding-top: 5%;">
            <div class="list-group">
                <a class="list-group-item list-group-item-light" style="color: black;"><b>Schools</b></a>
                <a class="list-group-item list-group-item-primary" href="{{route('engineering-fee')}}">Engineering</a>
                <a class="list-group-item list-group-item-success" href="{{route('ict-fee')}}">ICT</a>
                <a class="list-group-item list-group-item-warning" href="{{route('icdl-fee')}}">ICDL</a>
                <a class="list-group-item list-group-item-danger" href="{{route('hospitality-fee')}}">Hospitality</a>
                <a class="list-group-item list-group-item-secondary" href="{{route('catering-fee')}}">Catering</a>
                <a class="list-group-item list-group-item-primary" href="{{route('journalism-fee')}}">Journalism</a>
                <a class="list-group-item list-group-item-info" href="{{route('business-fee')}}">Business</a>
                <a class="list-group-item list-group-item-dark" href="{{route('languages-fee')}}">Languages</a>
                <a class="list-group-item list-group-item-success" href="{{route('sports-fee')}}">Sports</a>
            </div>
        </div>

        <div class="col-sm-8">
                <div class="section-header text-center">
                    <h3 class="section-title pt-2">Fee Structure</h3>
                    <hr>
                </div>

                @foreach($fees as $fee)
                        <div class="col-sm-12" style="height: 110%;">
                            <iframe src="{{ $fee->structure }}" style="height: 100%; width: 100%;"></iframe>
                        </div>


                @endforeach
            </div>
        </div>

    </div>
    </main>
    @endsection
