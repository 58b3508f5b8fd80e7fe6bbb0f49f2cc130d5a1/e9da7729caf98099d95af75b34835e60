@extends('layouts.auth')
@section('title','Login')
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
                                <h4>Login to your account</h4>
                            </div>
                            <form role="form" method="POST" action="{{route('login')}}">
                                @csrf
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail" name="email" type="email" value="{{old('email')}}"
                                               required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password"
                                               type="password" value="" required>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="row pages-padbot">
                                        <div class="col-sm-6">
                                            <input name="remember" type="checkbox" value="Remember" {{ old('remember') ? 'checked' : '' }}>Remember
                                        </div>
                                        <div class="col-sm-6 text-right">
                                            <a href="{{route('password.request')}}" title="Forgot password?">Forgot
                                                password?</a>
                                        </div>
                                    </div>

                                    <button class="btn btn-success btn-block" type="submit">Login</button>
                                    <p class="text-center pages-padtop"><span>Don't have an account?</span> <span><a
                                                    href="{{route('register')}}">Register now</a>.</span></p>
                                    {{--<p class="box-or text-center"><span>OR</span></p>
                                    <div class="btn-material">
                                        <a href="javascript:void(0);" class="btn btn-block btn-social btn-google-plus">
                                            <i class="zmdi zmdi-google"></i> Sign in with Google
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-block btn-social btn-facebook">
                                            <i class="zmdi zmdi-facebook"></i> Sign in with Facebook
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-block btn-social btn-twitter">
                                            <i class="zmdi zmdi-twitter"></i> Sign in with Twitter
                                        </a>
                                    </div>--}}
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