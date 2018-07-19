@php    $public='';    if(config('app.env') == 'production')    $public ='main/public'; @endphp
        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title','Authentication') | {{config('app.name')}}</title>

    <link href="{{asset($public.'/app/css/bootstrap.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset($public.'/app/css/material-design-iconic-font.min.css')}}">

    <link rel="stylesheet" href="{{asset($public.'/app/css/animate.min.css')}}">

    <link rel="stylesheet" href="{{asset($public.'/app/css/ripple.min.css')}}">

    <link rel="stylesheet" href="{{asset($public.'/app/css/hover.css')}}">

    <link rel="stylesheet" href="{{asset($public.'/app/css/social-buttons.css')}}">

    <link href="{{asset($public.'/app/css/deluxe-admin.css')}}" rel="stylesheet">

</head>
<body id="pages">

@yield('content')


<script src="{{asset($public.'/app/js/jquery-2.2.4.min.js')}}"></script>

<script src="{{asset($public.'/app/js/bootstrap.min.js')}}"></script>

<script src="{{asset($public.'/app/js/ripple.min.js')}}"></script>

<script src="pages.html"></script>
</body>
</html>
