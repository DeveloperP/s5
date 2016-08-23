<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PSL</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <!-- Styles -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/psl.css') }}">
    @stack('css')
</head>
<header class="main-header">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header col-md-2">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-nav-bar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="{{ route('calls.index') }}"  id="logo"> <!-- Logo -->

                    <img src="{{ asset("image/psl-logo.png") }}" height="70px" alt="logo"/>

                </a>
                <div class="pull-right phone-user hidden-sm hidden-md hidden-lg">
                    <img src="{{ asset("image/icon/user.png") }}" class="img-responsive" alt="user" >
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="top-nav-bar">
              <a href="{{ route('calls.create') }}">
                <div class="col-md-1 col-xs-3 col-sm-1 nav-link">
                  <div class="nav-icon">
                    <img src="{{ asset("image/icon/anchor.png") }}" class="img-responsive" alt="anchor">
                  </div>
                  <div class="nav-name">New&nbspCall </div>
                </div>
              </a>

              <a href="#">
                <div class="col-md-1 col-xs-3 col-sm-1 nav-link">
                  <div class="nav-icon">
                    <img src="{{ asset("image/icon/quote.png") }}" class="img-responsive" alt="quote">
                  </div>
                    <div class="nav-name">New&nbspQuote</div>
                </div>
              </a>

              <a href="#">
                <div class="col-md-1 col-xs-3 col-sm-1 nav-link">
                  <div class="nav-icon">
                    <img src="{{ asset("image/icon/query.png") }}" class="img-responsive" alt="query">
                  </div>
                    <div class="nav-name">Query</div>
                </div>
              </a>

              <a href="#">
                <div class="col-md-1 col-xs-3 col-sm-1 nav-link">
                  <div class="nav-icon">
                    <img src="{{ asset("image/icon/document.png") }}" class="img-responsive" alt="document">
                  </div>
                    <div class="nav-name">Documents</div>
                </div>
              </a>

              <a href="#">
                 <div class="col-md-1 col-xs-3 col-sm-1 nav-link">
                   <div class="nav-icon">
                    <img src="{{ asset("image/icon/pending.png") }}" class="img-responsive" alt="pending">
                   </div>
                     <div class="nav-name">Pending</div>
                 </div>
              </a>

              <a href="#">
                <div class="col-md-1 col-xs-3 col-sm-1 nav-link">
                   <div class="nav-icon">
                    <img src="{{ asset("image/icon/notification.png") }}" class="img-responsive" alt="notification">
                   </div>
                    <div class="nav-name">Notification</div>
                </div>
              </a>

              <a href="#">
                <div class="col-md-1 col-xs-3 col-sm-1 nav-link">
                  <div class="nav-icon">
                    <img src="{{ asset("image/icon/converter.png") }}" class="img-responsive" alt="converter">
                  </div>
                    <div class="nav-name">Converter</div>
                </div>
              </a>

              <a href="#">
                <div class="col-md-1 col-xs-3 col-sm-1 nav-link">
                  <div class="nav-icon">
                    <img src="{{ asset("image/icon/info.png") }}" class="img-responsive" alt="info">
                  </div>
                    <div class="nav-name">Port&nbspInfo</div>
                </div>
              </a>

                <div class="col-md-2 hidden-xs col-sm-2  pull-right">
                  <div class="row">
                    <div class="col-md-5 col-sm-5 user-image">
                        <img src="{{ asset("image/icon/user.png") }}" class="img-responsive" alt="user" height="60px" width="60px">
                    </div>
                    <div class="col-md-7 col-sm-7 user-details">

                        <div><b>{{ Auth::user()->name }}</b></div>
                        <div class="small-text"></div>
                        <div class="small-text"><a href="{{ url('/logout') }}" class="text-white">Sign&nbspOut</a></div>
                    </div>
                  </div>
                </div>


            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->


    <div class="container-fluid">
         <div class="row title-bar">
            <div class="col-sm-6 col-md-6">

               <button  id="menu-icon-button" data-toggle="modal" data-target=".menu-modal">
                   <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>Menu
               </button>

                <a href="{{ url('/calls') }}">
                    <button  id="menu-icon-button"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></button>
                </a>

               <button  id="menu-icon-button"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span></button>

               <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>

            </div>
         </div>
     </div><!-- /container-fluid -->

  </nav> <!-- /navigation -->
    @include('layouts.titlebar')
</header>

<body id="app">
    
     @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
     <script src="{{ URL::asset('bootstrap/js/bootstrap-datetimepicker.min.js') }}"></script>
     <script src="{{ URL::asset('bootstrap/js/bootstrap-confirmation.min.js') }}"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="{{ URL::asset('js/vendor.js') }}"></script>
    <script src="{{ URL::asset('js/script.js') }}"></script>
     @stack('scripts')
</body>
</html>
