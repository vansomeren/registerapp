<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laravel Meetup </title>

    <link href="{{ asset('/assets/css/style.default.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/select2.css')}}" rel="stylesheet" />
    <link href="{{asset('/assets/css/bootstrap.css')}}" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{ asset ('/assets/js/html5shiv.js') }}"></script>

    <script src="{{ asset('/assets/js/respond.min.js') }}"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

    <![endif]-->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body>


<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->




        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;@if(Auth::guest())
                          @else
                <li><a class="btn btn-success" href="{{route('event.index')}}" style="margin-top:8px;margin-left: 10px;"> Create Event</a></li>
                          @endif

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a class="btn btn-success" href="{{ url('/login') }}" style="margin-top:8px">Login</a></li>
                    <li><a class="btn btn-info" href="{{ url('/register') }}" style="margin-top:8px">Register</a></li>
                @else


                            <li>
                                <a class="btn btn-warning" href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();" style="margin-top:8px">
                                    Logout
                                    <i class="fa fa-eject"></i>
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                @endif
            </ul>
        </div>
    </div>
</nav>