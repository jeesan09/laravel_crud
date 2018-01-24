@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin-top:60px">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">

            <fieldset>
                        {{ csrf_field() }}
                <h2>Please Sign In</h2>

                <hr class="colorgraph">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-Mail Address">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-8 col-md-6">
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Password?</a>
                            </div>
                        </div>

                    <hr class="colorgraph">
                        <div class="form-group">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <button type="submit" class="btn btn-lg btn-success btn-block">
                                        Sign In
                                    </button>
                                </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <a href="{{ url('/register') }}" class="btn btn-lg btn-primary btn-block">Register</a>
                        </div>
                            </div>
                    </div>
                        

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
