@extends('layouts.auth')
@section('title','Register')
@section('content')

    <article>
        <div id="pages-form" class="container animated fadeIn">
            <section>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="panel box-shadow">
                            <div class="panel-body center-block">
                                <div class="pages-header text-center">
                                    <div class="pages-box-icon"><i class="zmdi zmdi-account-o"></i></div>
                                    <h4>Create account</h4>
                                </div>
                                <form role="form" method="POST" action="{{route('register')}}">
                                    @csrf
                                    <fieldset>
                                        <div class="form-group col-lg-6">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" placeholder="First Name"
                                                   name="first_name"
                                                   required
                                                   autofocus>
                                            @if ($errors->has('first_name'))
                                                <span class="text-danger">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" placeholder="Last Name"
                                                   name="last_name"
                                                   required
                                                   autofocus>
                                            @if ($errors->has('last_name'))
                                                <span class="text-danger">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Email Address</label>
                                            <input class="form-control" placeholder="E-mail" name="email" type="email"
                                                   required>
                                            @if ($errors->has('email'))
                                                <span class="text-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Phone Number</label>
                                            <input class="form-control" placeholder="Phone Number" name="phone_no" type="text"
                                                   required>
                                            @if ($errors->has('phone_no'))
                                                <span class="text-danger">
                                        <strong>{{ $errors->first('phone_no') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Password</label>
                                            <input type="password" class="form-control" placeholder="Password" required name="password">
                                            @if ($errors->has('password'))
                                                <span class="text-danger">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control" placeholder="Confirm Password"
                                                   required name="password_confirmation">
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" required>
                                                    Accept <a href="javascript:void(0);">terms of service</a>
                                                </label>
                                            </div>
                                        </div>
                                        <button class="btn btn-success btn-block" type="submit">Register</button>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </article>

@endsection