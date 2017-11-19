@extends('home::layouts.master')

@section('title','Login')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" name="_xclick">
<input type="hidden" name="cmd" value="_xclick" /> 
<input type="hidden" name="business" value="raushank3-business@globussoft.in" /> 
<input type="hidden" name="currency_code" value="USD" />
 <input type="hidden" name="item_name" value="normal" /> 
<input type="hidden" name="custom" value="1/" /> 
<input type="hidden" name="amount" value="1" /> 
<input type="hidden" name="return" value="http://localhost.myedulogy.com/" /> 
<input type="hidden" name="cancel_return" value="http://localhost.myedulogy.com/" /> 
<input type="image" alt="Make payments with PayPal - it's fast, free and secure!" name="submit" src="http://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" />
</form>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post">
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
