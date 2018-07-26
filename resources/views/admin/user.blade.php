@php    $public='';    if(config('app.env') == 'production')    $public ='main/public'; @endphp
@extends('layouts.client')
@section('title','Users')
@section('content')
    <div id="page-wrapper">

        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">{{"$user->first_name $user->last_name"}}</h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <a href="{{url('home')}}">Dashboard</a> <i class="zmdi zmdi-circle"></i> <a
                                href="{{url('/admin/users')}}">Users</a> <i class="zmdi zmdi-circle"></i> {{"$user->first_name $user->last_name"}}
                    </li>
                </ol>
            </div>
        </div>


        <div class="row">
            <div class="col-md-3">

                <div class="profile-sidebar box-shadow">
                    <img class="img-responsive center-block" src="{{asset($public.'/app/jpg/avatar.jpg')}}" alt="">
                    <div class="profile-username text-center">
                        <p>{{"$user->first_name $user->last_name"}}</p>
                    </div>
                    <div class="profile-job text-center">
                        <p>{{$user->phone_no}}</p>
                        <p>{{$user->email}}</p>
                    </div>
                    <div class="profile-button">
                        <button type="button" class="btn btn-success btn-sm legitRipple">Follow</button>
                        <button type="button" class="btn btn-danger btn-sm legitRipple">Message</button>
                    </div>
                </div>

            </div>
            <div class="col-md-9">
                <div class="col-md-6">

                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="zmdi zmdi-comment-outline zmdi-hc-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><a href="javascript:void(0);" title="View Details" target="_blank"
                                                         class="counter">{{$units}}</a></div>
                                    <div>SMS Units</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel m-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="zmdi zmdi-view-day zmdi-hc-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><a href="javascript:void(0);" title="View Details" target="_blank"
                                                         class="counter">{{$sent}}</a></div>
                                    <div>SMS Sent</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel m-teal">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="zmdi zmdi-shopping-basket zmdi-hc-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><a href="javascript:void(0);" title="View Details" target="_blank"
                                                         class="counter">{{$refund}}</a></div>
                                    <div>SMS Refunds</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel m-purple">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="zmdi zmdi-border-color zmdi-hc-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><a href="javascript:void(0);" title="View Details" target="_blank"
                                                         class="counter">{{$bought}}</a></div>
                                    <div>SMS Bought</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel m-indigo">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="zmdi zmdi-border-color zmdi-hc-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><a href="javascript:void(0);" title="View Details" target="_blank"
                                                         class="counter">{{$transout}}</a></div>
                                    <div>SMS Transferred</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel m-deeporange">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="zmdi zmdi-border-color zmdi-hc-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><a href="javascript:void(0);" title="View Details" target="_blank"
                                                         class="counter">{{$transin}}</a></div>
                                    <div>SMS Recieved</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $.notify({
            // options
            message: 'Welcome to {{config('app.name')}}'
        }, {
            // settings
            type: 'success'
        });
    </script>
@endsection