@extends('layouts.user')

@section('content')


    <div class="container">
    <h4 class="login-box-msg">Welcome to Mahanaim Educational Institute</h4><br/>
    <div class="row">

        <div class="col-md-2"></div>
        <div class="col-md-4 login-left">
            <form method="POST" action="{{ route('login') }}" id="login-form" style="border-radius: 5px;">
                @csrf
                @if(count($errors)>0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif
                @if(session('response'))
                    <div class="alert alert-success">{{session('response')}}</div>
                @endif

                @if(session('reject'))
                    <div class="alert alert-warning">{{session('reject')}}</div>
                @endif
                <div class="form-group has-feedback ">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email address" />

                </div>
                <div class="form-group has-feedback ">
                    <input tid="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="password" />
                </div>


                <div class="row">
                    <div class="col-xs-6 form-group pl-3" style="width: 96%;">
                        <button type="submit" class="btn btn-info btn-block">
                            Login                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-6 form-group pl-3">
                        <div class="checkbox icheck pl-3">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

            </form>
        </div>


        <div class="col-md-4 login-right">
            <a href="{{ route('register') }}"
               class="btn bg-olive btn-social btn-block">
                Register a new account            </a>
            <br>
            <a href="{{ route('password.request') }}"
               class="btn bg-yellow btn-social btn-block">
                Forgot your password            </a>
        </div>
    </div>
    </div>




    <!-- /.login-box-body -->
    <!-- /.content -->

@endsection