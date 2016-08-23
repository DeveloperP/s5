<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PSL</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        #login-form{
            background-color:#182076;
            border-radius: 0;
            border:none;
            opacity:0.7;
        }

        #login{
            padding-top:20%;
        }

        .help-block{
            font-size:10px;
        }
        #msg{
            color: #ffffff;
        }
        #log-icon{
            background-color: #fff;
            border-radius: 0;
            opacity:0.5;
        }

        #logpage{
            background-image: url("{{ URL::asset('image/login-bg.jpg') }}");
            background-repeat: no-repeat;
            background-size: 100% 100%;
            height:100%;
        }

    </style>
</head>
<body id="app-layout">
<div class="container-fluid" id="logpage">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3" id="login" >
            <div class="panel panel-default" id="login-form">
                <!--    <div class="panel-heading">Login</div> -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-offset-4">
                            <img src="{{URL::asset("image/psl-logo.png") }}" alt="logo" class="img-responsive" height="100px" width="100px;">
                            <br>
                        </div>

                    </div>
                    <form class="form-horizontal-" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <!--  <label class="control-label">E-Mail Address</label> -->

                                    <div class="input-group">
                                        <span class="input-group-addon" id="log-icon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                                        <input type="name" class="form-control" style="border-radius: 0;" name="name" value="{{ old('name') }}">
                                    </div>
                                    <div>
                                        @if ($errors->has('name'))
                                            <span class="help-block" id="msg">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <!--    <label class="control-label">Password</label> -->

                                    <div class="input-group">
                                        <span class="input-group-addon" id="log-icon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                                        <input type="password" class="form-control" style="border-radius: 0;" name="password">
                                    </div>
                                    <div>
                                        @if ($errors->has('password'))
                                            <span class="help-block" id="msg">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--     <div class="row">
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4-">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>
                             </div>
                        -->
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <button type="submit" class="btn btn-primary" style="border-radius: 0; width:100%;">
                                        <i class="fa fa-btn fa-sign-in"></i>Login
                                    </button>

                                    <!--   <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a> -->
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
