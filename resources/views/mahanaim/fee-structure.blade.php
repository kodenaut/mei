@extends('mahanaim.layout')

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@section('content')
    <main id="main">
        <div class="container">
        <div class="row">
        <!--==========================
    Schools Section
  ============================-->
        <div class="col-sm-2">
            <div class="list-group">
                <a class="list-group-item list-group-item-light" style="color: black; background: #0f7b9f;"><b>Schools</b></a>
                <a class="list-group-item list-group-item-primary" href="{{route('fee-structure')}}">Engineering</a>
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

        <div class="col-sm-10">
                <div class="section-header text-center">
                    <a href="" class="list-group-item text-center" style="background: #0f7b9f; color: black; font-size: 18px; font-family: Symbola;"><strong>Fee Structure</strong></a>
                </div>

                     <div class="card card-body mt-1">
                @foreach($fees as $fee)
                            <iframe src="{{ $fee->structure }}" style="height: 100%; width: 100%;"></iframe>
                        </div>


                @endforeach
            </div>
        </div>

    </div>
    </main>
    @endsection
