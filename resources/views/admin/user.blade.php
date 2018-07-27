@php    $public='';    if(config('app.env') == 'production')    $public ='main/public'; @endphp
@extends('layouts.client')
@section('title',"User ($user->first_name)")
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
        <div class="row" style="margin-top:2em;">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table id="general-table" class="table table-striped dataTable table-vcenter">
                        <thead>
                        <tr>
                            <th class="text-center">S/No.</th>
                            <th class="text-center">SMS ID</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Message</th>
                            <th>Units</th>
                            <th>Status</th>
                            <th>Time</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i=1; @endphp
                        @foreach($messages as $message)

                            @php

                                $msg1 = substr($message->sms_id,0,6 );
                                $msg2 = substr($message->sms_id,-6);
                                if($message->status=='sent')
                                    $status ='success';
                                elseif($message->status=='failed')
                                    $status ='danger';
                                else
                                    $status ='pending';
                            @endphp
                            <tr>
                                <td>{{$i}}</td>
                                <td>
                                    @if (strlen($message->sms_id) > 15)
                                        {{"$msg1......$msg2"}}
                                    @else
                                        {{$message->sms_id}}
                                    @endif
                                </td>
                                <td>{{$message->from}}</td>
                                <td>{{$message->to}}</td>
                                <td>{{$message->message}}</td>
                                <td>{{$message->units}}</td>
                                <td>
                                    <span class="label label-{{$status}}">{{$message->status}}</span>
                                </td>
                                <td>{{date('d-m-Y H:i:s',strtotime($message->created_at))}}</td>
                            </tr>
                            @php $i++; @endphp
                        @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset($public.'/app/js/datatables.min.js')}}"></script>

    <script src="{{asset($public.'/app/js/datatables.responsive.js')}}"></script>
    <script>
        $('.table').DataTable({
            responsive: true
        });
        $.notify({
            // options
            message: 'Welcome to {{config('app.name')}}'
        }, {
            // settings
            type: 'success'
        });
    </script>
@endsection