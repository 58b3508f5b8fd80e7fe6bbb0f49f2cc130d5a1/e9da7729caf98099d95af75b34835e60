@php    $public='';    if(config('app.env') == 'production')    $public ='main/public'; @endphp
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

            <div class="col-md-6">

                <div class="card  card-inverse ">
                    <div class="card-block">

                        <div class="card-body">
                            <div class="card card-inverse card-success text-xs-center">
                                <div class="card-block">
                                    <blockquote class="card-blockquote">
                                        <h2 style="color: #ffffff;">Compose SMS</h2>
                                        <p>Compose a bulk SMS..</p>
                                        <footer><cite title="Source Title">We send instantly..</cite></footer>
                                    </blockquote>
                                </div>
                            </div>

                            <script>

                                function counta(val) {

                                    val = val.split("\n").join('??').split('{').join('??').split('}').join('??');

                                    val = val.split('\\').join('??').split('[').join('??').split(']').join('??');

                                    val = val.split('~').join('??').split('|').join('??').split('^').join('??');

                                    val = val.split('€').join('??').split('"').join('??').split("'").join('??');

                                    len = val.length;

                                    if (len <= 160) {

                                        jQuery('#count').html('Page: ' + Math.ceil(len / 160) + ', Characters left: ' + (1 + ((160 - 1) * Math.ceil(len / 160)) - len) + ', Total Typed Characters: ' + len);

                                        jQuery('#hiddenCount').html(Math.ceil(len / 160) + ' page');

                                    } else {

                                        jQuery('#count').html('Page: ' + Math.ceil(len / 151) + ', Characters left: ' + (1 + ((151 - 1) * Math.ceil(len / 151)) - len) + ', Total Typed Characters: ' + len);

                                        jQuery('#hiddenCount').html(Math.ceil(len / 151) + ' pages');

                                    }

                                    countDest();

                                }

                            </script>


                            <div style="padding: 0 20px 0 30px;">


                                <form class="form form-horizontal" id="send_form" method="POST"
                                      action="{{url('/bulksms')}}">
                                    {{csrf_field()}}
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="col-md-12 label-control" for="sender_id"><strong>Sender
                                                    ID</strong></label>
                                            <div class="col-md-5">
                                                <div class="position-relative has-icon-left">
                                                    <input id="sender_id"
                                                           class="form-control position-inside-maxlength"
                                                           placeholder="Sender ID" name="from"
                                                           maxlength="11" required=""
                                                           type="text">


                                                    <div class="form-control-position">
                                                        <i class="ft-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- To be loaded conditionally... only if user has an group -->


                                        <div class="form-group row">
                                            <label class="col-md-12 label-control"
                                                   for="destination"><strong>Phone Numbers</strong> <span
                                                        class="hint_tooltip tooltipstered"><i
                                                            class="fa fa-question-circle"></i></span> <em>(Required
                                                    unless if sending to group.)</em> </label>
                                            <div class="col-md-12">
                                                <div class="position-relative has-icon-left">
                                                                <textarea name="to" id="destination" rows="6"
                                                                          class="form-control"
                                                                          placeholder="Enter phone numbers separated by comma in any of these formats 7037770033, 07037770033, 2347037770033 or +2347037770033."
                                                                          v-model="recipient"></textarea>
                                                    <span id="destCount"></span>
                                                    <div class="form-control-position">
                                                        <i class="fa fa-mobile-phone"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-xs-12 label-control"
                                                   for="timesheetinput3"><strong>Text Message</strong>
                                                <em>(Required)</em></label>
                                            <div class="col-xs-12">
                                                <div class="position-relative has-icon-left">
                                                                <textarea name="message"
                                                                          placeholder="Type your message here"
                                                                          id="message" rows="6" class="form-control"
                                                                          onchange="counta(this.value);"
                                                                          onkeyup="counta(this.value);"
                                                                          v-model="message" required=""></textarea>
                                                    <span id="count"></span>


                                                    <div class="form-control-position">
                                                        <i class="ft-message-square"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="hidden" id="hiddenCount"></div>
                                        <div class="clearfix"></div>

                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-success form-control"
                                                        id="btn-submit">
                                                    <i class="zmdi zmdi-mail-send"></i> Send SMS
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-md-6">
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