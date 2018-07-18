@extends('layouts.auth')
@section('title','Email')
@section('content')

    <article>
        <div id="pages-form" class="container animated fadeIn">
            <section>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel box-shadow">
                            <div class="panel-body center-block">
                                <div class="pages-header text-center">
                                    <div class="pages-box-icon"><i class="zmdi zmdi-refresh-alt"></i></div>
                                    <h4>Reset your password</h4>
                                </div>
                                <form role="form">
                                    <fieldset>
                                        <div class="form-group input-group">
                                            <div class="input-group-addon"><i class="zmdi zmdi-email"></i></div>
                                            <input class="form-control" placeholder="Your E-mail" name="email"
                                                   type="email" required autofocus>
                                        </div>


                                        <button class="btn btn-success btn-block" type="submit">Send my password
                                        </button>
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