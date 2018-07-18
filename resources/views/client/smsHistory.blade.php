@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
@extends('layouts.client')
@section('title','SMS History')
@section('styles')
    <link rel="stylesheet" id="css-main" href="{{asset($public.'/app/css/datatables.min.css')}}">
    <link rel="stylesheet" id="css-main" href="{{asset($public.'/app/css/datatables.responsive.css')}}">
    <style>
    </style>
@endsection
@section('content')
    <div id="page-wrapper">

        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">SMS History</h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <a href="javascript:void(0);">Home</a> <i class="zmdi zmdi-circle"></i> SMS History
                    </li>
                </ol>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Your SMS History
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
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
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script src="{{asset($public.'/app/js/datatables.min.js')}}"></script>

    <script src="{{asset($public.'/app/js/datatables.responsive.js')}}"></script>
    <script type="text/javascript">
        $('.table').DataTable({
            responsive: true
        });
    </script>
    <script>
        setInterval(function () {
            var amount = $('#amount').val() * 3.5;
            $('#value').val(amount);
            $('#pay').val(amount + " NGN");

        }, 700);

        function payWithPaystack() {
            $('#paybutton').html('').attr('class', 'zmdi zmdi-spinner zmdi-hc-spin');
            var ref = '{{md5(date('Ymdhis'))}}';
            var handler = PaystackPop.setup({
                key: '{{config('app.paystack_public')}}',
                email: '{{config('app.paystack_email')}}',
                amount: $('#value').val() * 100,
                ref: '{{md5(date('Ymdhis'))}}', // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                firstname: '{{Auth::user()->first_name}}',
                lastname: '{{Auth::user()->last_name}}',
                metadata: {
                    custom_fields: [
                        {
                            display_name: "Mobile Number",
                            variable_name: "mobile_number",
                            value: "{{Auth::user()->phone_no}}"
                        }
                    ]
                },
                callback: function (response) {
                    swal({
                        title: "Your message was successful",
                        text: "You will now be redirected to your dashboard",
                        type: "success",
                        showCancelButton: false,
                        closeOnConfirm: false,
                        showLoaderOnConfirm: true
                    }, function () {
                        setTimeout(function () {
                            window.location.replace('{{config('app.url')}}/buy/verify/' + ref);
                        }, 2500);
                    });


                },
                onClose: function () {
                    $('#paybutton').html('Payment').attr('class', '');

                }
            });
            handler.openIframe();
        }
    </script>
@endsection