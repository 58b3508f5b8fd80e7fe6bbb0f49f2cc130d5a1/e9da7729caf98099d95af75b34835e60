@php    $public='';    if(config('app.env') == 'production')    $public ='public/main'; @endphp
@extends('layouts.client')
@section('title','Transfer SMS')
@section('styles')
    <style>
    </style>
@endsection
@section('content')
    <div id="page-wrapper">

        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Transfer SMS</h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <a href="javascript:void(0);">Home</a> <i class="zmdi zmdi-circle"></i> Transfer SMS
                    </li>
                </ol>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
                <div class="card card-inverse text-xs-center">
                    <div class="card-block">
                        <div class="card-body">

                            <div class="card card-inverse card-success text-xs-center">
                                <div class="card-block">
                                    <blockquote class="card-blockquote">
                                        <h2 style="color: #ffffff;">Transfer SMS Credits</h2>
                                        <p>Transfer SMS credit to another user</p>
                                    </blockquote>
                                </div>
                            </div>
                            <form action="javascript:void(0)" method="post">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input id="email" class="form-control" name="email" value="" type="email"
                                           placeholder="Enter user's email">
                                </div>
                                <div class="form-group">
                                    <label>Unit Balance</label>
                                        <input id="balance" class="form-control" name="text" value=""
                                               placeholder="Enter user's email">
                                </div>
                                <div class="form-group">
                                    <label>No. of Units</label>
                                    <input id="units" class="form-control" name="units" value=""
                                           placeholder="Enter number of units">
                                </div>
                                <button class="btn btn-success btn-lg legitRipple" type="button" onclick="transfer()">
                                    <span id="transfer"></span> transfer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        setInterval(function () {
            var balance ={{$units}};
            var amount = $('#units').val();
            $('#balance').val(balance-amount);

        }, 700);

        function transfer() {
            var balance ={{$units}}, units = $('#units').val(), email = $('#email').val();
            var check = confirm("You wish to transfer " + units + " to user with email " + email + "?");
            if (check == true) {
                if (balance >= units) {
                    var data = {'units': units, 'email': email};
                    $.post('/sms/transfer', data, function (result) {

                        swal(result.message, {
                            icon: "success",
                        });
                    }).fail(function () {
                        alert('Sorry, an error occurred');
                    });
                } else {
                    swal("You have insufficient units", {
                        icon: "danger",
                    });
                }
            }
        }


        function payWithPaystack() {
            $('#paybutton').attr('class', 'zmdi zmdi-spinner zmdi-hc-spin');
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
                        title: "Your transaction was successful",
                        text: "You will now be redirected to your dashboard",
                        type: "success",
                        showCancelButton: false,
                        closeOnConfirm: false,
                        showLoaderOnConfirm: true
                    }, function () {
                        setTimeout(function () {
                            window.location.replace('{{config('app.url')}}/transfer/verify/' + ref);
                        }, 2500);
                    });


                },
                onClose: function () {
                    $('#paybutton').attr('class', '');

                }
            });
            handler.openIframe();
        }
    </script>
@endsection