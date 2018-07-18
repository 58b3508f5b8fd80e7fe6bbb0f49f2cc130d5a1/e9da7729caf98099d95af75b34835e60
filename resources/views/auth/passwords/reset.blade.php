@extends('layouts.auth')
@section('title','Reset')
@section('content')

    <article>
        <div id="pages-form" class="container animated fadeIn">
            <section>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel box-shadow">
                            <div class="panel-body center-block">
                                <div class="pages-header text-center">
                                    <div class="pages-box-icon"><i class="zmdi zmdi-account-o"></i></div>
                                    <h4>Change password</h4>
                                </div>
                                <form role="form">
                                    <fieldset>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Current Password"
                                                   name="current_password" type="password" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="New Password" name="new_password"
                                                   type="password" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Confirm Password"
                                                   name="confirm_password" type="password" value="" required>
                                        </div>

                                        <button class="btn btn-success btn-block" type="submit">Save changes</button>
                                        <p class="text-center pages-padtop"><span>Forgot password?</span> <span><a
                                                        href="forgot_password.html">Reset now</a>.</span></p>
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