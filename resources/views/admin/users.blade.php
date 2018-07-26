@php    $public='';    if(config('app.env') == 'production')    $public ='main/public'; @endphp
@extends('layouts.client')
@section('title','Users')
@section('content')
    <div id="page-wrapper">

        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Users</h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <a href="{{url('')}}">Dashboard</a> <i class="zmdi zmdi-circle"></i> Users
                    </li>
                </ol>
            </div>
        </div>


        <div class="row">
            <table class="table table-hover">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone No.</th>
                    <th>Action</th>
                </tr>

                @foreach($users as $user)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{"$user->first_name $user->last_name"}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone_no}}</td>
                        <td><a href="{{url('/admin/user/'.($user->id+133))}}"><i class="zmdi zmdi-eye zmdi-hc-lg"></i></a></td>
                    </tr>
                    @endforeach
            </table>
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