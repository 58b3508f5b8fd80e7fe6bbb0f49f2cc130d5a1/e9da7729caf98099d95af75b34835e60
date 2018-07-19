@php    $public='';    if(config('app.env') == 'production')    $public ='public/main'; @endphp
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title','Home') - {{config('app.name')}}</title>

    <link href="{{asset($public.'/app/css/bootstrap.css')}}" rel="stylesheet">

    <link href="{{asset($public.'/app/css/metismenu.min.css')}}" rel="stylesheet" type="text/css')}}">

    <link rel="stylesheet" href="{{asset($public.'/app/css/material-design-iconic-font.min.css')}}">

    <link rel="stylesheet" href="{{asset($public.'/app/css/animate.min.css')}}">

    <link rel="stylesheet" href="{{asset($public.'/app/css/ripple.min.css')}}">

    <link rel="stylesheet" href="{{asset($public.'/app/css/hover.css')}}">

    <link rel="stylesheet" href="{{asset($public.'/app/css/sweetalert.min.css')}}">

    <link rel="stylesheet" href="{{asset($public.'/app/css/lightgallery.min.css')}}">

    <link rel="stylesheet" href="{{asset($public.'/app/css/justifiedgallery.min.css')}}">

    <link rel="stylesheet" href="{{asset($public.'/app/css/jquery-jvectormap.css')}}">

    <link rel="stylesheet" href="{{asset($public.'/app/css/fullcalendar.min.css')}}">

    <link rel="stylesheet" href="{{asset($public.'/app/css/fullcalendar.print.css')}}" media="print">

    <link href="{{asset($public.'/app/css/deluxe-admin.css')}}" rel="stylesheet">
    @yield('styles')


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body>

<div id="wrapper">

    <header class="navbar navbar-white navbar-fixed-top">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="zmdi zmdi-view-headline zmdi-hc-2x"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}" title="{{config('app.name')}}"><i
                        class="zmdi zmdi-widgets"></i> {{config('app.name')}}</a>
        </div>


        <nav>

            <ul class="nav navbar-top-links navbar-left">
                <li>
                    <a href="javascript:void(0);" class="toggle-sidebar hvr-underline-from-center"
                       title="Show/Hide Sidebar">
                        <i class="zmdi zmdi-menu"></i>
                    </a>
                </li>
            </ul>


            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a href="javascript:void(0);"
                       class="hvr-underline-from-center fullscreen hvr-underline-from-center text-muted"
                       title="Full Screen">
                        <i class="zmdi zmdi-fullscreen"></i>
                    </a>
                </li>
                <li class="dropdown"><a class="hvr-underline-from-center text-success" href="{{route('settings')}}"
                                        title="Settings"><i
                                class="zmdi zmdi-settings zmdi-hc-spin"></i></a>
                </li>
                <li class="dropdown"><a class="hvr-underline-from-center text-warning"
                                        href="{{url('/buy')}}" title="Buy SMS">
                        <i class="zmdi zmdi-card"></i>
                    </a>
                </li>
                <li class="dropdown"><a class="hvr-underline-from-center text-danger"
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" title="Logout">
                        <i class="zmdi zmdi-sign-in"></i>
                    </a>
                </li>
            </ul>

        </nav>

    </header>

    <aside>

        <div class="navbar-default sidebar">
            <div class="sidebar-nav navbar-collapse">
                <div class="nav side-nav-white" id="side-menu">
                    <ul class="list-unstyled">
                        <li class="profile">
                            <a href="javascript:void(0);">
                                <div class="avatar">
                                    <img src="{{asset($public.'/app/jpg/avatar.jpg')}}" alt="Avatar">
                                </div>
                                <div class="info">Welcome {{Auth::user()->first_name}}!</div>
                            </a>
                        </li>
                    </ul>

                    <ul class="list-unstyled sidebar-left">
                        <li class="active">
                            <a href="{{url('/home')}}"><i class="zmdi zmdi-view-dashboard"></i> Dashboard</a>
                        </li>
                        <li class="">
                            <a href="{{url('/buy')}}"><i class="zmdi zmdi-card"></i> Buy SMS</a>
                        </li>
                        <li class="">
                            <a href="{{url('/sms/history')}}"><i class="zmdi zmdi-book"></i> SMS History</a>
                        </li>
                        <li class="">
                            <a href="{{url('/sms/transfer')}}"><i class="zmdi zmdi-mail-reply"></i> Transfer SMS</a>
                        </li>
                        <li class="">
                            <a href="{{url('/settings')}}"><i class="zmdi zmdi-settings-square"></i> Settings</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>

    </aside>
    <main>
        @yield('content')
    </main>
</div>


<footer id="footer">Copyright © {{date('Y')}} <a href="{{config('app.url')}}" target="_blank"
                                                 title="{{config('app.name')}}">{{config('app.name')}}</a>
</footer>

<script src="{{asset($public.'/app/js/jquery-2.2.4.min.js')}}"></script>

<script src="{{asset($public.'/app/js/bootstrap.min.js')}}"></script>

<script src="{{asset($public.'/app/js/metismenu.min.js')}}"></script>

<script src="{{asset($public.'/app/js/init.js')}}"></script>

<script src="{{asset($public.'/app/js/chart.min.js')}}"></script>

<script src="{{asset($public.'/app/js/raphael.min.js')}}"></script>
<script src="{{asset($public.'/app/js/bootstrap-notify.min.js')}}"></script>
<script src="{{asset($public.'/app/js/excanvas.min.js')}}"></script>
<script src="{{asset($public.'/app/js/jquery.flot.js')}}"></script>
<script src="{{asset($public.'/app/js/jquery.flot.pie.js')}}"></script>
<script src="{{asset($public.'/app/js/jquery.flot.resize.js')}}"></script>
<script src="{{asset($public.'/app/js/jquery.flot.time.js')}}"></script>
<script src="{{asset($public.'/app/js/jquery.flot.tooltip.min.js')}}"></script>

<script src="{{asset($public.'/app/js/lightgallery.min.js')}}"></script>

<script src="{{asset($public.'/app/js/jquery.justifiedgallery.min.js')}}"></script>

<script src="{{asset($public.'/app/js/lg-thumbnail.min.js')}}"></script>

<script src="{{asset($public.'/app/js/lg-fullscreen.min.js')}}"></script>

<script src="{{asset($public.'/app/js/lg-autoplay.min.js')}}"></script>

<script src="{{asset($public.'/app/js/lg-zoom.min.js')}}"></script>

<script src="{{asset($public.'/app/js/lg-video.js')}}"></script>

<script src="{{asset($public.'/app/js/waypoints.min.js')}}"></script>

<script src="{{asset($public.'/app/js/jquery.counterup.min.js')}}"></script>

<script src="{{asset($public.'/app/js/ripple.min.js')}}"></script>

<script src="{{asset($public.'/app/js/jquery.slimscroll.min.js')}}"></script>

<script src="{{asset($public.'/app/js/sweetalert.min.js')}}"></script>

<script type="text/javascript" src="{{asset($public.'/app/js/jquery.jvectormap.min.js')}}"></script>

<script src="{{asset($public.'/app/js/gdp-data.js')}}"></script>

<script type="text/javascript" src="{{asset($public.'/app/js/jquery-jvectormap-world-mill.js')}}"></script>

<script src="{{asset($public.'/app/js/moment-with-locales.js')}}"></script>

<script src="{{asset($public.'/app/js/fullcalendar.min.js')}}"></script>

<script src="{{asset($public.'/app/js/notifications.js')}}"></script>


<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    @if(!null == session('status'))
    @php
        $status=session('status');
        $state=session('state');
    @endphp
    swal("Successful", "{{$status}}", "{{$state}}");
    @endif
</script>
@yield('scripts')
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
</body>
</html>
