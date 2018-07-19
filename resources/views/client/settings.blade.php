@php
    $data = session('data');
@endphp
@php    $public='';    if(config('app.env') == 'production')    $public ='main/public'; @endphp
@extends('layouts.client')
@section('title','Settings')
@section('styles')
    <style>
    </style>
@endsection
@section('content')
    <div id="page-wrapper">

        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Settings</h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <a href="javascript:void(0);">Home</a> <i class="zmdi zmdi-circle"></i> Settings
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
                <div class="card card-inverse text-xs-center">
                    <div class="card-block">
                        <blockquote class="card-blockquote">
                            <h4>API Secret ID</h4>
                            <div class="col-xs-11 col-md-11"><input id="secret" class="form-control pull-left" value="{{Auth::user()->secret}}" readonly></div><div> <a onclick="copyToClipboard('#secret')" href="#" class="col-xs-1 col-md-1"><i
                                            class="zmdi zmdi-copy" style="font-size:1.5em;"></i></a></div>
                        </blockquote>
                    </div>
                </div>
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
                                        <h2 style="color: #ffffff;">Change Password</h2>
                                    </blockquote>
                                </div>
                            </div>
                            <form action="{{url('/settings/password')}}" method="post">
                                {{csrf_field()}}
                                <fieldset class="col-md-10 col-md-offset-1">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="current"> Current Password</label>
                                            <input class="form-control form-control-lg text-center" id="current"
                                                   name="current_password"
                                                   type="password">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="password"><i class="si si-lock"></i> New Password</label>
                                            <input class="form-control" id="password"
                                                   name="new_password"
                                                   type="password" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="confirm-password"><i class="si si-lock"></i> Confirm
                                                Password</label>
                                            <input class="form-control"
                                                   id="confirm-password"
                                                   name="confirm_password"
                                                   type="password" required>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <button class="btn btn-success btn-lg legitRipple" type="submit">Update
                                                Password
                                            </button>
                                        </div>
                                    </div>

                                </fieldset>
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

        @if(isset($data['message']))
        swal({
            title: "Status",
            text: "{{$data['message']}}",
            showCancelButton: false,
            closeOnConfirm: false,
            showLoaderOnConfirm: true
        });

        @endif
        function copyToClipboard(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).val()).select();
            document.execCommand("copy");
            $temp.remove();
        }
    </script>
@endsection