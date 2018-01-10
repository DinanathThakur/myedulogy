@extends('home::layouts.master')
@section('title','Register')
@section('content')

<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Register</h1>
                <ul class="list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li class="active">Register</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="login-ds">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-1 col-md-offset-1">
                <div class="contact-two-bottom">
                    <div class="row">
                        <div class="col-sm-12">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form role="form" id="ajax-contact" method="post" action="">
                                <fieldset>
                                    <form class="" method="post">
                                        <div class="form-group">
                                            <label for="firstName">First Name:</label>
                                            <input type="firstName" class="form-control input-lg" id="firstName" placeholder="Enter firstName" name="firstName">
                                        </div>
                                        <div class="form-group">
                                            <label for="lastName">Last Name:</label>
                                            <input type="lastName" class="form-control input-lg" id="lastName" placeholder="Enter lastName" name="lastName">
                                        </div>
                                        <div class="form-group">
                                            <label for="userName">UserName:</label>
                                            <input type="userName" class="form-control input-lg" id="userName" placeholder="Enter userName" name="userName">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="email" class="form-control input-lg" id="email" placeholder="Enter email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Password:</label>
                                            <input type="password" class="form-control input-lg" id="pwd" placeholder="Enter password" name="password">
                                        </div>

                                        <input class="btn btn-lg btn-new btn-success btn-block" value="Sign In">
                                    </form>
                                </fieldset>
                            </form>
                        </div><!-- Ends: .col-sm-8 -->
                    </div>
                </div><!-- Ends: .contact-two-bottom -->
            </div><!-- Ends: .col-sm-12 -->
        </div>
    </div>
</section><!-- Ends: .contact-wrapper -->

@stop
