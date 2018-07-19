@php    $public='';    if(config('app.env') == 'production')    $public ='public/main'; @endphp
@extends('layouts.client')
@section('title','Dashboard')
@section('content')
    <div id="page-wrapper">

        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Dashboard</h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <a href="javascript:void(0);">Home</a> <i class="zmdi zmdi-circle"></i> Dashboard
                    </li>
                </ol>
            </div>
        </div>


        <div class="row">
            <div class="col-md-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="zmdi zmdi-comment-outline zmdi-hc-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><a href="javascript:void(0);" title="View Details" target="_blank"
                                                     class="counter">{{}}</a></div>
                                <div>SMS Units</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-md-6">
                <div class="panel m-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="zmdi zmdi-view-day zmdi-hc-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><a href="javascript:void(0);" title="View Details" target="_blank"
                                                     class="counter">{{}}</a></div>
                                <div>SMS Sent</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-md-6">
                <div class="panel m-teal">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="zmdi zmdi-shopping-basket zmdi-hc-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><a href="javascript:void(0);" title="View Details" target="_blank"
                                                     class="counter">{{}}</a></div>
                                <div>SMS Refunds</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-md-6">
                <div class="panel m-purple">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="zmdi zmdi-border-color zmdi-hc-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><a href="javascript:void(0);" title="View Details" target="_blank"
                                                     class="counter">{{}}</a></div>
                                <div>SMS Bought</div>
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
        @if(!null == session('status'))
        swal("Transaction Successful", "You have been credited with {{session('status')}}", "success");
        @endif
        $.notify({
            // options
            message: 'Welcome to {{config('app.name')}}'
        },{
            // settings
            type: 'success'
        });
    </script>
@endsection