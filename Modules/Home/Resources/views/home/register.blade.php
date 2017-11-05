@extends('home::layouts.master')

@section('title','Registration')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="" method="post">
                    <div class="form-group">
                        <label for="firstName">First Name:</label>
                        <input type="firstName" class="form-control" id="firstName" placeholder="Enter firstName" name="firstName">
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name:</label>
                        <input type="lastName" class="form-control" id="lastName" placeholder="Enter lastName" name="lastName">
                    </div>
                    <div class="form-group">
                        <label for="userName">UserName:</label>
                        <input type="userName" class="form-control" id="userName" placeholder="Enter userName" name="userName">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password"
                               name="password">
                    </div>
                    {{--<div class="checkbox">--}}
                    {{--<label><input type="checkbox" name="remember"> Remember me</label>--}}
                    {{--</div>--}}
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
@stop
