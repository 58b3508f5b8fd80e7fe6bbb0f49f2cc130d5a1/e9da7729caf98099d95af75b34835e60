@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
@extends('layouts.client')
@section('title','Buy SMS')
@section('styles')
    <style>
        .loadingoverlay {
            z-index: 100 !important;
        }
    </style>
@endsection
@section('content')
    <div id="page-wrapper">

        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Buy SMS</h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <a href="javascript:void(0);">Home</a> <i class="zmdi zmdi-circle"></i> Buy SMS
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
                                        <h2 style="color: #ffffff;">Buy SMS Credits</h2>
                                        <p>Make payments through your Card, Bank or TLSavings</p>
                                        <footer><cite title="Source Title">Purchase SMS Units at 3.5 NGN per unit</cite>
                                        </footer>
                                    </blockquote>
                                </div>
                            </div>
                            <form action="javascript:void(0)" method="post">
                                <div class="form-group">
                                    <label>Price per unit</label>
                                    <input id="price" class="form-control" name="" value="3.5 NGN" readonly>
                                </div>
                                <div class="form-group">
                                    <label>No. of Units</label>
                                    <input id="amount" class="form-control" name="" value=""
                                           placeholder="Enter number of units">
                                </div>
                                <div class="form-group">
                                    <label>Amount to pay</label>
                                    <input id="pay" class="form-control" name="" value=""
                                           placeholder="Amount to pay" readonly>
                                </div>
                                <input id="value" type="hidden">
                                <script src="https://js.paystack.co/v1/inline.js"></script>
                                <div class="form-group">
                                    <div class="col-md-12 col-xs-12" id="options">
                                        <div class="col-md-6 col-xs-6 card" id="via-paystack">
                                            <a href="javascript:void(0)" class="pay-options"
                                               onclick="payViaPaystack()">
                                                <img src="{{asset($public.'/app/png/paystack.png')}}"
                                                     style="width:100%; height: auto;">
                                            </a>
                                        </div>
                                        <div class="col-md-6 col-xs-6 card" id="via-tlsavings">
                                            <a href="javascript:void(0)" class="pay-options" onclick="payViaTLPay()">
                                                <img src="{{asset($public.'/app/png/tlsavings.png')}}"
                                                     style="width:100%; height: auto;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                {{--<button class="btn btn-success btn-lg legitRipple" type="button" onclick="payWithPaystack()"><span id="paybutton"></span> Pay</button>--}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script src="{{asset($public.'/app/js/loadingoverlay.min.js')}}"></script>
    <script src="http://pay.tlsavings.dev:8000/js/tlpay.api.js"></script>
    <script>
        $('.pay-options').click(function () {
            //$("#options").LoadingOverlay("show");
        });

        setInterval(function () {
            var amount = $('#amount').val() * 3.5;
            var charge = amount * 0.015755 + 100;
            $('#value').val(Math.floor(amount + charge));
            $('#pay').val(amount + " NGN + " + charge + " NGN");

        }, 700);

        function payViaPaystack() {
            $('#paybutton').attr('class', 'zmdi zmdi-spinner zmdi-hc-spin');
            var ref = '{{md5(date('Ymdhis'))}}';
            var handler = PaystackPop.setup({
                key: '{{config('app.paystack_public')}}',
                email: '{{Auth::user()->email}}',
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
                            window.location.replace('{{config('app.url')}}/buy/paystack/verify/' + ref);
                        }, 2500);
                    });


                },
                onClose: function () {
                    $('#paybutton').attr('class', '');

                }
            });
            handler.openIframe();

        }

        function payViaTLPay() {
            var amount = $('#value').val();
            var units = $('#amount').val();
            var data = {'amount': amount, 'description': units + ' SMS Units'};

            $.post('/buy/tlsavings', data, function (result) {
                showTLPay(result);
            });

        }

        @if(isset($tlpay_error))
        swal("Oops! An Error Occurred..", "{{$tlpay_error}}", "danger");
        @endif
    </script>
@endsection