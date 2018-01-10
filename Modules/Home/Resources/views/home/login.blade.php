@extends('home::layouts.master')
@section('title','Login')
@section('content')

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Login</h1>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li class="active">Login</li>
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
                            <form role="form" method="post" action="">
                                <fieldset>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" required="">
                                    </div><br>
                                    <!-- <div class="form-group" style="height:30px;">
                                        <span class="button-checkbox">
                                            <a href="" class="btn btn-link pull-right">Forgot Password?</a>
                                        </span>
                                    </div> -->
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <button class="btn btn-lg btn-new btn-success btn-block" type="submit">Sign In</button>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <a href="/register" class="btn btn-lg btn-primary btn-new btn-block">Register</a>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div><!-- Ends: .col-sm-8 -->
                    </div>
                </div><!-- Ends: .contact-two-bottom -->
            </div><!-- Ends: .col-sm-12 -->
        </div>
    </div>
</section><!-- Ends: .contact-wrapper -->

<!--==================
    Footer
===================-->
<section class="footer-top-subscribe">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h2>Subscribe Now</h2>
            </div>
            <div class="col-sm-8">
                <form action="#">
                    <div class="form-group row">
                        <div class="col-md-9 col-sm-8">
                            <input type="email" placeholder="Enter Your Email">
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <button type="submit">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section><!-- Ends: .footer-top-subscribe -->

@stop
